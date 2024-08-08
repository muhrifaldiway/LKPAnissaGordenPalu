<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();


    }

    public function index()
    {


        $data['title'] = 'LKP Anissa Gorden Palu';
        $this->load->view('Home/index.php', $data);


    }




}
