    <div class="container">
      <div class="row row-centered">
	<h3>Sign up</h3>
	<hr>
	<div class="col-xs-6 col-sm-6 col-md-6 col-centered">
		<?php echo form_open('/app_user/sendEditInformation') ?>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="name">First Name</label>
				  <input type="text" name="name" class="form-control" placeholder="First Name" value="<?php echo $user->name?>">
			     	</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="surname">Last Name</label>
				  <input type="text" name="surname" class="form-control" placeholder="Last Name" value="<?php echo $user->surname?>">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="password">Password</label>
				  <input type="password" name="password" class="form-control" placeholder="Password">
			     	</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="passwordConfirm">Confirm your password</label>
				  <input type="password" name="passwordConfirm" class="form-control" placeholder="Confirm your password">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="email">Email</label>
				  <input type="email" name="email" class="form-control" placeholder="Enter your email" value="<?php echo $user->email?>">
			     	</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="phoneNumber">Phone Number</label>
				  <input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number" value="<?php echo $user->phone_number ?>">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="zipCode">Zip Code</label>
				  <input type="text" name="zipCode" class="form-control" placeholder="Zip Code" value="<?php echo $user->zip_code ?>">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<button type="submit" class="btn buttonBlack pull-right">Edit information</button>
			</div>
		</div>
	     </form>
			<!-- Aquí mostraremos los errores del formulario -->
			<?php echo validation_errors(); ?>
	</div> <!-- /class cols  -->
      </div> <!-- /row -->
    </div> <!-- /container -->
