<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Customer extends CI_Controller {

	public function showProfile($id){
		if(isset($id)){
			$this->load->model('customers');
			$result = $this->customers->find_customer($id);
		
			if($result != FALSE){

				$data['customer'] = $result->row();

				if($data['customer'] -> deleted != 't'){
					$app_user_id = $this->session->id;
					$role = $this->session->role;

					if(isset($app_user_id) && isset($role) && $role == "APP_USER"){
						$data['bookmarked'] = $this->customers->is_customer_bookmarked_by_user($id, $app_user_id);
					}

					$this->load->library('googlemaps');

					$config['center'] = $data['customer']->latitude.','.$data['customer']->longitude;
					$config['https'] = $this->config->item('https');
					$this->googlemaps->initialize($config);

					$marker = array();
					$marker['position'] = $data['customer']->latitude.','.$data['customer']->longitude;
					$this->googlemaps->add_marker($marker);
					$data['map'] = $this->googlemaps->create_map();

					$result = $this->customers->get_customer_comments($id);

					$data['comments'] = $result->result();

					$progress = $this->customers->progress_this_month_by_customer($id);
					$data['progress'] = $progress->row();

					// Cosas del ranking y tal
					if($data['customer']->type == 'Business'){
						$ranking = $this->customers->get_ranking_business();						
					}else{
						$ranking = $this->customers->get_ranking_freelance();
					}
					
					$porDelante = 0;
					$porDetras	= 0;
					$miPosicion = 0;

					for($i = 0; $i < $ranking->num_rows(); $i++){

						$row = $ranking->row($i);

						if($row->customer_id == $id){
							$miPosicion = $i;
							if($i != 0){
								$porDelante = $ranking->row($i -1)->servicios_finalizados;
							}
							if($i != $ranking->num_rows()){
								$porDetras =  $ranking->row($i +1)->servicios_finalizados;
							}
						}
					}

					$data['posicion'] = $miPosicion;
					$data['servicios_por_delante'] 	= $porDelante;
					$data['servicios_por_detras']	= $porDetras;

					$this->render->renderView('customer/profile',$data);
				}else{
					$this->render->renderViewWithError('main/main',lang("error_customer_deactivated"));
				}
			}else{
				$this->render->renderViewWithError('main/main',lang("error_customer_not_found"));
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
			$this->render->renderViewWithError('main/main',lang("error_session_expired_not_logged"));
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
			$this->render->renderViewWithError('main/main',lang("error_session_expired_not_logged"));
		}
		
	}

	public function finalizeService($id){
		$customer_id 	= $this->session->id;
		$role 			= $this->session->role;
		if(isset($id) && isset($customer_id) && isset($role) && $role == "CUSTOMER"){
			$this->load->model('services');
			$result = $this->services->finalize_service($id, $customer_id);

			if($result != FALSE){

				$this->load->model('app_users');
				$this->app_users->updateDiscount($result->row()->app_user_id);
				
				$status = $result->row()->status;
				if($status == 'FINALIZED'){
					redirect('customer/servicesList');
				}else{
					$this->render->renderViewWithError('service/list',lang("error_service_state"));
				}								
			}else{
				$this->render->renderViewWithError('service/list',lang("error_service_finish"));
			}
		}else{
			$this->render->renderViewWithError('main/main',lang("error_session_expired_not_logged"));
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
					$this->render->renderViewWithError('service/list',lang("error_service_state"));
				}								
			}else{
				$this->render->renderViewWithError('service/list',lang("error_service_cancel"));
			}
		}else{
			$this->render->renderViewWithError('main/main',lang("error_session_expired_not_logged"));
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
				$this->render->renderViewWithError('main/main',lang("error_show_tags"));
			}
		}else{
			$this->render->renderViewWithError('main/main',lang("error_session_expired_not_logged"));
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
				$this->render->renderViewWithError('main/main',lang("error_show_tags"));
			}
		}else{
			$this->render->renderViewWithError('main/main',lang("error_session_expired_not_logged"));
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
				$this->render->renderViewWithError('main/main',lang("error_edit_tags"));
			}
		}else{
			$this->render->renderViewWithError('main/main',lang("error_session_expired_not_logged"));
		}
	}

	public function servicesList(){
		$role 	= $this->session->role;
		$id 	= $this->session->id;
		if(isset($role) && $role == 'CUSTOMER' && isset($id)){
			$this->load->model('services');
			$result = $this->services->get_all_by_customer($id);
			
			$data['services'] = $result->result();
			$this->render->renderView('service/list',$data);
		}else{
			$this->render->renderViewWithError('main/main',lang("error_session_expired_not_logged"));
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
			$this->render->renderViewWithError('main/main',lang("error_session_expired_not_logged"));
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
