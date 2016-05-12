    <div class="container">
	<div class="row">
		<div class="col-md-3 col-lg-3">
		   <div class="row">
			<div class="text-center">
				<?php if($user->photo): ?>
					<img src="<?php echo base_url($user->photo); ?>" style="margin-top:80px" id="logo" wight ="200px" height="200px"/><br />
				<?php else: ?>
			   		<img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" style="margin-top:80px" id="logo" wight ="200px" height="200px"/><br />
				<?php endif; ?>
				<div class="ratingShow">
				<?php for ($i=0 ; $i < $user->rating; $i++){
					echo '<span>&#9733</span>';
				}?>
				</div>
				<br/>
				<?php if($this->session->id == $user->app_user_id && $this->session->role == "APP_USER"): ?>
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
			<h3>
				<?php if($this->session->role == "APP_USER"): ?>
					<?php echo lang('profile_my_profile') ?>
				<?php else: ?>
					<?php echo lang('profile_other_user_profile') ?> <?php echo $user->name ?> <?php echo $user->surname ?> 
				<?php endif; ?>
			</h3>
		
			<hr>
		<?php if($this->session->role == "APP_USER" || $this->session->role == "ADMINISTRATOR"): ?>
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="email">Email: </label>&nbsp;<?php echo $user->email ?>
		     		</div>
			</div>
			
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="discount"><?php echo lang('profile_discount') ?>: </label>&nbsp;<?php echo $user->discount ?> €
		     		</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="zip_code"><?php echo lang('profile_zipCode') ?>: </label>&nbsp;<?php echo $user->zip_code ?>
		     		</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="phone_number"><?php echo lang('profile_phone_number') ?>: </label>&nbsp;<?php echo $user->phone_number ?>
		     		</div>
			</div>
		</div>
		<?php endif; ?>
	<?php if($comments): ?>
		<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-centered" >
		<h3><?php echo lang('profile_customers_comments') ?></h3>
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
			<p><?php echo lang('profile_comment') ?>:<?php echo $comment->comment ?></p>
			</div>
		<?php endforeach; ?>
		</div>
		</div>
	<?php endif; ?>
	</div>

	</div> <!-- /class cols  -->

    </div> <!-- /container -->
