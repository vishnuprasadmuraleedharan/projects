<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model function for 'Newlogin' controller
 */
class Newlogin_model extends CI_Model {

	/**
	 *model function to update the pasword
	 *@param array $credentials
	 *@return boolean value
	 */

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
