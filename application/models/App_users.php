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
				$query = $this->db->get('app_user');
				return $query;
		}

}

?>
