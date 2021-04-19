<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aboutController extends CI_Controller {
	public function __construct(){
		parent:: __construct();
			$this->load->model('aboutModel');
	}
		
	public function index(){
		$this->load->model('aboutModel');
		$this->load->view('aboutView');
	}
}
