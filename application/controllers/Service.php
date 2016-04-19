<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Service extends CI_Controller {

	public function search(){

		// set up the marker ready for positioning 
		// once we know the users location
	


		$text_search = $this->input->post('text_search');
		if($text_search != ""){

			$latitude = $this->session->latitude;
			$longitude = $this->session->longitude;	
		
			$this->load->library('googlemaps');
			$this->load->model('customers');

			$result = $this->customers->get_all_related_to_text_search($text_search);

			$data['customers'] = $result->result();

			$config = array();
			$config['center'] = 'auto';
			$config['onboundschanged'] = 
										'if (!centreGot) {
											var mapCentre = map.getCenter();
											marker_0.setOptions({
																	position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng()) 
																});
											}
										centreGot = true;';
			$this->googlemaps->initialize($config);

			$marker = array();

			$marker['position'] = $this->session->latitude.','.$this->session->longitude;
			$marker['draggable'] = FALSE;
			$marker['infowindow_content'] = 'Your current position';

			$this->googlemaps->add_marker($marker);

			foreach($data['customers'] as $customer){
				$marker = array();
	
				$marker['position'] = $customer->latitude.','.$customer->longitude;
				$marker['draggable'] = FALSE;
				$marker['infowindow_content'] = $customer->name.' , '.$customer->phone_number;

				$this->googlemaps->add_marker($marker);
			}

			$data['map'] = $this->googlemaps->create_map();
		
			$this->render->renderView('service/search',$data);
		}
	}

	

}

?>
