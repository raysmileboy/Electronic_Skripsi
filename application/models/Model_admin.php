<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_model {


  public function __construct()
         {
                 // Call the CI_Model constructor
                 parent::__construct();
         }


/*admin fakultas*/
	public function getdata()
	{

      $datamhs = $this->db->get('mahasiswa');
      return $datamhs;


    }



    public function mhs($nrp)

  	 {

        return $this->db->get_where('mahasiswa', array ('Nrp'=>$nrp));


      }

      public function getdataupload()
    	 {

          $datauploads = $this->db->get('upload');
          return $datauploads;


        }

/*---------------------------------end------------------------------------*/


/*admin pusat*/

      public function getuser()
    	{

          $mng = $this->db->get('admins');
          return $mng;


        }


       public function edituser($username)

    	  {

            return $this->db->get_where('admins', array ('username'=>$username));
        }


/*---------------------------------end------------------------------------*/


}
