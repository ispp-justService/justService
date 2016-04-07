<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Render{

	public function renderView($nameView, $data = array()){

		$this->CI =& get_instance();

		$content_data['content'] = $this->CI->load->view($nameView, $data, TRUE);

		return $this->CI->load->view('template', $content_data, FALSE);
	}

	public function renderViewWithError($nameView,  $error, $data = array()){

		$data['error'] = $error;

		$this->CI =& get_instance();

		$content_data['content'] = $this->CI->load->view($nameView, $data, TRUE);

		return $this->CI->load->view('template', $content_data, FALSE);
	}

}
?>
