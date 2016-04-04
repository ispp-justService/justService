<?php

class Services extends CI_Model {

	public function get_all_by_customer($id){

		$query = $this->db->get_where('service',array('customer_id'=> $id), 0, 0);		
		return $query;
	
	}

	public function get_all_by_user($id){

		$query = $this->db->get_where('service',array('app_user_id'=> $id), 0, 0);		
		return $query;
	
	}


}
?>
