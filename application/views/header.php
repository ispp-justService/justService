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

	   .ulDivideColumn{
		-webkit-column-count: 3;
		-moz-column-count: 3;
		column-count: 3;
	   }

	   body.modal-open{
		overflow: inherit;
		padding-right: 0 !important;
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

        </style>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/rating.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/footer-distributed-with-address-and-phones.css"); ?>">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<!-- CARGA DE ARCHIVOS JS -->
	
	<script src="<?php echo base_url("assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"); ?>"></script>

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

	<script src="<?php echo base_url("assets/js/vendor/bootstrap.min.js"); ?>"></script>

	<script src="<?php echo base_url("assets/js/main.js"); ?>"></script>

	<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
	<script type="text/javascript">
	    window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","theme":"dark-bottom"};
	</script>

	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
	<!-- End Cookie Consent plugin -->

    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
	  <a href="<?php echo base_url("/") ?>"> <img src="<?php echo base_url("assets/img/rotulo.png"); ?>" class="navbar-brand" id="logo" wight ="100px" height="100px"/> </a>
        </div>
	
	<?php if($this->session->role == "ADMINISTRATOR"): ?>
	<ul class="nav navbar-nav navbar-user navbar-right">
	   <li class="dropdown user-dropdown">
		<ul class="dropdown-menu">
			<li><a href="<?php echo site_url('admin/usersList') ?>">User's List</a></li>
			<li class="divider" role="separator"></li>
			<li><a href="<?php echo site_url('admin/signupCustomer') ?>">Customer's Signup</a></li>
			<li><a href="<?php echo site_url('admin/customersList') ?>">Customer's List</a></li>
			<li class="divider" role="separator"></li>
			<li><a href="<?php echo site_url("main/logout"); ?>">Log out</a></li>
		</ul>
	   </li>
	</ul>
	<?php elseif($this->session->role == "CUSTOMER"): ?>
	<ul class="nav navbar-nav navbar-user navbar-right">
	   <li class="dropdown user-dropdown">
		<ul class="dropdown-menu">
			<li><a href="<?php echo site_url('customer/showProfile/'.$this->session->id) ?>">My Profile</a></li>
			<li class="divider" role="separator"></li>
			<li><a href="<?php echo site_url('customer/showTags') ?>">Manage Tags</a></li>
			<li><a href="<?php echo site_url('customer/editInformation') ?>">Edit information</a></li>
			<li><a href="<?php echo site_url('customer/servicesList') ?>">Service's List</a></li>
			<li class="divider" role="separator"></li>
			<li><a href="<?php echo site_url("main/logout"); ?>">Log out</a></li>
		</ul>
	   </li>
	</ul>
	<?php elseif($this->session->role == "APP_USER"): ?>
	<ul class="nav navbar-nav navbar-user navbar-right">
	   <li class="dropdown user-dropdown">
		<ul class="dropdown-menu">
			<li><a href="<?php echo site_url('app_user/showProfile/'.$this->session->id) ?>">My Profile</a></li>
			<li class="divider" role="separator"></li>
			<li><a href="<?php echo site_url('app_user/editInformation') ?>">Edit information</a></li>
			<li><a href="<?php echo site_url('app_user/myBookmarks') ?>">My bookmarks</a></li>
			<li><a href="<?php echo site_url('app_user/servicesList') ?>">Service's List</a></li>
			<li class="divider" role="separator"></li>
			<li><a href="<?php echo site_url("main/logout"); ?>">Log out</a></li>
		</ul>
	   </li>
	</ul>
	<?php endif; ?>

        <div id="navbar" class="navbar-collapse collapse" id="navbar-login-signup">

		<?php if($this->session->userdata('id')):?>
			<div id="textWhiteHeader" class="navbar-right navbar-text cursor" data-toggle="dropdown" data-target=".user-dropdown">
			 	<?php echo $this->session->name ?> <span class="caret"></span>
			</div>
		<?php else: ?>
			<div class="navbar-header pull-right">
	 			<a class="navbar-brand" id="navbar-signup" href="<?php echo site_url("app_user/signup"); ?>">Sign up</a>
	  		</div>
			<form class="navbar-form navbar-right" role="form" action="<?php echo site_url("main/login"); ?>" method="POST">
	            <div class="form-group">
					<input type="email" name="email" placeholder="Email" class="form-control">
					<div id="latitude"></div>
					<div id="longitude"></div>
            	</div>
            	<div class="form-group">
              		<input type="password" name="password" placeholder="Password" class="form-control">
           		</div>
            	<button type="submit" class="btn buttonRed">Sign in</button>
          	</form>
		<?php endif; ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
	<?php if(isset($error)): ?>
		<div class="alert alert-danger">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error!</strong>&nbsp;<?php echo $error; ?>
		</div>
	<?php endif;  ?>

	<?php $content ?>


