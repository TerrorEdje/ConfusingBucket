<?php
	include 'model/rechten.php';
		
	function getAllRechten($connection)
	{
		$query = "SELECT * FROM rechten";
		$result =$connection->query($query);
		
		$i = 0;
		$rechten = array();
		
		while ($row =$result->fetch_assoc())
		{
			$id = $row["id"];
			$omschrijving = $row["omschrijving"];
						
			$rechten[$i] = new Rechten();
			$rechten[$i] -> _set("id",$id);
			$rechten[$i] -> _set("omschrijving",$omschrijving);
			
			$i++;
		}
		
		$result->close();
		
		return $rechten;
	}
?>