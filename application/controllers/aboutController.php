<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class abouteController extends CI_Controller {
	public function __construct(){
		parent:: __construct();
			$this->load->model('aboutModel');
	}
		
	public function index(){
		$this->load->model('aboutModel');
		$data['fetchAbout'] = $this->aboutModel->fetchAbout();
		//$this->load->view('HomepageView');
		$this->load->view('aboutView', $data);
	}
}
