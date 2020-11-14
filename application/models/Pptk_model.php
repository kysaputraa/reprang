<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pptk_model extends CI_Model
{

    public function list_pptk()
    {
        return $this->db->get("pptk")->result();
    }

    public function simpan()
    {
        $post = $this->input->post();

        $this->nama_lengkap     = $post["nama_lengkap"];
        $this->nip              = $post["nip"];
        $this->db->insert('pptk', $this);
    }

    function get_pptk ($id) {
        $this->db->where("id", $id);
        $data = $this->db->get("pptk");

        return $data->row();
    }

    function edit_pptk ($id) {
        $post             = $this->input->post();
        $nip              = $post["nip"];
        $nama_lengkap     = $post["nama_lengkap"];

        $this->db->set('nip', $nip);
        $this->db->set('nama_lengkap', $nama_lengkap);

        $this->db->where('id', $id);
        $this->db->update('pptk');
        return ($this);
    }

    function hapus_pptk ($id) {
        return $this->db->delete("pptk", array("id" => $id));
    }
}