<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_info extends CI_model {


  public function __construct()
      {
              $this->load->database();
      }

/*informasi Crud */
  public function getinfo()
    	{

          $info = $this->db->get('informasi');
          return $info;


        }


        public function id_info($id)

        {

            return $this->db->get_where('informasi', array ('id_info'=>$id));


          }

          /*---------------------------------end------------------------------------*/






/*Read untuk konten mahasiswa */

	public function getdata($info)
	{

      $title = $this->db->get_where('informasi', array('page' => $info));
      return $title->result();

  }

  /*---------------------------------end------------------------------------*/

  public function uploaddata()
  {

    $mng = $this->db->get('admins');
    return $mng;


  }



	}
