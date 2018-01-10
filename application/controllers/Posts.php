<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Posts extends CI_Controller {


    	public function index()
    	{

            $this->load->model('posts_model');
		    $data['posts'] = $this->posts_model->get_all_posts();
            $data['background'] = 'white';

    		$this->load->view('templates/header', $data);
    		$this->load->view('posts/index', $data);
    		$this->load->view('templates/footer');
    	}

        public function view($slug)
        {
            $this->load->model('posts_model');
			$data['post'] = $this->posts_model->get_post($slug);
            $data['background'] = 'white';

            $this->load->view('templates/header', $data);
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		}

    }
