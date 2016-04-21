    <div class="container">
      <div class="row row-centered">
	<h3>Service's list</h3>
	<hr>
	<div class="col-xs-6 col-sm-6 col-md-6 col-centered">
		<?php foreach($services as $service): ?>
		<div class="row">
		<div class="panel panel-default" >
		   <div class="panel-heading"><b><?php echo $service->status ?></b><div class="pull-right"><?php echo date('Y-m-d H:i', strtotime($service->moment)) ?></div></div>
		      <div class="panel-body">
			<div class="row">
			   <div class="col-md-8">
				<div class="table-responsive">
			      	<table class="table-responsive">
				   <tr>
					<?php if($service->type == "Freelance"): ?>
						<td>
							<b>Professional:</b>
							<a href="<?php echo site_url("customer/showProfile/".$service->customer_id) ?>">
								<?php echo $service->name ?>
							</a>
						</td>	
					<?php else: ?>
						<td>
							<b>Business:</b>
							<a href="<?php echo site_url("customer/showProfile/".$service->customer_id) ?>">
								<?php echo $service->name ?>
							</a>
						</td>	
					<?php endif;?>
				   </tr>
				   <tr>
					<td><b>Description:</b> <?php echo $service->description ?></td>	
				   </tr>
				   <tr>
					<td>
					    <b>Discount to apply:</b> 
					    <?php if($service->discount_to_apply != null): ?>
					    	<?php echo $service->discount_to_apply?> %
					    <?php else: ?>
						None
					    <?php endif; ?>
					</td>	
				   </tr>
					<?php if($service->status == 'PENDING'):?>
						<tr>
							<td>
								<button type="button" 
										class="btn btn-danger btn-xs" 
										data-toggle="modal" 
										data-target='#<?php echo "cancel_service_".$service->service_id ?>'>Cancel Service</button>
								<?php echo get_confirmation_modal(
											"cancel_service_".$service->service_id,
											site_url("app_user/cancelService/".$service->service_id)) ?>
							</td>
					   </tr>
					<?php endif; ?>
				   <?php if($service->status == 'FINALIZED'): ?>
					<?php if($service->rating_customer != null): ?>
					   <tr>
						<td>
						   <b>Customer's rate for you:</b>
						   <div class="ratingShow">
						   <?php
							  for ($i=0 ; $i < $service->rating_customer; $i++){
							  echo '<span>&#9733</span>';
							  }
						   ?>
						   </div>
						</td>
					   </tr>
					   <?php endif; ?>
					   <?php if($service->comment_customer != null): ?>
					   <tr>
						<td>
						   <b>Comment:</b>
						   <?php echo $service->comment_customer?>
						</td>
					   </tr>
					   <?php endif; ?>
						<?php if($service->rating_user == null): ?>
					   <tr>
						<td>
						   <b>Rate the user:</b>
						   <div class="rating">
							  	<span id="span5" onclick="changeStars('5')">&#9734</span>
								<span id="span4" onclick="changeStars('4')">&#9734</span>
								<span id="span3" onclick="changeStars('3')">&#9734</span>
								<span id="span2" onclick="changeStars('2')">&#9734</span>
								<span id="span1" onclick="changeStars('1')">&#9734</span>	

								<script>
									function changeStars(number) {

										for(i=5; i>=1; i--){
											$("#span"+i).html("&#9734");
										}

										for(i=number; i>=1; i--){
											$("#span"+i).html("&#9733");
										}
										$("#rating").val(number);
									}
								</script>
						   </div>
						</td>
					   </tr>
					   <?php else: ?>
					   <tr>
						<td>
						   <b>Your customer's rate:</b>
						   <div class="ratingShow">
						   <?php
							  for ($i=0 ; $i < $service->rating_user; $i++){
							  echo '<span>&#9733</span>';
							  }
						   ?>
						   </div>
						</td>
					   </tr>
					   <?php endif; ?>
					   <?php if($service->comment_user != null): ?>
					   <tr>
						<td>
						   <b>Comment:</b>
						   <?php echo $service->comment_user?>
						</td>
					   </tr>
					   <?php endif; ?>
				   <?php endif; ?>
				   				
				</table>
				</div>
			    </div>
			    <div class="col-md-4">
				<a href="<?php echo site_url("customer/showProfile/".$service->customer_id) ?>"><img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" id="logo" wight ="100px" height="100px"/></a>
			    </div>
			</div>
		      </div>
		      <?php if($service->status == 'FINALIZED' && $service->rating_user == null): ?>
		      <div class="panel-footer">
			<?php echo form_open('/app_user/rateService/'.$service->service_id) ?>
			  <div class="row">
			    <div class="col-md-10">
				  <div class="form-group">
				    <label for="comment_user">Comment:</label>
					<input type="hidden" name="rating_user" id="rating" value="" />
				    <textarea class="form-control" rows="5" name="comment_user"></textarea>
				  </div>
			    </div>
  			    <div class="col-md-2">
				  <button type="submit" class="btn buttonBlack pull-right">Send</button>
			    </div>
			  </div>
			</form>
		      </div>
		      <?php endif; ?>
		   </div> <!-- /panel-default -->
		   </div> <!-- /row para separar los paneles entre sí -->
		   <br />

			<?php endforeach; ?> 

		</div>
	</div> <!-- /class cols  -->
      </div> <!-- /row -->
    </div> <!-- /container -->
