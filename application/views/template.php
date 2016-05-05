	<?php 
		include('header.php'); 

		echo $content;	
		
		if($this->session->role != "ADMINISTRATOR"){
			include('banners.php');		
		}

		include('footer.php'); 
	?>


