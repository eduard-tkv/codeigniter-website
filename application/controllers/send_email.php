<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Send_email extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
            $this->load->helper('form');
            $this->load->helper('url');
            $this->load->helper('html');
            $this->load->library('form_validation');
            $this->load->helper('security');
    }
    

    public function index()
    {
        $name_php = $this->input->post("name");
        $subject_php = $this->input->post("subject");
        $message_send_php = $this->input->post("messageSend");
        $email_php = $this->input->post("email");
                
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
        $this->form_validation->set_rules('messageSend', 'Message', 'trim|required|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');  
        
        if(!($this->form_validation->run()))
        {
            $this->session->set_flashdata('msg','<div>Sorry, there was a problem with registration. Please try again.</div>');
            //redirect("tlc/view/contact-us");
            $this->load->view("tlc/templates/header");
            $this->load->view("tlc/contact-us");
            $this->load->view("tlc/templates/footer");
        }
        else
        {
             if($this->input->post('btn_send') == "Send") 
            {      
                    /*
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


                        */


$this->load->library('email');

$this->email->from($email_php, $name_php);
$this->email->to('lexx.toronto@gmail.com');
//$this->email->cc('another@another-example.com');
//$this->email->bcc('them@their-example.com');

$this->email->subject($subject_php);
$this->email->message($message_send_php);









                    /*

                    $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");
                    $this->email->from('lexx.toronto@gmail.com'); // change it to yours
                    $this->email->to($email_php);// change it to yours
                    $this->email->subject('Please verifiy your email');
                    $this->email->message($message_send_php);
                    */
                    
                    
                     if($this->email->send())
                     {
                          $this->session->set_flashdata('msg','<div>Message successfully sent!.</div>');
            //redirect("tlc/view/contact-us");
            $this->load->view("tlc/templates/header");
            $this->load->view("tlc/contact-us");
            $this->load->view("tlc/templates/footer");
                     }
                     else
                     {
                          $this->session->set_flashdata('msg','<div>Sorry, there was a problem with sending the message. Please try again.</div>');
            //redirect("tlc/view/contact-us");
            $this->load->view("tlc/templates/header");
            $this->load->view("tlc/contact-us");
            $this->load->view("tlc/templates/footer");
                     }
                    
                    
                    
                    
                    //$data['usr_result'] = $usr_result;
                     //$sessiondata=array('username'=>$username, 'loginuser'=>TRUE);
                     //redirect("tlc/view/register_success");
                     //$this->load->view("tlc/register_success");
                
               /*
                {
                    $this->session->set_flashdata('msg','<div>Sorry, there was a problem with registration. Please try again.</div>');
                    //$this->session->set_flashdata('msg','usr_result is='.$usr_result);
                    redirect('tlc/registration');
                }*/
            } else { redirect("tlc/view/contact-us"); }
        }
        
    }
 }
?>