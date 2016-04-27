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

	public function use_banner($banner_id, $customer_id){
		
		// Obtenemos de ese cliente el banner activo que tenga
		$this->db->where('customer_id', $customer_id);
		$this->db->where('active', 't');
		$query = $this->db->get('banner');
		
		if($query->num_rows() != 0){
			// Si hay un banner activo, lo tenemos que dejar desactivado
			$used_banner_id = $query->row()->banner_id;
			
			$data = array('active' => FALSE);

			$this->db->where('banner_id', $used_banner_id);
			$this->db->update('banner', $data);  
		}

		// Ahora hacemos activo el que estamos considerando
		$data = array('active' => TRUE);

		$this->db->where('banner_id', $banner_id);
		$this->db->update('banner', $data);  
		
		// Lo recogemos y preguntamos si de verdad todo está correcto
		$query = $this->db->get_where('banner',array('banner_id'=> $banner_id), 0, 0);
		$row = $query->row();
		if($row->active == 't'){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function get_active_banners(){

		$this->db->where('active', 't');
		$this->db->order_by('banner_id', 'RANDOM');
		$this->db->limit(3);

		$query = $this->db->get('banner');

		return $query;
	}

}
?>
