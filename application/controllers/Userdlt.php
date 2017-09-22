<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userdlt extends CI_Controller 
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function deleteusr()
	{
		if ($this->input->post()) {
			$firstname=$this->input->post('firstname');
			$password=$this->input->post('password');

			$credentials=array(
				'firstname'=>$firstname,
				'password'=>$password
				);

			$this->load->model('Userdlt_model');
			// echo "hai";die();

			if ($this->Userdlt_model->selectUser($credentials)) {
				$this->load->view('successdel');
			} else {
				$this->load->view('error');
			} 
		
          }else {
			$this->load->view('deleteusr');
		}
	

	}
}