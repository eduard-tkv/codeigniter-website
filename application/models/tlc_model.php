<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tlc_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_menu($table_name, $num_records,$offset)
    {
        $this->load->helper('html');
        if($offset==0)
        {
            $db_result = $this->db->get($table_name,$num_records);
		    return $db_result->result_array();
        }
        else
        {
            $db_result = $this->db->get($table_name,$num_records,$offset);
		    return $db_result->result_array();
        }
    }
    
    
    public function get_menu2($menu_table)
    {
        $this->load->helper('html');
        switch($menu_table)
        {
            case "teas":
              $teas = $this->db->get('teas');
		      return $teas->result_array();
              break;
            case "specials":
              $specials = $this->db->get('specials');
		      return $specials->result_array();
              break;
            case "coffee":
              $coffee = $this->db->get('coffee');
		      return $coffee->result_array();
              break;
            case "breakfast":
              $breakfast = $this->db->get('breakfast');
		      return $breakfast->result_array();
              break;
            case "lunch":
              $lunch = $this->db->get('lunch');
		      return $lunch->result_array();
              break;
            default:
              break;
        }
    }
    
    
    
    public function doinsert($description,$id_tag,$list_name,$table_name)
    {
            $data = array('id'=>'','description' => $description, 'id_tag' => $id_tag, 'list_name' => $list_name);
            
            $str = $this->db->insert_string($table_name, $data);
           $this->db->query($str);
           if($this->db->affected_rows()) { return "Query Success";}
           else { return "Query Failed";}
           
    }
    
    public function doUpdate($valueOld,$id_tag,$table_name,$list_name,$newValue)
    {
            //echo "reached doUpdate in tlc_model";
                 
            $data = array('description' => $newValue);
            
            $valueOld = "'".$valueOld."'";
            
            $where = "description=".$valueOld; 

            $str = $this->db->update_string($table_name, $data, $where);
            
            //return $str;
           
           
            $this->db->query($str);
            return ($this->db->affected_rows()) ? "Success: Item has been changed" : "Failed: Item has not been changed";
            
            
           
    }
    
    
    
}

?>