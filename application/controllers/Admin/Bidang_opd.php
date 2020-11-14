<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang_opd extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("bidang_opd_model");
        $this->load->model("admin_model");$this->admin_model->sessionku();
    }

	public function index()
	{

		$data = array (
            'content'   => 'admin/bidang_opd.php',
            'isi'       => 'list_bidang_opd',
            'bidang_opd'   => $this->bidang_opd_model->list_bidang_opd()
        );
		$this->load->view('admin/index', $data);
	}

    public function tambah()
    {
        if ($this->input->post('btn')) {
            $this->bidang_opd_model->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/bidang_opd'));
        }

        $data = array (
            'content'   => 'admin/bidang_opd.php',
            'isi'       => 'tambah'
        );
        $this->load->view('admin/index', $data);
    }

    public function edit ($id) {
        if ($this->input->post('btn')) {
            $this->bidang_opd_model->edit_bidang_opd($id);
            $this->session->set_flashdata('success', 'bidang_opd Berhasil di update');
            redirect(site_url('admin/bidang_opd'));    
        }

        $data = array (
            'content'   => 'admin/bidang_opd.php',
            'data'      => $this->bidang_opd_model->get_bidang_opd($id),
            'isi'       => 'edit'
        );

        $this->load->view("admin/index", $data);
    }

    public function hapus ($id) {
        if (!isset($id)) show_404();
        
        if ($this->bidang_opd_model->hapus_bidang_opd($id)) {
            redirect(site_url('admin/bidang_opd'));
        }
    }

}
