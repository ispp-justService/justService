<?php

class App_users extends CI_Model {

        public function __construct(){
                parent::__construct();
        }

		public function register_user($data){

				$this->db->insert('app_user',$data);

				return TRUE;
		}

		public function get_all(){
				$query = $this->db->query('select app_user_id,name,surname,email,moment,discount,photo,zip_code,phone_number from app_user where deleted=false');
				return $query;
		}

}

?>
