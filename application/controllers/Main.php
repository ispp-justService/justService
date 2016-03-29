<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Main extends CI_Controller {

	public function index(){
		$this->render->renderView('customer/profile');
	}

	public function login(){
		$data['email'] 		= $this->input->post('email');
		$data['password'] 	= $this->input->post('password');	
		
		$this->load->model('accounts');
		$result = $this->accounts->login($data);
		if($result == false){
			echo "fallo en el login";
		}else{
			if(password_verify($data['password'], $result->password)){
				echo "login con exito";
			}else{
				echo "contraseña incorrecta";
			}
		}
	}
}

?>
