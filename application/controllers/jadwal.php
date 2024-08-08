<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jadwal extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->library("form_validation");
    $this->load->helper('url');
    $this->load->model("usaha_model");

  }

	public function index()
	{
		$admin['title'] = 'Jadwal Pembelajaran LKP Anissa Gorden Palu';
		//$admin['user'] = $this->db->get_where('user', ['email' =>
		//$this->session->userdata('email')])->row_array();

		//$data['usaha'] = $this->usaha_model->getAllUsaha();

		$this->load->view('admin/header_admin', $admin);
		$this->load->view('admin/side_bar_admin', $admin);
		$this->load->view('admin/top_bar_admin', $admin);

		$this->load->view('jadwal/index');

		$this->load->view('admin/footer_admin', $admin);
	}






}
