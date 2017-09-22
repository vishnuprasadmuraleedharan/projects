<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_valid extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function validUser()
    {
        if ($this->input->post()) {
            // var_dump($this->input->post());die;
            $firstname=$this->input->post('firstname');
            $password=$this->input->post('password');

            $this->form_validation->set_rules('firstname','firstname','trim|required|min_length[5]|max_length[8]');
            $this->form_validation->set_rules('password', 'Password', 'required');

        
            // echo "hai";die();

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('register');
            } else {
                $credentials=array(
                    'firstname'=>$firstname,
                    'password'=>$password
                );

                $this->load->model('Valid_model');
                if ($this->Valid_model->validUsername($credentials)) {
                    $this->load->view('success');
                }
            } 
        } else {
            $this->load->view('register');
        }
    }
}