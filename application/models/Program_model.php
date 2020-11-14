<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Program_model extends CI_Model
{

    public function list_program()
    {
        return $this->db->query("  SELECT *, 
                                (SELECT nama_bidang from bidang WHERE bidang.id_bidang = program.id_bidang) as nama_bidang
                            FROM program")->result();
    }

    public function simpan()
    {
        $post = $this->input->post();
        $maxid= $this->db->query("SELECT `AUTO_INCREMENT`
                                FROM  INFORMATION_SCHEMA.TABLES
                                WHERE TABLE_NAME   = 'program';")->row();
        $kode = $post["bidang"].".".$maxid->AUTO_INCREMENT;

        $this->kode          = $kode;
        $this->nama_program  = $post["nama_program"];
        // $this->id_urusan     = $post["urusan"];
        $this->id_bidang     = $post["bidang"];
        $this->db->insert('program', $this);
    }

    function get_program ($id) {
        $this->db->where("id_program", $id);
        $data = $this->db->get("program");

        return $data->row();
    }

    function edit_program ($id) {
        $post          = $this->input->post();
        $nama_program        = $post["nama_program"];
        // $urusan              = $post["urusan"];
        $bidang              = $post["bidang"];

        $this->db->set('nama_program', $nama_program);
        // $this->db->set('id_urusan', $urusan);
        $this->db->set('id_bidang', $bidang);

        $this->db->where('id_program', $id);
        $this->db->update('program');
        return ($this);
    }

    function hapus_program ($id) {
        return $this->db->delete("program", array("id_program" => $id));
    }
}