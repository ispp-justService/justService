<?php

class App_user extends CI_Model {

        public function __construct(){
                parent::__construct();
        }

		public function find_customer($data){

				$query = $this->db->get_where('customer',array('email'=> $data['email'] , 'password'=> $data['password']), 0, 0);

				return TRUE;
		}

}

?>
