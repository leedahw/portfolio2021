<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contact extends CI_Controller {
	//load helpers and libraries
	public function __construct(){
		parent:: __construct();
			$this->load->helper(array('form','url'));
			$this->load->model('contactModel');
	}
		
	//load contactView on index
	public function index(){
		//load the model php
		$this->load->model('contactModel');
		//call the fetchWorks function in model
		$contacts['contact'] = $this->contactModel->fetchContact();
		//load contctView with the fetched data
		$this->load->view('contactView', $contacts);

		$formRules = array(

		);

	}


	public function submit (){
		if($this->input->post('type')==1){

			$name= $this->input->post('name');
			$emailAddress = $this->input->post('emailAddress');
			$message = $this->input->post('message');
			$this->contactModel->insertContact($name,$emailAddress,$message);
			echo json_encode(array(
				"statusCode"=>200
			));
		}
	}

}
?>