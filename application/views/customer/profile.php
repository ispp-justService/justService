    <div class="container">
	<div class="row">
		<div class="col-md-3 col-lg-3">
		   <div class="row">
			<div class="text-center">
			   <?php if($customer->photo): ?>
					<img src="<?php echo base_url($customer->photo); ?>" style="margin-top:80px" id="logo" wight ="100px" height="100px"/><br />
				<?php else: ?>
			   		<img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" style="margin-top:80px" id="logo" wight ="100px" height="100px"/><br />
				<?php endif; ?>
			   <b>My Photo</b><br>
				<?php if($this->session->id == $customer->customer_id  && $this->session->role == "CUSTOMER" ): ?>
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
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<h3>My Profile</h3>
			</div>
			<div class="col-md-6 col-lg-6">
				<br/>
				<!-- Si el usuario ha marcado como favorito dicho cliente aparecerá la siguiente línea comentada en vez de la otra-->
		
				<?php if($this->session->role && $this->session->role == "APP_USER"): ?>
					<?php if(isset($bookmarked) && $bookmarked == TRUE): ?>
						<a href="<?php echo site_url("app_user/unBookmark_a_customer/".$customer->customer_id) ?>" class="btn btn-primary">Favorite <span class="glyphicon glyphicon-heart"></span></a>
					<?php else: ?>
						<a href="<?php echo site_url("app_user/bookmark_a_customer/".$customer->customer_id) ?>" class="btn btn-primary">Mark Favorite <span class="glyphicon glyphicon-heart-empty"></span></a>
					<?php endif; ?>
					<?php if($this->session->role == "APP_USER"): ?>
							<button type="button" class="btn btn-xs buttonRed" data-toggle="modal" 
									data-target='#<?php echo "creation_service_modal_".$customer->customer_id ?>'>Request Service</button>
							<?php echo get_creation_service_modal($customer->customer_id , site_url('app_user/createPendingService')) ?>
					<?php endif; ?>
				<?php endif; ?>
			</div>
		</div>
			<hr>
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="name">Name: </label>&nbsp;<?php echo $customer->name ?>
		     		</div>
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="type">Type: </label>&nbsp;<?php echo $customer->type ?>
		     		</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="phone_number">Phone Number: </label>&nbsp;<?php echo $customer->phone_number ?>
		     		</div>
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
				  <label for="zip_code">Zip Code: </label>&nbsp;<?php echo $customer->zip_code ?>
		     		</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="form-group">
  				  <label for="email">Email: </label>&nbsp;<?php echo $customer->email ?>
		     		</div>
			</div>
		</div>
	</div>
	</div> <!-- /class cols  -->
		
    </div> <!-- /container -->
    <br />
    <div class="container">
	<div class="row row-centered">
		<div class="col-xs-6 col-sm-6 col-md-6 col-centered" >
			<?php echo $map['js']; ?>
			<?php echo $map['html']; ?>
		</div>
	</div>
    </div>
