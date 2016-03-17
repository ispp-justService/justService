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
	    #logoCentral{
		padding-bottom: 23px;
		padding-top: 20px;
	    }
	    #search{
		width: 60%;
	    }
	    #search-input{
		height: 40px;
  		font-size: 20px;
	    }
	    #search-span{
		height: 40px;
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
        </style>
        <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/footer-distributed-with-address-and-phones.css"); ?>">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <script src="<?php echo base_url("assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"); ?>"></script>
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
        <div id="navbar" class="navbar-collapse collapse" id="navbar-login-signup">
	  <div class="navbar-header pull-right">
	 	<a class="navbar-brand" id="navbar-signup" href="<?php echo site_url("signup"); ?>">Sign up</a>
	  </div>
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
