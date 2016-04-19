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

	public function get_all_related_to_text_search($text_search){
		$query = $this->db->query("select * from customer 
											where customer_id in 
													(select distinct customer_id from tag_entry natural join tag 
																		where name like '%".$text_search."%');");
		return $query;
	}		
}
?>
