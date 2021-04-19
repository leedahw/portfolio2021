<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contactController extends CI_Controller {
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


	// public function submit (){
	// 	//load library
	// 	$this->load->library('form_validation');
	// 	//set validation rules
	// 	$this->form_validation->set_rules('name', 'Your Name', 'required');
	// 	$this->form_validation->set_rules('emailAddress', 'Email Address', 'trim|required|valid_email');
	// 	$this->form_validation->set_rules('message' , 'Message', 'required');

	// 	if ($this->form_validation->run() == false) {
	// 		$response = array(
	// 				'status' => 'error',
	// 				'message' => validation_errors()
	// 		);
	// 	}else{
	// 		$contactData = array(
	// 				'name' => $this->input->post('name', true),
	// 				'emailAddress' => $this->input->post('emailAddress', true),
	// 				'message' => $this->input->post('message', true),
	// 		);

	// 		$contactId = $this->page_model->insertContact($contactData);

	// 		$response = array(
	// 				'status' => 'success',
	// 				'message' => "<h3>Message send successfully.</h3>"
	// 		);
	// 	}
		
	// 	$this->output
	// 		->set_content_type('application/json')
	// 		->set_output(json_encode($response));

	// }
}
?>