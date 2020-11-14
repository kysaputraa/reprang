<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model
{

    public function my_profile()
    {
        $query = $this->db->get_where('user', array('id' => $this->session->userdata('id')))->row();
        return($query);
    }
}