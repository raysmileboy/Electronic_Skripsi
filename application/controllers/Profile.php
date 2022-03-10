<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	public function index()
	{
		$this->Model_security->getsecurity();
		$data['user'] =         'Admin Pusat';
		$data['header'] =       'mahasiswa/header';
		$data['menu'] =         'mahasiswa/menu_mh';
		$data['contents'] =     'mahasiswa/profile';
		$data['judul'] =        'Home';
		$data['sub_judul'] =    '';
		$data['footer'] =       'footer';
		$this->load->view('tampilan_awal', $data);
		}
}
