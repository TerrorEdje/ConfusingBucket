<?php
	include 'model/type.php';
		
	function getAllType($connection)
	{
		$query = "SELECT * FROM type";
		$result =$connection->query($query);
		
		$i = 0;
		$type = array();
		
		while ($row =$result->fetch_assoc())
		{
			$id = $row["id"];
			$name = $row["name"];
			$description = $row["description"];
						
			$type[$i] = new Type();
			$type[$i] -> _set("id",$id);
			$type[$i] -> _set("name",$name);
			$type[$i] -> _set("description",$description);
			
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
			$id = $row["id"];
			$name = $row["name"];
			$description = $row["description"];
						
			$type -> _set("id",$id);
			$type -> _set("name",$name);
			$type -> _set("description",$description);
		}
		
		$result->close();
		
		return $type;
	}
?>