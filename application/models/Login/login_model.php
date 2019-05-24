<?php 
('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class login_model extends CI_Model {
 public function __construct()
    {
    	parent::__construct();
    	$this->load->database();
    }

    public function getUsers(){
    	$result = $this->db->query("select uID, usuario, uPass from SignUp;");

    	return $result->result_array();
    }

}
 