    <div class="container">
      <div class="row row-centered">
	<h3><?php echo lang('admin_customers_list') ?></h3>
	<hr>
	
		<?php foreach($customers as $customer): ?>
		<div class="col-xs-12 col-sm-6 col-md-6 col-centered">
		<div class="panel panel-default">

		<?php if($customer->type == 'Freelance'): ?>
		   <div class="panel-heading" style="background-color: #7DED58;">
		<?php else: ?>
		   <div class="panel-heading" style="background-color: #58C8ED;" >
		<?php endif; ?>
			<a style="color: #000000;" href="<?php echo site_url("customer/showProfile/".$customer->customer_id) ?>">
								<?php echo $customer->name ?>
							</a>
			<div class="pull-right">
				<?php if($customer->deleted == "f"): ?>
						<button type="button" 
							class="btn btn-md buttonRed" 
							data-toggle="modal" 
							data-target='#<?php echo $customer->customer_id ?>'><?php echo lang('admin_deactivate_customer') ?></button>
						<?php echo get_confirmation_modal($customer->customer_id , site_url('admin/deactivateCustomer'), array("customer_id"=>$customer->customer_id)) ?>
					<?php else: ?>
						<?php echo lang('admin_customer_deleted') ?>
					<?php endif; ?>
			</div><!-- /pull-right-->
		</div><!-- /panel-heading -->



		      <div class="panel-body">
			      	<table>
				   <tr>
					<?php if($customer->photo): ?>
						<img src="<?php echo base_url($customer->photo); ?>" id="logo" wight ="100px" height="100px"/><br />
					<?php else: ?>
				   		<img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" id="logo" wight ="100px" height="100px"/><br />
					<?php endif; ?>
				   </tr>
				   <tr>
					<td><b>Email:</b> <?php echo $customer->email ?></td>	
				   </tr>
				   <tr>
					<td><b><?php echo lang('admin_moment') ?>:</b> <?php echo date('Y-m-d H:i', strtotime($customer->moment)) ?></td>	
				   </tr>
				   <tr>
					<td><b><?php echo lang('profile_type')?>:</b> <?php echo lang('profile_'.$customer->type) ?></td>	
				   </tr>
				   <tr>
					<td><b><?php echo lang('profile_zipCode') ?>:</b> <?php echo $customer->zip_code ?></td>	
				   </tr>
				   <tr>
					<td><b><?php echo lang('profile_phone_number')?>:</b> <?php echo $customer->phone_number ?></td>	
				   </tr>
					<tr>
						<td>
							<b><?php echo lang('profile_customer_price') ?>: </b>
							<?php if($customer->type == "Business"): ?>
								<?php echo 45+($customer->num_bonus * 40)?> €
							<?php else: ?>
								<?php echo 15+($customer->num_bonus * 10)?> €
							<?php endif; ?>
						</td>	
				   </tr>
				   <tr>
					<td>
						<a href="<?php echo site_url("admin/seeCustomersBanners/".$customer->customer_id) ?>">
							<?php echo lang('admin_see_customers_banners') ?>
						</a>
					</td>
				   <tr>				
				</table>
		     </div><!-- /panel-body--> 
		</div><!-- /row para separar los paneles entre sí --></div>
		<br />
		<?php endforeach; ?> 
      </div> <!-- /row -->
    </div> <!-- /container -->
