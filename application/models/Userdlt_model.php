<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userdlt_model extends CI_Model {

	
	public function saveUserdlt($credentials){

		$firstname = $credentials['firstname'];

		$this->db->where('firstname', $firstname);
		if ($this->db->delete('users')) {
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

