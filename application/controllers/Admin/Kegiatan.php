<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("kegiatan_model");
        $this->load->model("admin_model");$this->admin_model->sessionku();
    }

	public function index()
	{

		$data = array (
            'content'   => 'admin/kegiatan.php',
            'isi'       => 'list_kegiatan',
            'kegiatan'   => $this->kegiatan_model->list_kegiatan()
        );
		$this->load->view('admin/index', $data);
	}

    public function tambah()
    {
        if ($this->input->post('btn')) {
            $this->kegiatan_model->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/kegiatan'));
        }

        $data = array (
            'content'   => 'admin/kegiatan.php',
            'isi'       => 'tambah'
        );
        $this->load->view('admin/index', $data);
    }

    public function edit ($id) {
        if ($this->input->post('btn')) {
            $this->kegiatan_model->edit_kegiatan($id);
            $this->session->set_flashdata('success', 'kegiatan Berhasil di update');
            redirect(site_url('admin/kegiatan'));    
        }

        $data = array (
            'content'   => 'admin/kegiatan.php',
            'data'      => $this->kegiatan_model->get_kegiatan($id),
            'isi'       => 'edit'
        );

        $this->load->view("admin/index", $data);
    }

    public function hapus ($id) {
        if (!isset($id)) show_404();
        
        if ($this->kegiatan_model->hapus_kegiatan($id)) {
            redirect(site_url('admin/kegiatan'));
        }
    }

}
