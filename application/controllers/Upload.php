<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {




  public function index()
	{

	  $this->Model_security->getsecurity();
    $this->load->model('model_upload');
	  $data['user']                     = 'Mahasiswa';
		$data['header']                   = 'mahasiswa/header';
		$data['menu']                     = 'mahasiswa/menu_mh';
		$data['contents']                 = 'mahasiswa/upload_data';
		$data['judul']                    = 'Home';
		$data['sub_judul']                = 'Upload';
		$data['footer']                   = 'footer';
    $data['datas']                    = $this->model_upload->getupload()->result();
	  $this->load->view('tampilan_awal', $data);

	}





    public function doupload()

    {


              if($this->input->post('submit') && count($_FILES['userfile']['name'])>0);



                  {




                  $nomer_files = count($_FILES['userfile']['name']);


                  $files = $_FILES;


                  for($i=0; $i<$nomer_files; $i++)
                  {

                      $_FILES['userfile']['name'] =   $files['userfile']['name'][$i];
                      $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                      $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                      $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                      $_FILES['userfile']['size'] = $files['userfile']['size'][$i];


                    $config['upload_path']          = './assets/upload/';
                    $config['allowed_types']        = 'gif|jpg|pdf|docx';
                    $config['max_size']             = 0;


                    $this->load->library('upload', $config);


                    if ($this->upload->do_upload('userfile'))


                                       {
                                            $data = array(

                                                        'data'           =>$this->upload->data('file_name'),
                                                        'upload_time'    =>date('Y-m-d H:i:s'),
                                                        'path_data'      =>$this->upload->data('file_path'));


                                          $this->db->insert('upload', $data);
                                          $data =  $this->session->set_flashdata ('sukses', 'Data Berhasi di Upload');

                                        }
                                        else
                                        {
                                          $data =  $this->session->set_flashdata ('gagal', 'Data Tidak Berhasil di Upload');
                                        }

                                }



                        }
                        redirect('upload');
                }


}
