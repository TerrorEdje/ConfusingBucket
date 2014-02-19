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
			$story_ids = new array();
			$location_ids = new array();
			
			while ($row = $result->fetch_assoc())
			{
				$story_ids[$j] = $row["story_id"];
				$location_ids[$j] = $row["location_id"];
				$j++;
			}
			
			$organizations[$i] -> _set("story_ids",$story_ids);
			$organizations[$i] -> _set("location_id",$location_ids);
			
			
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
			
			$query2 = "SELECT * FROM organization_location WHERE organization_id='".$row["id"]."'";
			$result2 = $connection->query($query);
			
			$j = 0;
			$story_ids = new array();
			$location_ids = new array();
			
			while ($row = $result->fetch_assoc())
			{
				$story_ids[$j] = $row["story_id"];
				$location_ids[$j] = $row["location_id"];
				$j++;
			}
			
			$organization -> _set("story_ids",$story_ids);
			$organization -> _set("location_id",$location_ids);
		}
		
		$result->close();
		
		return $organization;
	}
?>