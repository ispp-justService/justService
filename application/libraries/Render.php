<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Render{

	public function renderView($nameView){

		$CI =& get_instance();

		$CI->load->view('header');
		$CI->load->view('main/'.$nameView);
		$CI->load->view('footer');

	}
}
?>
