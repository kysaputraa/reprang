<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urusan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("urusan_model");
        $this->load->model("admin_model");$this->admin_model->sessionku();
    }

	public function index()
	{

		$data = array (
            'content'   => 'admin/urusan.php',
            'isi'       => 'list_urusan',
            'urusan'   => $this->urusan_model->list_urusan()
        );
		$this->load->view('admin/index', $data);
	}

    public function tambah()
    {
        if ($this->input->post('btn')) {
            $this->urusan_model->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/urusan'));
        }

        $data = array (
            'content'   => 'admin/urusan.php',
            'isi'       => 'tambah'
        );
        $this->load->view('admin/index', $data);
    }

    public function edit ($id) {
        if ($this->input->post('btn')) {
            $this->urusan_model->edit_urusan($id);
            $this->session->set_flashdata('success', 'urusan Berhasil di update');
            redirect(site_url('admin/urusan'));    
        }

        $data = array (
            'content'   => 'admin/urusan.php',
            'data'      => $this->urusan_model->get_urusan($id),
            'isi'       => 'edit'
        );

        $this->load->view("admin/index", $data);
    }

    public function hapus ($id) {
        if (!isset($id)) show_404();
        
        if ($this->urusan_model->hapus_urusan($id)) {
            redirect(site_url('admin/urusan'));
        }
    }

}
