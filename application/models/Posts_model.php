<?php

class Posts_model extends CI_model {

    public function __construct(){
    parent::__construct();
    $this->load->database();
    }

    public function get_all_posts()
    {

        $query = $this->db->get('posts');
        return $query->result_array();
    }

    public function get_post($slug){

			$query = $this->db->get_where('posts', array('slug' => $slug));
			return $query->row_array();
	}
    public function get_post_id($id){

            $query = $this->db->get_where('posts', array('id' => $id));
            return $query->row_array();
    }
    public function create_post()
    {
            $slug = url_title($this->input->post('title'));

            $data = array(
                'title' => $this->input->post('title'),
                'body' => $this->input->post('body'),
                'slug' => $slug
            );

            return $this->db->insert('posts', $data);
    }
    public function delete_post($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('posts');
        return true;
    }
    public function update()
    {
        $slug = url_title($this->input->post('title'));

        $data = array(
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body'),
            'created' => $this->input->post('created'),
            'slug' => $slug
        );

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('posts', $data);
    }

}
