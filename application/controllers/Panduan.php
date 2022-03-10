<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panduan extends CI_Controller {


	public function index()

    {
      $this->Model_security->getsecurity();
      $data['user']                = 'Admin Pusat';
      $data['header']              = 'admin_pusat/header';
      $data['menu']                = 'admin_pusat/tampilan_menu';
      $data['contents']            = 'admin_pusat/panduan';
      $data['judul']               = 'Home';
      $data['sub_judul']           = '';
      $data['footer']    					 = 'footer';
      $this->load->view('tampilan_awal', $data);
      }



			public function do_upload()
			 {
							 $config['upload_path']          = './assets/panduan';
							 $config['allowed_types']        = 'pdf';
							 $config['max_size']             = 0;


							 $this->load->library('upload', $config);

							 if ( ! $this->upload->do_upload('userfile'))
							 {
											  $data =  $this->session->set_flashdata ('gagal', 'Data Tidak Berhasil di Upload');
							 }
							 else
							 {
										$data = array(

																	'title'							=>$this->input->post('stts'),
																	'data'          	  =>$this->upload->data('file_name'),
																	'path'              =>$this->upload->data('file_path'),
																	'date'    			  	=>date('Y-m-d H:i:s'));


																$this->db->insert('panduan', $data);
																$data =  $this->session->set_flashdata ('sukses', 'Data Berhasi di Upload');


							 }
							   redirect('panduan');
			 }


}
