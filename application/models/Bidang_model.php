<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang_model extends CI_Model
{

    public function list_bidang()
    {
        return $this->db->query("  SELECT *, 
                                (SELECT nama_urusan from urusan WHERE urusan.id_urusan = bidang.id_urusan) as nama_urusan
                            FROM bidang")->result();
    }

    public function simpan()
    {   
        $post = $this->input->post();
        $maxid= $this->db->query("SELECT `AUTO_INCREMENT`
                                FROM  INFORMATION_SCHEMA.TABLES
                                WHERE TABLE_NAME   = 'bidang';")->row();
        $kode = $post["urusan"].".".$maxid->AUTO_INCREMENT;

        $this->id_urusan    = $post["urusan"];
        $this->kode         = $kode;
        $this->nama_bidang  = $post["nama_bidang"];
        $this->db->insert('bidang', $this);
    }

    function get_bidang ($id) {
        $this->db->where("id_bidang", $id);
        $data = $this->db->get("bidang");

        return $data->row();
    }

    function edit_bidang ($id) {
        $post               = $this->input->post();
        $nama_bidang        = $post["nama_bidang"];
        $urusan             = $post["urusan"];

        $this->db->set('id_urusan', $urusan);
        $this->db->set('nama_bidang', $nama_bidang);
        $this->db->where('id_bidang', $id);
        $this->db->update('bidang');
        return ($this);
    }

    function hapus_bidang ($id) {
        return $this->db->delete("bidang", array("id_bidang" => $id));
    }
}