      <div class="container text-center">
	<div class="row">
	     <img src="<?php echo base_url("assets/img/logo.png"); ?>" class="img-homeinneed center-block" id="logoCentral" />
	</div>
      </div>

	<?php if($this->session->role != "ADMINISTRATOR"): ?>
    <div class="container">
      <div class="row row-centered">
        <div class="col-centered" id="search">
		<form action="<?php echo site_url('/service/search') ?>" method="GET">
			<div class="input-group borderCentral input-group-xs">
				<div id="latitude"></div>
				<div id="longitude"></div>
				<input type="text" name="text_search" class="form-control searchCentral" id="search-input" placeholder="<?php echo lang('searchPlaceHolder'); ?>">
				<span class="input-group-btn">		
					<button class="btn btn-default" type="submit" id="search-span" >
						<span class="glyphicon glyphicon-search" ><span/>
					</button>
				</span>
			</div>
		<?php if($this->session->flashdata('showAdvancedSearch')): ?>
		<div id="advanced-search" class="panel panel-default">
			<?php echo lang('user_of_tags') ?>: <br>
				<?php echo form_label(lang("tags_electrician"), "electrician"); ?>
				<?php echo form_checkbox("electrician", "electrician", FALSE); ?>

				<?php echo form_label(lang("tags_locksmith"), "locksmith"); ?>
				<?php echo form_checkbox("locksmith", "locksmith", FALSE); ?>

				<?php echo form_label(lang("tags_plumber"), "plumber"); ?>
				<?php echo form_checkbox("plumber", "plumber", FALSE); ?>
	
				<?php echo form_label(lang("tags_printer"), "printer"); ?>
				<?php echo form_checkbox("printer", "printer", FALSE); ?>

				<?php echo form_label(lang("tags_builder"), "builder"); ?>
				<?php echo form_checkbox("builder", "builder", FALSE); ?>
		<?php endif; ?>
			</form>
		</div> 
        </div>
      </div>
		<?php endif; ?>
    </div> <!-- /container -->
