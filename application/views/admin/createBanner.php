    <div class="container">
      <div class="row row-centered">
	<h3>Creation of a new Banner</h3>
	<hr>
	<div class="col-xs-6 col-sm-6 col-md-6 col-centered">
		<?php echo form_open('/admin/sendCreateBanner') ?>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="name">Name</label>
				  <input type="text" name="name" class="form-control" placeholder="Name">
			     	</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="type">Urlid</label>
				  <input type="text" name="type" class="form-control" placeholder="Type">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="phoneNumber">Phone Number</label>
				  <input type="text" name="phoneNumber" class="form-control" placeholder="Phone Number">
			     	</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="zipCode">Zip Code</label>
				  <input type="text" name="zipCode" class="form-control" placeholder="Zip Code">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="latitude">Latitude</label>
				  <input type="text" name="latitude" class="form-control" placeholder="Latitude">
			     	</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="longitude">Longitude</label>
				  <input type="text" name="longitude" class="form-control" placeholder="Longitude">
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
				  <input type="email" name="email" class="form-control" placeholder="Enter your email">
			     	</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="photo">Photo (Optional)</label>
				  <input type="text" name="photo" class="form-control" placeholder="Photo">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<button type="submit" class="btn buttonBlack pull-right">Sign up</button>
			</div>
		</div>
	     </form>
			<!-- Aquí mostraremos los errores del formulario -->
			<?php echo validation_errors(); ?>
	</div> <!-- /class cols  -->
      </div> <!-- /row -->
    </div> <!-- /container -->
