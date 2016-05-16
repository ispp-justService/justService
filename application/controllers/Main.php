<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Main extends CI_Controller {

	public function index(){


		$this->load->model('tags');

		$result = $this->tags->get_all();
		$data['tags'] = $result->result();

		$this->render->renderView('main/main', $data);

	}

	public function login(){
		$data['email'] 		= $this->input->post('email');
		$data['password'] 	= $this->input->post('password');	
		
		$this->load->model('accounts');
		$role = "";
		$id = "";
		$name = "";
		$photo = "";
		$type = "";
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
					$photo = $result->photo;
				}
			}else{
				$role = "CUSTOMER";
				$id = $result->customer_id;
				$name = $result->name;
				$photo = $result->photo;
				$type = $result->type;
			}
		}else{
			$role = "ADMINISTRATOR";		
			$id = $result->email;
			$name = $result->email;	
		}

		// Si finalmente el resultado es falso, ha fallado el login
		if($result == false){
			$this->render->renderViewWithError('main/main',lang("error_wrong_credentials"));
		}else{
			if(password_verify($data['password'], $result->password)){
				
				$this->session->set_userdata('role',$role);
				$this->session->set_userdata('id',$id);
				$this->session->set_userdata('name',$name);
				$this->session->set_userdata('photo',$photo);
				$this->session->set_userdata('type',$type);
				$this->render->renderView('main/main');
			}else{
				$this->render->renderViewWithError('main/main',lang("error_wrong_password"));
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
				$this->render->renderViewWithError('main/main',lang("error_wrong_image"));	
			}else{
				$image_name = $this->upload->data()['file_name'];

				if($role == 'APP_USER'){
					$this->load->model('app_users');
					$result = $this->app_users->upload_image($id,'././assets/uploads/'.$image_name);	

					if($result == TRUE){
						redirect('app_user/showProfile/'.$id);
					}else{
						$this->render->renderViewWithError('main/main',lang("error_uploading_image"));
					}
				}elseif($role == 'CUSTOMER'){
					$this->load->model('customers');
					$result = $this->customers->upload_image($id,'././assets/uploads/'.$image_name);	

					if($result == TRUE){
						redirect('customer/showProfile/'.$id);
					}else{
						$this->render->renderViewWithError('main/main',lang("error_uploading_image"));
					}
				}
			}
		}else{
			$this->render->renderViewWithError('main/main',lang('error_no_change_user_image'));
		}
	}

	public function get_active_banners(){

		$this->load->model("banners");
		$result = $this->banners->get_active_banners();

		return $result;
	}

	public function changeLanguage($type){
	
		if($type == "spanish" || $type == "english"){
			$this->session->set_userdata('language',$type);
		}

		redirect("main");
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('/'), 'refresh'); 
	}

	public function aboutUs(){
		$this->render->renderView('main/aboutUs');
	}
}

?>
