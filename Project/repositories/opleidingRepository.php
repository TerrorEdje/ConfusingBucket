<?php
	include 'model/opleiding.php';
		
	function getAllOpleiding($connection)
	{
		$query = "SELECT * FROM opleiding";
		$result =$connection->query($query);
		
		$i = 0;
		$opleiding = array();
		
		while ($row =$result->fetch_assoc())
		{
			$id = $row["id"];
			$naam = $row["naam"];
			$omschrijving = $row["omschrijving"];
			$organisatie_id = $row["organisatie_id"];
						
			$opleiding[$i] = new Opleiding();
			$opleiding[$i] -> _set("id",$id);
			$opleiding[$i] -> _set("naam",$voornaam);
			$opleiding[$i] -> _set("omschrijving",$omschrijving);
			$opleiding[$i] -> _set("organisatie_id",$organisatie_id);
			
			$i++;
		}
		
		$result->close();
		
		return $opleiding;
	}
?>