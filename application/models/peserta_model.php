<?php

class peserta_model extends CI_Model {

	public function getAllPeserta()
	{

			return $this->db->get('data_peserta')->result_array();
	}


	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function tambahDataPeserta()
	{
		$data = [

			"id_peserta" => $this->input->post('id_peserta', true),
			"nama" => $this->input->post('nama', true),
			"no_identitas" => $this->input->post('no_identitas', true),
			"alamat" => $this->input->post('alamat'),
			"status_sekolah" => $this->input->post('status_sekolah', true),
      "status_pekerjaan" => $this->input->post('status_sekolah', true),
      "foto" => $this->input->post('foto', true),
      "ijazah" => $this->input->post('ijazah', true),
      "telepon" => $this->input->post('telepon', true),
      "usia" => $this->input->post('usia', true),
      "tanggal" => $this->input->post('tanggal', true),

		];

		$this->db->insert('data_peserta', $data);

	}

	public function hapusDataPendaftar($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('data_pendaftaran');
	}

	public function getPendaftarById($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('data_pendaftaran')->result_array();

	}

	public function ubahDataPendaftar()
	{
		$data = [

      "id" => $this->input->post('id', true),
      "nama" => $this->input->post('nama', true),
      "no_identitas" => $this->input->post('no_identitas', true),
      "alamat" => $this->input->post('alamat'),
      "status_sekolah" => $this->input->post('status_sekolah', true),
      "status_pekerjaan" => $this->input->post('status_pekerjaan', true),
      "foto" => $this->input->post('foto', true),
      "ijazah" => $this->input->post('ijazah', true),
      "usia" => $this->input->post('usia', true),
      "tanggal" => $this->input->post('tanggal', true),

		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('data_pendaftaran', $data);

	}
}
