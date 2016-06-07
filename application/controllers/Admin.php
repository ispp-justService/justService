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
				$this->render->redirectWithError("admin/customersList", "error_deactivating_customer");	
			}
		}else{
			$this->render->redirectWithError("main", "error_session_expired_not_logged");	
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
				$this->render->redirectWithError("admin/usersList", "error_deactivating_user");	
			}
		}else{
			$this->render->redirectWithError("main", "error_session_expired_not_logged");	
		}
	}
	
	public function seeCustomersBanners($customer_id){
		$role = $this->session->role;
		if(isset($role) && $role == "ADMINISTRATOR"){
			$data['customer_id'] = $customer_id;
			
			$this->load->model("banners");
			$result = $this->banners->get_by_customer_id($customer_id);			

			$data['banners'] = $result->result();

			$this->render->renderView("admin/seeCustomersBanners", $data);
		}else{
			$this->render->redirectWithError("main", "error_session_expired_not_logged");				
		}	
	}

	public function createFreeBanner(){
		$role 			= $this->session->role;

		$data['customer_id'] 	= $this->input->post("customer_id");
		$data['name'] 			= $this->input->post("name");

		if(isset($role) && $role == "ADMINISTRATOR"){

			$config['upload_path'] = '././assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('image')){
				$this->render->redirectWithError("admin/dashboard", "error_uploading_image");		
			}else{
				$image_name = $this->upload->data()['file_name'];
				$data['image'] = '././assets/uploads/'.$image_name;
				$data['mustpay'] = FALSE;
				$this->load->model('banners');
				$result = $this->banners->create_free_banner($data);
				if($result == TRUE){
					redirect("admin/seeCustomersBanners/".$data['customer_id']);
				}else{
					$this->render->redirectWithError("admin/dashboard", "error_create_banner");		
				}
			}

			$this->render->renderView("admin/createBanner");
		}else{
			$this->render->redirectWithError("main", "error_session_expired_not_logged");		
		}
	}

	public function createBanner(){
		$role 			= $this->session->role;

		$data['customer_id'] 	= $this->input->post("customer_id");
		$data['name'] 			= $this->input->post("name");

		if(isset($role) && $role == "ADMINISTRATOR"){

			$config['upload_path'] = '././assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('image')){
				$this->render->redirectWithError("admin/seeCustomersBanners/".$data['customer_id'], "error_uploading_image");	
			}else{
				$image_name = $this->upload->data()['file_name'];
				$data['image'] = '././assets/uploads/'.$image_name;
				$this->load->model('banners');
				$result = $this->banners->create_banner($data);
				if($result == TRUE){
					redirect("admin/seeCustomersBanners/".$data['customer_id']);
				}else{
					$this->render->redirectWithError("admin/seeCustomersBanners/".$data['customer_id'], "error_create_banner");	
				}
			}

			$this->render->renderView("admin/createBanner");
		}else{
			$this->render->redirectWithError("main", "error_session_expired_not_logged");				
		}
	}
	
	public function deactivateBanner(){

		$role 			= $this->session->role;
		$banner_id 		= $this->input->post('banner_id');
		$customer_id 	= $this->input->post('customer_id'); 		

		if(isset($role) && $role == "ADMINISTRATOR"){

			$this->load->model('banners');
			$result = $this->banners->deactivate_banner($banner_id);
			if($result == TRUE){
				redirect("admin/seeCustomersBanners/".$customer_id);
			}else{
				$this->render->redirectWithError("admin/seeCustomersBanners/".$customer_id, "error_deactivating_banner");		
			}
		}else{
			$this->render->redirectWithError("main", "error_session_expired_not_logged");			
		}
	}

	public function dashboard(){
		$role = $this->session->role;
		
		if(isset($role) && $role == "ADMINISTRATOR"){
		
			$this->load->model("customers");

			$rankingBusiness = $this->customers->get_ranking_business()->result();
			$rankingFreelance = $this->customers->get_ranking_freelance()->result();

			$data['rankingBusiness'] = $rankingBusiness;
			$data['rankingFreelance'] = $rankingFreelance;
			
			$this->render->renderView("admin/dashboard",$data);

		}else{
			$this->render->redirectWithError("main", "error_session_expired_not_logged");			
		}
	}

	public function useBanner(){
		
		$role 			= $this->session->role;
		$banner_id 		= $this->input->post('banner_id');
		$customer_id 	= $this->input->post('customer_id'); 		

		if(isset($role) && $role == "ADMINISTRATOR"){
			
			$this->load->model('banners');
			$result = $this->banners->use_banner($banner_id, $customer_id);

			if($result == TRUE){
				redirect("admin/seeCustomersBanners/".$customer_id);
			}else{
				$this->render->redirectWithError("admin/seeCustomersBanners/".$customer_id, "error_user_banner");		
			}

		}else{
			$this->render->redirectWithError("main", "error_session_expired_not_logged");		
		}
		
	} 

	
}

?>
