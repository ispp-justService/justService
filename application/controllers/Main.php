<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Main extends CI_Controller {

	public function index(){
		$this->render->renderView('main/main');
	}

	public function login(){
		$data['email'] 		= $this->input->post('email');
		$data['password'] 	= $this->input->post('password');	
		$latitude 			= $this->input->post('latitude');
		$longitude			= $this->input->post('longitude');
		
		$this->load->model('accounts');
		$role = "";
		$id = "";
		$name = "";
		// Intentamos primero el login del admin
			$result = $this->accounts->login_as_administrator($data);
		if($result == false){
			// El login del admin ha fallado, intentamos el del customer
			$result = $this->accounts->login_as_customer($data);
			if($result == false){
				// El login del customer ha llado, intentamos el del app_user
				$result = $this->accounts->login_as_app_user($data);
				if($result != false){
					$role = "APP_USER";
					$id = $result->app_user_id;
					$name = $result->name;
				}
			}else{
				$role = "CUSTOMER";
				$id = $result->customer_id;
				$name = $result->name;
			}
		}else{
			$role = "ADMINISTRATOR";		
			$id = $result->email;
			$name = $result->email;		
		}

		// Si finalmente el resultado es falso, ha fallado el login
		if($result == false){
			$this->render->renderViewWithError('main/main',"Sorry. Did you put your credentials correctly?");
		}else{
			if(password_verify($data['password'], $result->password)){
				
				$this->session->set_userdata('role',$role);
				$this->session->set_userdata('id',$id);
				$this->session->set_userdata('name',$name);
				$this->session->set_userdata('latitude',$latitude);
				$this->session->set_userdata('longitude',$longitude);
				$this->render->renderView('main/main');
			}else{
				$this->render->renderViewWithError('main/main',"Wrong password.");
			}
		}
	}

	public function uploadImage(){
		$id 	= $this->input->post("id");
		$role 	= $this->input->post("role");

		if(isset($role) && isset($id)){
			$config['upload_path'] = '././assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('image')){
				//echo $this->upload->display_errors();
				$this->render->renderViewWithError('main/main',"Error at uploading the selected image. Maybe try another format or reduce the size.");	
			}else{
				$image_name = $this->upload->data()['file_name'];

				if($role == 'APP_USER'){
					$this->load->model('app_users');
					$result = $this->app_users->upload_image($id,'././assets/uploads/'.$image_name);	

					if($result == TRUE){
						redirect('app_user/showProfile/'.$id);
					}else{
						$this->render->renderViewWithError('main/main',"There was an error at uploading your image.");
					}
				}elseif($role == 'CUSTOMER'){
					$this->load->model('customers');
					$result = $this->customers->upload_image($id,'././assets/uploads/'.$image_name);	

					if($result == TRUE){
						redirect('customer/showProfile/'.$id);
					}else{
						$this->render->renderViewWithError('main/main',"There was an error at uploading your image.");
					}
				}
			}
		}else{
			$this->render->renderViewWithError('main/main',"You cannot change other user's image.");
		}
	}

	public function get_active_banners(){

		$this->load->model("banners");
		$result = $this->banners->get_active_banners();

		return $result;
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('/'), 'refresh'); 
	}
}

?>
