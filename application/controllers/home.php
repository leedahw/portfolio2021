<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct(){
		parent:: __construct();
			$this->load->database();
			$this->load->model('HomepageModel');
			$this->load->helper('url_helper');
	}
		
	public function index(){
		$this->load->model('HomepageModel');
		//load the modwl php
		$wrks['wrk'] = $this->HomepageModel->fetchWorks();
		//call the fetWorks function in model

		$this->load->view('HomepageView', $wrks);
	}

}
