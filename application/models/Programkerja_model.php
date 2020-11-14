<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Programkerja_model extends CI_Model
{

    public function list_programkerja()
    {
        return $this->db->query("  SELECT *, 
                                (SELECT nama_sub from sub WHERE sub.id_sub = programkerja.id_sub) as nama_sub,
                                (SELECT nama_kegiatan from kegiatan WHERE kegiatan.id_kegiatan = programkerja.id_kegiatan) as nama_kegiatan
                            FROM programkerja 
                            WHERE status = 1")->result();
    }

    public function list_myprogramkerja()
    {
        return $this->db->query("  SELECT *, 
                                (SELECT nama_sub from sub WHERE sub.id_sub = programkerja.id_sub) as nama_sub,
                                (SELECT nama_kegiatan from kegiatan WHERE kegiatan.id_kegiatan = programkerja.id_kegiatan) as nama_kegiatan
                            FROM programkerja 
                            WHERE status = 1 AND id_user = '".$this->session->userdata('id')."'")->result();
    }

    public function list_unprogramkerja()
    {
        return $this->db->query("  SELECT *, 
                                (SELECT nama_sub from sub WHERE sub.id_sub = programkerja.id_sub) as nama_sub
                            FROM programkerja 
                            WHERE status = 0")->result();
    }

    public function list_myunprogramkerja()
    {
        return $this->db->query("  SELECT *, 
                                (SELECT nama_sub from sub WHERE sub.id_sub = programkerja.id_sub) as nama_sub
                            FROM programkerja 
                            WHERE status = 0 AND id_user = '".$this->session->userdata('id')."'")->result();
    }

    public function setuju($id)
    {

        $this->db->set('status', '1');
        $this->db->where('id' , $id);
        $this->db->update('programkerja');
        return($this);
    }

    public function simpan()
    {
        $post     = $this->input->post();

        $kegiatan = $this->db->get_where('kegiatan', array('id_kegiatan' => $post['kegiatan']))->row();
        $program  = $this->db->get_where('program', array('id_program' => $kegiatan->id_program))->row();
        $bidang   = $this->db->get_where('bidang', array('id_urusan' => $program->id_bidang))->row();

        if (isset($post["user"])) {
             $this->id_user          = $kegiatan->id_pptk;
             $this->status           = 1;
        } else {
             $this->id_user          = $this->session->userdata('id');
        }
       
        $this->id_urusan        = $bidang->id_urusan;
        $this->id_bidang        = $program->id_bidang;
        $this->id_program       = $kegiatan->id_program;

        $this->id_kegiatan      = $post["kegiatan"];
        $this->id_sub           = $post["sub"];
        $this->keterangan       = $post["keterangan"];
        $this->volume           = $post["volume"];
        $this->uraian           = $post["uraian"];
        $this->satuan           = $post["satuan"];
        $this->kondisi_awal     = $post["kondisiawal"];
        $this->permasalahan     = $post["permasalahan"];

        $this->db->insert('programkerja', $this);
    }

    function get_programkerja ($id) {
        $this->db->where("id", $id);
        $data = $this->db->get("programkerja");

        return $data->row();
    }

    function edit_programkerja ($id) {
        $post     = $this->input->post();
        $kegiatan = $this->db->get_where('kegiatan', array('id_kegiatan' => $post['kegiatan']))->row();
        $program  = $this->db->get_where('program', array('id_program' => $kegiatan->id_program))->row();
        $bidang   = $this->db->get_where('bidang', array('id_urusan' => $program->id_bidang))->row();

        if (isset($post["user"])) {
             $this->db->set('id_user',  $kegiatan->id_pptk);
        } 
        $this->db->set('id_kegiatan',   $post["kegiatan"]);
        $this->db->set('id_sub',        $post["sub"]);
        $this->db->set('keterangan',    $post["keterangan"]);
        $this->db->set('volume',        $post["volume"]);
        $this->db->set('uraian',        $post["uraian"]);
        $this->db->set('satuan',        $post["satuan"]);
        $this->db->set('kondisi_awal',  $post["kondisiawal"]);
        $this->db->set('permasalahan',  $post["permasalahan"]);
        $this->db->set('id_urusan',     $bidang->id_urusan);
        $this->db->set('id_bidang',     $program->id_bidang);
        $this->db->set('id_program',    $kegiatan->id_program);

        $this->db->where('id', $id);
        $this->db->update('programkerja');
        return ($this);
    }

    function hapus_programkerja ($id) {
        return $this->db->delete("programkerja", array("id" => $id));
    }
}