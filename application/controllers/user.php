<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->load->library("form_validation");
    $this->load->helper('url');
    $this->load->model("user_model");


  }

	public function index()
	{
		$admin['title'] = 'Data User';
		$admin['user'] = $this->db->get_where('user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$data['user'] = $this->user_model->getAllUser();

		$this->load->view('admin/header_admin', $admin);
		$this->load->view('admin/side_bar_admin', $admin);
		$this->load->view('admin/top_bar_admin', $admin);

		$this->load->view('user/index', $data);

		$this->load->view('admin/footer_admin', $admin);
	}


  public function tambah()
  {
    $admin['title'] = 'Tambah Data User';
    $data['user'] = $this->user_model->getAllRole();
    //var_dump($data);

    $this->form_validation->set_rules('name','name','required|trim');
    $this->form_validation->set_rules('email','email','required|trim|valid_email|is_unique[user.email]',

    [

      'is_unique' => 'email ini sudah pernah registrasi !'

    ]);

    $this->form_validation->set_rules('password1','Password','required|trim|matches[password2]',
      [

      'matches' => 'Password tidak sama !',


    ]);

    $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');


    if ($this->form_validation->run()==FALSE)
      {

        $data['title'] = 'LKP Anissa Gorden Palu Tambah';

        $this->load->view('admin/header_admin',$admin);
    		$this->load->view('admin/side_bar_admin',$admin);
    		$this->load->view('admin/top_bar_admin',$admin);

        $this->load->view('user/tambah.php', $data);

        $this->load->view('admin/footer_admin');


      } else {
        $data = [

          'name' => $this->input->post('name'),
          'email' => $this->input->post('email'),
          'password' =>password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
          'role_id' => $this->input->post('role_id'),
          'is_active' => $this->input->post('is_active'),
          'date_create' => time()

        ];

        $this->db->insert('user', $data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Selamat registrasi anda berhasil ! anda berhasil membuat account . dan silahkan login</div>');
        redirect('user');
    }
  }


    public function ubah($id)
    {
    $admin['title'] = 'Ubah Data User';
    //$admin['user'] = $this->db->get_where('user', ['email' =>
    //$this->session->userdata('email')])->row_array();

    $data['user'] = $this->user_model->getUserById($id);
    //$data['user'] = $this->user_model->getAllRole();

    //$data['user'] = $user[0];
    //var_dump($data);

    if($this->form_validation->run() == FALSE) {

      $this->load->view('admin/header_admin', $admin);
      $this->load->view('admin/side_bar_admin', $admin);
      $this->load->view('admin/top_bar_admin', $admin);

      $this->load->view('user/ubah', $data);

      $this->load->view('admin/footer_admin', $admin);

  } else {
    $this->user_model->ubahDataUser();
    $this->session->set_flashdata('ubah','telah di ubah');
    redirect('user');
  }
}

public function ubah_aksi()
{
$admin['title'] = 'Ubah Data User';


$this->user_model->ubahDataUser();
$this->session->set_flashdata('ubah','telah di ubah');
redirect('user');
}


public function hapus($id)
  {

  $this->user_model->hapusDataUser($id);
  $this->session->set_flashdata('hapus','telah di hapus');
  redirect('user');

}




}
