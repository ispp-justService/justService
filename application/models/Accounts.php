<?php

class Accounts extends CI_Model {

        public function __construct(){
                parent::__construct();
        }

		public function login($data){
				$result = $this->login_as_administrator($data);				
				if($result == false){
					$result = $this->login_as_customer($data);
					if($result == false){
						$result = $this->login_as_app_user($data);
						if($result != false){
							$result = $result->row();
						}
					}else{
						$result = $result->row();						
					}
				}else{
					$result = $result->row();
				}

				return $result;
		}

		private function login_as_administrator($data){
			
				$this->db->select('email, password');
				$this->db->from('administrator');
				$this->db->where('email = '. "'". $data['email'] . "'");
				
				$query = $this->db->get();
				
				if($query -> num_rows() == 1){
				    return $query;
				}
				else{
				    return false;
				}
		}

		private function login_as_customer($data){
			
				$this->db->select('email, password');
				$this->db->from('customer');
				$this->db->where('email = '. "'". $data['email'] . "'");
				
				$query = $this->db->get();
				
				if($query -> num_rows() == 1){
					$query->type = 'CUSTOMER';
				    return $query;
				}
				else{
				    return false;
				}
		}

		private function login_as_app_user($data){
			
				$this->db->select('email, password');
				$this->db->from('app_user');
				$this->db->where('email = '. "'". $data['email'] . "'");
				
				$query = $this->db->get();
				
				if($query -> num_rows() == 1){
				    return $query;
				}
				else{
				    return false;
				}
		}


}

?>
