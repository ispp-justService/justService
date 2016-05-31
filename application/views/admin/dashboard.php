    <div class="container">
      <div class="row row-centered">
	<h3><?php echo lang('admin_dashboard') ?></h3>
	<hr>
		<h4><?php echo lang('admin_ranking_business') ?></h4>
		<hr>
		<?php foreach($rankingBusiness as $business): ?>
		<?php if($business->servicios_finalizados != 0): ?>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-centered">
		<div class="panel panel-default">
			<div class="panel-heading" style="background-color: #58C8ED;" >
			<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
<a style="color: #000000;" href="<?php echo site_url("customer/showProfile/".$business->customer_id) ?>">
								<?php echo $business->name ?>
							</a>
		</div><!-- /panel-heading -->
		      <div class="panel-body">
			      	<table>
				   <tr>
					<td><b>Email:</b> <?php echo $business->email ?></td>	
				   </tr>	
					<tr>
					<td><b><?php echo lang('admin_finalized_services') ?>:</b> <?php echo $business->servicios_finalizados ?></td>	
				   </tr>
				   <tr>
					<td><b><?php echo lang('profile_phone_number')?>:</b> <?php echo $business->phone_number ?></td>	
				   </tr>			
				</table>
</br>
		     </div><!-- /panel-body--> 
		</div><!-- /row para separar los paneles entre sí --></div>
		<br />
		<?php endif;?>
		<?php endforeach; ?> 
		<h4><?php echo lang('admin_ranking_freelance') ?></h4>
		<hr>	
		<?php foreach($rankingFreelance as $freelance): ?>
		<?php if($freelance->servicios_finalizados != 0): ?>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-centered">
		<div class="panel panel-default">
		<div class="panel-heading" style="background-color: #7DED58;">
			<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
<a style="color: #000000;" href="<?php echo site_url("customer/showProfile/".$freelance->customer_id) ?>">
								<?php echo $freelance->name ?>
							</a>
		</div><!-- /panel-heading -->
		      <div class="panel-body">
			      	<table>
				   <tr>
					<td><b>Email:</b> <?php echo $freelance->email ?></td>	
				   </tr>	
					<tr>
					<td><b><?php echo lang('admin_finalized_services') ?>:</b> <?php echo $freelance->servicios_finalizados ?></td>	
				   </tr>
				   <tr>
					<td><b><?php echo lang('profile_phone_number')?>:</b> <?php echo $freelance->phone_number ?></td>	
				   </tr>			
				</table>
</br>
		     </div><!-- /panel-body--> 
		</div><!-- /row para separar los paneles entre sí --></div>
		<br />
		<?php endif;?>
		<?php endforeach; ?> 
      </div> <!-- /row -->
    </div> <!-- /container -->
