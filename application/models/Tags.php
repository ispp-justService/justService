<?php

class Tags extends CI_Model {

	public function get_tags_by_customer($id){

		$query = $this->db->query("select name from tag_entry natural join tag where customer_id = ".$id);
		
		return $query;
	}
	
	public function get_tags_to_edit_by_customer($id){

		$query = $this->db->query("select t.tag_id, name, (select TRUE from tag_entry as t1 where customer_id=".$id."and t.tag_id = t1.tag_id) as checked from tag as t");

		return $query;
	}

	public function modify_tags($id,$newTags){
		$this->db->trans_start();	
			
			$this->db->query('delete from tag_entry where customer_id ='.$id);

			foreach($newTags as $tag_id){
				$this->db->query('insert into tag_entry values('.$id.','.$tag_id.')');
			}

		$this->db->trans_complete();

		return $this->db->trans_status();
	}

}
?>

