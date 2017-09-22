<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userin extends CI_Controller 
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
	public function update()
	{
		if ($this->input->post()) {
			$firstname=$this->input->post('firstname');
			$password=$this->input->post('password');
        
        // associative array
			
			$credentials=array('firstname'=>$firstname,'password'=>$password);
			$this->load->model('Userin_model');
			// echo "hai";die();

			// $data['message']="record updated";
			// $data['message1']="record updation failed";

			if ($this->Userin_model->saveUserin($credentials)) {
				$data['message']="record updated";
				$this->load->view('registerin',$data);
			} 
			else {
				$data['message']="record updation failed";
				$this->load->view('registerin',$data);
			} 
		
          }
          else 
		{
			$this->load->view('registerin');
		}
	

	}
}