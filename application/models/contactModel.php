<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contactModel extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

  function insertContact($data) {
    $this->db->insert("contact", $data);
    return $this->db->insert_id();
  }

  function fetchContact(){
    return $contacts = $this->db->query('select * from contact')->result_array();
    
    return $contacts;
  }
}

