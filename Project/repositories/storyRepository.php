<?php
	include_once 'model/story.php';
		
	function getAllStories($connection)
	{
		$query = "SELECT * FROM story";
		$result =$connection->query($query);
		
		$i = 0;
		$stories = array();
		
		while ($row =$result->fetch_assoc())
		{
			//alle waardes van tabel story zetten
			$stories[$i] = new Story();
			foreach ($row as $key => $value) {
				$stories[$i] -> _set($key, $value);
			}
			
			$query2 = "SELECT * FROM link WHERE story_id='".$stories[$i]->_get("id")."'"; 
			$result2 = $connection->query($query2);
			if (!$result2) {
				throw new Exception("Database Error [{$connection->errno}] {$connection->error}");
			}
			$m = 0;
			$links = array();
			while ($row =$result2->fetch_assoc())
			{
				$links[$m] = $row["link"];
				$m++;
			}
			$stories[$i] -> _set("links",$links);
			
			$i++;
		}
		
		$result->close();
		$result2->close();
		
		return $stories;
	}
	
	function getStoriesByLocationID($locationID,$connection)
	{
		$query = "SELECT s.id,s.type_id,s.startdate,s.enddate,s.description,s.schoolyear, ol.location_id FROM story AS s JOIN organization_location AS ol ON s.id = ol.story_id WHERE ol.location_id ='".$locationID."'";
		$result =$connection->query($query);
		
		$i = 0;
		$stories = array();
		
		while ($row =$result->fetch_assoc())
		{
			//alle waardes van tabel story zetten
			$stories[$i] = new Story();
			foreach ($row as $key => $value) {
				$stories[$i] -> _set($key, $value);
			}
			
			$query2 = "SELECT * FROM story_link WHERE story_id='".$stories[$i]->_get("id")."'"; 
			$result2 = $connection->query($query2);
			$m = 0;
			$links = array();
			while ($row =$result2->fetch_assoc())
			{
				$links[$m] = $row["link"];
				$m++;
			}
			$stories[$i] -> _set("links",$links);
			
			$i++;
			
			$result2->close();
		}
		
		$result->close();
		
		
		return $stories;
	}
    
    function getStoryByID($storyID, $connection)
    {
        $query = "SELECT * FROM story where id = '".$storyID."'";
		$result =$connection->query($query);
		
		$story = new Story();
		
		while ($row =$result->fetch_assoc())
		{

			//alle waardes van tabel story zetten
			foreach ($row as $key => $value) {
				$story -> _set($key, $value);
			}
			
			$query2 = "SELECT * FROM link WHERE story_id='".$story->_get("id")."'"; 
			$result2 = $connection->query($query2);
			$m = 0;
			$links = array();
			while ($row =$result2->fetch_assoc())
			{
				$links[$m] = $row["link"];
				$m++;
			}
			$story -> _set("links",$links);
			
		}
		
		$result->close();
		$result2->close();
		
		return $story;
    }
	
	function addStory($story, $connection)
	{
		$type = $story -> _get("type");
		$startdate = $story->_get("startdate");
		$organization_id = $story->_get("organization_id");
		$study_id = $story->_get("study_id");
		$student_id = $story->_get("student_id");
		$enddate = $story->_get("enddate");
		$description = $story->_get("description");
		$schoolyear = $story->_get("schoolyear");
		$query = "INSERT INTO story (type,organization_id,student_id,study_id,startdate,enddate,description,schoolyear) VALUES (?,?,?,?,?,?,?,?)";
		$stmt = $connection ->prepare($query);
		$stmt -> bind_param('siiisssi',$type,$organization_id,$student_id,$study_id,$startdate,$enddate,$description,$schoolyear);
		if(!$stmt->execute())
		{
			echo "Execute failed: (" . $stmt -> errno . ") " . $stmt -> error;
		}
		//Haal ID op van ingevoegde story
		$id = mysqli_insert_id($connection);
		$stmt->close();
		
		$links = $story->_get("links");
		foreach($links as &$link)
		{
			$query2 = "INSERT INTO link (story_id,link) VALUES (?,?)";
			$stmt2 = $connection ->prepare($query2);
			$stmt2 -> bind_param('is',$id,$link);
			if(!$stmt2->execute())
			{
				echo "Execute failed: (" . $stmt2 -> errno . ") " . $stmt2 -> error;
			}
			$stmt2->close();
		}
		
		return $id;
	}
?>