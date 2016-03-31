    <div class="container">
      <div class="row row-centered">
	<h3>Profile</h3>
	<hr>
	<div class="col-xs-6 col-sm-6 col-md-6 col-centered">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="name">Name: <?php echo $user->name ?></label>
		     	</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="type">Surnames: <?php echo $user->surname ?></label>
		     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="phoneNumber">Email: <?php echo $user->email ?></label>
		     	</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="zipCode">Discount: <?php echo $user->discount ?></label>
		     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="latitude">Photo: <?php echo $user->photo ?></label>
		     	</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="longitude">Zip Code: <?php echo $user->zip_code ?></label>
		     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="email">Phone Number: <?php echo $user->phone_number ?></label>
		     	</div>
			</div>
		</div>
	</div> <!-- /class cols  -->
      </div> <!-- /row -->
    </div> <!-- /container -->
