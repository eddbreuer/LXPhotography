<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Users extends CI_Controller {
        function __construct() {
        parent::__construct();
    }
        public function index()
        {   if(!$this->session->userdata('logged_in')){
            redirect('admin');
        }
            $this->load->view('templates/admin_header');
            $this->load->view('users/index');
            $this->load->view('templates/admin_footer');
        }
        public function register()
        {
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

            if ($this->form_validation->run() === FALSE) {

                $data['gallery'] = "black";
                $this->load->view('templates/admin_header');
                $this->load->view('users/register', $data);
                $this->load->view('templates/admin_footer');

            }else {

                $this->load->model('user_model');
                $enc_password = md5($this->input->post('password'));

                $this->user_model->register($enc_password);

                $this->session->set_flashdata('user_registered', 'New user Registered');
                redirect('users');
            }
        }
        public function login()
        {
            $this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/admin_header');
				$this->load->view('users/login');
				$this->load->view('templates/admin_footer');
			} else {

				// Get username
				$username = $this->input->post('username');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));

				// Login user
                $this->load->model('user_model');
				$user_id = $this->user_model->login($username, $password);

				if($user_id){
					// Create session
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					// Set message
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');

					redirect('users');
				} else {
					// Set message
					$this->session->set_flashdata('login_failed', 'Login is invalid');

					redirect('users/login');
				}
			}
		}
        public function logout(){
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');

        // Set message
        $this->session->set_flashdata('user_loggedout', 'You are now logged out');

        redirect('users');
    }

}
