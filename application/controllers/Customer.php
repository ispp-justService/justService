<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Customer extends CI_Controller {

	public function showProfile(){
		$id = $this->session->id;
		if(isset($id)){
			$this->load->model('customers');
			$result = $this->customers->find_customer($id);
		
			if($result != FALSE){
				$data['customer'] = $result->row();
				$this->render->renderView('customer/profile',$data);
			}else{
			
			}
		}
	}

	public function editInformation(){
		$id = $this->session->id;
		if(isset($id)){
			$this->load->model('customers');
			$result = $this->customers->find_customer($id);

			if($result != FALSE){
				$data['customer'] = $result->row();
				$this->render->renderView('customer/editInformation',$data);
			}
		}
	}

	public function sendEditInformation(){
		$this->load->library('customer_utils');
		$this->load->model('customers');
		
		$checkForm = $this->customer_utils->checkForm();
		$role = $this->session->role;
		$id = $this->session->id;

		if(isset($id) and isset($role) and $checkForm != FALSE and $role == "CUSTOMER"){
			$data['name'] = $this->input->post('name');
			$data['type'] = $this->input->post('type');
			$data['phone_number'] = $this->input->post('phoneNumber');
			$data['latitude'] = $this->input->post('latitude');
			$data['longitude'] = $this->input->post('longitude');			
			$data['password'] = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
			$data['email'] = $this->input->post('email');
			$data['zip_code'] = $this->input->post('zipCode');
			
			
			$updateUser = $this->customers->updateCustomer($id, $data);
			if($updateUser!=FALSE){
				$data['customer'] = $updateUser->row();
				$this->render->renderView('customer/profile',$data);			
			}
		}else{
			$result = $this->customers->find_customer($id);

			if($result != FALSE){
				$data['customer'] = $result->row();
				$this->render->renderView('customer/editInformation',$data);
			}
		}			
	}	
}	

?>
