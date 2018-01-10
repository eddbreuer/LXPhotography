<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller {


    	public function index()
    	{

            $this->load->model('pictures_model');
		    $data['photos'] = $this->pictures_model->home_g();
            $data['background'] = 'gallery';

    		$this->load->view('templates/header', $data);
    		$this->load->view('pages/home_gallery', $data);
    		$this->load->view('templates/footer');
    	}

        public function carousel($home_ix)
        {
            $data['background'] = 'gallery';
            $this->load->model('pictures_model');
		    $data['photos'] = $this->pictures_model->home_g();
            $data['offset'] = $home_ix;


            $this->load->view('templates/header', $data);
            $this->load->view('pages/home_carousel', $data);
            $this->load->view('templates/footer');
        }
        public function carousel_wed($wed_ix)
        {
            $data['background'] = 'gallery';
            $this->load->model('pictures_model');
		    $data['photos'] = $this->pictures_model->wed_g();
            $data['offset'] = $wed_ix;


            $this->load->view('templates/header', $data);
            $this->load->view('pages/home_carousel', $data);
            $this->load->view('templates/footer');
        }
        public function carousel_eng($eng_ix)
        {
            $data['background'] = 'gallery';
            $this->load->model('pictures_model');
		    $data['photos'] = $this->pictures_model->eng_g();
            $data['offset'] = $eng_ix;


            $this->load->view('templates/header', $data);
            $this->load->view('pages/home_carousel', $data);
            $this->load->view('templates/footer');
        }
        public function carousel_bou($bou_ix)
        {
            $data['background'] = 'gallery';
            $this->load->model('pictures_model');
		    $data['photos'] = $this->pictures_model->bou_g();
            $data['offset'] = $bou_ix;


            $this->load->view('templates/header', $data);
            $this->load->view('pages/home_carousel', $data);
            $this->load->view('templates/footer');
        }
        public function about()
        {
            $data['background'] = 'white';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/about', $data);
            $this->load->view('templates/footer');
        }
        public function engagements()
        {
            $data['background'] = 'white';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/engagements', $data);
            $this->load->view('templates/footer');
        }
        public function weddings()
        {
            $data['background'] = 'white';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/weddings', $data);
            $this->load->view('templates/footer');
        }
        public function proposals()
        {
            $data['background'] = 'white';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/proposals', $data);
            $this->load->view('templates/footer');
        }
        public function boudoir()
        {
            $data['background'] = 'white';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/boudoir', $data);
            $this->load->view('templates/footer');
        }
        public function boudoir_tease()
        {
            $this->load->model('pictures_model');
		    $data['photos'] = $this->pictures_model->bou_g();

            $data['background'] = 'gallery';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/boudoir_tease', $data);
            $this->load->view('templates/footer');
        }
        public function boudoir_faq()
        {
            $data['background'] = 'white';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/boudoir_faq', $data);
            $this->load->view('templates/footer');
        }
        public function branding()
        {
            $data['background'] = 'white';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/branding', $data);
            $this->load->view('templates/footer');
        }
        public function wedding_portfolio()
        {
            $this->load->model('pictures_model');
		    $data['photos'] = $this->pictures_model->wed_g();

            $data['background'] = 'gallery';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/wedding_portfolio', $data);
            $this->load->view('templates/footer');
        }
        public function engagement_portfolio()
        {
            $this->load->model('pictures_model');
		    $data['photos'] = $this->pictures_model->eng_g();

            $data['background'] = 'gallery';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/engagement_portfolio', $data);
            $this->load->view('templates/footer');
        }
        public function blog()
        {
            $data['background'] = 'white';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/blog', $data);
            $this->load->view('templates/footer');
        }
        public function thanks()
        {
        	$data['background'] = 'white';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/thanks', $data);
            $this->load->view('templates/footer');
        }


    }
