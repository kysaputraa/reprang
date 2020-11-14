<?php

class Admin_model extends CI_Model {

	function cek(){	
		$user=$this->input->post('username');
		$pass=$this->input->post('password');
		$hsl=$this->db->query("SELECT * from user where username='$user' and password='$pass' and role ='superadmin'");
		return $hsl;
	}

	function sessionku (){
			$berhasil	= $this->session->userdata('username');
			$role 		= $this->session->userdata('role');
			if (!isset($berhasil) || $berhasil !=true || $role != 'superadmin' ){
				redirect(base_url('admin/login'));
			}
	}

}