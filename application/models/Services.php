<?php

class Services extends CI_Model {

	public function get_all_by_customer($id){

		$this->db->from("app_user as a");
		$this->db->join("service as s", "a.app_user_id = s.app_user_id");
		$this->db->where("s.customer_id", $id);
		$this->db->order_by("s.moment", "desc");

		$query = $this->db->get();

		return $query;
	
	}

	public function get_all_by_user($id){

		$this->db->from("customer as c");
		$this->db->join("service as s", "c.customer_id = s.customer_id");
		$this->db->where("s.app_user_id", $id);
		$this->db->order_by("s.moment", "desc");

		$query = $this->db->get();
			
		return $query;
	
	}

	public function finalize_service($id, $customer_id){

		$this->db->set('status','FINALIZED');
		$this->db->set('finalize_moment','CURRENT_TIMESTAMP', FALSE);

		$this->db->where("service_id", $id);
		$this->db->where("customer_id", $customer_id);

		$this->db->update("service");

		$query = $this->db->query("select * from service where service_id =".$id);
		
		if($query->num_rows() == 1){
			return $query;
		}else{
			return FALSE;
		}
	}

	public function create_pending_service($user_id, $customer_id, $description){

		$this->db->trans_begin();

		// Obtengo el número previo
		$prev_number = $this->get_all_by_user($user_id)->num_rows();

		// Inserto la petición
		$data = array(
				   	'description' 		=> $description ,
				   	'status' 			=> 'PENDING' ,
				   	'customer_id' 		=> $customer_id,
					'app_user_id' 		=> $user_id
				);

		$this->db->insert('service', $data);

		// Recojo el número posterior
		$next_number = $this->get_all_by_user($user_id)->num_rows();
	
		if ($this->db->trans_status() === FALSE || !($next_number > $prev_number)){
			$this->db->trans_rollback();
			return FALSE;
		}
		else{
			$this->db->trans_commit();
			return TRUE;
		}
	}

	public function add_discount($id, $app_user_id, $discount){
		$this->db->trans_start();
		
		// Actualizar el descuento en el servicio
		$this->db->set('discount_to_apply', $discount);
		$this->db->where('service_id',$id);
		$this->db->update('service');

		// Actualizar el descuento en el usuario
		$this->db->set('discount','discount - '.$discount, FALSE);
		$this->db->where('app_user_id',$app_user_id);
		$this->db->update('app_user');
		
		$this->db->trans_complete();

		return $this->db->trans_status();
	}

	public function activate_service($id, $customer_id){

		$this->db->set('status','ACTIVE');
		$this->db->where('service_id', $id);
		$this->db->where('customer_id', $customer_id);
		$this->db->update("service");

		$query = $this->db->query("select status from service where service_id =".$id);
		
		if($query->num_rows() == 1){
			return $query;
		}else{
			return FALSE;
		}
	}

	public function cancel_service_by_user($id, $user_id){

		$this->db->set("status", 'CANCELLED');
		$this->db->where("service_id", $id);
		$this->db->where("app_user_id", $user_id);
		$this->db->update("service");

		$query = $this->db->query("select status from service where service_id =".$id);
		
		if($query->num_rows() == 1){
			return $query;
		}else{
			return FALSE;
		}
	}

	public function cancel_service_by_customer($id, $customer_id){

		$this->db->set("status", 'CANCELLED');
		$this->db->where("service_id", $id);
		$this->db->where("customer_id", $customer_id);
		$this->db->update("service");

		$query = $this->db->query("select status from service where service_id =".$id);
		
		if($query->num_rows() == 1){
			return $query;
		}else{
			return FALSE;
		}
	}
	
	public function rate_service_by_customer($id, $customer_id, $rating_customer, $comment_customer){

		$this->db->set("rating_customer",$rating_customer);
		$this->db->set("comment_customer", $comment_customer);
		
		$this->db->where("service_id", $id);
		$this->db->where("customer_id", $customer_id);

		$this->db->update("service");
		

		$query = $this->db->query("select rating_customer, comment_customer from service where service_id =".$id);
		
		if($query->num_rows() == 1){
			return $query;
		}else{
			return FALSE;
		}
	}

	public function rate_service_by_user($id, $user_id, $rating_user, $comment_user){
		

		$this->db->set("rating_user",$rating_user);
		$this->db->set("comment_user", $comment_user);
		
		$this->db->where("service_id", $id);
		$this->db->where("app_user_id", $user_id);

		$this->db->update("service");

		$query = $this->db->query("select rating_user, comment_user from service where service_id =".$id);
		
		if($query->num_rows() == 1){
			return $query;
		}else{
			return FALSE;
		}
	}

}
?>
