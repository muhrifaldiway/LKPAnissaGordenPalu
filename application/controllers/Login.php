<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->library('form_validation');


    }

    public function index()
    {

      $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');

      $this->form_validation->set_rules('password', 'password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
        $data['title'] = 'LKP Anissa Gorden Palu Login';
        $this->load->view('templates/auth/auth_header',$data);
          $this->load->view('Login/Login.php', $data);
        $this->load->view('templates/auth/auth_footer');
        } else {
      		//validasi lolos
      		$this->_login();
      	}
      }

        private function _login()
        {
        	$email = $this->input->post('email');
        	$password = $this->input->post('password');

        	$user = $this->db->get_where('user',['email' => $email])->row_array();


        	//jika user ada

        	if($user) {

        		//jika user aktif

        		if($user['is_active'] == 1){

        			//cek passsword

        			if(password_verify($password, $user['password'])) {

        				$data = [

        					'email' => $user['email'],
        					'role_id' => $user['role_id']
        				];

        				$this->session->set_userdata($data);
        				if ($user['role_id'] == 1) {
        					redirect('daftar');
        					$this->session->sess_destroy();
        				}
        				 else  {
        					redirect('Admin');
        					$this->session->sess_destroy();
        				}

                if ($user['role_id'] == 2) {
        					redirect('Admin');
        					$this->session->sess_destroy();
        				}
        				 else  {
        					redirect('Admin');
        					$this->session->sess_destroy();
        				}

        			} else  {

        				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password salah !</div>');
        			redirect('Login');

        			}

        		} else  {

        			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email belum aktif !</div>');
        			redirect('Login');
        		}

        	} else {

        		$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email belum terdaftar !</div>');
        			redirect('Login');
        	}


    }


    public function register()	{


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

          $data['title'] = 'LKP Anissa Gorden Palu Registrasi';

          $this->load->view('templates/auth/auth_header',$data);
          $this->load->view('Login/Registrasi.php', $data);
          $this->load->view('templates/auth/auth_footer');


        } else {
          $data = [

            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' =>password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 1,
            'is_active' => 1,
            'date_create' => time()

          ];

          $this->db->insert('user', $data);
    			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Selamat registrasi anda berhasil ! anda berhasil membuat account . dan silahkan login</div>');
    			redirect('Login');
  		}
  	}

    public function logout()
    {
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('role_id');

      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Selamat Anda Berhasil Logout </div>');
        redirect('Login');
    }

}
