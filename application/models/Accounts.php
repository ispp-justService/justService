<?php

class Accounts extends CI_Model {

        public function __construct(){
                parent::__construct();
        }

		public function login_as_administrator($data){
			
				$this->db->select('email, password');
				$this->db->from('administrator');
				$this->db->where('email = '. "'". $data['email'] . "'");
				
				$query = $this->db->get();
				
				if($query -> num_rows() == 1){
				    return $query->row();
				}
				else{
				    return false;
				}
		}

		public function login_as_customer($data){
			
				$this->db->select('customer_id, password,name');
				$this->db->from('customer');
				$this->db->where('email = '. "'". $data['email'] . "'");
				$this->db->where("deleted != 't'");
				
				$query = $this->db->get();
				
				if($query -> num_rows() == 1){
				    return $query->row();
				}
				else{
				    return false;
				}
		}

		public function login_as_app_user($data){
			
				$this->db->select('app_user_id, password,name');
				$this->db->from('app_user');
				$this->db->where('email = '. "'". $data['email'] . "'");
				$this->db->where("deleted != 't'");
				
				$query = $this->db->get();
				
				if($query -> num_rows() == 1){
				    return $query->row();
				}
				else{
				    return false;
				}
		}


}

?>
