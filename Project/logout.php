<?php 
	session_start();
	if(isset($_SESSION['id']))
	{
  		unset($_SESSION['id']);
  		session_destroy();
  	}
  	header('Location: index.php');
	/*echo '<script type="text/javascript">$("#loginButton").html("\
			<a href=\"#\" onclick=\"load(\'login.php\'); return false;\">\
				<span class=\"text-primary\">Login</span>\
			</a>\
		");
		$(".upload_storymenu").hide();
		load(\'login.php?msg=U_bent_nu_uitgelogt\')</script>';*/
?>