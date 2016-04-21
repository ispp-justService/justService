    <div class="container">
      <div class="row row-centered">
	<h3>Customers who can help you</h3>
	<hr>
	<div class="col-xs-6 col-sm-6 col-md-6 col-centered">
		<?php foreach($customers as $customer): ?>
		<div class="row">
		<div class="panel panel-default">

		<?php if($customer->type == 'Freelance'): ?>
		   <div class="panel-heading" style="background-color: #7DED58;"><?php echo $customer->name ?>
		<?php else: ?>
		   <div class="panel-heading" style="background-color: #58C8ED;" ><?php echo $customer->name ?>	
		<?php endif; ?>
		   <div class="panel-heading">
							<a href="<?php echo site_url("customer/showProfile/".$customer->customer_id) ?>">
								<?php echo $customer->name ?>
							</a>
		        <div class="pull-right">
			<button type="button" 
				class="btn btn-xs buttonRed" 
				data-toggle="modal" 
				data-target='#<?php echo "creation_service_modal_".$customer->customer_id ?>'>Request Service</button>
			<?php echo get_creation_service_modal($customer->customer_id , site_url('app_user/createPendingService')) ?>
			</div>
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
					<td><b>Type:</b> <?php echo $customer->type ?></td>	
				   </tr>
				   <tr>
					<td><b>Zip Code:</b> <?php echo $customer->zip_code ?></td>	
				   </tr>
				   <tr>
					<td><b>Phone Number:</b> <?php echo $customer->phone_number ?></td>	
				   </tr>
				   <tr>
					<td><b>Rating:</b>
					   <div class="ratingShow">
					   <?php
						  
						  for ($i=0 ; $i < ceil($customer->rating); $i++){
						  echo '<span>&#9733</span>';
						  }
						  $numAux = 5 - ceil($customer->rating);
						  if ($numAux != 0){
						     for ($i=0 ; $i < $numAux; $i++){
							 echo '<span>&#9734</span>';
						     }
						  }
					   ?>
					   </div>
					</td>	
				   </tr>			
				</table>
				</div>
			    </div>
			    <div class="col-md-4">
				<img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" id="logo" wight ="100px" height="100px"/>
			    </div>
		      </div><!-- /row panel-body-->
		   </div><!-- /panel-body-->
		</div><!-- /panel-default-->
		</div><!-- /row para separar los paneles entre sí -->
		<br />
		<?php endforeach; ?>
		<script type=”text/javascript”>
			var centreGot = false;
		</script>
		<?php echo $map['js']; ?>
		<?php echo $map['html']; ?>
		<div class="text-center"> 
		<?php echo $pagination; ?>
		</div>
	</div> <!-- /class cols centradas -->
      </div> <!-- /row -->
    </div> <!-- /container -->
