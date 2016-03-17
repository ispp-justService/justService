<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Signup extends CI_Controller {

	public function index(){
		$this->load->view('signup');
	}

	public function sendRegistration(){
		echo $this->input->post('name');
	}
}

?>
