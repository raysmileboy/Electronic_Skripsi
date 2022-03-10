<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_user extends CI_Controller {

	public function __construct() {
         parent::__construct();
         $this->load->library('encrypt');

     }

/*adminPusat*/

	public function index()
	{
    $this->Model_security->getsecurity();
    $this->load->model('model_admin');
		$data['user']                     = 'Admin Pusat';
		$data['header']                   = 'admin_pusat/header';
		$data['menu']                     = 'admin_pusat/tampilan_menu';
		$data['contents']                 = 'admin_pusat/data_user';
		$data['judul']                    = 'Master';
		$data['sub_judul']                = 'Manage Content';
		$data['footer']                   = 'footer';
    $data['mng']                      = $this->model_admin->getuser()->result();
		$this->load->view('tampilan_awal', $data);
	}


  public function tambah()
	{
    $this->Model_security->getsecurity();

		$data['user']                     = 'admin pusat';
		$data['header']                   = 'admin_pusat/header';
		$data['menu']                     = 'admin_pusat/tampilan_menu';
		$data['contents']                 = 'admin_pusat/form';
		$data['judul']                    = 'Manage';
		$data['sub_judul']                = 'Tambah user';
		$data['footer']                   = 'footer';

		$this->load->view('tampilan_awal', $data);
	}



			public function simpan()
			{


				$this->Model_security->getsecurity();
				$this->load->library('encrypt');
				$data = array (
									'id_username'                	   =>$this->input->post('id_u'),
									'username'                 			 =>$this->input->post('username'),
									'password' 											 =>md5($this->input->post('password')),
									'nama_lengkap'             			 =>$this->input->post('nama'),
									'foto'              						 =>$this->input->post('Foto'),
									'stts'													 =>$this->input->post('stts'));




									$this->db->insert('admins', $data);
									redirect('manage_user');
			}




			public function edit()
			{
				$this->Model_security->getsecurity();
				$this->load->model('model_admin');
				$username = $this->uri->segment(3);
				$data['q']             				           = $this->model_admin->edituser($username)->row_array();
				$data['user']                            = 'admin';
				$data['header']                          = 'admin_pusat/header';
				$data['contents']                        = 'admin_pusat/edit';
				$data['menu']                            = 'admin_pusat/tampilan_menu';
				$data['judul']                           = 'Manage';
				$data['sub_judul']                       = 'Edit User';
				$data['footer']                           = 'footer';
				$this->load->view('tampilan_awal', $data );
			}




			      public function edit_simpan()
			      {
			            $this->Model_security->getsecurity();
			            $id                             					 = $this->input->post('id');
			            $data = array (
			                      'id_username'                  	 =>$this->input->post('id_u'),
			                      'username'                 			 =>$this->input->post('username'),
			                      'password'              		  	 =>$this->input->post('password'),
			                      'nama_lengkap'            		   =>$this->input->post('nama'),
			                      'foto'              						 =>$this->input->post('Foto'));
			                      $this->db->where('username', $id);
			                      $this->db->update('admins', $data);
			                        redirect('manage_user');

			}



							public function hapus()

								{
												$this->Model_security->getsecurity();
												$username = $this->uri->segment(3);
												$this->db->where('username', $username);
												$this->db->delete('admins');
												redirect('manage_user');


								}



        public function logout()
        {
        		$this->session->sess_destroy();
        		redirect('login');
        }

}
