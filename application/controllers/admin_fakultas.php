<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_fakultas extends CI_Controller {


	public function __construct()
         {
                 // Call the CI_Model constructor
                 parent::__construct();
         }



	public function index()
	{
		$this->Model_security->getsecurity();
		$data['user'] = 'Admin fakultas';
		$data['header'] = 'admin_fakultas/header';
		$data['menu'] = 'admin_fakultas/menu_af';
		$data['contents'] = 'admin_fakultas/konten_af';
		$data['judul'] = 'admin';
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
