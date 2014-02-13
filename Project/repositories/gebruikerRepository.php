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
			$id = $row["id"];
			$gebruikersnaam = $row["gebruikersnaam"];
			$wachtwoord = $row["wachtwoord"];
			$email = $row["email"];
						
			$gebruiker[$i] = new Gebruiker();
			$gebruiker[$i] -> _set("id",$id);
			$gebruiker[$i] -> _set("gebruikersnaam",$gebruikersnaam);
			$gebruiker[$i] -> _set("wachtwoord",$wachtwoord);
			$gebruiker[$i] -> _set("email",$email);
			
			$i++;
		}
		
		$result->close();
		
		return $gebruiker;
	}
?>