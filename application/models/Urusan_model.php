<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Urusan_model extends CI_Model
{

    public function list_urusan()
    {
        return $this->db->get("urusan")->result();
    }

    public function simpan()
    {
        $post = $this->input->post();

        $this->nama_urusan  = $post["nama_urusan"];
        $this->db->insert('urusan', $this);
    }

    function get_urusan ($id) {
        $this->db->where("id_urusan", $id);
        $data = $this->db->get("urusan");

        return $data->row();
    }

    function edit_urusan ($id) {
        $post          = $this->input->post();
        $nama_urusan        = $post["nama_urusan"];

        $this->db->set('nama_urusan', $nama_urusan);

        $this->db->where('id_urusan', $id);
        $this->db->update('urusan');
        return ($this);
    }

    function hapus_urusan ($id) {
        return $this->db->delete("urusan", array("id_urusan" => $id));
    }
}