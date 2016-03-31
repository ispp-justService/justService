<?php

class App_users extends CI_Model {

        public function __construct(){
                parent::__construct();
        }

		public function find_app_user($id){

			$query = $this->db->get_where('app_user',array('app_user_id'=> $id), 0, 0);
			
			if($query->num_rows() == 1){
				return $query;
			}else{
				return FALSE;
			}
		}

		public function register_user($data){

			$this->db->insert('app_user',$data);
			$query = $this->db->get_where('app_user',array('email'=> $data['email'],'password'=> $data['password']), 0, 0);
			
			if($query->num_rows() == 1){
				return $query;
			}else{
				return FALSE;
			}
		}

		public function get_all(){
				$query = $this->db->query('select app_user_id,name,surname,email,moment,discount,photo,zip_code,phone_number from app_user where deleted=false');
				return $query;
		}

		public function updateApp_user($id, $data){
			$this->db->where('app_user_id', $id);
			$this->db->update('app_user', $data); 
			
			$query = $this->find_app_user($id);
			$user = $query->row();

			if($user->name == $data['name'] 
					and $user->surname 		== $data['surname']
					and $user->email 		== $data['email']
					and	$user->password		== $data['password']){
				return $query;
			}else{
				return FALSE;
			}
		}	

}

?>
