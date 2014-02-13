<?php
	include 'model/organisatie.php';
		
	function getAllOrganisatie($connection)
	{
		$query = "SELECT * FROM organisatie";
		$result =$connection->query($query);
		
		$i = 0;
		$organisatie = array();
		
		while ($row =$result->fetch_assoc())
		{
			$id = $row["id"];
			$naam = $row["naam"];
			$omschrijving = $row["omschrijving"];
			$website = $row["website"];
						
			$organisatie[$i] = new Organisatie();
			$organisatie[$i] -> _set("id",$id);
			$organisatie[$i] -> _set("naam",$voornaam);
			$organisatie[$i] -> _set("omschrijving",$omschrijving);
			$organisatie[$i] -> _set("website",$website);
			
			$i++;
		}
		
		$result->close();
		
		return $organisatie;
	}
?>