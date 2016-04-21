<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class App_user extends CI_Controller {

	public function signup(){
		$this->render->renderView('app_user/signup');
	}

	public function servicesList(){
		$role 	= $this->session->role;
		$id 	= $this->session->id;
		if(isset($role) && $role == 'APP_USER' && isset($id)){
			$this->load->model('services');
			$result = $this->services->get_all_by_user($id);
			
			$data['services'] = $result->result();
			$this->render->renderView('app_user/servicesList',$data);
		}else{
			$this->render->renderViewWithError('main/main',"Session expired or you are not an User");
		}
	}

	public function sendRegistration(){

		$this->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');

		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('surname','Surname','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('passwordConfirm','Confirm Password','required|matches[password]');
		$this->form_validation->set_rules('email','Email','required|valid_email');

		if($this->form_validation->run() == FALSE){
			$this->render->renderView('app_user/signup');
		}else{
			$data['name'] = $this->input->post('name');
			$data['surname'] = $this->input->post('surname');
			$data['password'] = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
			$data['email'] = $this->input->post('email');

			$this->load->model('app_users');
			$result = $this->app_users->register_user($data);
			if($result != FALSE){
				$result = $result->row();
				$this->session->set_userdata('role',"APP_USER");
				$this->session->set_userdata('id',$result->app_user_id);
				$this->render->renderView('main/main');			
			}
		}
	}

	public function createPendingService(){
		$user_id 	= $this->session->id;
		$role 			= $this->session->role;
		if(isset($id) && isset($user_id) && isset($role) && $role == "APP_USER"){

			$customer_id = $this->input->post('customer_id');
			$description = $this->input->post('description');
			
						
		
		}		
	}

	public function cancelService($id){
		$user_id 	= $this->session->id;
		$role 			= $this->session->role;
		if(isset($id) && isset($user_id) && isset($role) && $role == "APP_USER"){
			$this->load->model('services');
			$result = $this->services->cancel_service_by_user($id, $user_id);

			if($result != FALSE){
				$status = $result->row()->status;
				if($status == 'CANCELLED'){
					redirect('app_user/servicesList');
				}else{
					echo "estado no cambiado";
				}								
			}else{
				echo "no se ha podido finalizar servicio";
			}
		}else{
			$this->render->renderViewWithError('main/main',"Session expired or you are not an User");
		}
	}

	public function rateService($id){
		$user_id 	= $this->session->id;
		$role 			= $this->session->role;
		if(isset($id) && isset($user_id) && isset($role) && $role == "APP_USER"){
			$this->load->model("services");
			$rating_user = $this->input->post("rating_user");
			$comment_user = $this->input->post("comment_user");
			
			$result = $this->services->rate_service_by_user($id,$user_id,$rating_user,$comment_user);
			
			if($result != FALSE){
				$result = $result->row();
				if($result->rating_user == $rating_user && $result->comment_user == $comment_user){
					redirect('app_user/servicesList');
				}
			}
		}else{
			$this->render->renderViewWithError('main/main',"Session expired or you are not an User");
		}
	}

	public function showProfile($id){
		if(isset($id)){
			$this->load->model('app_users');
			$result = $this->app_users->find_app_user($id);
		
			if($result != FALSE){
				$data['user'] = $result->row();
				$this->render->renderView('app_user/profile',$data);
			}else{
			
			}
		}
	}

	public function editInformation(){
		$id = $this->session->id;
		if(isset($id)){
			$this->load->model('app_users');
			$result = $this->app_users->find_app_user($id);

			if($result != FALSE){
				$data['user'] = $result->row();
				$this->render->renderView('app_user/editInformation',$data);
			}
		}		
	}

	public function sendEditInformation(){
		$this->load->library('app_user_utils');
		$this->load->model('app_users');
		
		$checkForm = $this->app_user_utils->checkForm();
		$role = $this->session->role;
		$id = $this->session->id;

		if(isset($id) and isset($role) and $checkForm != FALSE and $role == "APP_USER"){
			$data['name'] = $this->input->post('name');
			$data['surname'] = $this->input->post('surname');	
			$data['password'] = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
			$data['email'] = $this->input->post('email');
			if($this->input->post('zipCode')!=""){
				$data['zip_code'] = $this->input->post('zipCode');			
			}
			if($this->input->post('phoneNumber')!=""){
				$data['phone_number'] = $this->input->post('phoneNumber');						
			}			
			$updateUser = $this->app_users->updateApp_user($id, $data);
			if($updateUser!=FALSE){
				$data['user'] = $updateUser->row();
				$this->render->renderView('app_user/profile',$data);			
			}
		}else{
			$result = $this->app_users->find_app_user($id);
			if($result != FALSE){
				$data['user'] = $result->row();
				$this->render->renderView('app_user/editInformation',$data);
			}
		}			
	}	
}

?>
