<div class="container">
  <div class="row row-centered">
<h3>Request Service Form</h3>
<hr>
<div class="col-xs-6 col-sm-6 col-md-6 col-centered">

	<?php $attributes = array('id' => 'serviceForm'); ?>
	<?php echo form_open('/app_user/createPendingService',$attributes) ?>

	<div class="row">
		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">

			  <label for="name">Description</label>

			  <?php echo form_hidden('customer_id', $customer_id); ?>

				
				<button type="button" 
					class="btn btn-danger btn-xs" 
					data-toggle="modal" 
					data-target='#confirmRequestService'>Cancel Service</button>
		    </div>
		</div>
	</div>
	</form>

			<div id="requestService" class="modal fade" role="dialog">
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

</div> <!-- /class cols  -->
  </div> <!-- /row -->
</div> <!-- /container -->

