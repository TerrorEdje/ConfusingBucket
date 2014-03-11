<?php
session_start();

function changeMenu(){
	echo '<script type="text/javascript">$("#loginButton").html("\
			<a href=\"#\" onclick=\"load(\'logout.php\'); return false;\">\
				<span class=\"text-danger\">Log out</span>\
			</a>\
		");
		$(".upload_storymenu").show();
		load(\'home.php\')</script>';
}

if (isset($_POST['username'])) {
	if($_POST['username'] == "frank_de_wit" && $_POST['password'] == "wachtwoord"){
		$_SESSION['id'] = 2;
		//changeMenu();
		header('Location: index.php');
	}else if($_POST['username'] == "henk_de_vries" && $_POST['password'] == "geenwachtwoord"){
		$_SESSION['id'] = 3;
		changeMenu();
	}
	else
	{
		echo('<script type="text/javascript">load("login.php?msg=Gebruikersnaam_en_wachtwoord_komen_niet_overeen");</script>');
	}
}
else
{
}

?>