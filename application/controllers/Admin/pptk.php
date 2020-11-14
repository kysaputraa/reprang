<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pptk extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("pptk_model");
        $this->load->model("admin_model");$this->admin_model->sessionku();
    }

	public function index()
	{

		$data = array (
            'content'   => 'admin/pptk.php',
            'isi'       => 'list_pptk',
            'pptk'    	=> $this->pptk_model->list_pptk()
        );
		$this->load->view('admin/index', $data);
	}

    public function tambah()
    {
        if ($this->input->post('btn')) {
            $this->pptk_model->simpan();
            $this->session->set_flashdata('msg', 'sukses');
            redirect(site_url('admin/pptk'));
        }

        $data = array (
            'content'   => 'admin/pptk.php',
            'isi'       => 'tambah'
        );
        $this->load->view('admin/index', $data);
    }

    public function edit ($id) {
        if ($this->input->post('btn')) {
            $this->pptk_model->edit_pptk($id);
            $this->session->set_flashdata('success', 'PPTK Berhasil di update');
            redirect(site_url('admin/pptk'));    
        }

        $data = array (
            'content'   => 'admin/pptk.php',
            'data'      => $this->pptk_model->get_pptk($id),
            'isi'       => 'edit'
        );

        $this->load->view("admin/index", $data);
    }

    public function hapus ($id) {
        if (!isset($id)) show_404();
        
        if ($this->pptk_model->hapus_pptk($id)) {
            redirect(site_url('admin/pptk'));
        }
    }

}
