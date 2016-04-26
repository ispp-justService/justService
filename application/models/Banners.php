<?php

class Banners extends CI_Model {
		
	public function get_by_customer_id($customer_id){
		
		$this->db->where("customer_id", $customer_id);
		$query = $this->db->get("banner");

		return $query;
	}

	public function create_banner($data){

		$this->db->where("customer_id",$data['customer_id']);
		$this->db->from("banner");
		$prev = $this->db->count_all_results();

		$this->db->insert('banner',$data);

		$this->db->where("customer_id",$data['customer_id']);
		$this->db->from("banner");
		$after = $this->db->count_all_results();

		if($after > $prev){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function deactivate_banner($banner_id){
		
		$data = array('delete' => TRUE);

		$this->db->where('banner_id', $banner_id);
		$this->db->update('banner', $data);  

		$query = $this->db->get_where('banner',array('banner_id'=> $banner_id), 0, 0);

		$row = $query->row();			

		if($row->delete == "t"){
			return TRUE;
		}else{
			return FALSE;
		}		
		
	}

}
?>
