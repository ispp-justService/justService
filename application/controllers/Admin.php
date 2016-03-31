<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller {

	public function signupCustomer(){
		$this->render->renderView('admin/signupCustomer');
	}

	public function sendCustomerSignup(){

		$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('type','Type','required');
		$this->form_validation->set_rules('phoneNumber','Phone Number','required|numeric');
		$this->form_validation->set_rules('latitude','Latitude','required|decimal');		
		$this->form_validation->set_rules('longitude','Longitude','required|decimal');		
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('passwordConfirm','Confirm Password','required|matches[password]');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('zipCode','ZipCode','required|numeric');

		if($this->form_validation->run() == FALSE){
			$this->render->renderView('admin/signupCustomer');
		}else{
			$data['name'] = $this->input->post('name');
			$data['type'] = $this->input->post('type');
			$data['phone_number'] = $this->input->post('phoneNumber');
			$data['latitude'] = $this->input->post('latitude');
			$data['longitude'] = $this->input->post('longitude');			
			$data['password'] = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
			$data['email'] = $this->input->post('email');
			$data['zip_code'] = $this->input->post('zipCode');

			$this->load->model('customers');
			if($this->customers->register_customer($data)){
				$this->render->renderView('main/main');
			}
		}
}

	public function usersList(){
		$this->load->model('app_users');

		$query = $this->app_users->get_all();

		$data['users'] = $query->result();

		$this->render->renderView('admin/usersList',$data);
	}

	public function customersList(){
		$this->load->model('customers');

		$query = $this->customers->get_all();

		$data['customers'] = $query->result();

		$this->render->renderView('admin/customersList',$data);
	}	
	
}

?>
