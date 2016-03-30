<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller {

	public function usersList(){
		$this->load->model('app_users');

		$query = $this->app_users->get_all();

		$data['users'] = $query->result();

		$this->render->renderView('admin/usersList',$data);
	}
}

?>
