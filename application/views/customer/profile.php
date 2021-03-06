    <div class="container">
	<div class="row">
		<div class="col-md-3 col-lg-3">
		   <div class="row">
			<div class="text-center">
			   <?php if($customer->photo): ?>
					<img src="<?php echo base_url($customer->photo); ?>" style="margin-top:80px" id="logo" wight ="150px" height="150px"/><br />
				<?php else: ?>
			   		<img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" style="margin-top:80px" id="logo" wight ="150px" height="150px"/><br />
				<?php endif; ?>
				<div class="ratingShow">
				<?php for ($i=0 ; $i < $customer->rating; $i++){
					echo '<span>&#9733</span>';
				}?>
				</div>
				</br>
				<?php if($this->session->id == $customer->customer_id  && $this->session->role == "CUSTOMER" ): ?>
					<button type="button" 
										class="btn btn-info btn-md" 
										data-toggle="modal" 
										data-target='#uploadImageModal'><?php echo lang('profile_change_image') ?></button>	

					<?php echo get_upload_image_modal($this->session->id, $this->session->role, site_url("main/uploadImage")); ?>

				<?php endif; ?>
			</div>
		   </div>
		</div>
		<div class="col-md-9 col-lg-9">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<?php if($this->session->role == "CUSTOMER" ): ?>
				<h2><?php echo lang('profile_my_profile') ?></h2>

				<?php else: ?>
				<h3><?php echo lang('profile_customer_profile').' '.$customer->name ?></h3>			
				<?php endif; ?>
			</div>
			<div class="col-md-6 col-lg-6">
				<br/>
				<!-- Si el usuario ha marcado como favorito dicho cliente aparecerá la siguiente línea comentada en vez de la otra-->
		
				<?php if($this->session->role && $this->session->role == "APP_USER"): ?>
					<?php if(isset($bookmarked) && $bookmarked == TRUE): ?>
						<a href="<?php echo site_url("app_user/unBookmark_a_customer/".$customer->customer_id) ?>" style="margin-top: -15px;" class="btn btn-primary"><?php echo lang('profile_favorite') ?> <span class="glyphicon glyphicon-heart"></span></a>
					<?php else: ?>
						<a href="<?php echo site_url("app_user/bookmark_a_customer/".$customer->customer_id) ?>" style="margin-top: -15px;" class="btn btn-primary"><?php echo lang('profile_mark_favorite') ?><span class="glyphicon glyphicon-heart-empty"></span></a>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
				<?php if($this->session->role == "ADMINISTRATOR" || ($this->session->role == "CUSTOMER" && $this->session->id == $customer->customer_id ) ): ?>
				<h3><?php echo lang('profile_my_progress')?></h3>
				<hr>
				<?php if($customer->finalized_services > 0): ?>
				<?php if($servicios_por_delante != 0): ?>
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label for="type"><?php echo lang('profile_services_next')?>: </label>
							&nbsp;<?php echo $posicion?> (<?php echo $servicios_por_delante ?> Services)
						</div>
					</div>
				</div>
				<?php endif; ?>
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label for="type"><?php echo lang('profile_my_position')?>: </label>
							&nbsp;<?php echo $posicion+1?> (<?php echo $customer->finalized_services ?> <?php echo lang('profile_services') ?>)
						</div>
					</div>
				</div>
				<?php if($servicios_por_detras != 0): ?>
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label for="type"><?php echo lang('profile_services_before')?>: </label>
							&nbsp;<?php echo $posicion+2?> (<?php echo $servicios_por_detras ?> <?php echo lang('profile_services') ?>)
						</div>
					</div>
				</div>
				<?php endif; ?>
				<?php endif;?>
			<div class="row">			
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
		  				  <label for="payment"><?php echo lang('profile_payment_this_month') ?>: </label>&nbsp;
							<?php if($customer->type == "Business"): ?>
								<?php if($progress->hasbanner): ?>
									<?php echo (45+150+($progress->num_bonus * 40)) - $progress->discount?> €
								<?php else: ?>
									<?php echo (45+($progress->num_bonus * 40)) - $progress->discount?> €
								<?php endif; ?>
							<?php else: ?>
								<?php if($progress->hasbanner): ?>
									<?php echo (15+50+($progress->num_bonus * 10)) - $progress->discount?> €
								<?php else: ?>
									<?php echo (15+($progress->num_bonus * 10)) - $progress->discount?> €
								<?php endif; ?>
							<?php endif; ?>
					 	</div>
					</div>		
			</div>
			<?php endif; ?>	
			<h3><?php echo lang('profile_personal_data')?></h3>
			<hr>
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="type"><?php echo lang('profile_type') ?>: </label>&nbsp;<?php echo lang('profile_'.$customer->type) ?>
		     		</div>
			</div>
		</div>
		<?php if($this->session->role == "CUSTOMER" ): ?>
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="type"><?php echo lang('profile_name') ?>: </label>&nbsp;<?php echo $customer->name ?>
		     		</div>
			</div>
		</div>
		<?php endif; ?>

		<div class="row">
			<?php if($this->session->role == "ADMINISTRATOR" || $this->session->role == "CUSTOMER"): ?>
				<div class="col-md-6 col-lg-6">
					<div class="form-group">
					  <label for="phone_number"><?php echo lang('profile_phone_number') ?>: </label>&nbsp;<?php echo $customer->phone_number ?>
				 	</div>
				</div>
			<?php endif; ?>
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="zip_code"><?php echo lang('profile_zipCode') ?>: </label>&nbsp;<?php echo $customer->zip_code ?>
		     		</div>
			</div>
		</div>
		<?php if($this->session->role == "ADMINISTRATOR" || $this->session->role == "CUSTOMER"): ?>
			<div class="row">			
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
		  				  <label for="email">Email: </label>&nbsp;<?php echo $customer->email ?>
					 		</div>
					</div>		
			</div>
		<?php endif; ?>
		<?php if($this->session->role == "APP_USER"): ?>
			<div class="row">
			  <div class="col-md-6 col-lg-6">
				<h3><?php echo lang('profile_need_a_service') ?></h3>
				<button type="button" class="btn btn-md buttonRed" data-toggle="modal" 
						data-target='#<?php echo "creation_service_modal_".$customer->customer_id ?>'><?php echo lang('service_request_service')?></button>
				<?php echo get_creation_service_modal($customer->customer_id , site_url('app_user/createPendingService')) ?>
			  </div>
			</div>
		<?php endif; ?>
	</div>
	</div> <!-- /class cols  -->
		
    </div> <!-- /container -->
    <br />
    <div class="container">
	<div class="row row-centered">
		<div class="col-xs-12 col-sm-6 col-md-6 col-centered" >
			<?php echo $map['js']; ?>
			<?php echo $map['html']; ?>
		
		<br>
		<?php if($comments): ?>
			<h3><?php echo lang('profile_users_coments') ?></h3>
			<?php foreach($comments as $comment): ?>
				<div class="alert alert-info">
				<p><?php echo lang('profile_rating') ?>: 
					   <?php  
						  for ($i=0 ; $i < ceil($comment->rating); $i++){
						  echo '<span>&#9733</span>';
						  }
						  $numAux = 5 - ceil($comment->rating);
						  if ($numAux != 0){
						     for ($i=0 ; $i < $numAux; $i++){
							 echo '<span>&#9734</span>';
						     }
						  }
					   ?>
				</p>
				<p><?php echo lang('profile_comment') ?>: <?php echo $comment->comment ?></p>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
		</div>
	</div>
    </div>
