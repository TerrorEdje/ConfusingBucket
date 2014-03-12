<?php
	include_once 'model/type.php';
		
	function getAllType($connection)
	{
		$query = "SELECT * FROM type";
		$result =$connection->query($query);
		
		$i = 0;
		$type = array();
		
		while ($row =$result->fetch_assoc())
		{						
			$type[$i] = new Type();
			foreach ($row as $key => $value) {
				$type[$i] -> _set($key, $value);
			}
			
			$i++;
		}
		
		$result->close();
		
		return $type;
	}
    
    function getTypeByID($typeID, $connection)
	{
		$query = "SELECT * FROM type WHERE id = '".$typeID."'";
		$result =$connection->query($query);
		
		$type = new Type();
		
		while ($row =$result->fetch_assoc())
		{
			foreach ($row as $key => $value) {
				$type -> _set($key, $value);
			}
		}
		
		$result->close();
		
		return $type;
	}
	
	function addType($type, $connection)
	{
		$name = $type -> _get("name");
		$description = $type-> _get("description");	
		$query = 'INSERT INTO type (name,description) VALUES (?,?)';
		$stmt = $connection ->prepare($query);
		$stmt -> bind_param('ss',$name,$description);
		if(!$stmt->execute())
		{
			echo "Execute failed: (" . $stmt -> errno . ") " . $stmt -> error;
		}
		
		//Haal ID op van ingevoegde type
		$id = mysqli_insert_id($connection);
		$stmt->close();
		
		return $id;
	}
?>