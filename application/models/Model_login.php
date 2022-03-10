<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model {


	public function getlogin($u, $p)
	{
    $pwd = md5($p);
    $this->db->where('username',$u);
    $this->db->where('password',$pwd);
    $query = $this->db->get('admins');
    if($query->num_rows()>0)
    {
      foreach ($query->result() as $row)
			 {
				/*adminpusat*/
				 	if($row->stts=='1')		{

										$sess =  array( 'username'							 		=>$row->username,
									 								  'nama_lengkap' 					  	=>$row->nama_lengkap,
																  	'foto' 											=>$row->foto,
																	 	'date_login'								=>date('Y-m-d H:i:s'));
																		$this->session->set_userdata($sess);
																		redirect('admin_pusat');
						/*adminfakultas*/
					}elseif ($row->stts=='2') {


									$sess =  array( 'username'							 		=>$row->username,
																	'nama_lengkap' 					  	=>$row->nama_lengkap,
																	'foto' 											=>$row->foto );
																		$this->session->set_userdata($sess);
																		redirect('admin_fakultas');

								/*mahasiswa*/
					}elseif ($row->stts=='3')	 {

								 $sess =  array( 'username'							 			=>$row->username,
																 'nama_lengkap' 					  	=>$row->nama_lengkap,
																 'foto' 											=>$row->foto );
																 $this->session->set_userdata($sess);
																 redirect('mahasiswa');
					}
				}





								}else{
								  $this->session->set_flashdata ('info', 'Maaf username atau password salah');
									redirect('login');
							  }



					}



				}
