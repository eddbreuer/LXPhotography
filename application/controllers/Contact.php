<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Contact extends CI_Controller {


    	public function index()
    	{
            $data['background'] = 'white';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/contact', $data);
            $this->load->view('templates/footer');
        }
        public function send_email()
        {


            $this->form_validation->set_rules('name','Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
            $this->form_validation->set_rules('phone', 'Phone', 'xss_clean');

            if ($this->form_validation->run() === FALSE) {

                $data['background'] = 'white';
                $this->load->view('templates/header', $data);
                $this->load->view('pages/contact', $data);
                $this->load->view('templates/footer');
            } else {
                $config = array(
                    'protocol' => 'mail',
                   'smtp_host' => 'server316.webhostingpad.com',
                   'smtp_port' => '465',
                   'smtp_user' => 'lx@lx-photography.com',
                   'smtp_pass' => 'Alokin1970!',
                   'mailtype' => 'html',
                   'charset' => 'iso-8859-1',
                   'wordwrap' => TRUE

                );

                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");

                $this->email->from(set_value("email"));
                $this->email->to("luxusphotography@gmail.com");
                $this->email->subject("LX client inquiry from Website");
                $this->email->message(set_value("message"));

                if ($this->email->send()) {
                    $data['background'] = 'white';
                    $this->load->view('templates/header', $data);
                    $this->load->view('pages/email_sent', $data);
                    $this->load->view('templates/footer');
                } else {
                    show_error($this->email->print_debugger());
                }




            }




        }

    }
