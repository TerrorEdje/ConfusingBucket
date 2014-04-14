<?php
	include 'auth/check.php';

	$check = new Check();
	$error = $check->checkView(1, 'authtest');
	
	#echo '<pre>'.print_r($error).'</pre>';

	if($error['bool'] == 'true'){
		echo 'Hello, access granted';
	}
	else
	{
		echo $error['string'];
	}
?>