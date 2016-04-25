    <div class="container">
	<div class="row">
		<div class="col-md-3 col-lg-3">
		   <div class="row">
			<div class="text-center">
				<?php if($user->photo): ?>
					<img src="<?php echo base_url($user->photo); ?>" style="margin-top:80px" id="logo" wight ="100px" height="100px"/><br />
				<?php else: ?>
			   		<img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" style="margin-top:80px" id="logo" wight ="100px" height="100px"/><br />
				<?php endif; ?>
			   <b>My Photo</b><br>
				<?php if($this->session->id == $user->app_user_id): ?>
					<button type="button" 
										class="btn btn-info btn-xs" 
										data-toggle="modal" 
										data-target='#uploadImageModal'>Change image</button>	

					<?php echo get_upload_image_modal($this->session->id, $this->session->role, site_url("main/uploadImage")); ?>

				<?php endif; ?>
			</div>
		   </div>
		</div>
		<div class="col-md-9 col-lg-9">
			<h3>My Profile</h3>
			<hr>
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="name">Name: </label>&nbsp;<?php echo $user->name ?>
		     		</div>
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="type">Surnames: </label>&nbsp;<?php echo $user->surname ?>
		     		</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="email">Email: </label>&nbsp;<?php echo $user->email ?>
		     		</div>
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="discount">Discount: </label>&nbsp;<?php echo $user->discount ?> %
		     		</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="zip_code">Zip Code: </label>&nbsp;<?php echo $user->zip_code ?>
		     		</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="phone_number">Phone Number: </label>&nbsp;<?php echo $user->phone_number ?>
		     		</div>
			</div>
		</div>
	</div>

	</div> <!-- /class cols  -->
    </div> <!-- /container -->
