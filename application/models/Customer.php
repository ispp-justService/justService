<?php

class Customer extends CI_Model {

        public function __construct(){
            parent::__construct();
        }

		public function find_customer($data){

			$query = $this->db->get_where('customer',array('email'=> $data['email'] , 'password'=> $data['password']), 0, 0);

			return TRUE;
		}

		public function register_customer($data){
			
			$this->db->insert('customer',$data);

			return TRUE;
		}
}

?>
