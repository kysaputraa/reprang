<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Targetkegiatan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("targetkegiatan_model");
        $this->load->model("users_model"); 
        $this->users_model->sessionku();
    }

	public function index()
	{

		$data = array (
            'content'   => 'targetkegiatan.php',
            'isi'       => 'list_targetkegiatan',
            'targetkegiatan'   => $this->targetkegiatan_model->list_mytargetkegiatan()
        );
		$this->load->view('index', $data);
	}

    public function tambah()
    {
        if ($this->input->post('btn')) {
            $this->targetkegiatan_model->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('targetkegiatan'));
        }

        $data = array (
            'content'   => 'targetkegiatan.php',
            'isi'       => 'tambah'
        );
        $this->load->view('index', $data);
    }

    public function edit ($id) {
        if ($this->input->post('btn')) {
            $this->targetkegiatan_model->edit_targetkegiatan($id);
            $this->session->set_flashdata('success', 'targetkegiatan Berhasil di update');
            redirect(site_url('targetkegiatan'));    
        }

        $data = array (
            'content'   => 'targetkegiatan.php',
            'data'      => $this->targetkegiatan_model->get_targetkegiatan($id),
            'isi'       => 'edit'
        );

        $this->load->view("index", $data);
    }

    public function hapus ($id) {
        if (!isset($id)) show_404();
        
        if ($this->targetkegiatan_model->hapus_targetkegiatan($id)) {
            redirect(site_url('targetkegiatan'));
        }
    }

}
