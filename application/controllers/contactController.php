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
		//load library
		$this->load->library('form_validation');
		//set validation rules
		$this->form_validation->set_rules('name', 'Your Name', 'trim|required');
		$this->form_validation->set_rules('emailAddress', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('message' , 'Message', 'trim|required');

		if($this->form_validation->run()==TRUE){
			//if true -> get POST data
			$data = array(
				'name'=> $this->input->post('name', true),
				'emailAddress'=>$this->input->post('emailAddress', true),
				'message'=> $this->input->post('message',true)  
			);

			$id= $this->contactModel->insertContact($data);

			echo '<p id="success">Thanks So Much!</p>';
		}else{
			//failure
			$response = array(
				'status'=> 'error',
				'message'=> '<p id="danger">Please Try Again.</p>'
			);

			echo $response['message'];
		}

	}
}
