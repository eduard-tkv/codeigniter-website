<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tlc extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->helper('security');
        //load the login model
        $this->load->model('login_model');
        $this->load->helper('url');
        $this->load->model('tlc_model');
        $this->load->database();
    }

    public function view($page='index')
    {
        if (! file_exists(APPPATH.'/views/tlc/'.$page.'.php'))
	    {
		    // Whoops, we don't have a page for that!
		    show_404();
	    } 
        else if ($page=='beverages')
        {
            $data['coffee'] = $this->tlc_model->get_menu2('coffee');
            $data['teas'] = $this->tlc_model->get_menu2('teas');
            $data['specials'] = $this->tlc_model->get_menu2('specials');
            $this->load->view('tlc/templates/header.php');
            $this->load->view('tlc/'.$page, $data);
            $this->load->view('tlc/templates/footer.php');  
        }
        else if($page=='lunch')
        {
            $data['lunch1'] = $this->tlc_model->get_menu('lunch',12,0);
            $data['lunch2'] = $this->tlc_model->get_menu('lunch',9,12);
            $data['lunch3'] = $this->tlc_model->get_menu('lunch',9,21);
            $this->load->view('tlc/templates/header.php');
            $this->load->view('tlc/'.$page, $data);
            $this->load->view('tlc/templates/footer.php');  
        }
        else if ($page=='breakfast')
        {
            $data['breakfast1'] = $this->tlc_model->get_menu('breakfast',11,0);
            $data['breakfast2'] = $this->tlc_model->get_menu('breakfast',11,11);
            $data['breakfast3'] = $this->tlc_model->get_menu('breakfast',6,23);
            $this->load->view('tlc/templates/header.php');
            $this->load->view('tlc/'.$page, $data);
            $this->load->view('tlc/templates/footer.php');  
        }
        else if ($page=='johnandlina')
        {          
            if ($this->session->userdata('username') && $this->session->userdata('loginuser'))
            {
                $data['coffee'] = $this->tlc_model->get_menu2('coffee');
                $data['teas'] = $this->tlc_model->get_menu2("teas");
                $data['specials'] = $this->tlc_model->get_menu2("specials");
                $data['breakfast'] = $this->tlc_model->get_menu2("breakfast");
                $data['lunch'] = $this->tlc_model->get_menu2("lunch");
                $this->load->view('tlc/templates/admin_header.php');
                $this->load->view('tlc/'.$page, $data);
                $this->load->view('tlc/templates/footer.php');   
             }
             else redirect('login/index');
        }
        else if ($page=='registration')
        {
            if ($this->session->userdata('username') && $this->session->userdata('loginuser'))
            {
                //$this->load->helper('form');
                $data['coffee'] = $this->tlc_model->get_menu2('coffee');
                //$data['truelovemenu'] = $this->tlc_model->get_menu($page);
                $data['teas'] = $this->tlc_model->get_menu2("teas");
                $data['specials'] = $this->tlc_model->get_menu2("specials");
                $data['breakfast'] = $this->tlc_model->get_menu2("breakfast");
                $data['lunch'] = $this->tlc_model->get_menu2("lunch");
                $this->load->view('tlc/johnandlina', $data);
             }
             else $this->load->view('tlc/'.$page);
        }
        else if($page=='logout')
        {
            $this->session->sess_destroy();
            redirect('login/index');
        }
        else
        {
            $this->load->view('tlc/templates/header.php');
            $this->load->view('tlc/'.$page); 
            $this->load->view('tlc/templates/footer.php');
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login/index');
    }


	public function view_menu($name)
	{
		$data['truelovemenu'] = $this->tlc_model->get_news($name);
	}
    
   
     public function ajaxCall()
    {
        $description = $this->input->post('description');
        $id_tag = $this->input->post('id_tag');
        $list_name = $this->input->post('list_name');
        $table_name = $this->input->post('table_name');
        $tableName = $this->input->post('tableName');
        $action = $this->input->post('action');
        $valueOld = $this->input->post('valueOld');
        $newValue = $this->input->post('newValue');
        
        if($action == 'insert')
        {
                
        $responseMessage = $this->tlc_model->doinsert($description,$id_tag,$list_name,$table_name);
        echo $responseMessage;
        }
        elseif($action == 'update')
        {
            //echo "reached ajaxCall in tlc controller";
           $responseMessage = $this->tlc_model->doUpdate($valueOld,$id_tag,$tableName,$list_name,$newValue);
           echo $responseMessage;    
        }
    }
    
    public function test_excel()
    {
        $excel = new \SimpleExcel\SimpleExcel('xml');
        $excel->writer->setData(
        array (
                array('Id','Name','Code'),
                array('1','Ed','323'),
                array('2','Des'.'222')
        )
        );
        
        $excel->writer->saveFile('example');
    }
    
    public function verify($verification_code='dummy')
    {
        if($verification_code=="dummy")
        { echo "We apologize but email verification failed, please request another verification code"; }
        else
        {
            if($this->login_model->verify_user($verification_code))
            { echo 'Email verified, thank you! You can now proceed to <a href="'.base_url().'login/index">login page</a>'; }
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}

?>