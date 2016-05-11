    <div class="container">
      <div class="row row-centered">
	<h3><?php echo lang('service_customers_can_help_you') ?></h3>
	<hr>
		<?php foreach($customers as $customer): ?>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-centered">
		<div class="panel panel-default">

		<?php if($customer->type == 'Freelance'): ?>
		   <div class="panel-heading" style="background-color: #7DED58;">
				<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;<a style="color: #000000;" href="<?php echo site_url("customer/showProfile/".$customer->customer_id) ?>"><?php echo $customer->name ?></a>
		<?php else: ?>
		   <div class="panel-heading" style="background-color: #58C8ED;" >
				<i class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp;<a style="color: #000000;" href="<?php echo site_url("customer/showProfile/".$customer->customer_id) ?>"><?php echo $customer->name ?></a>
		<?php endif; ?>
		      </div>
		      <div class="panel-body">
			      	<table>
					<?php if($this->session->id): ?>
					<tr>
						<td>
						<?php if($customer->photo): ?>
							<img src="<?php echo base_url($customer->photo); ?>" 
							id="logo" wight ="100px" height="100px"/><br />
						<?php else: ?>
							<img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" 
							id="logo" wight ="100px" height="100px"/><br />
						<?php endif; ?>
						</td>
						
			        </tr>
				   <tr>
					<td><b>Email:</b> <?php echo $customer->email ?></td>	
				   </tr>
					<?php endif; ?>
				   <tr>
					<td><b><?php echo lang('profile_type') ?>:</b> <?php echo lang('profile_'.$customer->type) ?></td>	
				   </tr>
				   <tr>
					<td><b><?php echo lang('profile_zipCode') ?>:</b> <?php echo $customer->zip_code ?></td>	
				   </tr>
					<?php if($this->session->id): ?>
				   <tr>
					<td><b><?php echo lang('profile_phone_number') ?>:</b> <?php echo $customer->phone_number ?></td>	
				   </tr>
					<?php endif; ?>
				   <tr>
					<td><b><?php echo lang('profile_rating')?>:</b>
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
				<div class="pull-right">	
					<?php if($this->session->id && $this->session->role == "APP_USER"): ?>
						<button type="button" 
								class="btn btn-md buttonRed" 
								data-toggle="modal" 
								data-target='#<?php echo "creation_service_modal_".$customer->customer_id ?>'><?php echo lang('service_request_service') ?></button>
						<?php echo get_creation_service_modal($customer->customer_id , site_url('app_user/createPendingService'), $user_discount) ?>
					<?php endif; ?>
				</div>
		   </div><!-- /panel-body-->
		</div><!-- /panel-default-->
		</div><!-- /row para separar los paneles entre sí -->
		<br />
		<?php endforeach; ?>
		<script type=”text/javascript”>
			var centreGot = false;
		</script>
		<div class="col-xs-12 col-sm-6 col-md-6 col-centered" >
			<?php echo $map['js']; ?>
			<?php echo $map['html']; ?>
		</div>
		<div class="text-center"> 
		<?php echo $pagination; ?>
		</div>
      </div> <!-- /row -->
    </div> <!-- /container -->
