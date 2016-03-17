<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Signup extends CI_Controller {

	public function index(){
		$this->load->view('signup');
	}

	public function sendRegistration(){

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('surname','Surname','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('passwordConfirm','Confirm Password','required|matches[password]');
		$this->form_validation->set_rules('email','Email','required|valid_email');

		if($this->form_validation->run() == FALSE){
			$this->load->view('signup');
		}else{

			$data['name'] = $this->input->post('name');
			$data['surname'] = $this->input->post('surname');
			$data['password'] = $this->encryption->encrypt($this->input->post('password')))  ;
			$data['email'] = $this->input->post('email');

			$this->load->model('app_user');
			$this->app_user->register_user($data);
			echo $this->input->post('name');
		}
	}
}

?>
