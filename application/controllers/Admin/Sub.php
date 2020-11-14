<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("sub_model");
        $this->load->model("admin_model");$this->admin_model->sessionku();
    }

	public function index()
	{

		$data = array (
            'content'   => 'admin/sub.php',
            'isi'       => 'list_sub',
            'sub'   => $this->sub_model->list_sub()
        );
		$this->load->view('admin/index', $data);
	}

    public function tambah()
    {
        if ($this->input->post('btn')) {
            $this->sub_model->simpan();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('admin/sub'));
        }

        $data = array (
            'content'   => 'admin/sub.php',
            'isi'       => 'tambah'
        );
        $this->load->view('admin/index', $data);
    }

    public function edit ($id) {
        if ($this->input->post('btn')) {
            $this->sub_model->edit_sub($id);
            $this->session->set_flashdata('success', 'sub Berhasil di update');
            redirect(site_url('admin/sub'));    
        }

        $data = array (
            'content'   => 'admin/sub.php',
            'data'      => $this->sub_model->get_sub($id),
            'isi'       => 'edit'
        );

        $this->load->view("admin/index", $data);
    }

    public function hapus ($id) {
        if (!isset($id)) show_404();
        
        if ($this->sub_model->hapus_sub($id)) {
            redirect(site_url('admin/sub'));
        }
    }

}
