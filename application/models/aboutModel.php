<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AboutModel extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

  function fetchAbout(){
    echo "hello about";
  }
}
