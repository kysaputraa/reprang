<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Periode_model extends CI_Model
{

    public function list_periode()
    {
        return $this->db->get("periode")->result();
    }

    public function simpan()
    {
        $post = $this->input->post();

        $this->periode  = $post["periode"];
        $this->db->insert('periode', $this);
    }

    function get_periode ($id) {
        $this->db->where("id_periode", $id);
        $data = $this->db->get("periode");

        return $data->row();
    }

    function edit_periode ($id) {
        $post           = $this->input->post();
        $periode        = $post["periode"];

        $this->db->set('periode', $periode);

        $this->db->where('id_periode', $id);
        $this->db->update('periode');
        return ($this);
    }

    function hapus_periode ($id) {
        return $this->db->delete("periode", array("id_periode" => $id));
    }
}