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
		
	     	     <input type="text" name="text_search" class="form-control searchCentral" id="search-input" placeholder="What do you need?">
		     <span class="input-group-btn">		
			<button class="btn btn-default" type="submit" id="search-span" >
			    <span class="glyphicon glyphicon-search" ><span/>
			</button>
		     </span>
	</div>
	</form>
        </div>
      </div>

    </div> <!-- /container -->
