<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Targetkegiatan_model extends CI_Model
{

    public function list_targetkegiatan()
    {
        return $this->db->query("
                            SELECT 
                                        programkerja.id as id_programkerja, programkerja.keterangan, targetkegiatan.id as id , targetkegiatan.pagu, targetkegiatan.volume, 
                                        targetkegiatan.satuan, 
                            (SELECT periode from periode WHERE periode.id_periode = targetkegiatan.id_periode) as tahun ,
                            (SELECT keterangan from programkerja WHERE programkerja.id = targetkegiatan.id_programkerja) as keterangan
                            FROM targetkegiatan")->result();
    }

    public function list_mytargetkegiatan()
    {
        return $this->db->query("  
                            SELECT 
                                        programkerja.id as id_programkerja, programkerja.keterangan, targetkegiatan.id as id , targetkegiatan.pagu, targetkegiatan.volume, 
                                        targetkegiatan.satuan, 
                            (SELECT periode from periode WHERE periode.id_periode = targetkegiatan.id_periode) as tahun ,
                            (SELECT keterangan from programkerja WHERE programkerja.id = targetkegiatan.id_programkerja) as keterangan
                            FROM targetkegiatan
                            JOIN programkerja on programkerja.id = targetkegiatan.id_programkerja AND programkerja.id_user = '".$this->session->userdata('id')."' ")->result();
    }

    public function simpan()
    {
        $post = $this->input->post();

        $this->id_programkerja  = $post["programkerja"];
        $this->id_periode       = $post["tahun"];
        $this->pagu             = $post["pagu"];
        $this->volume           = $post["volume"];
        $this->satuan           = $post["satuan"];

        $this->db->insert('targetkegiatan', $this);
    }

    function get_targetkegiatan ($id) {
        $this->db->where("id", $id);
        $data = $this->db->get("targetkegiatan");

        return $data->row();
    }

    function edit_targetkegiatan ($id) {
        $post           = $this->input->post();
        $id_programkerja= $post["programkerja"];
        $id_periode     = $post["tahun"];
        $pagu           = $post["pagu"];
        $volume         = $post["volume"];
        $satuan         = $post["satuan"];

        $this->db->set('id_programkerja', $id_programkerja);
        $this->db->set('id_periode', $id_periode);
        $this->db->set('pagu', $pagu);
        $this->db->set('volume', $volume);
        $this->db->set('satuan', $satuan);

        $this->db->where('id', $id);
        $this->db->update('targetkegiatan');
        return ($this);
    }

    function hapus_targetkegiatan ($id) {
        return $this->db->delete("targetkegiatan", array("id" => $id));
    }
}