<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function list_user()
    {
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get()->result();
        return($query);
    }

    public function simpan()
    {
        $post = $this->input->post();

        // $this->id_bidang        = $post['bidang_opd'];
        $this->nip              = $post["nip"];
        $this->nama_lengkap     = $post["nama_lengkap"];
        // $this->id_pptk          = $post["pptk"];
        $this->username         = $post["username"];
        $this->password         = $post["password"];
        $this->role             = 'user';
        $this->db->insert('user', $this);
    }

    function reset_user ($id) {
        $this->db->set('password', '123456');
        $this->db->where('username', $id);
        $this->db->update('user');
        return($this);
    }

    function hapus_user ($id) {
        return $this->db->delete("user", array("username" => $id));
    }
}