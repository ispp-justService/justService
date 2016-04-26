<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller {

	public function signupCustomer(){
		$this->render->renderView('admin/signupCustomer');
	}

	public function sendCustomerSignup(){

		$this->load->library('customer_utils');

		$checkForm = $this->customer_utils->checkForm();

		if($checkForm == FALSE){
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

	public function deactivateCustomer(){

		$customer_id = $this->input->post('customer_id');
		$role = $this->session->role;
	
		if(isset($role) && isset($customer_id) && $role == "ADMINISTRATOR"){
			$this->load->model('customers');
			$result = $this->customers->deactivateCustomer($customer_id);
			$deletedStatus = $result->row()->deleted;
			if($deletedStatus == TRUE){
				redirect('admin/customersList');
			}else{
				$this->render->renderViewWithError('main/main',"Error at deactivating the customer");
			}
		}else{
			$this->render->renderViewWithError('main/main',"Session expired or you are not an Admin");
		}
	}

	public function deactivateUser(){

		$app_user_id = $this->input->post('app_user_id');
		$role = $this->session->role;
	
		if(isset($role) && isset($app_user_id) && $role == "ADMINISTRATOR"){
			$this->load->model('app_users');
			$result = $this->app_users->deactivateUser($app_user_id);
			$deletedStatus = $result->row()->deleted;
			if($deletedStatus == TRUE){
				redirect('admin/usersList');
			}else{
				$this->render->renderViewWithError('main/main',"Error at deactivating the user");
			}
		}else{
			$this->render->renderViewWithError('main/main',"Session expired or you are not an Admin");
		}
	}
	
}

?>
