<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("profile_model");
        $this->load->model("users_model");
        $this->users_model->sessionku();
    }

	public function index()
	{

		$data = array (
            'content'   => 'profile.php',
            'isi'       => 'view',
            'profile'   => $this->profile_model->my_profile()
        );
		$this->load->view('index', $data);
	}

}
