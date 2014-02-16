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
            $gebruiker_gebruikersnamen = array();
            
            $query2 = "SELECT * FROM gebruiker_has_rechten WHERE rechten_id='".$id."'";
            $result2 = $connection->query($query2);
			
            $j = 0;
            
            while ($row =$result2->fetch_assoc())
            {
                $gebruiker_gebruikersnamen[$j] = $row["gebruiker_gebruikersnaam"];
            }
            
			$rechten[$i] = new Rechten();
			$rechten[$i] -> _set("id",$id);
			$rechten[$i] -> _set("omschrijving",$omschrijving);
            $rechten[$i] -> _set("gebruiker_gebruikersnamen",$gebruiker_gebruikersnamen);
			
			$i++;
		}
		
		$result->close();
		
		return $rechten;
	}
    
    function getRechtenByID($rechtenID, $connection)
	{
		$query = "SELECT * FROM rechten WHERE id = '".$rechtenID."'";
		$result =$connection->query($query);
		
		$rechten = array();
		
		while ($row =$result->fetch_assoc())
		{
			$id = $row["id"];
			$omschrijving = $row["omschrijving"];
            $gebruiker_gebruikersnamen = array();
            
            $query2 = "SELECT * FROM gebruiker_has_rechten WHERE rechten_id='".$id."'";
            $result2 = $connection->query($query2);
			
            $j = 0;
            
            while ($row =$result2->fetch_assoc())
            {
                $gebruiker_gebruikersnamen[$j] = $row["gebruiker_gebruikersnaam"];
            }
            
			$rechten = new Rechten();
			$rechten -> _set("id",$id);
			$rechten -> _set("omschrijving",$omschrijving);
            $rechten -> _set("gebruiker_gebruikersnamen",$gebruiker_gebruikersnamen);
		}
		
		$result->close();
		
		return $rechten;
	}
?>