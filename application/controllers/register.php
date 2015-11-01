<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller
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
        $passwordconf = $this->input->post("txt_passwordconf");
        $email = $this->input->post("txt_email");
                
        $this->form_validation->set_rules('txt_username', 'Username', 'trim|required|min_length[5]|max_length[18]|is_unique[users.username]|xss_clean');
        $this->form_validation->set_rules('txt_passwordconf', 'Password Confirmation', 'trim|required');
        $this->form_validation->set_rules('txt_password', 'Password', 'trim|required|matches[txt_passwordconf]');
        $this->form_validation->set_rules('txt_email', 'Email', 'trim|required|valid_email|is_unique[users.email]');  
             
        $this->form_validation->set_message('is_unique', 'Already in use. Registered users use retrieve username/password form');
        $this->form_validation->set_message('matches', 'These fields should match. Please re-enter.');
        
        if(!($this->form_validation->run()))
        {
            $this->load->view("tlc/registration");
        }
        else
        {
             if($this->input->post('btn_register') == "Register") 
            { 
                $email_verify = random_string('unique', 16);
                $status = FALSE;
                $usr_result=$this->login_model->store_new_user($username,$password,$email, $email_verify,$status); 
            
                if($usr_result==1)
                {
                    $config = Array(
                                  'protocol' => 'smtp',
                                  'smtp_host' => 'ssl://smtp.googlemail.com',
                                  'smtp_port' => 465,
                                  'smtp_user' => 'lexx.toronto@gmail.com', // change it to yours
                                  'smtp_pass' => 'soobol69', // change it to yours
                                  'mailtype' => 'html',
                                  'charset' => 'iso-8859-1',
                                  'wordwrap' => TRUE
                                    );

                    $message = 'Please click the link below to verify your email at http://localhost/tlc/verify/'.$email_verify;
                    $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");
                    $this->email->from('lexx.toronto@gmail.com'); // change it to yours
                    $this->email->to($email);// change it to yours
                    $this->email->subject('Please verifiy your email');
                    $this->email->message($message);
                    
                     if($this->email->send())
                     {
                          echo 'Email sent.';
                     }
                     else
                     {
                          show_error($this->email->print_debugger());
                     }
                    
                    
                    
                    
                    $data['usr_result'] = $usr_result;
                     //$sessiondata=array('username'=>$username, 'loginuser'=>TRUE);
                     //redirect("tlc/view/register_success");
                     $this->load->view("tlc/register_success",$data);
                }
                else
                {
                    $this->session->set_flashdata('msg','<div>Sorry, there was a problem with registration. Please try again.</div>');
                    //$this->session->set_flashdata('msg','usr_result is='.$usr_result);
                    redirect('tlc/registration');
                }
            } else { redirect("tlc/registration"); }
        }
        
        
        
    }
    
    
    
    
    
    
    
    
}

?>