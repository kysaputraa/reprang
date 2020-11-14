<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programkerja extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("programkerja_model");
        $this->load->model("users_model"); 
        $this->users_model->sessionku();
    }

	public function index()
	{

		$data = array (
            'content'   => 'programkerja.php',
            'isi'       => 'list_programkerja',
            'programkerja'   => $this->programkerja_model->list_myprogramkerja()
        );
		$this->load->view('index', $data);
	}

    public function tambah()
    {
        if ($this->input->post('btn')) {
            $this->programkerja_model->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('programkerja'));
        }

        $data = array (
            'content'   => 'programkerja.php',
            'isi'       => 'tambah'
        );
        $this->load->view('index', $data);
    }

    public function edit ($id) {
        if ($this->input->post('btn')) {
            $this->programkerja_model->edit_programkerja($id);
            $this->session->set_flashdata('success', 'programkerja Berhasil di update');
            redirect(site_url('programkerja'));    
        }

        $data = array (
            'content'   => 'programkerja.php',
            'data'      => $this->programkerja_model->get_programkerja($id),
            'isi'       => 'edit'
        );

        $this->load->view("index", $data);
    }

    public function Pending()
    {

        $data = array (
            'content'       => 'programkerja.php',
            'isi'           => 'list_unprogramkerja',
            'programkerja'  => $this->programkerja_model->list_myunprogramkerja()
        );
        $this->load->view('index', $data);
    }

    public function hapus ($id) {
        if (!isset($id)) show_404();
        
        if ($this->programkerja_model->hapus_programkerja($id)) {
            redirect(site_url('programkerja'));
        }
    }

    public function fetch() {
        $this->load->view('fetch');
    }

}
