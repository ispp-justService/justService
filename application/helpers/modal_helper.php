<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('confirmation_modal')){

    function get_confirmation_modal($id, $controller_path, $hidden_fields = array()){
		$modal = '
			<!-- Modal -->
			<div id="'.$id.'" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-sm">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
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
						<button type="button" class="btn btn-danger" data-dismiss="modal">'.lang('modals_no').'</button>
						<input type="submit" class="btn btn-success" value="'.lang('modals_yes').'">
					</form>
				  </div>
				</div>

			  </div>
			</div>
		';
        return $modal;
    }   
}

if ( ! function_exists('get_creation_service_modal')){

    function get_creation_service_modal($id, $controller_path, $max_discount){
		$modal = '
			<!-- Modal -->
			<div id="creation_service_modal_'.$id.'" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-lg">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Confirmation request of service</h4>
				  </div>
				  <form action="'.$controller_path.'" id="serviceForm'.$id.'" method="POST">
				  <div class="modal-body">
					<div class="form-group">
						<label>Description</label>
						<textarea name="description" class="form-control" form="serviceForm'.$id.'" placeholder="Enter description here..." rows="3"></textarea>
						<input type="checkbox" name="want_discount" value="" onclick='."'".'hideShowDiv("input_discount")'."'".'>'.lang("service_want_discount").'<br>
						<div id=input_discount class="hidden">
						<input type="text" name="discount"><b>'.lang("service_discount_avialable").'('.$max_discount.' €)</b>
						<input type="hidden" name="customer_id" value="'.$id.'">
						<input type="hidden" name="max_discount" value="'.$max_discount.'">
						</div>
					</div>
				  </div>
				  <div class="modal-footer">
				    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
				    <input type="submit" class="btn btn-success" value="Create">
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
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Change your profile image</h4>
						</div>
						<form action="'.$controller_path.'" method="POST" enctype="multipart/form-data">
						<div class="modal-body">
							<div class="form-group">
								<input type="file" name="image" size="20" />
								<input type="hidden" name="id" value="'.$id.'" />
								<input type="hidden" name="role" value="'.$role.'" />
							</div>
						</div>
					<div class="modal-footer">

						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
						<input type="submit" class="btn btn-success" value="Upload">
						</div>
						</form>
					</div>
				</div>
			</div>

		';
		return $modal;
	}
}
