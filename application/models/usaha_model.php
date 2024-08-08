<?php

class usaha_model extends CI_Model {

	public function getAllUsaha()
	{

			return $this->db->get('data_usaha')->result_array();


	}

	public function tambahDataUsaha()
	{
		$data = [

			"nama" => $this->input->post('nama', true),
      "alamat" => $this->input->post('alamat'),
			"nama_anggota" => $this->input->post('nama_anggota', true),
      "tanggal" => $this->input->post('tanggal', true),
			"omset" => $this->input->post('omset', true),
      "foto" => $this->input->post('foto', true),


		];

		$this->db->insert('data_usaha', $data);

	}

	public function hapusDataUsaha($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('data_usaha');
	}

	public function getUsahaById($id)
	{
		return $this->db->get_where('data_usaha', ['id' => $id])->row_array();

	}

	public function ubahDataUsaha($id)
	{
		$data = [
			//"id" => $this->input->post('id', true),
      "nama" => $this->input->post('nama', true),
      "alamat" => $this->input->post('alamat'),
			"nama_anggota" => $this->input->post('nama_anggota', true),
      "tanggal" => $this->input->post('tanggal', true),
			"omset" => $this->input->post('omset', true),
      "foto" => $this->input->post('foto', true),


		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('data_usaha', $data);


	}

	function jumlah_usaha(){

		$query = $this->db->get('data_usaha');
    if($query->num_rows()>0)
    {
      return $query->num_rows();
    }
    else
    {
      return 0;
    }


}




}
