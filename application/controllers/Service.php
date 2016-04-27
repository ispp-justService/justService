<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Service extends CI_Controller {

	public function request(){
		$role 	= $this->session->role;
		$id 	= $this->session->id;
		if(isset($role) && $role == 'APP_USER' && isset($id)){
			$data['customer_id'] = $this->input->post('customer_id');	
			$this->render->renderView('service/request',$data);
		}else{
			$this->render->renderViewWithError('main/main',"Session expired or you are not an User");
		}	
	}

	public function search(){

		// Obtenemos el texto de búsqueda por GET
		$text_search = "";

		foreach($this->input->get() as $input){
			$text_search.= $input." ";
		}

		// Cortamos el texto en subtextos por los espacios posibles que pueda tener
		$keywords = explode(' ',$text_search);
		$keywords = array_filter($keywords);

		$filtered = array();

		foreach($keywords as $keyword){
			if(strlen($keyword) > 2){
				array_push($filtered,$keyword);
			}
		}

		if(count($filtered)){		
			// Cargamos lo que vamos a necesitar aqui
			$this->load->library('googlemaps');
			$this->load->model('customers');
		
			// Obtenemos la posición actual del usuario
			$latitude = $this->session->latitude;
			$longitude = $this->session->longitude;

			$like = "";

			foreach($filtered as $word){
				$like.= " %".$word."% ,";
			}
			$like = substr($like,0, -1);

			// Vamos a configurar la paginacion que vayamos a usar
			$config = array();

			// La URL base que va a usar la paginación
			$config["base_url"] = base_url() . "index.php/service/search";
			$config["uri_segment"] = 3;

			// Número de elementos totales sobre los que haremos la paginación
			$config["total_rows"] = $this->customers->get_all_related_to_keywords($like)->num_rows();

			// El número de elementos por página
			$config["per_page"] = 2;

			// Número de enlaces a mostrar
			$config['num_links'] = floor($config["total_rows"] / $config["per_page"]);

			// Usamos numeración en la paginación
			$config['use_page_numbers'] = TRUE;
			// Reusamos la misma cadena de búsqueda que hemos usado anteriormente
			$config['reuse_query_string'] = TRUE;

			// Configuración visual de la paginación con Bootstrap
		    $config['full_tag_open'] = '<ul class="pagination">';
		    $config['full_tag_close'] = '</ul>';
		    $config['first_link'] = false;
		    $config['last_link'] = false;
		    $config['first_tag_open'] = '<li>';
		    $config['first_tag_close'] = '</li>';
		    $config['prev_link'] = '&laquo';
		    $config['prev_tag_open'] = '<li class="prev">';
		    $config['prev_tag_close'] = '</li>';
		    $config['next_link'] = '&raquo';
		    $config['next_tag_open'] = '<li>';
		    $config['next_tag_close'] = '</li>';
		    $config['last_tag_open'] = '<li>';
		    $config['last_tag_close'] = '</li>';
		    $config['cur_tag_open'] = '<li class="active"><a href="#">';
		    $config['cur_tag_close'] = '</a></li>';
		    $config['num_tag_open'] = '<li>';
		    $config['num_tag_close'] = '</li>';

			// Iniciamos la paginación
			$this->pagination->initialize($config);

			// Comprobamos la página en la que estamos
			if($this->uri->segment(3)){
				$page = ($this->uri->segment(3)) ;
			}else{
				$page = 1;
			}	

			// Obtenemos los customers que cumplan con los requisitos asociados a la búsqueda
			if(isset($latitude) && isset($longitude)){
				$result = $this->customers->get_all_related_to_keywords_order_by_distance($like, $latitude, $longitude, $config['per_page'],$page );
			}else{
				$result = $this->customers->get_all_related_to_keywords_order_by_them($like, $config['per_page'],$page );
			}
			
			if( $result->num_rows() > 0 ){
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
			}else{
				$data['showAdvancedSearch'] = TRUE;
				$this->render->renderViewWithError('main/main',"No results found according to that search", $data);			
			}
		}else{
			$this->render->renderViewWithError('main/main',"The search text has empty values or is too short");
		}
	}
}

?>
