<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class periode extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("periode_model");
        $this->load->model("admin_model");$this->admin_model->sessionku();
    }

	public function index()
	{

		$data = array (
            'content'   => 'admin/periode.php',
            'isi'       => 'list_periode',
            'periode'    	=> $this->periode_model->list_periode()
        );
		$this->load->view('admin/index', $data);
	}

    public function tambah()
    {
        if ($this->input->post('btn')) {
            $this->periode_model->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/periode'));
        }

        $data = array (
            'content'   => 'admin/periode.php',
            'isi'       => 'tambah'
        );
        $this->load->view('admin/index', $data);
    }

    public function edit ($id) {
        if ($this->input->post('btn')) {
            $this->periode_model->edit_periode($id);
            $this->session->set_flashdata('success', 'periode Berhasil di update');
            redirect(site_url('admin/periode'));    
        }

        $data = array (
            'content'   => 'admin/periode.php',
            'data'      => $this->periode_model->get_periode($id),
            'isi'       => 'edit'
        );

        $this->load->view("admin/index", $data);
    }

    public function hapus ($id) {
        if (!isset($id)) show_404();
        
        if ($this->periode_model->hapus_periode($id)) {
            redirect(site_url('admin/periode'));
        }
    }

}
