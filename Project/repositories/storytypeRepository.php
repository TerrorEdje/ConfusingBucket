<?php
	include_once 'model/storytype.php';
		
	function getAllType($connection)
	{
		$query = "SELECT * FROM storytype";
		$result =$connection->query($query);
		
		$i = 0;
		$type = array();
		
		while ($row =$result->fetch_assoc())
		{						
			$type[$i] = new StoryType();
			foreach ($row as $key => $value) {
				$type[$i] -> _set($key, $value);
			}
			
			$i++;
		}
		
		$result->close();
		
		return $type;
	}
    
    function getTypeByName($typeName, $connection)
	{
		$query = "SELECT * FROM type WHERE name = '".$typeName."'";
		$result =$connection->query($query);
		
		$type = new StoryType();
		
		while ($row =$result->fetch_assoc())
		{
			foreach ($row as $key => $value) {
				$type -> _set($key, $value);
			}
		}
		
		$result->close();
		
		return $type;
	}
	
	function addStoryType($type, $connection)
	{
		$name = $type -> _get("name");
		$description = $type-> _get("description");	
		$query = 'INSERT INTO storytype (name,description) VALUES (?,?)';
		$stmt = $connection ->prepare($query);
		$stmt -> bind_param('ss',$name,$description);
		if(!$stmt->execute())
		{
			echo "Execute failed: (" . $stmt -> errno . ") " . $stmt -> error;
		}

		$stmt->close();
		
	}
?>