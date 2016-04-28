<br />
<br />
<div id="result"></div>
<div class="container">
      <div class="row">
		<?php foreach($exposed_banners as $banner): ?>
		
			<div class="col-md-4 col-xs-4 col-lg-4 col-sm-4">
				<a href="<?php echo site_url("customer/showProfile/".$banner->customer_id); ?>">
					<img src="<?php echo base_url($banner->image); ?>" class="img-thumbnail img-responsive" />
				</a>
			</div>
		<?php endforeach; ?>
      </div>
</div>
