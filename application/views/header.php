<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- CARGA DE ARCHIVOS CSS Y CONFIGURACIÓN CSS -->
        <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/rating.css"); ?>">
	<link rel="icon" href="<?php echo base_url("assets/img/favicon.png"); ?>" type="image/png">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/footer-distributed-with-address-and-phones.css"); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/7.1.0/css/bootstrap-slider.min.css">


	<!-- CARGA DE ARCHIVOS JS -->
	
	<script src="<?php echo base_url("assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"); ?>"></script>

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

	<script src="<?php echo base_url("assets/js/vendor/bootstrap.min.js"); ?>"></script>

	<script src="<?php echo base_url("assets/js/main.js"); ?>"></script>

	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap-filestyle.min.js"); ?>"> </script>

	<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
	<script type="text/javascript">
	    window.cookieconsent_options = {"message":"<?php echo lang('header_cookieMessage') ?>","dismiss":"<?php echo lang('header_cookieButton') ?>","theme":"dark-bottom"};
	</script>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/7.1.0/bootstrap-slider.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
	<!-- End Cookie Consent plugin -->
	
	<style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
	    footer {
		position: absolute;
	    }
	    #logo{
		padding: 7px 20px;
	    }
	    #loginTop{
		padding-top: 16px;
	    }
	    #logoCentral{
		padding-bottom: 23px;
		padding-top: 20px;
	    }
	    #textWhiteHeader{
		color: #ffffff;
		text-decoration: none;
	    }
	    #search{
		width: 60%;
	    }
	    #search-input{
		height: 45px;
  		font-size: 20px;
		
	    }
	    #search-span{
		height: 45px;
		border: 3px solid #7E7E82;
	    }
            #navbar-login-signup{
		margin-right: -70px;
	    }
	    #navbar-signup{
		padding-left: 20px;
	    }
		.img-homeinneed{
			width: 50%
		}
		.img-banner{
			width: 70%;
		}
	   .row-centered{
		text-align:center;
	    }
	   .col-centered{
		display:inline-block;
		text-align:left;
		margin-right:-10px;
		float:none
	    }
           .buttonBlack{
		color: #fff;
		background-color: #101010;
		border-color: #101010;
	   }
	   .buttonRed{
		color: #fff;
		background-color: #FF1F1F;
		border-color: #FF1F1F;
	   }
	   .buttonBlackWhite{
		color: #FFFFFF;
		background-color: #000000;
		border-color: #000000;
	   }
	   .buttonBlackWhite:hover, .buttonBlack:focus{
		color: #FFFFFF;
		background-color: #1E1E1E;
		text-decoration: none;
		    text-decoration-color: -moz-use-text-color;
		    text-decoration-line: none;
		    text-decoration-style: solid;
	   }
           .buttonBlack:hover, .buttonBlack:focus{
		color: #FF1F1F;
		text-decoration: none;
		    text-decoration-color: -moz-use-text-color;
		    text-decoration-line: none;
		    text-decoration-style: solid;
	   }
           .searchCentral{
		border: 3px solid #7E7E82;
	   }
	   .borderCentral{
		border-color:#101010;
	   }

	   body.modal-open{
		overflow: inherit;
		padding-right: 0 !important;
	   }
		
		#discount_slider .slider-selection {
			background: red;
		}
		#discount_slider .slider-handle {
			background: red;
		}

	.cursor {cursor:pointer}


	@media (max-width:767px) {
	.navbar-collapse .navbar-nav > li {padding-left:5px!important;}

	.user-dropdown > .dropdown-menu > li {padding-left:5px!important;}

	}

	@media (min-width:992px) {

	.navbar-collapse .navbar-nav > li {padding-left:5px!important;}

	.navbar-user {padding-left:5px!important;padding-top:50px;}

	}

	body{
	   font-size: 20px; 
	}

	@media (max-width: @screen-xs-min){
	  .modal-xs{ width: @modal-sm; }
	}

	@media (max-width:767px){
	  div#search{
		width: 70%;
	    }
	}
	
	.test{}
	
	@media (min-width:768px){
	  ul.ulDivideColumn{
		-webkit-column-count: 3;
		-moz-column-count: 3;
		column-count: 3;
	   }
	  ul.headerDropdown{margin-left: -50px;}
	  ul.headerDropdownRight{margin-right: -225px;}
	  button.buttonDown{margin-top: 128px;}
	}

	#panel-heading-size{ font-size: 16px; }

	.modalHeader-background-color{
	   background-color: #FF0000;
	   -webkit-border-top-left-radius: 5px;
	   -webkit-border-top-right-radius: 5px;
	   -moz-border-radius-topleft: 5px;
	   -moz-border-radius-topright: 5px;
	   border-top-left-radius: 5px;
	   border-top-right-radius: 5px;
	   color: #FFFFFF;
	}
	.dropdown-menu{text-align:center;}
        </style>

    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
	  <a href="<?php echo base_url("/") ?>"> <img src="<?php echo base_url("assets/img/rotulo.png"); ?>" class="navbar-brand" id="logo" wight ="100px" height="100px"/> </a>  
	  <div id="textWhiteHeader" class="navbar-left navbar-text cursor" style="margin-top: 10px;" data-toggle="dropdown" data-target=".language-dropdown">
		 	<i class="fa fa-language" aria-hidden="true"></i><span class="caret"></span>
	  </div>

	  <ul class="nav navbar-nav navbar-user navbar-left" style="margin-top: 4px;">
	   <li class="dropdown language-dropdown">
		<ul class="dropdown-menu headerDropdown" style="font-size: 20px; ">	
			<li><a href="<?php echo site_url('main/changeLanguage/spanish') ?>"><div class="flag flag-es"></div><?php echo lang('header_spanish');?></a></li>
			<li><a href="<?php echo site_url('main/changeLanguage/english') ?>"><div class="flag flag-gb"></div><?php echo lang('header_english');?></a></li>
		</ul>
	   </li>
	</ul>
	</div><!-- /navbar-header -->

        <div id="navbar" class="navbar-collapse collapse" id="navbar-login-signup">

		<?php if($this->session->userdata('id')):?>
			<div id="textWhiteHeader" class="navbar-right cursor" style="margin-top: 10px;" data-toggle="dropdown" data-target=".user-dropdown">
			<?php if($this->session->role == "APP_USER"):?>			 	
				<img src="<?php echo base_url($this->session->userdata('photo')); ?>" class="img-circle" id="logo" wight ="35px" height="35px"/>
			<?php elseif($this->session->role == "CUSTOMER"): ?>
				<?php if($this->session->type == "Freelance"): ?>
					<img src="http://www.iconarchive.com/download/i43682/treetog/junior/tool-box.ico" class="img-circle" id="logo" wight ="35px" height="35px"/>
				<?php elseif($this->session->type == "Business"): ?>
					<img src="<?php echo base_url($this->session->userdata('photo')); ?>" class="img-circle" id="logo" wight ="35px" height="35px"/>
				<?php endif; ?>
			<?php else: ?>
				<i class="fa fa-tachometer" aria-hidden="true"></i>
			<?php endif; ?>
			<?php echo $this->session->name ?> <span class="caret"></span>
			</div>

			<?php if($this->session->role == "ADMINISTRATOR"): ?>
			<ul class="nav navbar-nav navbar-user navbar-right" style="margin-top: 4px;">
			   <li class="dropdown user-dropdown">
				<ul class="dropdown-menu headerDropdownRight" style="font-size: 20px; ">
					<li><i class="fa fa-tachometer fa-5x" aria-hidden="true"></i></li>
					<li class="divider" role="separator"></li>
					<li><a href="<?php echo site_url('admin/dashboard') ?>"><?php echo lang('header_dashboard') ?></a></li>
					<li class="divider" role="separator"></li>
					<li><a href="<?php echo site_url('admin/usersList') ?>"><?php echo lang('header_users_list') ?></a></li>
					<li class="divider" role="separator"></li>
					<li><a href="<?php echo site_url('admin/signupCustomer') ?>"><?php echo lang('header_customers_signup') ?></a></li>
					<li><a href="<?php echo site_url('admin/customersList') ?>"><?php echo lang('header_customers_list') ?></a></li>
					<li class="divider" role="separator"></li>
					<li><a href="<?php echo site_url("main/logout"); ?>"><?php echo lang('header_logout'); ?></a></li>
				</ul>
			   </li>
			</ul>
			<?php elseif($this->session->role == "CUSTOMER"): ?>
			<ul class="nav navbar-nav navbar-user navbar-right" style="margin-top: 4px;">
			   <li class="dropdown user-dropdown">
				<ul class="dropdown-menu headerDropdownRight" style="font-size: 20px; ">
					<li><img src="<?php echo base_url($this->session->userdata('photo')); ?>" class="img-circle" id="logo" wight ="75px" height="75px"/></li>
					<li><a href="<?php echo site_url('customer/showProfile/'.$this->session->id) ?>"><?php echo lang('header_profile'); ?></li>
					<li class="divider" role="separator"></li>
					<li><a href="<?php echo site_url('customer/showTags') ?>"><?php echo lang('header_manage_tags') ?></a></li>
					<li><a href="<?php echo site_url('customer/editInformation') ?>"><?php echo lang('header_edit_information'); ?></a></li>
					<li><a href="<?php echo site_url('customer/servicesList') ?>"><?php echo lang('header_list_service'); ?></a></li>
					<li class="divider" role="separator"></li>
					<li><a href="<?php echo site_url("main/logout"); ?>"><?php echo lang('header_logout'); ?></a></li>
				</ul>
			   </li>
			</ul>
			<?php elseif($this->session->role == "APP_USER"): ?>
			<ul class="nav navbar-nav navbar-user navbar-right" style="margin-top: 4px;">
			   <li class="dropdown user-dropdown">
				<ul class="dropdown-menu headerDropdownRight" style="font-size: 20px; ">
					<li><img src="<?php echo base_url($this->session->userdata('photo')); ?>" class="img-circle" id="logo" wight ="75px" height="75px"/></li>
					<li><a href="<?php echo site_url('app_user/showProfile/'.$this->session->id) ?>"><?php echo lang('header_profile'); ?></a></li>
					<li class="divider" role="separator"></li>
					<li><a href="<?php echo site_url('app_user/editInformation') ?>"><?php echo lang('header_edit_information'); ?></a></li>
					<li><a href="<?php echo site_url('app_user/myBookmarks') ?>"><?php echo lang('header_bookmarks'); ?></a></li>
					<li><a href="<?php echo site_url('app_user/servicesList') ?>"><?php echo lang('header_list_service'); ?></a></li>
					<li class="divider" role="separator"></li>
					<li><a href="<?php echo site_url("main/logout"); ?>"><?php echo lang('header_logout'); ?></a></li>
				</ul>
			   </li>
			</ul>
			<?php endif; ?>
		<?php else: ?>
			<form class="navbar-form navbar-right" role="form" action="<?php echo site_url("main/login"); ?>" method="POST">
			    	<div class="form-group">
					<input type="email" name="email" placeholder="Email" class="form-control">
			    	</div>
			    	<div class="form-group">
			      		<input type="password" name="password" placeholder="<?php echo lang('header_password'); ?>" class="form-control">
			   		</div>
			    	<button type="submit" class="btn buttonRed"><?php echo lang('header_sign_in'); ?></button>
				<a class="btn btn-default" style="font-size: 14px;" href="<?php echo site_url("app_user/signup"); ?>"><?php echo lang('header_sign_up'); ?></a>
		  	</form>
		<?php endif; ?>
 
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	<?php if($this->session->flashdata('error_message')): ?>
		<div class="alert alert-danger">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error!</strong>&nbsp;<?php echo $this->session->flashdata('error_message'); ?>
		</div>
	<?php endif;  ?>

	<?php $content ?>


