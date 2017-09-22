<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userin_model extends CI_Model {

	
	public function saveUserin($credentials){
		$firstname = $credentials['firstname'];

		$this->db->where('firstname', $firstname);
		if ($this->db->update('users',$credentials)) {
			return true;
		} else{
			return false;
		} 
			
		}
		
	}
