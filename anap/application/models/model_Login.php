<?php


class model_Login extends CI_Model {


public function __construct()
    {
        parent::__construct();
    }


	function login($username, $password){
		$query = $this->db->query("SELECT StaffUsername,StaffPassword FROM msstaff where StaffUsername = '".$username."' and StaffPassword = '".$password."' ");

	
		if($query->num_rows()==1){
			return $query -> result();
		} else{
			return false;
		}
	}

	
}













