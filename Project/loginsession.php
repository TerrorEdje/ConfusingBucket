<?php

session_start();

if (isset($_POST['username'])) {
	if($_POST['username'] == "frank_de_wit" && $_POST['password'] == "wachtwoord"){
		$_SESSION['id'] = 11;
	}else if($_POST['username'] == "henk_de_vries" && $_POST['password'] == "geenwachtwoord"){
		$_SESSION['id'] = 12;
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