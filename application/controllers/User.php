<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
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
	public function showuser()
	{
		if ($this->input->post()) {
			$firstname=$this->input->post('firstname');
			$password=$this->input->post('password');

			$credentials=array(
				'firstname'=>$firstname,
				'password'=>$password
				);

			$this->load->model('User_model');
			// $data['result']=$this->User_model->selectUser();
			// var_dump($data['result']);die();
			// $this->load->view('userGet',$data);
						// echo "hai";die();

			if ($this->User_model->selectUser($credentials)) {
				$this->load->view('success');
			}  else {
				$this->load->view('error');
			} 
		
          }else {
			$this->load->view('register');
		}
	

	}
}
