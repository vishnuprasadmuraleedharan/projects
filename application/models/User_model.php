<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	
	public function selectUser(){

		// $firstname = $credentials['firstname'];

		// $this->db->where('firstname', $firstname);
		// if ($this->db->get('users'))
		// $firstname = $credentials['firstname']
        // $password =$credentials['password']

		// $this->db->select('firstname', $firstname);
		// $this->db->select('password', $password);
		if($query = $this->db->get('users')){
			return $query->result();
        }
			// return true;
		// } else {
			// return false;
		// }
	// }
	}
}