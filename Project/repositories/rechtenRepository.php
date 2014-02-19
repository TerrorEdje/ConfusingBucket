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
			foreach ($row as $key => $value) {
				$story[$i] -> _set($key, $value);
			}
            
            $query2 = "SELECT * FROM gebruiker_has_rechten WHERE rechten_id='".$row["id"]."'";
            $result2 = $connection->query($query2);
			
            $j = 0;
            $gebruiker_gebruikersnamen = array();
            
            while ($row =$result2->fetch_assoc())
            {
                $gebruiker_gebruikersnamen[$j] = $row["gebruiker_gebruikersnaam"];
                $j++;
            }
			
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
			foreach ($row as $key => $value) {
				$story[$i] -> _set($key, $value);
			}
            
            $query2 = "SELECT * FROM gebruiker_has_rechten WHERE rechten_id='". $row["id"]."'";
            $result2 = $connection->query($query2);
			
            $j = 0;

            $gebruiker_gebruikersnamen = array();
            
            while ($row =$result2->fetch_assoc())
            {
                $gebruiker_gebruikersnamen[$j] = $row["gebruiker_gebruikersnaam"];
                $j++;
            }
		}
		
		$result->close();
		
		return $rechten;
	}
?>