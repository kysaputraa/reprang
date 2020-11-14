<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("bidang_model");
        $this->load->model("admin_model");$this->admin_model->sessionku();
    }

	public function index()
	{

		$data = array (
            'content'   => 'admin/bidang.php',
            'isi'       => 'list_bidang',
            'bidang'   => $this->bidang_model->list_bidang()
        );
		$this->load->view('admin/index', $data);
	}

    public function tambah()
    {
        if ($this->input->post('btn')) {
            $this->bidang_model->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/bidang'));
        }

        $data = array (
            'content'   => 'admin/bidang.php',
            'isi'       => 'tambah'
        );
        $this->load->view('admin/index', $data);
    }

    public function edit ($id) {
        if ($this->input->post('btn')) {
            $this->bidang_model->edit_bidang($id);
            $this->session->set_flashdata('success', 'bidang Berhasil di update');
            redirect(site_url('admin/bidang'));    
        }

        $data = array (
            'content'   => 'admin/bidang.php',
            'data'      => $this->bidang_model->get_bidang($id),
            'isi'       => 'edit'
        );

        $this->load->view("admin/index", $data);
    }

    public function hapus ($id) {
        if (!isset($id)) show_404();
        
        if ($this->bidang_model->hapus_bidang($id)) {
            redirect(site_url('admin/bidang'));
        }
    }

}
