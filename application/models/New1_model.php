<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Model function for 'Newlogin' controller
 */
class New1_model extends CI_Model {

	/**
	 *model function to update the pasword
	 *@param array $credentials
	 *@return boolean value
	 */

	public function ajaxlist($credentials){
		$firstname = $credentials['firstname'];
		$this->db->where('firstname', $firstname);
        $query =$this->db->get('users');
        // var_dump($query); die();
        $rowcount=$query->num_rows();
        // echo $rowcount; die();
		if (!empty($rowcount)) {
			return $query->result();
		} else{
			return false;
		} 
			
		}
		
	}
