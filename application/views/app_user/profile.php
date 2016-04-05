    <div class="container">
	<div class="row">
		<div class="col-md-3 col-lg-3">
		   <div class="row">
			<div class="text-center">
			   <img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" style="margin-top:80px" id="logo" wight ="100px" height="100px"/><br />
			   <b>My Photo</b>
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
