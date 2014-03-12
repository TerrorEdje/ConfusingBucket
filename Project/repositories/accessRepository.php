<?php
	include_once 'model/access.php';
		
	function getaccessByID($user_id, $connection)
	{
		$query = "SELECT * FROM access WHERE user_id = '".$user_id."'";
		$result =$connection->query($query);
		
		$accesses = array();
		
		while ($row =$result->fetch_assoc())
		{
			$access = new access();

			//alle waardes van tabel story zetten
			foreach ($row as $key => $value) {
				if($key == 'crud_operations'){
					$access -> _set('crud', $value);
				}
				$access -> _set($key, $value);
			}

			array_push($accesses, $access);
		}		
		
		$result->close();
		
		return $accesses;
	}
?>