<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pusat extends CI_Controller {


	public function index()
	{
		$this->Model_security->getsecurity();
		$data['user'] = 'Admin Pusat';
		$data['header'] = 'admin_pusat/header';
		$data['menu'] = 'admin_pusat/tampilan_menu';
		$data['contents'] = 'admin_pusat/tampilan_content';
		$data['judul'] = 'Home';
		$data['sub_judul'] = '';
		$data['footer'] = 'footer';
		$this->load->view('tampilan_awal', $data);
		}



public function logout()
{
		$this->session->sess_destroy();
		redirect('login');
}

}
