<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang_opd_model extends CI_Model
{

    public function list_bidang_opd()
    {
        return $this->db->get("bidang_opd")->result();
    }

    public function simpan()
    {
        $post = $this->input->post();

        $this->nama  = $post["nama_bidang_opd"];
        $this->db->insert('bidang_opd', $this);
    }

    function get_bidang_opd ($id) {
        $this->db->where("id_bidang_opd", $id);
        $data = $this->db->get("bidang_opd");

        return $data->row();
    }

    function edit_bidang_opd ($id) {
        $post          = $this->input->post();
        $nama        = $post["nama_bidang_opd"];

        $this->db->set('nama', $nama);

        $this->db->where('id_bidang_opd', $id);
        $this->db->update('bidang_opd');
        return ($this);
    }

    function hapus_bidang_opd ($id) {
        return $this->db->delete("bidang_opd", array("id_bidang_opd" => $id));
    }
}