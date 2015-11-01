<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function get_user($usr, $pwd)
    {
        //USING PLACEHOLDERS
        //$sql = "SELECT * FROM some_table WHERE id = ? AND status = ? AND author = ?";
        //$this->db->query($sql, array(3, 'live', 'Rick'));

        $sql = "SELECT * FROM `users` WHERE username=? and password=? and status=?";
        $query = $this->db->query($sql, array($usr,do_hash($pwd,'md5'),0));
        if($query->num_rows()==1)
        {return 2;}//return 2 if email not verified
        else
        {
            $query = $this->db->query($sql, array($usr,do_hash($pwd,'md5'),1));
            if($query->num_rows()==1){return 1;}//return 1 if user exists
            else {return 0;} //return 0 if user doesnt exist
        }        
    }
    
    function store_new_user($username,$password,$email, $email_verify,$status)
    {
        //USE PLACEHOLDERS
        $data = array('username' => $username,'password'=>do_hash($password,'md5'), 'email' => $email, 'verification_email'=>$email_verify, 'status' => $status);

        //$str = $this->db->insert_string('users', $data);

        return $this->db->insert('users', $data); 
        //$query = $this->db->query($sql);
        //return $query->num_rows();

 
    }
    
    function verify_user($verification_code)
    {
        //USE PLACEHOLDERS
        $sql = "SELECT * FROM `users` WHERE verification_email="."'".$verification_code."'";
        $query = $this->db->query($sql);
        $flag = 0;
        if($query->num_rows()==1) {$flag = 1;}
        
        $data = array('status'=>TRUE);
                
        $this->db->where('verification_email', $verification_code);
        if($this->db->update('users', $data)){ $flag+=1;}
        if($flag ==2) {return TRUE;} else {return FALSE;}
        
        
    }
    
    
}

?>