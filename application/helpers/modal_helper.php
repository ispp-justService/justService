<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('confirmation_modal')){

    function get_confirmation_modal($id, $controller_path){
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
						<label>Are you sure you want to do this operation?</label>
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
			  <div class="modal-dialog modal-sm">

				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Confirmation request of service</h4>
				  </div>
				  <div class="modal-body">
					<form action="'.$controller_path.'" id="serviceForm" method="POST">
						<label>Description</label><br>
						<textarea name="description" form="serviceForm">Enter description here...</textarea>
						<input type="hidden" name="customer_id" value="'.$id.'">
						<hr>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
						<input type="submit" class="btn btn-success" value="Create">
					</form>
				  </div>
				</div>

			  </div>
			</div>
		';
        return $modal;
    }   
}
