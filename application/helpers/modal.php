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
						<input type="submit" value="Yes">
					</form>
				  </div>
				</div>

			  </div>
			</div>
		';
        return $modal;
    }   
}
