<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		//is_logged_in();
    $this->load->library("form_validation");
    $this->load->helper('url');
    $this->load->model("pendaftar_model");
    $this->load->model("usaha_model");


	}

	public function index()
	{
		$admin['title'] = 'Daftar LKP Anissa Gorden Palu';
		//$admin['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['pendaftar'] = $this->pendaftar_model->getAllPendaftar();

		$this->load->view('admin/header_admin', $admin);
		$this->load->view('daftar/side_bar_admin', $admin);
		$this->load->view('admin/top_bar_admin', $admin);

		$this->load->view('daftar/index',$data);

		$this->load->view('admin/footer_admin', $admin);
	}

  public function tambah()
  {
  $admin['title'] = 'Tambah Data Pendaftaran';

  $data['pendaftar'] = $this->pendaftar_model->getAllPendaftar();

//  $admin['user'] = $this->db->get_where('user', ['email' =>
//  $this->session->userdata('email')])->row_array();

  $this->form_validation->set_rules('nama','nama','required');
  $this->form_validation->set_rules('no_identitas','no_identitas','required');
  $this->form_validation->set_rules('alamat','alamat','required');
  $this->form_validation->set_rules('status_sekolah','status_sekolah','required');
  $this->form_validation->set_rules('status_pekerjaan','status_pekerjaan','required');
  $this->form_validation->set_rules('foto','foto','required');
  $this->form_validation->set_rules('ijazah','ijazah','required');
  $this->form_validation->set_rules('telepon','telepon','required');
  $this->form_validation->set_rules('usia','usia','required');
  $this->form_validation->set_rules('tanggal','tanggal','required');

  if($this->form_validation->run() == FALSE) {

    $this->load->view('admin/header_admin', $admin);
    $this->load->view('daftar/side_bar_admin', $admin);
    $this->load->view('admin/top_bar_admin', $admin);

    $this->load->view('daftar/index', $data);

    $this->load->view('admin/footer_admin', $admin);

  } else {
  $this->pendaftar_model->tambahDataPendaftar();
  $this->session->set_flashdata('flash','telah di tambahkan');
  redirect('daftar/data_pendaftar');
  }

  }

  public function data_pendaftar()
  {
    $admin['title'] = 'Data Pendaftar LKP Anissa Gorden Palu';
    //$admin['user'] = $this->db->get_where('user', ['email' =>
    //$this->session->userdata('email')])->row_array();

    $data['pendaftar'] = $this->pendaftar_model->getAllPendaftar();

    $this->load->view('admin/header_admin', $admin);
    $this->load->view('daftar/side_bar_admin', $admin);
    $this->load->view('admin/top_bar_admin', $admin);

    $this->load->view('daftar/data_pendaftar',$data);

    $this->load->view('admin/footer_admin', $admin);
  }

  public function data_usaha()
  {
    $admin['title'] = 'Data Pendaftar LKP Anissa Gorden Palu';
    //$admin['user'] = $this->db->get_where('user', ['email' =>
    //$this->session->userdata('email')])->row_array();

    $data['usaha'] = $this->usaha_model->getAllUsaha();

    $this->load->view('admin/header_admin', $admin);
    $this->load->view('daftar/side_bar_admin', $admin);
    $this->load->view('admin/top_bar_admin', $admin);

    $this->load->view('daftar/data_usaha',$data);

    $this->load->view('admin/footer_admin', $admin);
  }

  public function tambah_usaha()
  {
  $admin['title'] = 'Tambah Data Usaha';

  $data['usaha'] = $this->usaha_model->getAllUsaha();

//  $admin['user'] = $this->db->get_where('user', ['email' =>
//  $this->session->userdata('email')])->row_array();

  $this->form_validation->set_rules('nama','nama','required');
  $this->form_validation->set_rules('alamat','alamat','required');
  $this->form_validation->set_rules('nama_anggota','nama_anggota','required');
  $this->form_validation->set_rules('tanggal','tanggal','required');
  $this->form_validation->set_rules('omset','omset','required');
  $this->form_validation->set_rules('foto','foto','required');

  if($this->form_validation->run() == FALSE) {

    $this->load->view('admin/header_admin', $admin);
		$this->load->view('daftar/side_bar_admin', $admin);
		$this->load->view('admin/top_bar_admin', $admin);

		$this->load->view('daftar/tambah_usaha', $data);

		$this->load->view('admin/footer_admin', $admin);

  } else {
  $this->usaha_model->tambahDataUsaha();
  $this->session->set_flashdata('flash','telah di tambahkan');
  redirect('daftar/data_usaha');
  }

  }



  public function jadwal()
	{
		$admin['title'] = 'Jadwal';
		//$admin['user'] = $this->db->get_where('user', ['email' =>
		//$this->session->userdata('email')])->row_array();

		//$data['pasien'] = $this->Pasien_model->getAllPasien();

		$this->load->view('admin/header_admin', $admin);
		$this->load->view('daftar/side_bar_admin', $admin);
		$this->load->view('admin/top_bar_admin', $admin);

		$this->load->view('jadwal/index');

		$this->load->view('admin/footer_admin', $admin);
	}


}
