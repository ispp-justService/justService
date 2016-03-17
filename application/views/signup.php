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
		float:none;
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
	  <img src="<?php echo base_url("assets/img/rotulo.png"); ?>" class="navbar-brand" id="logo" wight ="100px" height="100px"/>
        </div>
        <div id="navbar" class="navbar-collapse collapse" id="navbar-login-signup">
	  <div class="navbar-header pull-right">
	 	<a class="navbar-brand" id="navbar-signup" href="#">Sign up</a>
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

    <div class="container">
      <div class="row row-centered">
	<h3>Sign up</h3>
	<hr>
	<div class="col-xs-6 col-sm-6 col-md-6 col-centered">
	     <form role="form">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="name">First Name</label>
				  <input type="text" name="name" class="form-control" placeholder="First Name">
			     	</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="surname">Last Name</label>
				  <input type="text" name="surname" class="form-control" placeholder="Last Name">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="password">Password</label>
				  <input type="password" name="password" class="form-control" placeholder="Password">
			     	</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="passwordConfirm">Confirm your password</label>
				  <input type="password" name="passwordConfirm" class="form-control" placeholder="Confirm your password">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6">
				<div class="form-group">
				  <label for="email">Email</label>
				  <input type="email" name="email" class="form-control" placeholder="Enter your email">
			     	</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<button type="submit" class="btn btn-primary pull-right">Sign up</button>
			</div>
		</div>
	     </form>
	</div> <!-- /class cols  -->
      </div> <!-- /row -->
    </div> <!-- /container -->
	
	<footer class="footer-distributed">

		<div class="footer-left text-center">

			<img src="<?php echo base_url("assets/img/logoWithName.png"); ?>" wigth="125px" height="125px" />

			<p class="footer-links">
				<a href="#">Home</a>
				·
				<a href="#">Cookies</a>
				·
				<a href="#">Terms</a>
				·
				<a href="#">About</a>
				·
				<a href="#">Contact</a>
			</p>

			<p class="footer-company-name">Home in Need &copy; 2016</p>
		</div>

		<div class="footer-center">

			<div>
				<i class="fa fa-map-marker"></i>
				<p><span>Avda. Reina Mercedes</span> Seville, Spain</p>
			</div>

			<div>
				<i class="fa fa-phone"></i>
				<p>+34 95 678 15 99</p>
			</div>

			<div>
				<i class="fa fa-envelope"></i>
				<p><a href="mailto:support@company.com">support@homeinneed.com</a></p>
			</div>

		</div>

		<div class="footer-right">

			<p class="footer-company-about">
				<span>About the company</span>
				Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
			</p>

			<div class="footer-icons">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
			</div>

		</div>

	</footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url("assets/js/vendor/jquery-1.11.2.min.js"); ?>"><\/script>')</script>
	
        <script src="<?php echo base_url("assets/js/vendor/bootstrap.min.js"); ?>"></script>

        <script src="<?php echo base_url("assets/js/main.js"); ?>"></script>
    </body>
</html>
