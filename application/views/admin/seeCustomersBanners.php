<div class="container">
	<div class="row row-centered">
		<h3><?php echo lang('admin_customers_banner') ?></h3>
		<hr>
		
		<div class="col-xs-6 col-sm-6 col-md-6 col-centered">
		
		<div class="row row-centered">
			<button type="button" 
				class="btn btn-xl btn-info" 
				data-toggle="modal" 
				data-target='#modalCreateBanner'><?php echo lang('admin_create_banner') ?></button>
		</div>
		
		<!-- Modal -->
		<div id="modalCreateBanner" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-md">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php echo lang('admin_banner_form') ?></h4>
			  </div>
			  <form action="<?php echo site_url('admin/createBanner'); ?>" method="POST" enctype="multipart/form-data">
			  <div class="modal-body">
				<div class="form-group">
					<label><?php echo lang('profile_name') ?></label>
					<input type="text" name="name" class="form-control" placeholder="<?php echo lang('profile_name') ?>">
					<label><?php echo lang('admin_banner_image') ?></label>
					<input type="file" name="image" size="20" />
					<input type="hidden" name="customer_id" value="<?php echo $customer_id?>">
				</div>
			  </div>
			  <div class="modal-footer">
			    <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><?php echo lang('admin_banner_cancel') ?></button>
			    <input type="submit" class="btn btn-success" value="Create">
			  </div>
			  </form>
			</div>
		  </div>
		</div>
			
			<?php foreach($banners as $banner): ?>
			<div class="row">
				<br />
				<div class="panel panel-default">
					<div class="panel-heading"">
						<b><?php echo $banner->name ?></b>
						<div class="pull-right">
							<?php if($banner->delete == "f"): ?>
								<button type="button" 
								class="btn btn-xs buttonRed" 
								data-toggle="modal" 
								data-target='#delete<?php echo $banner->banner_id ?>'><?php echo lang('admin_deactivate_banner') ?></button>
							<?php echo get_confirmation_modal("delete".$banner->banner_id , site_url('admin/deactivateBanner'), array("banner_id" => $banner->banner_id, "customer_id" => $customer_id)) ?>
							<?php else: ?>
								<?php echo lang('admin_banner_deactivated') ?>
							<?php endif; ?>
						</div>
					</div>
					<div class="panel-body">
							<table>
							   <tr>
								<td><img src="<?php echo base_url($banner->image); ?>" id="logo" wight ="100px" height="100px"/><br /></td>
							   	<td><b><?php echo lang('profile_moment') ?>:</b>&nbsp;<?php echo date('Y-m-d H:i', strtotime($banner->moment)) ?></td>
							   </tr>
							</table>
					</div><!-- /panel-body-->
					<div class="panel-footer">
					     	<?php if($banner->active == "f"): ?>
							<button type="button" 
							class="btn btn-sm btn-primary" 
							data-toggle="modal" 
							data-target='#active<?php echo $banner->banner_id ?>'><?php echo lang('admin_user_banner') ?></button>
						<?php echo get_confirmation_modal("active".$banner->banner_id , site_url('admin/useBanner'), array("banner_id" => $banner->banner_id, "customer_id" => $customer_id)) ?>
						<?php else: ?>
							<?php echo lang('admin_already_using_banner') ?>
						<?php endif; ?>
					  
					</div><!-- /panel-footer-->
				</div><!-- /panel-default-->
			</div><!-- /row para separar los paneles entre sí -->
			<br />
			<?php endforeach; ?> 
		</div> <!-- /class cols  -->
	</div> <!-- /row -->
</div> <!-- /container -->
