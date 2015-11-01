<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->helper('html');
            $this->load->database();
            $this->load->library('form_validation');
            $this->load->helper('security');
            //load the login model
            $this->load->model('login_model');
            $this->load->database();
    }
    
    public function index()
    {
        if($this->session->userdata('username') && $this->session->userdata('loginuser'))
        {redirect('tlc/view/johnandlina');}
        
        $username = $this->input->post("txt_username");
        $password = $this->input->post("txt_password");
        
        $this->form_validation->set_rules("txt_username","Username","trim|required");
        $this->form_validation->set_rules("txt_password","Password","trim|required");
        
        if(!($this->form_validation->run()))
        {

            $this->load->view("tlc/login_view");
        }
        else
        {
            if($this->input->post('btn_login') == "Login") 
            { $usr_result=$this->login_model->get_user($username,$password); 
                if($usr_result==1)
                {
                    $sessiondata=array('username'=>$username, 'loginuser'=>TRUE);
                    $this->session->set_userdata($sessiondata);
                    redirect("tlc/view/johnandlina");
                }
                elseif($usr_result==2)
                {
                    $this->session->set_flashdata('msg','<div>Email not verified. Please check your email and follow verification link.</div>');
                    redirect('login/index');
                }
                else
                {
                    $this->session->set_flashdata('msg','<div>Invalid username/password</div>');
                    redirect('login/index');
                }
            } else { redirect("login/index"); }
        }
        
        
        
    }
    
    
    
    
    
    
    
    
    
}

?>