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

				<textarea name="description" form="serviceForm">Enter description here...</textarea>
				<button type="button" 
					class="btn btn-danger btn-xs" 
					data-toggle="modal" 
					data-target='#confirmRequestService'>Cancel Service</button>
				<?php echo get_confirmation_modal(
							"confirmRequestService",
							site_url("app_user/createPendingService")) ?>
		    </div>
		</div>
	</div>
	</form>

</div> <!-- /class cols  -->
  </div> <!-- /row -->
</div> <!-- /container -->

