    <div class="container">
      <div class="row row-centered">
	<h3>Customer's list</h3>
	<hr>
	<div class="col-xs-6 col-sm-6 col-md-6 col-centered">
		<?php foreach($customers as $customer): ?>
		<div class="row">
		<?php if($customer->type == 'Freelance'): ?>
		   <div class="panel panel-default" style="background-color: aquamarine;" >
		<?php else: ?>
		   <div class="panel panel-default" style="background-color: bisque;" >	
		<?php endif; ?>
		   <div class="panel-heading"><?php echo $customer->name ?></div>
		      <div class="panel-body">
			<div class="row">
			   <div class="col-md-8">
			      	<table>
				   <tr>
					<td><b>Email:</b> <?php echo $customer->email ?></td>	
				   </tr>
				   <tr>
					<td><b>Moment:</b> <?php echo $customer->moment ?></td>	
				   </tr>
				   <tr>
					<td><b>Type:</b> <?php echo $customer->type ?></td>	
				   </tr>
				   <tr>
					<td><b>Zip Code:</b> <?php echo $customer->zip_code ?></td>	
				   </tr>
				   <tr>
					<td><b>Latitude:</b> <?php echo $customer->latitude ?></td>	
				   </tr>
				   <tr>
					<td><b>Longitude:</b> <?php echo $customer->longitude ?></td>	
				   </tr>
				   <tr>
					<td><b>Phone Number:</b> <?php echo $customer->phone_number ?></td>	
				   </tr>				
				</table>
			    </div>
			    <div class="col-md-4">
				<img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" id="logo" wight ="100px" height="100px"/>
			    </div>
			</row>
		      </div>
		   </div>
		</div>
		</div><!-- /row para separar los paneles entre sí -->
		<br />
		<?php endforeach; ?> 
	</div> <!-- /class cols  -->
      </div> <!-- /row -->
    </div> <!-- /container -->
