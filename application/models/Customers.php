<?php

class Customers extends CI_Model {

        public function __construct(){
                parent::__construct();
        }

	public function get_all(){
			$query = $this->db->get('customer');
			return $query;
	}

}

?>
