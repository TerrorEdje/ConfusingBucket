<?php
	include 'model/gebruiker.php';
		
	function getAllGebruiker($connection)
	{
		$query = "SELECT * FROM gebruiker";
		$result =$connection->query($query);
		
		$i = 0;
		$gebruiker = array();
		
		while ($row =$result->fetch_assoc())
		{
			$gebruikersnaam = $row["gebruikersnaam"];
			$wachtwoord = $row["wachtwoord"];
			$email = $row["email"];
            $rechten_ids = array();
            
            $query2 = "SELECT * FROM gebruiker_has_rechten WHERE gebruiker_gebruikersnaam='".$gebruikersnaam."'";
            $result2 = $connection->query($query2);
            
            $j = 0;
            
            while ($row =$result2->fetch_assoc())
            {
                $rechten_ids[$j] = $row["rechten_id"];
            }
			
			$gebruiker[$i] = new Gebruiker();
			$gebruiker[$i] -> _set("gebruikersnaam",$gebruikersnaam);
			$gebruiker[$i] -> _set("wachtwoord",$wachtwoord);
			$gebruiker[$i] -> _set("email",$email);
            $gebruiker[$i] -> _set("rechten_ids",$rechten_ids);
			
			$i++;
		}
		
		$result->close();
		
		return $gebruiker;
	}
    
    function getGebruikerByGebruikersnaam($gebruikersnaam,$connection)
	{
		$query = "SELECT * FROM gebruiker where gebruikersnaam='".$gebruikersnaam."'";
		$result =$connection->query($query);
		
		$gebruiker = new Gebruiker();
		
		while ($row =$result->fetch_assoc())
		{
			$gebruikersnaam = $row["gebruikersnaam"];
			$wachtwoord = $row["wachtwoord"];
			$email = $row["email"];
            $rechten_ids = array();
            
            $query2 = "SELECT * FROM gebruiker_has_rechten WHERE gebruiker_gebruikersnaam='".$gebruikersnaam."'";
            $result2 = $connection->query($query2);
            
            $j = 0;
            
            while ($row =$result2->fetch_assoc())
            {
                $rechten_ids[$j] = $row["rechten_id"];
            }
			
			$gebruiker -> _set("gebruikersnaam",$gebruikersnaam);
			$gebruiker -> _set("wachtwoord",$wachtwoord);
			$gebruiker -> _set("email",$email);
            $gebruiker -> _set("rechten_ids",$rechten_ids);
		}
		
		$result->close();
		
		return $gebruiker;
	}
?>