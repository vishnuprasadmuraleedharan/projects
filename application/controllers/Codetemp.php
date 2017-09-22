<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codetemp extends CI_Controller {

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
	public function ind()
	{
	
	$query = $this->db->query("SELECT * FROM users");	

		$data = array(
		        'blog_title' => 'My Blog Title',
		        'blog_heading' => 'My Blog Heading',
		        'blog_entries' => $query->result_array()
		);

		$this->parser->parse('blog_template', $data);

        // $this->load->view('welcome_message');
	}
}
