<?php
	include_once 'model/organization.php';
		
	function getAllOrganizations($connection)
	{
		$query = "SELECT * FROM organization";
		$result =$connection->query($query);
		
		$i = 0;
		$organizations = array();
		
		while ($row =$result->fetch_assoc())
		{
			$organizations[$i] = new Organization();
			foreach($row as $key => $value)
			{
				$organizations[$i] -> _set($key, $value);
			}			
			$i++;
		}
		
		$result->close();
		
		
		return $organizations;
	}
    
    function getOrganizationByID($organizationID, $connection)
	{
		$query = "SELECT * FROM organization WHERE id = '".$organizationID."'";
		$result =$connection->query($query);
		
		$organization = new Organization();
		
		while ($row =$result->fetch_assoc())
		{
			foreach($row as $key => $value)
			{
				$organization -> _set($key, $value);
			}
		}
		
		$result->close();
		
		return $organization;
	}
	
	function addOrganization($organization, $connection)
	{
		$name = $organization -> _get("name");
		$description = $organization -> _get("description");
		$website = $organization -> _get("website");	
		$query = 'INSERT INTO organization (name,description,website) VALUES (?,?,?)';
		$stmt = $connection ->prepare($query);
		$stmt -> bind_param('sss',$name,$description,$website);
		if(!$stmt->execute())
		{
			echo "Execute failed: (" . $stmt -> errno . ") " . $stmt -> error;
		}
		
		//Haal ID op van ingevoegde organization
		$id = mysqli_insert_id($connection);
		$stmt->close();
		
		return $id;	
	}
?>