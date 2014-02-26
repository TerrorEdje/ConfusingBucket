<?php
	include 'model/location.php';
		
	function getAllLocations($connection)
	{
		$query = "SELECT * FROM location";
		$result =$connection->query($query);
		
		$i = 0;
		$locations = array();
		
		while ($row =$result->fetch_assoc())
		{
			$locations[$i] = new Location();
			foreach ($row as $key => $value) {
				$locations[$i] -> _set($key, $value);
			}			
			$i++;
		}
		
		$result->close();
		
		return $locations;
	}
    
    function getLocationByID($locationID, $connection)
	{
		$query = "SELECT * FROM location WHERE id = '".$locationID."'";
		$result =$connection->query($query);
		
		$location = new Location();
		
		while ($row =$result->fetch_assoc())
		{
			foreach ($row as $key => $value) {
				$location -> _set($key, $value);
			}	
		}
		
		$result->close();
		
		return $location;
	}
?>