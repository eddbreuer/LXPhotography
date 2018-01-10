<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends CI_Controller {


    	public function index()
    	{
            

    		$this->load->view('templates/admin_header');
    		$this->load->view('admin/dashboard');
    		$this->load->view('templates/admin_footer');
    	}
        public function posts()
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}

            $this->load->model('posts_model');
		    $data['posts'] = $this->posts_model->get_all_posts();
            $data['background'] = 'white';

            $this->load->view('templates/admin_header');
    		$this->load->view('admin/posts', $data);
    		$this->load->view('templates/admin_footer');
        }

        public function post($id)
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $this->load->model('posts_model');
			$data['post'] = $this->posts_model->get_post_id($id);
            $data['background'] = 'white';

            $this->load->view('templates/admin_header', $data);
			$this->load->view('admin/post', $data);
			$this->load->view('templates/admin_footer');
		}
        public function delete($id)
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $this->load->model('posts_model');
            $this->posts_model->delete_post($id);
            redirect('admin/posts');
        }
        public function create()
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');

            if($this->form_validation->run() === FALSE){
                $data['background'] = 'white';

                $this->load->view('templates/admin_header');
                $this->load->view('admin/create', $data);
                $this->load->view('templates/admin_footer');
            } else {
                $this->load->model('posts_model');
                $this->posts_model->create_post();

                $data['background'] = 'white';

                redirect('admin/posts');
            }
        }
        public function update()
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $this->load->model('posts_model');
            $this->posts_model->update();
            redirect('admin/posts');
        }
        public function photos()
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $this->load->model('pictures_model');
		    $data['photos'] = $this->pictures_model->get_all_photos();

            $this->load->view('templates/admin_header');
            $this->load->view('admin/photos', $data);
            $this->load->view('templates/admin_footer');
        }

        public function photo($id)
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $this->load->model('pictures_model');
			$data['photo'] = $this->pictures_model->get_photo_id($id);


            $this->load->view('templates/admin_header', $data);
			$this->load->view('admin/photo', $data);
			$this->load->view('templates/admin_footer');
        }
        public function photo_update()
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $this->load->model('pictures_model');
            $this->pictures_model->update_photo();
            redirect('admin/photos');
        }
        public function upload_photo()
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $data['background'] = 'white';
            $this->form_validation->set_rules('alt', 'Alt', 'required');
            $data['error'] = '';

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/admin_header', $data);
                $this->load->view('admin/upload_photo', $data);
                $this->load->view('templates/admin_footer');
            }else{
                $config['upload_path'] = './assets/images/gallery';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size'] = '4048';
                $config['max_width'] = '4000';
                $config['max_height'] = '4000';

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload()){
                    $error = array('error'=>$this->upload->display_errors());
                    $this->load->view('templates/admin_header');
                    $this->load->view('admin/upload_photo', $error);
                    $this->load->view('templates/admin_footer');
                }else{

                    $file_data = $this->upload->data();
                    $photo_name = $file_data['file_name'];

                    $this->load->model('pictures_model');
                    $this->pictures_model->upload_photo($photo_name);

                }
                redirect('admin/photos');
            }
        }
        public function delete_photo($id)
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $this->load->model('pictures_model');
            $this->pictures_model->delete_photo($id);
            redirect('admin/photos');
        }

        public function home_g()
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $this->load->model('pictures_model');
            $data['photos'] = $this->pictures_model->home_g();


            $this->load->view('templates/admin_header');
            $this->load->view('admin/home_g', $data);
            $this->load->view('templates/admin_footer');
        }
        public function home_ix_order()
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $items = $this->input->post('item');
            $total_items = count($this->input->post('item'));
            $this->load->model('pictures_model');
            $this->pictures_model->update_home_g($total_items, $items);
        }
        public function wed_g()
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $this->load->model('pictures_model');
            $data['photos'] = $this->pictures_model->wed_g();

            $this->load->view('templates/admin_header');
            $this->load->view('admin/wed_g', $data);
            $this->load->view('templates/admin_footer');
        }
        public function wed_ix_order()
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $items = $this->input->post('item');
            $total_items = count($this->input->post('item'));
            $this->load->model('pictures_model');
            $this->pictures_model->update_wed_g($total_items, $items);
        }
        public function eng_g()
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $this->load->model('pictures_model');
            $data['photos'] = $this->pictures_model->eng_g();

            $this->load->view('templates/admin_header');
            $this->load->view('admin/eng_g', $data);
            $this->load->view('templates/admin_footer');
        }
        public function eng_ix_order()
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $items = $this->input->post('item');
            $total_items = count($this->input->post('item'));
            $this->load->model('pictures_model');
            $this->pictures_model->update_eng_g($total_items, $items);
        }

        public function bou_g()
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $this->load->model('pictures_model');
            $data['photos'] = $this->pictures_model->bou_g();

            $this->load->view('templates/admin_header');
            $this->load->view('admin/bou_g', $data);
            $this->load->view('templates/admin_footer');
        }
        public function bou_ix_order()
        {
            if(!$this->session->userdata('logged_in')){
				redirect('admin');
			}
            $items = $this->input->post('item');
            $total_items = count($this->input->post('item'));
            $this->load->model('pictures_model');
            $this->pictures_model->update_bou_g($total_items, $items);
        }


    }
