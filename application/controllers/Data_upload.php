<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_upload extends CI_Controller {


	public function index()
	{
    $this->Model_security->getsecurity();
    $this->load->model('model_admin');
    $data['user']           = 'Admin Pusat';
    $data['header']         = 'admin_pusat/header';
    $data['menu']           = 'admin_pusat/tampilan_menu';
    $data['contents']       = 'admin_pusat/tampil_upload';
    $data['judul']          = 'Home';
    $data['sub_judul']      = '';
    $data['footer']         = 'footer';
    $data['tmp']            = $this->model_admin->getdataupload()->result();
    $this->load->view('tampilan_awal', $data);
	}
}
