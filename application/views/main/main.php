      <div class="container text-center">
	<div class="row">
	     <img src="<?php echo base_url("assets/img/logo.png"); ?>" class="img-responsive center-block" id="logoCentral" />
	</div>
      </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="container text-center" id="search">
	<div class="input-group borderCentral">
		<?php echo form_open('/service/search') ?>
	     <input type="text" name="text_search" class="form-control searchCentral" id="search-input" placeholder="What do you need?">
	     <span class="input-group-btn">		
		<button class="btn btn-default" type="submit" id="search-span" >
		    <span class="glyphicon glyphicon-search" ><span/>
		</button>
	     </span>
	</div>
        </div>
      </div>

    </div> <!-- /container -->
