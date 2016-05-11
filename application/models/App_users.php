<?php

class App_users extends CI_Model {

        public function __construct(){
                parent::__construct();
        }

		public function find_app_user($id){

			$query = $this->db->query("select (select coalesce(sum(rating_user)/sum(case when coalesce(rating_user,0) = 0 then 0 else 1 end) , 2.5)
as rating from service where app_user_id = a1.app_user_id) as rating, a1.* from app_user as a1 where a1.app_user_id = ".$id);
			
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
			$query = $this->db->get('app_user');
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

		public function upload_image($id, $image_path){
			$this->db->set('photo'			,$image_path);
			$this->db->where('app_user_id'	, $id);
			$this->db->update('app_user');

			$query = $this->find_app_user($id);
			$user = $query->row();

			if($user->photo == $image_path){
				return TRUE;
			}else{
				return FALSE;
			}
		}

		public function bookmark_a_customer($id, $customerId){

			$data = array(
			   'app_user_id' => $id ,
			   'customer_id' => $customerId
			);
	
			$this->db->where('app_user_id', $id);
			$prev = $this->db->count_all("bookmark");

			$this->db->insert('bookmark', $data); 

			$this->db->where('app_user_id', $id);
			$after = $this->db->count_all("bookmark");

			if($after > $prev){
				return TRUE;	
			}else{
				return FALSE;
			}
		}

		public function unBookmark_a_customer($id, $customerId){

			$this->db->where('app_user_id', $id);
			$this->db->where('customer_id', $customerId);

			$this->db->delete('bookmark'); 
		}

		public function deactivateUser($app_user_id){

			$data = array(
		           'deleted' => TRUE
		        );

			$this->db->where('app_user_id', $app_user_id);
			$this->db->update('app_user', $data);  			

			$query = $this->find_app_user($app_user_id);

			if($query != FALSE){
				return $query;
			}else{
				return FALSE;
			}
		}
		public function get_user_comments($app_user_id){

			$this->db->select('rating_customer as rating, comment_customer as comment');

			$this->db->where('status', 'FINALIZED');
			$this->db->where('comment_customer !=', '' );
			$this->db->where('app_user_id', $app_user_id);
			$this->db->where('rating_user is not', null);
	
			$query = $this->db->get('service');

			return $query;

		}

		public function updateDiscount($app_user_id){

			$this->db->select('count(*) % 2 = 0 as services');
			$this->db->where('app_user_id', $app_user_id);
			$this->db->where('status', 'FINALIZED');

			$increaseDiscount = $this->db->get('service')->row()->services;			

			if($increaseDiscount == 't'){
			
				$this->db->query("UPDATE app_user SET discount = discount + 10.00 WHERE app_user_id = '".$app_user_id."'");

			}

		}

}

?>
