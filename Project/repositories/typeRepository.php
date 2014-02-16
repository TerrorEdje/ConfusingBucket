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
			$naam = $row["naam"];
			$omschrijving = $row["omschrijving"];
						
			$type[$i] = new Type();
			$type[$i] -> _set("id",$id);
			$type[$i] -> _set("naam",$naam);
			$type[$i] -> _set("omschrijving",$omschrijving);
			
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
			$naam = $row["naam"];
			$omschrijving = $row["omschrijving"];
						
			$type -> _set("id",$id);
			$type -> _set("naam",$naam);
			$type -> _set("omschrijving",$omschrijving);
		}
		
		$result->close();
		
		return $type;
	}
?>