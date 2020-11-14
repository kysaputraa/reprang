<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lap_mat extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
        $this->load->model("admin_model"); 
        $this->admin_model->sessionku();
	}

	public function laporan($id)
	{
		// $this->load->library('dompdf_gen');
		$id   = $this->uri->segment(4);
		$data = array (
            'isi'	=> $id
        );
		$this->load->view('admin/lap_mat', $data);

		// $html = $this->output->get_output();
		// $this->dompdf->set_paper('a4', 'landscape');
		// $this->dompdf->load_html($html);
		// $this->dompdf->render();
		// $this->dompdf->stream("tes.pdf" ,array('Attachment' =>0));
	}
}