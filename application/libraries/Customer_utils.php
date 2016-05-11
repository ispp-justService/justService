<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Customer_utils{
	
	public function checkForm(){
		
		$this->CI =& get_instance();
		
		$this->CI->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		$this->CI->form_validation->set_rules('name','Name','required');
		$this->CI->form_validation->set_rules('type','Type','required');
		$this->CI->form_validation->set_rules('phoneNumber','Phone Number','required|numeric');
		$this->CI->form_validation->set_rules('latitude','Latitude','required|decimal');		
		$this->CI->form_validation->set_rules('longitude','Longitude','required|decimal');		
		$this->CI->form_validation->set_rules('password','Password','required');
		$this->CI->form_validation->set_rules('passwordConfirm','Confirm Password','required|matches[password]');
		$this->CI->form_validation->set_rules('email','Email','required|valid_email');
		$this->CI->form_validation->set_rules('zipCode','ZipCode','required|numeric');	

		return $this->CI->form_validation->run();
	}	
}
?>
