<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class App_user extends CI_Controller {

	public function signup(){
		$this->render->renderView('app_user/signup');
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

	public function showProfile(){
		$id = $this->session->id;
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
}

?>
