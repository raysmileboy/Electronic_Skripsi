<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {




	public function index()
	{
    $this->Model_security->getsecurity();
    $this->load->model('model_info');
		$data['user']                     = 'jurusan';
		$data['header']                   = 'admin_pusat/header';
		$data['menu']                     = 'admin_pusat/tampilan_menu';
		$data['contents']                 = 'admin_pusat/data_informasi';
		$data['judul']                    = 'Master';
		$data['sub_judul']                = 'Informasi';
		$data['footer']                   = 'footer';
    $data['informasi']                = $this->model_info->getinfo()->result();
		$this->load->view('tampilan_awal', $data);
	}


  public function edit()
  {
	  $this->Model_security->getsecurity();
    $this->load->model('model_info');
    $id                                      = $this->uri->segment(3);
    $data['q']                               = $this->model_info->id_info($id)->row_array();
    $data['user']                            = 'admin';
    $data['header']                          = 'admin_pusat/header';
    $data['contents']                        = 'admin_pusat/edit_info';
    $data['menu']                            = 'admin_pusat/tampilan_menu';
    $data['judul']                           = 'Edit';
    $data['sub_judul']                       = 'edit';
    $data['footer']                           = 'footer';
    $this->load->view('tampilan_awal', $data );
  }




  public function edit_simpan()
  {
        $this->Model_security->getsecurity();
        $id                                        = $this->input->post('id');
        $data = array (
                  'id_info'                        =>$this->input->post('id'),
                  'header_info'                    =>$this->input->post('header'),
                  'body_info'                      =>$this->input->post('body'),
                  'footer_info'                    =>$this->input->post('footer'),

                );

                  $this->db->where('id_info', $id);
                  $this->db->update('informasi', $data);
                  redirect('informasi');

}


public function logout()
{
		$this->session->sess_destroy();
		redirect('login');
}








}
