<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_upload extends CI_model {


  public function __construct()
         {
                 // Call the CI_Model constructor
                 parent::__construct();
         }


/*data upload*/
	public function getupload()
	 {

      $uploads = $this->db->get('upload');
      return $uploads;
    


    }



/*---------------------------------end------------------------------------*/


}
