<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {




	public function index()
	{
    $this->Model_security->getsecurity();
    $this->load->model('model_admin');
		$data['user']                     = 'jurusan';
		$data['header']                   = 'admin_fakultas/header';
		$data['menu']                     = 'admin_fakultas/menu_af';
		$data['contents']                 = 'admin_fakultas/data_mhs';
		$data['judul']                    = 'Master';
		$data['sub_judul']                = 'Data mahasiswa';
		$data['footer']                   = 'footer';
    $data['barang']                   = $this->model_admin->getdata()->result();
		$this->load->view('tampilan_awal', $data);
	}


  public function tambah()
	{
    $this->Model_security->getsecurity();

		$data['user']                     = 'jurusan';
		$data['header']                   = 'admin_fakultas/header';
		$data['menu']                     = 'admin_fakultas/menu_af';
		$data['contents']                 = 'admin_fakultas/form_input';
		$data['judul']                    = 'jurusan';
		$data['sub_judul']                = '';
		$data['footer']                   = 'footer';

		$this->load->view('tampilan_awal', $data);
	}


  	public function simpan()
  	{


      $this->Model_security->getsecurity();
      $data = array (
                'Nrp'                   =>$this->input->post('Nrp'),
                'nama'                  =>$this->input->post('nama'),
                'jurusan'               =>$this->input->post('jurusan'),
                'fakultas'              =>$this->input->post('fakultas'),
                'angkatan'              =>$this->input->post('angkatan'));
                $this->db->insert('mahasiswa', $data);
							 redirect('jurusan');

  	}


      public function edit()
      {
				$this->Model_security->getsecurity();
        $this->load->model('model_admin');
        $nrp = $this->uri->segment(3);
        $data['mhs']                             = $this->model_admin->mhs($nrp)->row_array();
        $data['user']                            = 'admin';
        $data['header']                          = 'admin_fakultas/header';
      	$data['contents']                        = 'admin_fakultas/edit';
        $data['menu']                            = 'admin_fakultas/menu_af';
        $data['judul']                           = 'Edit';
        $data['sub_judul']                       = 'edit';
        $data['footer']                           = 'footer';
        $this->load->view('tampilan_awal', $data );
      }



      public function edit_simpan()
      {
            $this->Model_security->getsecurity();
            $id                              = $this->input->post('id');
            $data = array (
                      'Nrp'                   =>$this->input->post('Nrp'),
                      'nama'                  =>$this->input->post('nama'),
                      'jurusan'               =>$this->input->post('jurusan'),
                      'fakultas'              =>$this->input->post('fakultas'),
                      'angkatan'              =>$this->input->post('angkatan'));
                      $this->db->where('Nrp', $id);
                      $this->db->update('mahasiswa', $data);
                        redirect('jurusan');

}



				public function hapus()

					{
									$this->Model_security->getsecurity();
									$nrp = $this->uri->segment(3);
									$this->db->where('Nrp', $nrp);
									$this->db->delete('mahasiswa');
									redirect('jurusan');


					}
















        public function logout()
        {
        		$this->session->sess_destroy();
        		redirect('login');
        }

}
