    <div class="container">
      <div class="row row-centered">
	<h3>User's list</h3>
	<hr>
	<div class="col-xs-6 col-sm-6 col-md-6 col-centered">
		<?php foreach($users as $user): ?>
		<div class="row">
		<div class="panel panel-default" >
		   <div class="panel-heading"><?php echo $user->name." ".$user->surname ?></div>
		      <div class="panel-body">
			<div class="row">
			   <div class="col-md-8">
			      	<table>
				   <tr>
					<td><b>Email:</b> <?php echo $user->email ?></td>	
				   </tr>
				   <tr>
					<td><b>Moment:</b> <?php echo $user->moment?></td>	
				   </tr>
				   <tr>
					<td><b>Discount available:</b> <?php echo $user->discount?></td>	
				   </tr>
				   <tr>
					<td><b>Zip Code:</b> <?php echo $user->zip_code?></td>	
				   </tr>
				   <tr>
					<td><b>Phone Number:</b> <?php echo $user->phone_number?></td>	
				   </tr>				
				</table>
			    </div>
			    <div class="col-md-4">
				<img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" id="logo" wight ="100px" height="100px"/>
			    </div>
			</div>
		      </div>
		   </div>
		   </div> <!-- /row para separar los paneles entre sí -->
		   <br />

			<?php endforeach; ?> 

		</div>
	</div> <!-- /class cols  -->
      </div> <!-- /row -->
    </div> <!-- /container -->
