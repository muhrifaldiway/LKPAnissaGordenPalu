<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peserta extends CI_Controller {


	public function index()
	{
		$admin['title'] = 'Admin';
		//$admin['user'] = $this->db->get_where('user', ['email' =>
		//$this->session->userdata('email')])->row_array();

		//$data['pasien'] = $this->Pasien_model->getAllPasien();

		$this->load->view('admin/header_admin', $admin);
		$this->load->view('admin/side_bar_admin', $admin);
		$this->load->view('admin/top_bar_admin', $admin);

		$this->load->view('data_peserta/index');

		$this->load->view('admin/footer_admin', $admin);
	}


}
