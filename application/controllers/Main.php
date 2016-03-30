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
		$result = $this->accounts->login($data);
		if($result == false){
			echo "fallo en el login";
		}else{
			if(password_verify($data['password'], $result->password)){
				$this->session->set_userdata('user',$result);
				$this->render->renderView('main/main');
			}else{
				echo "contraseña incorrecta";
			}
		}
	}
}

?>
