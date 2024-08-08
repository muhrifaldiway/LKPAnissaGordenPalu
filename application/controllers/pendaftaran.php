<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftaran extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->library("form_validation");
    $this->load->helper('url');
    $this->load->model("pendaftar_model");
    //$this->load->model("peserta_model");
  }

	public function index()
	{
		$admin['title'] = 'Data Pendaftaran';
		//$admin['user'] = $this->db->get_where('user', ['email' =>
		//$this->session->userdata('email')])->row_array();

		$data['pendaftar'] = $this->pendaftar_model->getAllPendaftar();

		$this->load->view('admin/header_admin', $admin);
		$this->load->view('admin/side_bar_admin', $admin);
		$this->load->view('admin/top_bar_admin', $admin);

		$this->load->view('data_pendaftar/index', $data);

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
		$this->load->view('admin/side_bar_admin', $admin);
		$this->load->view('admin/top_bar_admin', $admin);

		$this->load->view('data_pendaftar/tambah', $data);

		$this->load->view('admin/footer_admin', $admin);

  } else {
  $this->pendaftar_model->tambahDataPendaftar();
  $this->session->set_flashdata('flash','telah di tambahkan');
  redirect('pendaftaran');
  }

  }

  public function detail($id)
  {
    $admin['title'] = 'Detail Data Pendaftaran';
    //$admin['user'] = $this->db->get_where('user', ['email' =>
    //$this->session->userdata('email')])->row_array();

    $data['pendaftar'] = $this->pendaftar_model->getPendaftarById($id);

          $this->load->view('admin/header_admin', $admin);
          $this->load->view('admin/side_bar_admin', $admin);
          $this->load->view('admin/top_bar_admin', $admin);

          $this->load->view('data_pendaftar/detail', $data);

          $this->load->view('admin/footer_admin', $admin);
}

  public function ubah($id)
  {
  $admin['title'] = 'Ubah Data Pendaftaran';
  //$admin['user'] = $this->db->get_where('user', ['email' =>
  //$this->session->userdata('email')])->row_array();

  $data['pendaftar'] = $this->pendaftar_model->getPendaftarById($id);
  //$data['pendaftar'] = $pendaftar[0];

  //$this->load->library("form_validation");

  //var_dump($data);

  $this->form_validation->set_rules('nama','nama','required');
  $this->form_validation->set_rules('no_identitas','no_identitas','required');
  $this->form_validation->set_rules('alamat','alamat','required');
  $this->form_validation->set_rules('status_sekolah','status_sekolah','required');
  $this->form_validation->set_rules('status_pekerjaan','status_pekerjaan','required');
  //$this->form_validation->set_rules('foto','foto','required');
  //$this->form_validation->set_rules('ijazah','ijazah','required');
  $this->form_validation->set_rules('telepon','telepon','required');
  $this->form_validation->set_rules('usia','usia','required');
  //$this->form_validation->set_rules('tanggal','tanggal','required');
  //$this->form_validation->set_rules('status','status','required');

  if($this->form_validation->run() == FALSE) {

    $this->load->view('admin/header_admin', $admin);
    $this->load->view('admin/side_bar_admin', $admin);
    $this->load->view('admin/top_bar_admin', $admin);

    $this->load->view('data_pendaftar/ubah', $data);

    $this->load->view('admin/footer_admin', $admin);

} else {
  $this->pendaftar_model->ubahDataPendaftar();
  $this->session->set_flashdata('ubah','telah di ubah');
  redirect('pendaftaran');
}

}

public function hapus($id)
  {

  $this->pendaftar_model->hapusDataPendaftar($id);
  $this->session->set_flashdata('hapus','telah di hapus');
  redirect('pendaftaran');

}
/*
function update(){

	$id_pendaftar = $this->input->post('id_pendaftar');
	$nama = $this->input->post('nama');
	$no_identitas = $this->input->post('no_identitas');
	$alamat = $this->input->post('alamat');
  $status_sekolah = $this->input->post('status_sekolah');
  $status_pekerjaan = $this->input->post('status_pekerjaan');
  $foto = $this->input->post('foto');
  $ijazah = $this->input->post('ijazah');
	$telepon = $this->input->post('telepon');
	$usia = $this->input->post('usia');
  $tanggal = $this->input->post('tanggal');
  $status = $this->input->post('status');
  $keterangan = $this->input->post('keterangan');


	$data = array(
		'nama' => $nama,
		'no_identitas' => $no_identitas,
		'alamat' => $alamat,
    'status_sekolah' => $status_sekolah,
		'status_pekerjaan' => $status_pekerjaan,
		'foto' => $foto,
    'ijazah' => $ijazah,
		'usia' => $usia,
		'tanggal' => $tanggal,
    'status' => $status,
    'keterangan' => $keterangan,

	);

	$where = array(
		'id_pendaftar' => $id_pendaftar
	);

	$this->pendaftar_model->update_data($where,$data,'data_pendaftaran');
  $this->session->set_flashdata('ubah','telah di ubah');
	redirect('pendaftaran');
}*/




}
