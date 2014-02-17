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
    
    function getOrganisatieByID($organisatieID, $connection)
	{
		$query = "SELECT * FROM organisatie WHERE id = '".$organisatieID."'";
		$result =$connection->query($query);
		
		$organisatie = new Organisatie();
		
		while ($row =$result->fetch_assoc())
		{
			$id = $row["id"];
			$naam = $row["naam"];
			$omschrijving = $row["omschrijving"];
			$website = $row["website"];
            
			$organisatie -> _set("id",$id);
			$organisatie -> _set("naam",$voornaam);
			$organisatie -> _set("omschrijving",$omschrijving);
			$organisatie -> _set("website",$website);
		}
		
		$result->close();
		
		return $organisatie;
	}
?>