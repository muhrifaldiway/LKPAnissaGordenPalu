<?php

class pendaftar_model extends CI_Model {

	public function getAllPendaftar()
	{

			return $this->db->get('data_pendaftaran')->result_array();


	}

	public function tambahDataPendaftar()
	{
		$data = [

			"nama" => $this->input->post('nama', true),
			"no_identitas" => $this->input->post('no_identitas', true),
			"alamat" => $this->input->post('alamat'),
			"status_sekolah" => $this->input->post('status_sekolah', true),
      "status_pekerjaan" => $this->input->post('status_pekerjaan', true),
      "foto" => $this->input->post('foto', true),
      "ijazah" => $this->input->post('ijazah', true),
      "telepon" => $this->input->post('telepon', true),
      "usia" => $this->input->post('usia', true),
      "tanggal" => $this->input->post('tanggal', true),
			"status" => $this->input->post('status', true),
			"keterangan" => $this->input->post('keterangan', true),

		];

		$this->db->insert('data_pendaftaran', $data);

	}

	public function hapusDataPendaftar($id)
	{
		$this->db->where('id_pendaftar',$id);
		$this->db->delete('data_pendaftaran');
	}

	public function getPendaftarById($id)
	{
		return $this->db->get_where('data_pendaftaran', ['id_pendaftar' => $id])->row_array();

	}

	public function ubahDataPendaftar()
	{
		$data = [

			"nama" => $this->input->post('nama', true),
			"no_identitas" => $this->input->post('no_identitas', true),
			"alamat" => $this->input->post('alamat'),
			"status_sekolah" => $this->input->post('status_sekolah', true),
      "status_pekerjaan" => $this->input->post('status_pekerjaan', true),
      "foto" => $this->input->post('foto', true),
      "ijazah" => $this->input->post('ijazah', true),
      "telepon" => $this->input->post('telepon', true),
      "usia" => $this->input->post('usia', true),
      "tanggal" => $this->input->post('tanggal', true),
			"status" => $this->input->post('status', true),
			"keterangan" => $this->input->post('keterangan', true),


		];

		$this->db->where('id_pendaftar', $this->input->post('id_pendaftar'));
		$this->db->update('data_pendaftaran', $data);


	}

	public function ubah_model_data($id)
	 {
		 $data = [

 			"id_pendaftar" => $this->input->post('id_pendaftar', true),
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
 			"status" => $this->input->post('status', true),

 		];

			 $this->db->where('data_pendaftar.id_pendaftar', $id);
			 $this->db->update('data_pendaftar', $data);
	 }

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


	function jumlah_pendaftar(){

		$query = $this->db->get('data_pendaftaran');
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
