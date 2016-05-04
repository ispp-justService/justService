<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class App_user_utils{
	
	public function checkForm(){
		
		$this->CI =& get_instance();

		$this->CI->form_validation->set_error_delimiters('<div class="alert alert-warning">', '</div>');

		$this->CI->form_validation->set_rules('name','Name','required');
		$this->CI->form_validation->set_rules('surname','Surname','required');
		$this->CI->form_validation->set_rules('password','Password','required');
		$this->CI->form_validation->set_rules('passwordConfirm','Confirm Password','required|matches[password]');
		$this->CI->form_validation->set_rules('email','Email','required|valid_email');
		
		return $this->CI->form_validation->run();
	}	

	public function checkRequestServiceForm(){
		
		$this->CI = & get_instance();
		
		$this->CI->form_validation->set_rules('description','Description','required');
		$this->CI->form_validation->set_rules('discount','Discount','decimal|less_than[max_discount]');

		return $this->CI->form_validation->run();
	}
}
?>
