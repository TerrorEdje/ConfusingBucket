<?php	 
	function openDB()
	{
		$db_hostname = "212.83.232.237"; // De locatie waar de MySQL-service draait
		$db_user = "confusingbucket"; // De usersname waarmee naar de database kan worden verbonden
		$db_password = "bucket007"; // Het password waarmee naar de database kan worden verbonden
		$db_name = "db_develop"; // De name van de database zelf, deze moet via de DBMS worden aangemaakt
		$mysqli = new mysqli($db_hostname, $db_user, $db_password, $db_name);
		
		if ($mysqli->connect_errno!= 0) //er gaat iets fout ...
		{
			die("Probleem bij het leggen van connectie of selecteren van database");
		}
		
		return $mysqli;
	}
	
	function closeDB($mysqli)
	{
		$mysqli->close();
	}
	

?>