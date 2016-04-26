<div class="container">
	<div class="row row-centered">
		<h3>Customer's Banners</h3>
		<hr>
		
		
		<div class="col-xs-6 col-sm-6 col-md-6 col-centered">
		
		<button type="button" 
				class="btn btn-xl buttonInfo" 
				data-toggle="modal" 
				data-target='#modalCreateBanner'>Create a new Banner</button>
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
				<div class="panel panel-default">
					<div class="panel-heading"">
						<?php echo $banner->name ?>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-8">
								<div class="table-responsive">
									<table class="table">
										<tr>
											<img src="<?php echo base_url($banner->image); ?>" style="margin-top:80px" id="logo" wight ="100px" height="100px"/><br />
										</tr>
										<tr>
											<td><b>Moment:</b> <?php echo $banner->moment ?></td>	
										</tr>
										<tr>
											<td>
											<?php if($banner->delete == "f"): ?>

												<button type="button" 
												class="btn btn-sm buttonRed" 
												data-toggle="modal" 
												data-target='#<?php echo $banner->banner_id ?>'>Deactivate banner</button>
											<?php echo get_confirmation_modal($banner->banner_id , site_url('admin/deactivateBanner'), array("banner_id" => $banner->banner_id, "customer_id" => $customer_id)) ?>
											<?php else: ?>
												Banner deactivated
											<?php endif; ?>
											</td>
										</tr>				
									</table>
								</div>
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
