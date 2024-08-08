<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model("user_model");
		$this->load->model("pendaftar_model");
		$this->load->model("usaha_model");
		//is_logged_in();

	}

	public function index()
	{
		$admin['title'] = 'Admin';
		//$admin['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['user'] = $this->user_model->jumlah_user();
		$data['pendaftar'] = $this->pendaftar_model->jumlah_pendaftar();
		$data['usaha'] = $this->usaha_model->jumlah_usaha();

		$this->load->view('admin/header_admin', $admin);
		$this->load->view('admin/side_bar_admin', $admin);
		$this->load->view('admin/top_bar_admin', $admin);

		$this->load->view('admin/index', $data);

		$this->load->view('admin/footer_admin', $admin);
	}


}
