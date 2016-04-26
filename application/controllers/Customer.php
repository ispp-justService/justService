<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Customer extends CI_Controller {

	public function showProfile($id){
		if(isset($id)){
			$this->load->model('customers');
			$result = $this->customers->find_customer($id);
		
			if($result != FALSE){

				$app_user_id = $this->session->id;
				$role = $this->session->role;

				if(isset($app_user_id) && isset($role) && $role == "APP_USER"){
					$data['bookmarked'] = $this->customers->is_customer_bookmarked_by_user($id, $app_user_id);
				}
				
				$data['customer'] = $result->row();

				$this->load->library('googlemaps');

				$config['center'] = $data['customer']->latitude.','.$data['customer']->longitude;
				$this->googlemaps->initialize($config);

				$marker = array();
				$marker['position'] = $data['customer']->latitude.','.$data['customer']->longitude;
				$this->googlemaps->add_marker($marker);
				$data['map'] = $this->googlemaps->create_map();

				$this->render->renderView('customer/profile',$data);

			}else{
				$this->render->renderViewWithError('main/main',"Can not find that customer");
			}
		}
	}

	public function activateService($id){
		$customer_id 	= $this->session->id;
		$role 			= $this->session->role;
		if(isset($id) && isset($customer_id) && isset($role) && $role == "CUSTOMER"){
			$this->load->model('services');
			$result = $this->services->activate_service($id, $customer_id);

			if($result != FALSE){
				$status = $result->row()->status;
				if($status == 'ACTIVE'){
					redirect('customer/servicesList');
				}else{
					echo "estado no cambiado";
				}								
			}else{
				echo "no se ha podido activar el servicio";
			}
		}else{
			$this->render->renderViewWithError('main/main',"Session expired or you are not a Customer");
		}				
	}

	public function rateService($id){
		$customer_id 	= $this->session->id;
		$role 			= $this->session->role;
		if(isset($id) && isset($customer_id) && isset($role) && $role == "CUSTOMER"){
			$this->load->model("services");
			$rating_customer = $this->input->post("rating_customer");
			$comment_customer = $this->input->post("comment_customer");
			
			$result = $this->services->rate_service_by_customer($id,$customer_id,$rating_customer,$comment_customer);
			
			if($result != FALSE){
				$result = $result->row();
				if($result->rating_customer == $rating_customer && $result->comment_customer == $comment_customer){
					redirect('customer/servicesList');
				}
			}
		}else{
			$this->render->renderViewWithError('main/main',"Session expired or you are not a Customer");
		}
		
	}

	public function finalizeService($id){
		$customer_id 	= $this->session->id;
		$role 			= $this->session->role;
		if(isset($id) && isset($customer_id) && isset($role) && $role == "CUSTOMER"){
			$this->load->model('services');
			$result = $this->services->finalize_service($id, $customer_id);

			if($result != FALSE){
				$status = $result->row()->status;
				if($status == 'FINALIZED'){
					redirect('customer/servicesList');
				}else{
					$this->render->renderViewWithError('customer/servicesList',"State of service not changed");
				}								
			}else{
				$this->render->renderViewWithError('customer/servicesList',"Error at finishing the Service");
			}
		}else{
			$this->render->renderViewWithError('main/main',"Session expired or you are not a Customer");
		}
	}

	public function cancelService($id){
		$customer_id 	= $this->session->id;
		$role 			= $this->session->role;
		if(isset($id) && isset($customer_id) && isset($role) && $role == "CUSTOMER"){
			$this->load->model('services');
			$result = $this->services->cancel_service_by_customer($id, $customer_id);

			if($result != FALSE){
				$status = $result->row()->status;
				if($status == 'CANCELLED'){
					redirect('customer/servicesList');
				}else{
					$this->render->renderViewWithError('customer/servicesList',"State of service not changed");
				}								
			}else{
				$this->render->renderViewWithError('customer/servicesList',"Error at cancelling the Service");
			}
		}else{
			$this->render->renderViewWithError('main/main',"Session expired or you are not a Customer");
		}
	}

	public function showTags(){
		$id = $this->session->id;
		$role = $this->session->role;
		if(isset($id) && isset($role) && $role == 'CUSTOMER'){
			$this->load->model('tags');
			$customerTags = $this->tags->get_tags_by_customer($id);
			$tags = $this->tags->get_tags_to_edit_by_customer($id);
		
			if($customerTags != FALSE && $tags != FALSE){
				$data['tags'] = $tags->result();
				$data['customerTags'] = $customerTags->result();
				$this->render->renderView('customer/showTags',$data);
			}else{
				$this->render->renderViewWithError('main/main',"Could not show tags");
			}
		}else{
			$this->render->renderViewWithError('main/main',"Session expired or you are not a Customer");
		}
	}

	public function editTags(){
		$id = $this->session->id;
		$role = $this->session->role;
		if(isset($id) && isset($role) && $role == 'CUSTOMER'){
			$this->load->model('tags');
			$tags = $this->tags->get_tags_to_edit_by_customer($id);
		
			if($tags != FALSE){
				$data['tags'] = $tags->result();
				$this->render->renderView('customer/editTags',$data);
			}else{
				$this->render->renderViewWithError('main/main',"Could not show tags");
			}
		}else{
			$this->render->renderViewWithError('main/main',"Session expired or you are not a Customer");
		}
		
	}

	public function sendEditTags(){
		$id = $this->session->id;
		$role = $this->session->role;
		if(isset($id) && isset($role) && $role == 'CUSTOMER'){
			
			$size = $this->input->post('size');

			foreach($_POST as $key => $val){
				if($key != "submit"){
					$data[$key] = $this->input->post($key);									
				}
			}
			
			$this->load->model('tags');
			$result = $this->tags->modify_tags($id,$data);
			
			if($result == TRUE){
				redirect('customer/showTags');
			}else{
				$this->render->renderViewWithError('main/main',"Error at editing tags");
			}
		}else{
			$this->render->renderViewWithError('main/main',"Session expired or you are not a Customer");
		}
	}

	public function servicesList(){
		$role 	= $this->session->role;
		$id 	= $this->session->id;
		if(isset($role) && $role == 'CUSTOMER' && isset($id)){
			$this->load->model('services');
			$result = $this->services->get_all_by_customer($id);
			
			$data['services'] = $result->result();
			$this->render->renderView('customer/servicesList',$data);
		}else{
			$this->render->renderViewWithError('main/main',"Session expired or you are not a Customer");
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
		}else{
			$this->render->renderViewWithError('main/main',"Session expired");
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
