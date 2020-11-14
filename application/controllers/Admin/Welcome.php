<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
        $this->load->model("admin_model"); $this->admin_model->sessionku();
	}

	public function index()
	{
		$data = array (
            'content'   => 'admin/main.php'
        );
		$this->load->view('admin/index', $data);
	}

	public function logout() {
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }
}
