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
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<h3>My Profile</h3>
			</div>
			<div class="col-md-6 col-lg-6">
				<br/>
				<!-- Si el usuario ha marcado como favorito dicho cliente aparecerá la siguiente línea comentada en vez de la otra-->
				<!-- <a href="#" class="btn btn-primary">Favorite <span class="glyphicon glyphicon-heart"></span></a> -->
				<a href="#" class="btn btn-primary">Mark Favorite <span class="glyphicon glyphicon-heart-empty"></span></a>
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
		<div class="panel panel-default" style="background-color: aquamarine;" >
			<?php echo $map['js']; ?>
			<?php echo $map['html']; ?>
		</div>
    </div> <!-- /container -->
