<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_model extends CI_Model
{

    public function list_kegiatan()
    {
        return $this->db->query("  SELECT *, 
                                -- (SELECT nama_bidang from bidang WHERE bidang.id_bidang = kegiatan.id_bidang) as nama_bidang,
                                -- (SELECT nama_urusan from urusan WHERE urusan.id_urusan = kegiatan.id_urusan) as nama_urusan
                                (SELECT nama_program from program WHERE program.id_program = kegiatan.id_program) as nama_program,
                                (SELECT nama_lengkap from user WHERE user.id = kegiatan.id_pptk) as nama_pptk
                            FROM kegiatan")->result();
    }

    public function simpan()
    {
        $post = $this->input->post();
        $maxid= $this->db->query("SELECT `AUTO_INCREMENT`
                                FROM  INFORMATION_SCHEMA.TABLES
                                WHERE TABLE_NAME   = 'kegiatan';")->row();
        $kode = $post["program"].".".$maxid->AUTO_INCREMENT;

        $this->kode             = $kode;
        $this->nama_kegiatan    = $post["nama_kegiatan"];
        $this->id_pptk          = $post["pptk"];
        // $this->id_bidang      = $post["bidang"];
        $this->id_program       = $post["program"];
        $this->db->insert('kegiatan', $this);
    }

    function get_kegiatan ($id) {
        $this->db->where("id_kegiatan", $id);
        $data = $this->db->get("kegiatan");

        return $data->row();
    }

    function edit_kegiatan ($id) {
        $post               = $this->input->post();
        $nama_kegiatan      = $post["nama_kegiatan"];
        $program            = $post["program"];
        $pptk               = $post["pptk"];
        // $urusan             = $post["urusan"];
        // $bidang             = $post["bidang"];

        $this->db->set('nama_kegiatan', $nama_kegiatan);
        $this->db->set('id_program', $program);
        $this->db->set('id_pptk', $pptk);
        // $this->db->set('id_urusan', $urusan);
        // $this->db->set('id_bidang', $bidang);

        $this->db->where('id_kegiatan', $id);
        $this->db->update('kegiatan');
        return ($this);
    }

    function hapus_kegiatan ($id) {
        return $this->db->delete("kegiatan", array("id_kegiatan" => $id));
    }
}