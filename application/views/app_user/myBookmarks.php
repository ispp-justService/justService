    <div class="container">
      <div class="row row-centered">
	<h3><?php echo lang('profile_my_bookmarks') ?></h3>
	<hr>
		<?php foreach($customers as $customer): ?>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-centered">
		<div class="panel panel-default">

		<?php if($customer->type == 'Freelance'): ?>
		   <div class="panel-heading" style="background-color: #7DED58;">
		<?php else: ?>
		   <div class="panel-heading" style="background-color: #58C8ED;" >
		<?php endif; ?>
				<i class="fa fa-hand-o-right" aria-hidden="true"></i>
<a style="color: #000000;" href="<?php echo site_url("customer/showProfile/".$customer->customer_id) ?>">
								<?php echo $customer->name ?>
				</a>
			</div><!-- /panel-heading -->
		      <div class="panel-body">
		      	<table>
			   <tr>
				<td><b><?php echo lang('profile_type') ?>:</b> <?php echo lang('profile_'.$customer->type) ?></td>	
			   </tr>
			   <tr>
				<td><b><?php echo lang('profile_zipCode') ?>:</b> <?php echo $customer->zip_code ?>	
			   </tr>
				<tr>
					<td>
						<b><?php echo lang('profile_rating')?>:</b>
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
			   <tr>
				<?php if($customer->photo): ?>
					<img src="<?php echo base_url($customer->photo); ?>" id="logo" wight ="125px" height="125px"/><br />
				<?php else: ?>
			   		<img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" id="logo" wight ="125px" height="125px"/><br />
				<?php endif; ?>
			   </tr>	
			
			</table>
		      </div><!-- /panel-body -->
		   </div><!-- /panel-default -->
		</div><!-- /col -->
		<br />
		<?php endforeach; ?> 
      </div> <!-- /row -->
    </div> <!-- /container -->
