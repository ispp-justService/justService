<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Service extends CI_Controller {

	public function search(){

		// Cargamos lo que vamos a necesitar aqui
		$this->load->library('googlemaps');
		$this->load->model('customers');

		// Obtenemos el texto de búsqueda por GET
		$text_search = $this->input->get("text_search");
		
		// Obtenemos la posición actual del usuario
		$latitude = $this->session->latitude;
		$longitude = $this->session->longitude;

		// Vamos a configurar la paginacion que vayamos a usar
		$config = array();

		// La URL base que va a usar la paginación
		$config["base_url"] = base_url() . "index.php/service/search";
		$config["uri_segment"] = 3;

		// Número de elementos totales sobre los que haremos la paginación
		$config["total_rows"] = $this->customers->get_all_related_to_text_search($text_search)->num_rows();

		// El número de elementos por página
		$config["per_page"] = 2;

		// Número de enlaces a mostrar
		$config['num_links'] = floor($config["total_rows"] / $config["per_page"]);

		// Usamos numeración en la paginación
		$config['use_page_numbers'] = TRUE;
		// Reusamos la misma cadena de búsqueda que hemos usado anteriormente
		$config['reuse_query_string'] = TRUE;

		// Iniciamos la paginación
		$this->pagination->initialize($config);

		// Comprobamos la página en la que estamos
		if($this->uri->segment(3)){
			$page = ($this->uri->segment(3)) ;
		}else{
			$page = 1;
		}	

		// Obtenemos los customers que cumplan con los requisitos asociados a la búsqueda
		$result = $this->customers->get_all_related_to_text_search_order_by_distance($text_search, $latitude, $longitude, $config['per_page'],$page );

		// Lo ubicamos como dato de salida
		$data['customers'] = $result->result();

		// Configuramos el mapa a mostrar al usuario
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
		// Iniciamos la libreria de google maps con la configuración asociada.
		$this->googlemaps->initialize($config);

		$marker = array();
		
		// Configuramos nuestra posición
		$marker['position'] = $this->session->latitude.','.$this->session->longitude;
		$marker['draggable'] = FALSE;
		$marker['infowindow_content'] = 'Your current position';
		$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=|00FF00|000000';
		
		// La añadimos
		$this->googlemaps->add_marker($marker);

		// Por cada customer encontramos configuramos su posición y la añadimos
		foreach($data['customers'] as $customer){
			$marker = array();

			$marker['position'] = $customer->latitude.','.$customer->longitude;
			$marker['draggable'] = FALSE;
			$marker['infowindow_content'] = $customer->name.' , '.$customer->phone_number;

			$this->googlemaps->add_marker($marker);
		}

		// Creamos el mapa y lo ubicamos como dato de salida
		$data['map'] = $this->googlemaps->create_map();
		// Creamos los enlaces de la paginación y lo ubicamos como dato de salida
		$data['pagination'] = $this->pagination->create_links();
	
		// Renderizamos la pantalla
		$this->render->renderView('service/search',$data);
	}
}

?>
