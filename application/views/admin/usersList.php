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
				<div class="table-responsive">
			      	<table class="table">
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
					<?php if($user->deleted == "f"): ?>
						<button type="button" 
							class="btn btn-sm buttonRed" 
							data-toggle="modal" 
							data-target='#<?php echo $user->app_user_id ?>'>Deactivate User</button>
						<?php echo get_confirmation_modal($user->app_user_id , site_url('admin/deactivateUser'), "app_user_id") ?>
					<?php else: ?>
						User deleted
					<?php endif; ?>
				</div>
			    </div>
			    <div class="col-md-4">
				<?php if($user->photo): ?>
					<img src="<?php echo base_url($user->photo); ?>" style="margin-top:80px" id="logo" wight ="100px" height="100px"/><br />
				<?php else: ?>
			   		<img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" style="margin-top:80px" id="logo" wight ="100px" height="100px"/><br />
				<?php endif; ?>
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
