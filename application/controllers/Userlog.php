<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlog extends CI_Controller 
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
	public function loginUser()
	{
		// $this->load->library('session');

		if ($this->input->post()) {
			$firstname=$this->input->post('firstname');
			$password=$this->input->post('password');
			$email=$this->input->post('email');


			$credentials=array(
				'firstname'=>$firstname,
				'password'=>$password,
				'email'=>$email
				);

			$this->load->model('Userlog_model');

			if ($this->Userlog_model->loginModel($credentials)) {
				$newlog = array(
				        'firstname' => 'alanjoseph',
				        'email'     => 'alan@gmail.com',
				        'logged_in' => TRUE
				);

				$this->session->set_userdata($newlog);

				$this->load->view('successup');
			} else {
				$this->load->view('error');
			} 
		
          }else {
			$this->load->view('login');
		}
	

	}

	// Logout the user


	public function logoutUser()
	{
		
		var_dump($this->session->userdata('logged_in'));die();
		$this->session->unset_userdata('firstname');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		// echo "hai";die();
        redirect('http://localhost/project1/index.php/userlog/loginuser');
	}
}