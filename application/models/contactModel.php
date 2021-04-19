<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contactModel extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

  public function insertContact($name,$emailAddress,$message)
  {
      $query ="INSERT INTO `contact` (`name` , `emailAddress` , `message`)
      VALUES ('$name' , '$emailAddress' , '$message')";
      
      $this->db->query($query);
  }

  public function fetchContact(){
    return $contacts = $this->db->query('select * from contact')->result_array();
    
    return $contacts;
  }
}

?>