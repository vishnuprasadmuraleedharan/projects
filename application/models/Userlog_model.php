<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlog_model extends CI_Model {

	
	public function loginModel($credentials){

		$password = $credentials['password'];
		$email = $credentials['email'];
		$firstname = $credentials['firstname'];

		// $this->db->select('firstname', $firstname);

		$this->db->where('email', $email);
		$this->db->where('password', $password);
	
		$query = $this->db->get('users');
        
        // var_dump($query->num_rows());die();

		$rowcount=$query->num_rows();

		if (!empty($rowcount)) {
			return true;
		} else {
			return false;
		}

		// $this->db->where('users'$credentials('firstname', $firstname));
		
		// if ($this->db->where(('firstname', $firstname))&&
		// 	($this->db->delete('users',$credentials)){
		// 	return true;
		// } else{
		// 	return false;
		// } 
			
		// }
		
	}
	
}

