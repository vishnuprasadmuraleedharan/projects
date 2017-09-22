	<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  
  /***
   * controller for handling ajax
   */

class New1ajax extends CI_Controller {

	/**
	 *First view for the controller 
     *@param void
     *@return void
     */

	public function firstlog()
	{
		$this->load->view('new1login');
	}

    /** 
     *Function called from ajax
     *@param void
     *@return void
     */

	public function search()
	{
			$firstname=$this->input->post('firstname');
			// $password=$this->input->post('password');

			$credentials=array(
				'firstname'=>$this->input->post('firstname')
				// 'password'=>$password
				);

			// echo "hai"; die();
			$this->load->model('New1_model');

			$this->New1_model->ajaxlist($credentials);
				// var_dump($credentials); die();

				$data['result']=$this->New1_model->ajaxlist($credentials);
				echo json_encode($data['result']);
				$message="<textarea rows=2 cols=20 style='color:green;'>Updated sucessfully</textarea>";
				echo $message;
			// }else{
				// $message="<textarea rows=2 cols=40 style='color:green;'>Sorry.your data has not been updated</textarea>";
				// echo $message;
			// } 
}
}
