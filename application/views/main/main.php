      <div class="container text-center">
	<div class="row">
	     <img src="<?php echo base_url("assets/img/logo.png"); ?>" class="img-responsive center-block" id="logoCentral" />
	</div>
      </div>

    <div class="container">
      <div class="row">
        <div class="container text-center" id="search">
		<form action="<?php echo site_url('/service/search') ?>" method="GET">
			<div class="input-group borderCentral">
				<div id="latitude"></div>
				<div id="longitude"></div>
				<input type="text" name="text_search" class="form-control searchCentral" id="search-input" placeholder="What do you need?">
				<span class="input-group-btn">		
					<button class="btn btn-default" type="submit" id="search-span" >
						<span class="glyphicon glyphicon-search" ><span/>
					</button>
				</span>
			</div>
		<?php if(isset($showAdvancedSearch)): ?>
		<div id="advanced-search" class="panel panel-default">
			Maybe you wanted to say: <br>
				<?php echo form_label("electrician", "electrician"); ?>
				<?php echo form_checkbox("electrician", "electrician", FALSE); ?>

				<?php echo form_label("locksmith", "locksmith"); ?>
				<?php echo form_checkbox("locksmith", "locksmith", FALSE); ?>

				<?php echo form_label("plumber", "plumber"); ?>
				<?php echo form_checkbox("plumber", "plumber", FALSE); ?>
	
				<?php echo form_label("printer", "printer"); ?>
				<?php echo form_checkbox("printer", "printer", FALSE); ?>

				<?php echo form_label("builder", "builder"); ?>
				<?php echo form_checkbox("builder", "builder", FALSE); ?>
		<?php endif; ?>
			</form>
		</div> 
        </div>
      </div>

    </div> <!-- /container -->
