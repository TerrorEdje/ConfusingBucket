<?php
	include_once 'model/location.php';
		
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
		$result2->close();
		
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
		$result2->close();
		
		return $location;
	}
	
	function addLocation($location, $connection)
	{
		$country = $location -> _get("country");
		$city = $location -> _get("city");
		$streetname = $location -> _get("streetname");
		$number = $location -> _get("number");
		$zipcode = $location -> _get("zipcode");
		$latitude = $location -> _get("latitude");
		$longitude = $location -> _get("longitude");	
		$query = 'INSERT INTO location (country,city,streetname,number,zipcode,latitude,longitude) VALUES (?,?,?,?,?,?,?)';
		$stmt = $connection ->prepare($query);
		$stmt -> bind_param('sssssdd',$country,$city,$streetname,$number,$zipcode,$latitude,$longitude);
		if(!$stmt->execute())
		{
			echo "Execute failed: (" . $stmt -> errno . ") " . $stmt -> error;
		}
		
		//Haal ID op van ingevoegde location
		$id = mysqli_insert_id($connection);
		$stmt->close();
		
		return $id;	
	}
?>