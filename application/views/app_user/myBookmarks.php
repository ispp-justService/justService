    <div class="container">
      <div class="row row-centered">
	<h3>My Bookmarks</h3>
	<hr>
	<div class="col-xs-6 col-sm-6 col-md-6 col-centered">
		<?php foreach($customers as $customer): ?>
		<div class="row">
		<div class="panel panel-default">

		<?php if($customer->type == 'Freelance'): ?>
		   <div class="panel-heading" style="background-color: #7DED58;">
		<?php else: ?>
		   <div class="panel-heading" style="background-color: #58C8ED;" >
		<?php endif; ?>
				<a href="<?php echo site_url("customer/showProfile/".$customer->customer_id) ?>">
								<?php echo $customer->name ?>
				</a>
			</div>
		      <div class="panel-body">
			<div class="row">
			   <div class="col-md-8">
			      	<div class="table-responsive">
			      	<table class="table">
				   <tr>
					<td><b>Email:</b> <?php echo $customer->email ?></td>	
				   </tr>
				   <tr>
					<td><b>Phone Number:</b> <?php echo $customer->phone_number ?></td>	
				   </tr>				
				</table>
				</div>
			    </div>
			    <div class="col-md-4">
				<?php if($customer->photo): ?>
					<img src="<?php echo base_url($customer->photo); ?>" style="margin-top:80px" id="logo" wight ="100px" height="100px"/><br />
				<?php else: ?>
			   		<img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" style="margin-top:80px" id="logo" wight ="100px" height="100px"/><br />
				<?php endif; ?>
			    </div>
			</row>
		      </div>
		   </div>
		</div>
		</div><!-- /row para separar los paneles entre sí -->
		<br />
		<?php endforeach; ?> 
	</div> <!-- /class cols  -->
      </div> <!-- /row -->
    </div> <!-- /container -->
