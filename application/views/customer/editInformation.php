    <div class="container">
      <div class="row row-centered">
	<h3>Sign up</h3>
	<hr>
	<div class="col-xs-6 col-sm-6 col-md-6 col-centered">
		<?php echo form_open('/customer/sendEditInformation') ?>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="name">Name</label>
				  <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $customer->name ?>">
			     	</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="type">Type</label>
				  <input type="text" name="type" class="form-control" placeholder="Type" value="<?php echo $customer->type ?>">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="phoneNumber">Phone Number</label>
				  <input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number" value="<?php echo $customer->phone_number ?>">
			     	</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="zipCode">Zip Code</label>
				  <input type="text" name="zipCode" class="form-control" placeholder="Zip Code" value="<?php echo $customer->zip_code ?>">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="latitude">Latitude</label>
				  <input type="text" name="latitude" class="form-control" placeholder="Latitude" value="<?php echo $customer->latitude ?>">
			     	</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="longitude">Longitude</label>
				  <input type="text" name="longitude" class="form-control" placeholder="Longitude" value="<?php echo $customer->longitude ?>">
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
				  <input type="email" name="email" class="form-control" placeholder="Enter your email" value="<?php echo $customer->email ?>">
			     	</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="photo">Photo (Optional)</label>
				  <input type="text" name="photo" class="form-control" placeholder="Photo" value="<?php echo $customer->photo ?>">
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
