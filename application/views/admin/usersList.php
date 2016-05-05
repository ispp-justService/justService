    <div class="container">
      <div class="row row-centered">
	<h3><?php echo lang('admin_users_list') ?></h3>
	<hr>
		<?php foreach($users as $user): ?>
		<div class="col-xs-12 col-sm-6 col-md-6 col-centered">
		<div class="panel panel-default" >
		   <div class="panel-heading">
			<a href="<?php echo site_url("app_user/showProfile/".$user->app_user_id) ?>">
				<?php echo $user->name." ".$user->surname ?>
			</a>
			
			</div>
		      <div class="panel-body">
			      	<table>
				   <tr>
					<td>
						<?php if($user->photo): ?>
							<img src="<?php echo base_url($user->photo); ?>" id="logo" wight ="100px" height="100px"/><br />
						<?php else: ?>
					   		<img src="<?php echo base_url("assets/img/avatar-logo.png"); ?>" id="logo" wight ="100px" height="100px"/><br />
						<?php endif; ?>
					</td>
				   </tr>
				   <tr>
					<td><b>Email:</b> <?php echo $user->email ?></td>	
				   </tr>
				   <tr>
					<td><b><?php echo lang('admin_moment') ?>:</b> <?php echo date('Y-m-d H:i', strtotime($user->moment))?></td>	
				   </tr>
				   <tr>
					<td><b><?php echo lang('admin_user_discount_avialable') ?>:</b> <?php echo $user->discount?> €</td>	
				   </tr>
				   <tr>
					<td><b><?php echo lang('profile_zipCode') ?>:</b> <?php echo $user->zip_code?></td>	
				   </tr>
				   <tr>
					<td><b><?php echo lang('profile_phone_number') ?>:</b> <?php echo $user->phone_number?></td>	
				   </tr>				
				</table>
				<div class="pull-right">
				<?php if($user->deleted == "f"): ?>
					<button type="button" 
						class="btn btn-md buttonRed" 
						data-toggle="modal" 
						data-target='#<?php echo $user->app_user_id ?>'><?php echo lang('admin_deactivate_user') ?></button>
					<?php echo get_confirmation_modal($user->app_user_id , site_url('admin/deactivateUser'), array("app_user_id" => $user->app_user_id)) ?>
				<?php else: ?>
					<?php echo lang('admin_user_deleted') ?>
				<?php endif; ?>
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
