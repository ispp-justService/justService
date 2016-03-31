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
}

?>
