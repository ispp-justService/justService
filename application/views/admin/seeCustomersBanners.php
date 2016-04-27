<div class="container">
	<div class="row row-centered">
		<h3>Customer's Banners</h3>
		<hr>
		
		<div class="col-xs-6 col-sm-6 col-md-6 col-centered">
		
		<div class="row">
			<button type="button" 
				class="btn btn-xl btn-info" 
				data-toggle="modal" 
				data-target='#modalCreateBanner'>Create a new Banner</button>
		</div>
		
		<!-- Modal -->
		<div id="modalCreateBanner" class="modal fade" role="dialog">
		  <div class="modal-dialog modal-md">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Banner form</h4>
			  </div>
			  <form action="<?php echo site_url('admin/createBanner'); ?>" method="POST" enctype="multipart/form-data">
			  <div class="modal-body">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" placeholder="Name">
					<label>Image</label>
					<input type="file" name="image" size="20" />
					<input type="hidden" name="customer_id" value="<?php echo $customer_id?>">
				</div>
			  </div>
			  <div class="modal-footer">
			    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
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
								data-target='#delete<?php echo $banner->banner_id ?>'>Deactivate banner</button>
							<?php echo get_confirmation_modal($banner->banner_id , site_url('admin/deactivateBanner'), array("banner_id" => $banner->banner_id, "customer_id" => $customer_id)) ?>
							<?php else: ?>
								Banner deactivated
							<?php endif; ?>
						</div>
					</div>
					<div class="panel-body">
							<table>
							   <tr>
								<td><img src="<?php echo base_url($banner->image); ?>" id="logo" wight ="100px" height="100px"/><br /></td>
							   	<td><b>Moment:</b>&nbsp;<?php echo date('Y-m-d H:i', strtotime($banner->moment)) ?></td>
							   </tr>
							</table>
					</div><!-- /panel-body-->
					<div class="panel-footer">
					     	<?php if($banner->active == "f"): ?>
							<button type="button" 
							class="btn btn-sm btn-primary" 
							data-toggle="modal" 
							data-target='#active<?php echo $banner->banner_id ?>'>Use this banner</button>
						<?php echo get_confirmation_modal("active".$banner->banner_id , site_url('admin/useBanner'), array("banner_id" => $banner->banner_id, "customer_id" => $customer_id)) ?>
						<?php else: ?>
							Already using this banner. 
						<?php endif; ?>
					  
					</div><!-- /panel-footer-->
				</div><!-- /panel-default-->
			</div><!-- /row para separar los paneles entre sí -->
			<br />
			<?php endforeach; ?> 
		</div> <!-- /class cols  -->
	</div> <!-- /row -->
</div> <!-- /container -->
