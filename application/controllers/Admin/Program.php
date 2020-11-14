<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("program_model");
        $this->load->model("admin_model");$this->admin_model->sessionku();
    }

	public function index()
	{

		$data = array (
            'content'   => 'admin/program.php',
            'isi'       => 'list_program',
            'program'   => $this->program_model->list_program()
        );
		$this->load->view('admin/index', $data);
	}

    public function tambah()
    {
        if ($this->input->post('btn')) {
            $this->program_model->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/program'));
        }

        $data = array (
            'content'   => 'admin/program.php',
            'isi'       => 'tambah'
        );
        $this->load->view('admin/index', $data);
    }

    public function edit ($id) {
        if ($this->input->post('btn')) {
            $this->program_model->edit_program($id);
            $this->session->set_flashdata('success', 'program Berhasil di update');
            redirect(site_url('admin/program'));    
        }

        $data = array (
            'content'   => 'admin/program.php',
            'data'      => $this->program_model->get_program($id),
            'isi'       => 'edit'
        );

        $this->load->view("admin/index", $data);
    }

    public function hapus ($id) {
        if (!isset($id)) show_404();
        
        if ($this->program_model->hapus_program($id)) {
            redirect(site_url('admin/program'));
        }
    }

}
