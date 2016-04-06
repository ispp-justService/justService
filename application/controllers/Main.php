<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Main extends CI_Controller {

	public function index(){
		$this->render->renderView('main/main');
	}

	public function login(){
		$data['email'] 		= $this->input->post('email');
		$data['password'] 	= $this->input->post('password');	
		
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
			echo "fallo en el login";
		}else{
			if(password_verify($data['password'], $result->password)){
				
				$this->session->set_userdata('role',$role);
				$this->session->set_userdata('id',$id);
				$this->session->set_userdata('name',$name);
				$this->render->renderView('main/main');
			}else{
				echo "contraseña incorrecta";
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('/'), 'refresh'); 
	}
}

?>
