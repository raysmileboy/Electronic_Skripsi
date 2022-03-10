<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {


	public function index()
	{

		$this->Model_security->getsecurity();
		$this->load->model('model_info');
		$data['user'] 										= 'Mahasiswa';
		$data['header'] 									= 'mahasiswa/header';
		$data['menu']										  = 'mahasiswa/menu_mh';
		$data['contents'] 								= 'mahasiswa/konten_mh';
		$data['judul'] 										= 'Home';
		$data['sub_judul'] 								= 'Informasi';
		$data['footer'] 									= 'footer';
		$data['title']                		= $this->model_info->getdata('home');
		$data['kedua']                		= $this->model_info->getdata('home2');
		$data['ketiga']                		= $this->model_info->getdata('home3');
		$this->load->view('tampilan_awal', $data);

		}




	



public function logout()
{
		$this->session->sess_destroy();
		redirect('login');
}

}
