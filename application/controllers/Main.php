<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Main extends CI_Controller {

	public function index(){
		$this->render->renderView('main/main');
	}

	public function geolocation(){
		$this->load->library('googlemaps');

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

		// set up the marker ready for positioning 
		// once we know the users location
		$marker = array();
		$marker['position'] = $this->session->latitude.','.$this->session->longitude;
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();

		$this->render->renderView('main/example',$data);
	}

	public function login(){
		$data['email'] 		= $this->input->post('email');
		$data['password'] 	= $this->input->post('password');	
		$latitude 			= $this->input->post('latitude');
		$longitude			= $this->input->post('longitude');
		
		$this->load->model('accounts');
		$role = "";
		$id = "";
		$name = "";
		// Intentamos primero el login del admin
			$result = $this->accounts->login_as_administrator($data);
		if($result == false){
			// El login del admin ha fallado, intentamos el del customer
			$result = $this->accounts->login_as_customer($data);
			if($result == false){
				// El login del customer ha llado, intentamos el del app_user
				$result = $this->accounts->login_as_app_user($data);
				if($result != false){
					$role = "APP_USER";
					$id = $result->app_user_id;
					$name = $result->name;
				}
			}else{
				$role = "CUSTOMER";
				$id = $result->customer_id;
				$name = $result->name;
			}
		}else{
			$role = "ADMINISTRATOR";		
			$id = $result->email;
			$name = $result->email;		
		}

		// Si finalmente el resultado es falso, ha fallado el login
		if($result == false){
			$this->render->renderViewWithError('main/main',"Sorry. Did you put your credentials correctly?");
		}else{
			if(password_verify($data['password'], $result->password)){
				
				$this->session->set_userdata('role',$role);
				$this->session->set_userdata('id',$id);
				$this->session->set_userdata('name',$name);
				$this->session->set_userdata('latitude',$latitude);
				$this->session->set_userdata('longitude',$longitude);
				$this->render->renderView('main/main');
			}else{
				$this->render->renderViewWithError('main/main',"Wrong password.");
			}
		}
	}
	
	public function set_current_coords($lat,$lng){

			$this->session->set_userdata('latitude',$lat);
			$this->session->set_userdata('longitude',$lng);
		
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('/'), 'refresh'); 
	}
}

?>
