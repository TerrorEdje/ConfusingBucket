<?php

function changeMenu(){
	
}

if (isset($_POST['username'])) {
	if($_POST['username'] == "frank_de_wit" && $_POST['password'] == "wachtwoord"){
		$_SESSION['id'] = 11;
		header("Location: index.php");
		die();
	}else if($_POST['username'] == "henk_de_vries" && $_POST['password'] == "geenwachtwoord"){
		$_SESSION['id'] = 12;
		header("Location: index.php");
		die();
	}
	else
	{
		header("Location: login.php");
		die();
	}
}
else
{
	header("Location: index.php");
	die();
}

?>