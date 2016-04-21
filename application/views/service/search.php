    <div class="container">
      <div class="row row-centered">
	<h3>Customers who can help you</h3>
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
			      	<div class="table-responsive">
			      	<table class="table">
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
					<td><b>Phone Number:</b> <?php echo $customer->phone_number ?></td>	
				   </tr>
				   <tr>
					<td><b>Rating:</b> <?php echo $customer->rating ?></td>	
				   </tr>				
				</table>
				</div>
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
		<?php echo $pagination; ?>

		<script type=”text/javascript”>
			var centreGot = false;
		</script>
	<?php echo $map['js']; ?>
	<?php echo $map['html']; ?>
    </div> <!-- /container -->