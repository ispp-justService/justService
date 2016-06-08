<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('confirmation_modal')){

    function get_confirmation_modal($id, $controller_path, $hidden_fields = array()){
		$modal = '
			<!-- Modal -->
			<div id="'.$id.'" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-md">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header modalHeader-background-color">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">'.lang('modals_title_confirmation').'</h4>
				  </div>
				  <div class="modal-body">
					<form action="'.$controller_path.'" method="POST">
						<label>'.lang('modals_ask_confirmation').'</label>';
		foreach($hidden_fields as $field => $value){
			$modal.='<input type="hidden" name="'.$field.'" value="'.$value.'">';
		}
		$modal.='
					
				  </div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">'.lang('modals_no').'</button>
					<input type="submit" class="btn btn-success pull-right" value="'.lang('modals_yes').'">
				</div>
				   </form>
				</div>

			  </div>
			</div>
		';
        return $modal;
    }   
}

if ( ! function_exists('get_creation_service_modal')){

    function get_creation_service_modal($id, $controller_path,$request_uri = FALSE){
		$modal = '
			<!-- Modal -->
			<div id="creation_service_modal_'.$id.'" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-lg">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header modalHeader-background-color">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">'.lang('modals_title_confirmation_request_service').'</h4>
				  </div>
				  <form action="'.$controller_path.'" id="serviceForm'.$id.'" method="POST">
				  <div class="modal-body">
					<div class="form-group">
						<label>'.lang('service_description').'</label>
						<textarea name="description" class="form-control" form="serviceForm'.$id.'" placeholder="'.lang('modals_enter_description').'" rows="3"></textarea>
						<input type="hidden" name="customer_id" value="'.$id.'">
						<input type="hidden" name="request_uri" value="'.$request_uri.'">
					</div>
				  </div>
				  <div class="modal-footer">
				    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">'.lang('modals_change_image_cancel').'</button>
				    <input type="submit" class="btn btn-success" value="'.lang('modals_create').'">
				  </div>
				  </form>
				</div>
			  </div>
			</div>
		';
        return $modal;
    }   

}
if ( ! function_exists('get_add_discount_modal')){
	function get_add_discount_modal($id, $controller_path, $max_discount){
		$modal = '
			<!-- Modal -->
			<div id="add_discount_'.$id.'" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-xs">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header modalHeader-background-color">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">'.lang('modals_add_discount_title').'</h4>
				  </div>
				  <form action="'.$controller_path.'" id="serviceForm'.$id.'" method="POST">
				  <div class="modal-body">
					<div class="form-group row-centered">
						<input id="discount" 
							name ="discount"
							data-slider-id="discount_slider" 
							type="text" data-slider-min="0.5" 
							data-slider-max="'.$max_discount.'" 
							data-slider-step="0.5" 
							data-slider-value="0"  
							data-slider-tooltip="hide" 
							style="width: 90%;"/>
						<span id="ex6CurrentSliderValLabel">Actual discount to apply: <span id="ex6SliderVal">0.5 €</span></span>
					<script>
						$("#discount").slider({
							formatter: function(value) {
								return "Current value: " + value;
							}
						});
						$("#discount").on("slide", function(slideEvt) {
							$("#ex6SliderVal").text(slideEvt.value+" €");
							$("#discount").value = slideEvt.value;
						});
					</script>
						<input type="hidden" name="max_discount" value="'.$max_discount.'">
						<input type="hidden" name="service_id" value="'.$id.'">
					</div>
				  </div>
				  <div class="modal-footer">
				    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">'.lang('modals_change_image_cancel').'</button>
				    <input type="submit" class="btn btn-success" value="'.lang('modals_apply').'">
				  </div>
				  </form>
				</div>
			  </div>
			</div>
		';
		return $modal;
	}
}

if ( ! function_exists('get_create_new_banner')){
	function get_create_new_banner($id){
		$modal = '
		<!-- Modal -->
		<div id="modalCreateBanner_'.$id.'" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-md">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header modalHeader-background-color">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">'.lang("admin_banner_form").'</h4>
			  </div>
			  <form action="'.site_url("admin/createBanner").'" method="POST" enctype="multipart/form-data">
			  <div class="modal-body">
				<div class="form-group">
					<label>'.lang("profile_name").'</label>
					<input type="text" name="name" class="form-control" placeholder="'.lang("profile_name").'">
					<label>'.lang("admin_banner_image").'</label>
					<input type="file" class="filestyle" data-buttonText="'.lang("modals_choose_file").'" name="image" size="20" />
					<input type="hidden" name="customer_id" value="'.$id.'">
				</div>
			  </div>
			  <div class="modal-footer">
			    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">'.lang("admin_banner_cancel").'</button>
			    <input type="submit" class="btn btn-success" value="'.lang("modals_create").'">
			  </div>
			  </form>
			</div>
		  </div>
		</div>
		';
		return $modal;
	}
}

if ( ! function_exists('get_create_new_free_banner')){
	function get_create_new_free_banner($id){
		$modal = '
		<!-- Modal -->
		<div id="modalCreateBanner_'.$id.'" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-md">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header modalHeader-background-color">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">'.lang("admin_banner_form").'</h4>
			  </div>
			  <form action="'.site_url("admin/createFreeBanner").'" method="POST" enctype="multipart/form-data">
			  <div class="modal-body">
				<div class="form-group">
					<label>'.lang("profile_name").'</label>
					<input type="text" name="name" class="form-control" placeholder="'.lang("profile_name").'">
					<label>'.lang("admin_banner_image").'</label>
					<input type="file" class="filestyle" data-buttonText="'.lang("modals_choose_file").'" name="image" size="20" />
					<input type="hidden" name="customer_id" value="'.$id.'">
				</div>
			  </div>
			  <div class="modal-footer">
			    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">'.lang("admin_banner_cancel").'</button>
			    <input type="submit" class="btn btn-success" value="'.lang("modals_create").'">
			  </div>
			  </form>
			</div>
		  </div>
		</div>
		';
		return $modal;
	}
}


if ( ! function_exists('get_upload_image_modal')){

    function get_upload_image_modal($id, $role, $controller_path){
		$modal = '
			<!-- Modal -->
			<div id="uploadImageModal" class="modal fade" role="dialog">
				<div class="modal-dialog modal-xs">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header modalHeader-background-color">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">'.lang('modals_change_image_title').'</h4>
						</div>
						<form action="'.$controller_path.'" method="POST" enctype="multipart/form-data">
						<div class="modal-body">
							<div class="form-group">
								<input type="file" class="filestyle" data-buttonText="'.lang("modals_choose_file").'" name="image" size="20" />
								<input type="hidden" name="id" value="'.$id.'" />
								<input type="hidden" name="role" value="'.$role.'" />
							</div>
						</div>
					<div class="modal-footer">

						<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">'.lang('modals_change_image_cancel').'</button>
						<input type="submit" class="btn btn-success" value="'.lang('modals_change_image_upload').'">
						</div>
						</form>
					</div>
				</div>
			</div>

		';
		return $modal;
	}
}
