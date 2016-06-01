<?php

class Customers extends CI_Model {

        public function __construct(){
            parent::__construct();
        }

		public function find_customer($id){

			$this->db->select("(select count(*) from service where customer_id = c1.customer_id and status = 'FINALIZED') as finalized_services, (select coalesce(sum(rating_user)/sum(case when coalesce(rating_user,0) = 0 then 0 else 1 end) , 2.5)
as rating from service where customer_id = c1.customer_id) as rating ,c1.*", FALSE);
			$this->db->from("customer as c1");
			$this->db->where("customer_id",$id);
			
			$query = $this->db->get();
			
			if($query->num_rows() == 1){
				return $query;
			}else{
				return FALSE;
			}
		}

		public function progress_this_month_by_customer($id){

			$this->db->select("(select sum(discount_to_apply) from service where customer_id = c1.customer_id and status = 'FINALIZED' and date_part('month', CURRENT_TIMESTAMP) = date_part('month', finalize_moment)) as discount, (select (count(*)/2) from service where c1.customer_id = customer_id and status = 'FINALIZED' and date_part('month', CURRENT_TIMESTAMP) = date_part('month', finalize_moment) group by customer_id having count(*) >= 2) as num_bonus,(select active from banner join customer using (customer_id) where customer_id = c1.customer_id and active = 't' and mustPay = 't') as hasbanner");
			$this->db->from("customer as c1");
			$this->db->where("c1.customer_id", $id);
			$query	= $this->db->get();

			if($query->num_rows() == 1){
				return $query;
			}else{
				return FALSE;
			}

		}

		public function register_customer($data){
			
			$this->db->insert('customer',$data);

			return TRUE;
		}

		public function get_all(){
			$query = $this->db->query("select (select sum(discount_to_apply) from service where customer_id = c1.customer_id and status = 'FINALIZED' and date_part('month', CURRENT_TIMESTAMP) = date_part('month', finalize_moment)) as discount, (select (count(*)/2) from service where c1.customer_id = customer_id and status = 'FINALIZED' and date_part('month', CURRENT_TIMESTAMP) = date_part('month', finalize_moment) group by customer_id having count(*) >= 2) as num_bonus,(select active from banner join customer using (customer_id) where customer_id = c1.customer_id and active = 't' and mustPay = 't') as hasbanner, c1.* from customer c1");
			return $query;
		}

		public function updateCustomer($id, $data){
			$this->db->where('customer_id', $id);
			$this->db->update('customer', $data); 
			
			$query = $this->find_customer($id);
			$customer = $query->row();

			if($customer->name == $data['name'] 
					and $customer->phone_number == $data['phone_number'] 
					and $customer->latitude 	== $data['latitude']
					and $customer->longitude	== $data['longitude']
					and $customer->zip_code		== $data['zip_code']
					and $customer->email 		== $data['email']
					and	$customer->password		== $data['password']){
				return $query;
			}else{
				return FALSE;
			}
		}	

	public function get_all_related_to_keywords($like){
		
		$this->db->select("customer_id as id");
		$this->db->distinct();
		$this->db->from("tag_entry");
		$this->db->join("tag","tag_entry.tag_id = tag.tag_id");
		foreach($like as $word){
			$this->db->or_like("name",$word,"both");
		}
		$query = $this->db->get();

		return $query;
	}

	public function get_ranking_business(){
		$query = $this->db->query("select c1.*,coalesce((select count(*) from service where status = 'FINALIZED' and date_part('month', CURRENT_TIMESTAMP) = date_part('month', finalize_moment) and customer_id = c1.customer_id group by customer_id),0) as servicios_finalizados from customer as c1 where type = 'Business' order by servicios_finalizados desc limit 3");
		return $query;
	}

	public function get_ranking_freelance(){
		$query = $this->db->query("select c1.*,coalesce((select count(*) from service where status = 'FINALIZED'and date_part('month', CURRENT_TIMESTAMP) = date_part('month', finalize_moment) and customer_id = c1.customer_id group by customer_id),0) as servicios_finalizados from customer as c1 where type = 'Freelance' order by servicios_finalizados desc limit 5");
		return $query;
	}

	public function get_all_related_to_keywords_order_by_distance($resultCustomersId, $latitude, $longitude, $limit, $page){


		$this->db->select("c.*, abs(sqrt(pow(latitude,2) + pow(longitude,2)) - sqrt(pow(".$latitude.",2) + pow(".$longitude.",2) )/ coalesce(sum(s.rating_customer) / sum( case when coalesce(s.rating_customer,0) = 0 then 0 else 1 end) , 2.5)) as distancia, coalesce(sum(s.rating_customer) / sum(case when coalesce(s.rating_customer,0) = 0 then 0 else 1 end) , 2.5) as rating", TRUE);
		$this->db->from('service as s ');
		$this->db->join('customer as c', "c.customer_id = s.customer_id", 'right');
		$this->db->where_in("c.customer_id",$this->utils->flatten($resultCustomersId));
		$this->db->where("c.deleted !=", TRUE);
		$this->db->group_by("c.customer_id");
		$this->db->limit($limit," OFFSET".( ($page - 1) * $limit));

		$query = $this->db->get();

		return $query;
	}		
	public function get_all_related_to_keywords_order_by_them($resultCustomersId, $limit, $page){

		$this->db->select("c.* , 1 / coalesce(sum(s.rating_customer) / sum(case when coalesce(s.rating_customer,0) = 0 then 0 else 1 end) , 2.5) as distancia, coalesce(sum(s.rating_customer) / sum(case when coalesce(s.rating_customer,0) = 0 then 0 else 1 end) , 2.5) as rating", TRUE);
		$this->db->from('service as s ');
		$this->db->join('customer as c', "c.customer_id = s.customer_id", 'right');
		$this->db->where_in("c.customer_id",$this->utils->flatten($resultCustomersId));
		$this->db->where("c.deleted !=", TRUE);
		$this->db->group_by("c.customer_id");
		$this->db->limit($limit," OFFSET".( ($page - 1) * $limit));

		$query = $this->db->get();

		return $query;
	}	

	public function upload_image($id, $image_path){
		$this->db->set('photo'			,$image_path);
		$this->db->where('customer_id'	, $id);
		$this->db->update('customer');

		$query = $this->find_customer($id);
		$customer = $query->row();

		if($customer->photo == $image_path){
			return TRUE;
		}else{
			return FALSE;
		}
	}
	
	public function is_customer_bookmarked_by_user($id, $app_user_id){

		$this->db->select('true as result', FALSE);
		$this->db->where('app_user_id', $app_user_id);
		$this->db->where('customer_id', $id);

		$query = $this->db->get("bookmark");

		$result = $query->num_rows();
		
		if($result > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}	

	public function get_by_my_bookmarks($app_user_id){

		$this->db->select("(select count(*) from service where customer_id = c1.customer_id and status = 'FINALIZED') as finalized_services, (select coalesce(sum(rating_customer)/sum(case when coalesce(rating_customer,0) = 0 then 0 else 1 end) , 2.5)
as rating from service where customer_id = c1.customer_id) as rating ,c1.* ");
		$this->db->from("customer as c1");
		$this->db->join("bookmark as b1","c1.customer_id = b1.customer_id","right");
		$this->db->where("b1.app_user_id", $app_user_id);

		$query = $this->db->get();

		return $query;
		
	}

	public function deactivateCustomer($customer_id){

		$data = array(
               'deleted' => TRUE
            );

		$this->db->where('customer_id', $customer_id);
		$this->db->update('customer', $data);  			

		$query = $this->find_customer($customer_id);

		if($query != FALSE){
			return $query;
		}else{
			return FALSE;
		}
	}

	public function get_customer_comments($customer_id){

		$this->db->select('rating_user as rating, comment_user as comment');

		$this->db->where('status', 'FINALIZED');
		$this->db->where('comment_user !=', '' );
		$this->db->where('customer_id', $customer_id);
		$this->db->where('rating_customer is not', null);
	
		$query = $this->db->get('service');

		return $query;

	}

}
?>
