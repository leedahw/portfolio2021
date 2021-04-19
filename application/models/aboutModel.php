<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aboutModel extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

  function fetchAbout(){
    $query = $this->db->get("about");
    //SELECT * FROM `works`
    return $query;
    console.log($query);
  }
}
