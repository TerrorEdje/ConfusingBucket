<?php
	include 'model/organisation.php';
		
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
			
			$query2 = "SELECT * FROM organization_location WHERE organization_id='".$row["id"]."'";
			$result2 = $connection->query($query);
			
			$j = 0;
			$story__ids = new array();
			
			while ($row = $result->fetch_assoc())
			{
				
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
				$organization[$i] -> _set($key, $value);
			}
		}
		
		$result->close();
		
		return $organization;
	}
?>