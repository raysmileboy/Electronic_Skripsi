<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_upload extends CI_Controller {



  public function index()
	{
		$this->Model_security->getsecurity();
		$data['user'] = 'Admin fakultas';
		$data['header'] = 'admin_fakultas/header';
		$data['menu'] = 'admin_fakultas/menu_af';
		$data['contents'] = 'admin_fakultas/file_upload';
		$data['judul'] = 'admin';
		$data['sub_judul'] = '';
		$data['footer'] = 'footer';
		$this->load->view('tampilan_awal', $data);
		}



}
