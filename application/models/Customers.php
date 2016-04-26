<?php

class Customers extends CI_Model {

        public function __construct(){
            parent::__construct();
        }

		public function find_customer($id){

			$query = $this->db->get_where('customer',array('customer_id'=> $id), 0, 0);
			
			if($query->num_rows() == 1){
				return $query;
			}else{
				return FALSE;
			}
		}

		public function register_customer($data){
			
			$this->db->insert('customer',$data);

			return TRUE;
		}

		public function get_all(){
			$query = $this->db->get('customer');
			return $query;
		}

		public function updateCustomer($id, $data){
			$this->db->where('customer_id', $id);
			$this->db->update('customer', $data); 
			
			$query = $this->find_customer($id);
			$customer = $query->row();

			if($customer->name == $data['name'] 
					and $customer->phone_number == $data['phone_number'] 
					and $customer->latitude 	== $data['latitude']
					and $customer->longitude	== $data['longitude']
					and $customer->zip_code		== $data['zip_code']
					and $customer->email 		== $data['email']
					and	$customer->password		== $data['password']){
				return $query;
			}else{
				return FALSE;
			}
		}	

	public function get_all_related_to_keywords($like){

		$query = $this->db->query("SELECT distinct customer_id FROM tag_entry NATURAL JOIN tag WHERE name like any ('{".$like."}')");
		return $query;
	}

	public function get_all_related_to_keywords_order_by_distance($like, $latitude, $longitude, $limit, $page){

		$query = $this->db->query("SELECT c.* , abs( 
														sqrt(pow(latitude,2) + pow(longitude,2)) - sqrt(pow(".$latitude.",2) + pow(".$longitude.",2) ) ) 
														/ 
														coalesce(sum(s.rating_customer) 
																		/ 
																 sum(case when coalesce(s.rating_customer,0) = 0 then 0 else 1 end) , 2.5) 
												as distancia,
												coalesce(sum(s.rating_customer) 
																		/ 
																 sum(case when coalesce(s.rating_customer,0) = 0 then 0 else 1 end) , 2.5)
														as rating
										FROM service s JOIN customer c USING (customer_id) 
												WHERE c.customer_id 
														IN 
														(SELECT distinct customer_id 
																	FROM tag_entry NATURAL JOIN tag 
																				WHERE name like any ('{".$like."}') )
										GROUP BY c.customer_id ORDER BY distancia
										LIMIT ".$limit." OFFSET ".( ($page - 1) * $limit));
		return $query;
	}		
	public function get_all_related_to_keywords_order_by_them($like, $limit, $page){

		$query = $this->db->query("SELECT c.* , 1 / coalesce(sum(s.rating_customer) / 
																 sum(case when coalesce(s.rating_customer,0) = 0 then 0 else 1 end) , 2.5) 
												as distancia,
												coalesce(sum(s.rating_customer) 
																		/ 
																 sum(case when coalesce(s.rating_customer,0) = 0 then 0 else 1 end) , 2.5)
														as rating
										FROM service s JOIN customer c USING (customer_id) 
												WHERE c.customer_id 
														IN 
														(SELECT distinct customer_id 
																	FROM tag_entry NATURAL JOIN tag 
																				WHERE name like any ('{".$like."}') )
										GROUP BY c.customer_id ORDER BY distancia
										LIMIT ".$limit." OFFSET ".( ($page - 1) * $limit));
		return $query;
	}	

	public function upload_image($id, $image_path){
		$this->db->set('photo'			,$image_path);
		$this->db->where('customer_id'	, $id);
		$this->db->update('customer');

		$query = $this->find_customer($id);
		$customer = $query->row();

		if($customer->photo == $image_path){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	public function is_customer_bookmarked_by_user($id, $app_user_id){

		$this->db->select('true as result', FALSE);
		$this->db->where('app_user_id', $app_user_id);
		$this->db->where('customer_id', $id);

		$query = $this->db->get("bookmark");

		$result = $query->num_rows();
		
		if($result > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}	

	public function get_by_my_bookmarks($app_user_id){

		$this->db->select('c.*');
		$this->db->where('app_user_id', $app_user_id);	
		$this->db->from('bookmark b');
		$this->db->join('customer c', 'c.customer_id = b.customer_id');

		$query = $this->db->get();

		return $query;
		
	}
}
?>
