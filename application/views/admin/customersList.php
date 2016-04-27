    <div class="container">
      <div class="row row-centered">
	<h3>Customer's list</h3>
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
			<div class="pull-right">
				<?php if($customer->deleted == "f"): ?>
						<button type="button" 
							class="btn btn-xs buttonRed" 
							data-toggle="modal" 
							data-target='#<?php echo $customer->customer_id ?>'>Deactivate Customer</button>
						<?php echo get_confirmation_modal($customer->customer_id , site_url('admin/deactivateCustomer'), array("customer_id"=>$customer->customer_id)) ?>
					<?php else: ?>
						Customer deleted
					<?php endif; ?>
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
					<td><b>Moment:</b> <?php echo date('Y-m-d H:i', strtotime($customer->moment)) ?></td>	
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
				</table>
					<a href="<?php echo site_url("admin/seeCustomersBanners/".$customer->customer_id) ?>">
						See customer's banners
					</a>
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
