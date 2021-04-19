<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomepageModel extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

  function insertData($data) {
    $this->db->insert("works", $data);
  }

  function fetchWorks(){
    return $works = $this->db->query('select * from works')->result_array();
    
    return $works;
  }
}
