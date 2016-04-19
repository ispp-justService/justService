<?php

class Services extends CI_Model {

	public function get_all_by_customer($id){

		$query = $this->db->query("select * from app_user a,service s where a.app_user_id = s.app_user_id and s.customer_id =".$id);

		return $query;
	
	}

	public function get_all_by_user($id){

		$query = $this->db->query("select * from customer c,service s where c.customer_id=s.customer_id and s.app_user_id =".$id);
			
		return $query;
	
	}

	public function finalize_service($id, $customer_id){
			
		$this->db->query("UPDATE service SET status = 'FINALIZED' where service_id =".$id.' and customer_id ='.$customer_id);

		$query = $this->db->query("select status from service where service_id =".$id);
		
		if($query->num_rows() == 1){
			return $query;
		}else{
			return FALSE;
		}
	}

	public function activate_service($id, $customer_id){
			
		$this->db->query("UPDATE service SET status = 'ACTIVE' where service_id =".$id.' and customer_id ='.$customer_id);

		$query = $this->db->query("select status from service where service_id =".$id);
		
		if($query->num_rows() == 1){
			return $query;
		}else{
			return FALSE;
		}
	}

	public function cancel_service_by_user($id, $user_id){
			
		$this->db->query("UPDATE service SET status = 'CANCELLED' where service_id =".$id.' and app_user_id ='.$user_id);

		$query = $this->db->query("select status from service where service_id =".$id);
		
		if($query->num_rows() == 1){
			return $query;
		}else{
			return FALSE;
		}
	}

	public function cancel_service_by_customer($id, $customer_id){
			
		$this->db->query("UPDATE service SET status = 'CANCELLED' where service_id =".$id.' and customer_id ='.$customer_id);

		$query = $this->db->query("select status from service where service_id =".$id);
		
		if($query->num_rows() == 1){
			return $query;
		}else{
			return FALSE;
		}
	}
	
	public function rate_service_by_customer($id, $customer_id, $rating_customer, $comment_customer){
		
		$this->db->query("UPDATE service SET 
								rating_customer=".$rating_customer." , 
								comment_customer='".$comment_customer."' 
							where service_id=".$id." and customer_id=".$customer_id);

		$query = $this->db->query("select rating_customer, comment_customer from service where service_id =".$id);
		
		if($query->num_rows() == 1){
			return $query;
		}else{
			return FALSE;
		}
	}

	public function rate_service_by_user($id, $user_id, $rating_user, $comment_user){
		
		$this->db->query("UPDATE service SET 
								rating_user=".$rating_user." , 
								comment_user='".$comment_user."' 
							where service_id=".$id." and app_user_id=".$user_id);

		$query = $this->db->query("select rating_user, comment_user from service where service_id =".$id);
		
		if($query->num_rows() == 1){
			return $query;
		}else{
			return FALSE;
		}
	}


}
?>
