<?php
	include 'model/acces.php';
		
	function getAccesByID($user_id, $connection)
	{
		$query = "SELECT * FROM acces WHERE userid = '".$user_id."'";
		$result =$connection->query($query);
		
		$acceses = array();
		
		while ($row =$result->fetch_assoc())
		{
			$acces = new Acces();

			//alle waardes van tabel story zetten
			foreach ($row as $key => $value) {
				$acces -> _set($key, $value);
			}

			array_push($acceses, $acces);
		}		
		
		$result->close();
		
		return $acceses;
	}
?>