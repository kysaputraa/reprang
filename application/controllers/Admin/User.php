<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
        $this->load->model("admin_model");$this->admin_model->sessionku();
    }

	public function index()
	{

		$data = array (
            'content'   => 'admin/user.php',
            'isi'       => 'list_user',
            'user'    	=> $this->user_model->list_user()
        );
		$this->load->view('admin/index', $data);
	}

    public function tambah()
    {
        if ($this->input->post('btn')) {
            $this->user_model->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/user'));
        }

        $data = array (
            'content'   => 'admin/user.php',
            'isi'       => 'tambah'
        );
        $this->load->view('admin/index', $data);
    }

    public function reset ($id) {
        if (!isset($id)) show_404();
        
        if ($this->user_model->reset_user($id)) {
            redirect(site_url('admin/user'));
        }
    }

    public function hapus ($id) {
        if (!isset($id)) show_404();
        
        if ($this->user_model->hapus_user($id)) {
            redirect(site_url('admin/user'));
        }
    }

}
