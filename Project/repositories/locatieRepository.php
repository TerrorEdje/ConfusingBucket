<?php
	include 'model/locatie.php';
		
	function getAllLocatie($connection)
	{
		$query = "SELECT * FROM locatie";
		$result =$connection->query($query);
		
		$i = 0;
		$locatie = array();
		
		while ($row =$result->fetch_assoc())
		{
			$id = $row["id"];
			$land = $row["land"];
			$plaats = $row["plaats"];
			$straatnaam = $row["straatnaam"];
			$huisnummer = $row["huisnummer"];
			$postcode = $row["postcode"];
			$organisatie_id = $row["organisatie_id"];
						
			$locatie[$i] = new Locatie();
			$locatie[$i] -> _set("id",$id);
			$locatie[$i] -> _set("land",$land);
			$locatie[$i] -> _set("plaats",$plaats);
			$locatie[$i] -> _set("straatnaam",$straatnaam);
			$locatie[$i] -> _set("huisnummer",$huisnummer);
			$locatie[$i] -> _set("postcode",$postcode);
			$locatie[$i] -> _set("organisatie_id",$organisatie_id);
			
			$i++;
		}
		
		$result->close();
		
		return $locatie;
	}
?>