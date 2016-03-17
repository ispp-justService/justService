<?php

class App_user extends CI_Model {

        public function __construct(){
                parent::__construct();
        }

		public function register_user($data){

				$this->db->insert('app_user',$data);

				return TRUE;
		}

}

?>
