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
				   <?php if($service->status == 'FINALIZE' && $service->rating_user == null): ?>
				   <tr>
					<td>
					   <b>Rate this service:</b>
					   <div class="rating">
					      <span>&#9734</span><span>&#9734</span><span>&#9734</span><span>&#9734</span><span>&#9734</span>
					   </div>
					</td>
				   </tr>
				   <?php elseif($service->status == 'FINALIZE' && $service->rating_user != null): ?>
				   <tr>
					<td>
					   <b>Rate this service:</b>
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
				   <?php if($service->status == 'FINALIZE' && $service->comment_user != null): ?>
				   <tr>
					<td>
					   <b>Comment Customer:</b>
					   <?php echo $service->comment_user?>
					</td>
				   </tr>
				   <?php endif; ?>
				   <?php if($service->status == 'FINALIZE' && $service->rating_customer != null): ?>
				   <tr>
					<td>
					   <b>Rate this customer:</b>
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
				   <?php if($service->status == 'FINALIZE' && $service->comment_customer != null): ?>
				   <tr>
					<td>
					   <b>Comment Customer:</b>
					   <?php echo $service->comment_customer?>
					</td>
				   </tr>
				   <?php endif; ?>				
				</table>
				</div>
			    </div>
			    <div class="col-md-4">
				<img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" id="logo" wight ="100px" height="100px"/>
			    </div>
			</div>
		      </div>
		      <?php if($service->status == 'FINALIZE' && $service->rating_user == null): ?>
		      <div class="panel-footer">
			<form role="form">
			  <div class="row">
			    <div class="col-md-10">
				  <div class="form-group">
				    <label for="comment_user">Comment:</label>
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
