	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
  /***
   * controller for handling ajax
   */

class Newlogin extends CI_Controller {

	/**
	 *First view for the controller 
     *@param void
     *@return void
     */

	public function firstlog()
	{
		$this->load->view('newlog');
	}

    /** 
     *Function called from ajax
     *@param void
     *@return void
     */

	public function secondlog()
	{
			$firstname=$this->input->post('firstname');
			$password=$this->input->post('password');

			$credentials=array(
				'firstname'=>$firstname,
				'password'=>$password
				);

			$this->load->model('Newlogin_model');

			if ($this->Newlogin_model->saveUserin($credentials)) {
				$message="<textarea rows=2 cols=20 style='color:green;'>Updated sucessfully</textarea>";
				echo $message;
			}else{
				$message="<textarea rows=2 cols=40 style='color:green;'>Sorry.your data has not been updated</textarea>";
				echo $message;
			} 
		
    }
	

}

