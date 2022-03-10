<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {


	public function index()
	{
		$this->Model_security->getsecurity();
		$data['user'] =         'Admin Pusat';
		$data['header'] =       'mahasiswa/header';
		$data['menu'] =         'mahasiswa/menu_mh';
		$data['contents'] =     'mahasiswa/download';
		$data['judul'] =        'Download panduan';
		$data['sub_judul'] =    '';
		$data['footer'] =       'footer';
		$this->load->view('tampilan_awal', $data);
	}

	public function download1(){

		$this->load->helper('download');
	  force_download('C:/xampp/htdocs/ci/assets/upload/pert_3.pdf', NULL);
	}

	public function download2(){

		$this->load->helper('download');
	  force_download('C:/xampp/htdocs/ci/assets/upload/pert_3.pdf', NULL);
	}

	public function download3(){

		$this->load->helper('download');
	  force_download('C:/xampp/htdocs/ci/assets/upload/pert_3.pdf', NULL);
	}
	
}
