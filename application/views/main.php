<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
<head>
	 <meta charset="utf-8">
   	 <meta http-equiv="X-UA-Compatible" content="IE=edge">

   	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home in need Services</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" />
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.0.js"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/view_manager.js"); ?>"></script>
</head>
<body>
	<h1>Just Service</h1>
	<div class="btn-group">
	  <button type="button" class="btn btn-primary" onclick="loadView('<?php echo site_url() ?>/test')">Perfil</button>

	  <button type="button" class="btn btn-primary">Busqueda</button>

	  <button type="button" class="btn btn-primary">Valoraciones</button>

	  <button type="button" class="btn btn-primary">Login</button>

	</div>

	<div id="view"></div>

<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</body>
</html>
