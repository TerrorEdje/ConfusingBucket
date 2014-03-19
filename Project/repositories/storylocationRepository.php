<?php
	include_once 'model/storylocation.php';
		
	function getAllStoryLocations($connection)
	{
		$query = "SELECT * FROM storylocation";
		$result =$connection->query($query);
		
		$i = 0;
		$storylocations = array();
		
		while ($row =$result->fetch_assoc())
		{
			$locations[$i] = new StoryLocation();
			foreach ($row as $key => $value) {
				$locations[$i] -> _set($key, $value);
			}
			
			$i++;
		}
		
		$result->close();
		
		return $storylocations;
	}
    
    function getStoryLocationsByStoryID($storyID, $connection)
	{
		$query = "SELECT * FROM storylocation WHERE story_id = '".$storyID."'";
		$result =$connection->query($query);
		
		$i = 0;
		$storylocations = array();
		while ($row =$result->fetch_assoc())
		{
			$storylocations[$i] = new StoryLocation();
			foreach ($row as $key => $value) {
				$storylocations[$i] -> _set($key, $value);
			}
			
			$i++;
		}
		
		$result->close();
		
		return $storylocations;
	}
?>