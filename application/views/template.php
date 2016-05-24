	<?php 
		include('header.php'); 

		echo validation_errors();
		echo $content;	
		
		if($this->session->role != "ADMINISTRATOR" && $this->session->role != "CUSTOMER"){
			include('banners.php');		
		}

		include('footer.php'); 
	?>


