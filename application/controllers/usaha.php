<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usaha extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->library("form_validation");
    $this->load->helper('url');
    $this->load->model("usaha_model");

  }

	public function index()
	{
		$admin['title'] = 'Data Usaha';
		//$admin['user'] = $this->db->get_where('user', ['email' =>
		//$this->session->userdata('email')])->row_array();

		$data['usaha'] = $this->usaha_model->getAllUsaha();

		$this->load->view('admin/header_admin', $admin);
		$this->load->view('admin/side_bar_admin', $admin);
		$this->load->view('admin/top_bar_admin', $admin);

		$this->load->view('usaha/index', $data);

		$this->load->view('admin/footer_admin', $admin);
	}


  public function tambah()
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
		$this->load->view('admin/side_bar_admin', $admin);
		$this->load->view('admin/top_bar_admin', $admin);

		$this->load->view('usaha/tambah', $data);

		$this->load->view('admin/footer_admin', $admin);

  } else {
  $this->usaha_model->tambahDataUsaha();
  $this->session->set_flashdata('flash','telah di tambahkan');
  redirect('usaha');
  }

  }

  public function detail($id)
  {
    $admin['title'] = 'Detail Data Usaha';
    //$admin['user'] = $this->db->get_where('user', ['email' =>
    //$this->session->userdata('email')])->row_array();

    $data['usaha'] = $this->usaha_model->getUsahaById($id);

          $this->load->view('admin/header_admin', $admin);
          $this->load->view('admin/side_bar_admin', $admin);
          $this->load->view('admin/top_bar_admin', $admin);

          $this->load->view('usaha/detail', $data);

          $this->load->view('admin/footer_admin', $admin);
}

  public function ubah($id)
  {
  $admin['title'] = 'Ubah Data Usaha';
  //$admin['user'] = $this->db->get_where('user', ['email' =>
  //$this->session->userdata('email')])->row_array();

  $data['usaha'] = $this->usaha_model->getUsahaById($id);
  //$data['pendaftar'] = $pendaftar[0];

  //$this->load->library("form_validation");

  //var_dump($data);

  $this->form_validation->set_rules('nama','nama','required');
  $this->form_validation->set_rules('alamat','alamat','required');
  $this->form_validation->set_rules('nama_anggota','nama_anggota','required');
  $this->form_validation->set_rules('tanggal','tanggal','required');
  $this->form_validation->set_rules('omset','omset','required');
  //$this->form_validation->set_rules('foto','foto','required');

  if($this->form_validation->run() == FALSE) {

    $this->load->view('admin/header_admin', $admin);
    $this->load->view('admin/side_bar_admin', $admin);
    $this->load->view('admin/top_bar_admin', $admin);

    $this->load->view('usaha/ubah', $data);

    $this->load->view('admin/footer_admin', $admin);

} else {

  $this->usaha_model->ubahDataUsaha($id);
  $this->session->set_flashdata('ubah','telah di ubah');
  redirect('usaha');
}

}


public function hapus($id)
  {

  $this->usaha_model->hapusDataUsaha($id);
  $this->session->set_flashdata('hapus','telah di hapus');
  redirect('usaha');

}




}
