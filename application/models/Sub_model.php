<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_model extends CI_Model
{

    public function list_sub()
    {
        return $this->db->get("sub")->result();
    }

    public function simpan()
    {
        $post = $this->input->post();
        $maxid= $this->db->query("SELECT `AUTO_INCREMENT`
                                FROM  INFORMATION_SCHEMA.TABLES
                                WHERE TABLE_NAME   = 'sub';")->row();
        $kode = $post["kegiatan"].".".$maxid->AUTO_INCREMENT;

        $this->kode         = $kode;
        $this->nama_sub     = $post["nama_sub"];
        $this->id_kegiatan  = $post["kegiatan"];
        $this->db->insert('sub', $this);
    }

    function get_sub ($id) {
        $this->db->where("id_sub", $id);
        $data = $this->db->get("sub");

        return $data->row();
    }

    function edit_sub ($id) {
        $post          = $this->input->post();
        $nama_sub      = $post["nama_sub"];
        $kegiatan      = $post["kegiatan"];

        $this->db->set('nama_sub', $nama_sub);
        $this->db->set('id_kegiatan', $kegiatan);

        $this->db->where('id_sub', $id);
        $this->db->update('sub');
        return ($this);
    }

    function hapus_sub ($id) {
        return $this->db->delete("sub", array("id_sub" => $id));
    }
}