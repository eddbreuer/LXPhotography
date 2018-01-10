<?php

class Pictures_model extends CI_model {

    public function __construct(){
    parent::__construct();
    $this->load->database();
    }

    public function get_all_photos()
    {
        $this->db->order_by('photos.id', 'DESC');
        $query = $this->db->get('photos');
        return $query->result_array();
    }
    public function get_photo_id($id)
    {

        $query = $this->db->get_where('photos', array('id' => $id));
        return $query->row_array();
    }
    public function update_photo()
    {
        $data = array(
            'alt' => $this->input->post('alt'),
            'caption' => $this->input->post('caption'),
            'type' => $this->input->post('type'),
            'display_home' => $this->input->post('display_home'),
            'display_wed' => $this->input->post('display_wed'),
            'display_eng' => $this->input->post('display_eng'),
            'display_bou' => $this->input->post('display_bou'),
        );

        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('photos', $data);
    }
    public function upload_photo($photo_name)
    {
        $query = $this->db->get('photos');
        $row_count = $query->num_rows();
        $display_home = $this->input->post('display_home', TRUE)==null ? 0 : 1;
        $display_wed = $this->input->post('display_wed', TRUE)==null ? 0 : 1;
        $display_eng = $this->input->post('display_eng', TRUE)==null ? 0 : 1;
        $display_bou = $this->input->post('display_bou', TRUE)==null ? 0 : 1;

        $data = array(
            'alt' => $this->input->post('alt'),
            'caption' => $this->input->post('caption'),
            'type' => $this->input->post('type'),
            'photo_name' => $photo_name,
            'display_home' => $display_home,
            'display_wed' => $display_wed,
            'display_eng' => $display_eng,
            'display_bou' => $display_bou,
            'home_ix' => $row_count,
            'wed_ix' => $row_count,
            'eng_ix' => $row_count,
            'bou_ix' => $row_count,
        );

            return $this->db->insert('photos', $data);
    }
    public function delete_photo($id)
    {
        $image_file_name = $this->db->select('photo_name')->get_where('photos', array('id' => $id))->row()->photo_name;
			$cwd = getcwd(); // save the current working directory
			$image_file_path = $cwd."\\assets\\images\\gallery\\";
			chdir($image_file_path);
			unlink($image_file_name);
			chdir($cwd); // Restore the previous working directory
			$this->db->where('id', $id);
			$this->db->delete('photos');
			return true;

    }
    public function home_g()
    {
        $this->db->order_by('photos.home_ix', 'ASC');
        $query = $this->db->get_where('photos', array('display_home' => 1));
        return $query->result_array();
    }
    public function update_home_g($total_items, $items)
    {

        for($item = 0; $item < $total_items; $item++ )
                {

                    $data = array(
                            'id' => $items[$item],
                            'home_ix' => $item+1,
                    );

                    $this->db->where('id', $data['id']);

                    $this->db->update('photos', array('home_ix' => $data['home_ix']));
                }
    }
    public function wed_g()
    {
        $this->db->order_by('photos.wed_ix', 'ASC');
        $query = $this->db->get_where('photos', array('display_wed' => 1));
        return $query->result_array();
    }
    public function update_wed_g($total_items, $items)
    {

        for($item = 0; $item < $total_items; $item++ )
                {

                    $data = array(
                            'id' => $items[$item],
                            'wed_ix' => $item+1,
                    );

                    $this->db->where('id', $data['id']);

                    $this->db->update('photos', array('wed_ix' => $data['wed_ix']));
                }
    }
    public function eng_g()
    {
        $this->db->order_by('photos.eng_ix', 'ASC');
        $query = $this->db->get_where('photos', array('display_eng' => 1));
        return $query->result_array();
    }
    public function update_eng_g($total_items, $items)
    {

        for($item = 0; $item < $total_items; $item++ )
                {

                    $data = array(
                            'id' => $items[$item],
                            'eng_ix' => $item+1,
                    );

                    $this->db->where('id', $data['id']);

                    $this->db->update('photos', array('eng_ix' => $data['eng_ix']));
                }
    }
    public function bou_g()
    {
        $this->db->order_by('photos.bou_ix', 'ASC');
        $query = $this->db->get_where('photos', array('display_bou' => 1));
        return $query->result_array();
    }
    public function update_bou_g($total_items, $items)
    {

        for($item = 0; $item < $total_items; $item++ )
                {

                    $data = array(
                            'id' => $items[$item],
                            'bou_ix' => $item+1,
                    );

                    $this->db->where('id', $data['id']);

                    $this->db->update('photos', array('bou_ix' => $data['bou_ix']));
                }
    }


}
