<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Customer extends CI_Controller {

	public function showProfile(){
		$id = $this->session->id;
		if(isset($id)){
			$this->load->model('customers');
			$result = $this->customers->find_customer($id);
		
			if($result != FALSE){
				$data['customer'] = $result->row();
				$this->render->renderView('customer/profile',$data);
			}else{
			
			}
		}
	}
}

?>
