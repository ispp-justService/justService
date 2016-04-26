<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('confirmation_modal')){

    function get_confirmation_modal($id, $controller_path, $hidden=FALSE){
		$modal = '
			<!-- Modal -->
			<div id="'.$id.'" class="modal fade" role="dialog">
			  <div class="modal-dialog modal-sm">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Confirmation Dialog</h4>
				  </div>
				  <div class="modal-body">
					<form action="'.$controller_path.'" method="POST">
						<label>Are you sure you want to do this operation?</label>';
		if($hidden != FALSE){
						$modal.='<input type="hidden" name="'.$hidden.'" value="'.$id.'">';
		}
		$modal.='
						<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						<input type="submit" class="btn btn-success" value="Yes">
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

    function get_creation_service_modal($id, $controller_path){
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
				  <form action="'.$controller_path.'" id="serviceForm" method="POST">
				  <div class="modal-body">
					<div class="form-group">
						<label>Description</label>
						<textarea name="description" class="form-control" form="serviceForm" placeholder="Enter description here..." rows="3"></textarea>
						<input type="hidden" name="customer_id" value="'.$id.'">
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
