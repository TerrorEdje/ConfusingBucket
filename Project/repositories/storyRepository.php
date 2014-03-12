<?php
	include 'model/story.php';
		
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
            
            $query2 = "SELECT * FROM study_has_student WHERE story_id='".$stories[$i]->_get("id")."'";
            $result2 = $connection->query($query2);
            $j = 0;
            $study_ids = array();
            $student_ids = array();
            while ($row =$result2->fetch_assoc())
            {
                $study_ids[$j] = $row["study_id"];
                $student_ids[$j] = $row["student_id"];
                $j++;
            }
            $stories[$i] -> _set("study_id",$study_ids);
            $stories[$i] -> _set("student_ids",$student_ids);
			
			$query3 = "SELECT * FROM organization_location WHERE story_id='".$stories[$i]->_get("id")."'";
            $result3 = $connection->query($query3);
            $k = 0;
            $organization_ids = array();
            $location_ids = array();
            while ($row =$result3->fetch_assoc())
            {
                $organization_ids[$k] = $row["organization_id"];
                $location_ids[$k] = $row["location_id"];
                $k++;
            }
            $stories[$i] -> _set("organization_ids",$organization_ids);
            $stories[$i] -> _set("location_ids",$location_ids);
			
			$query4 = "SELECT * FROM residence_location WHERE story_id='".$stories[$i]->_get("id")."'"; 
			$result4 = $connection->query($query4);
			$l = 0;
			$residence_location_ids = array();
			while ($row =$result4->fetch_assoc())
			{
				$residence_location_ids[$l] = $row["location_id"];
				$l++;
			}
			$stories[$i] -> _set("residence_location_ids",$residence_location_ids);
			
			$query5 = "SELECT * FROM story_link WHERE story_id='".$stories[$i]->_get("id")."'"; 
			$result5 = $connection->query($query5);
			$m = 0;
			$links = array();
			while ($row =$result5->fetch_assoc())
			{
				$links[$m] = $row["link"];
				$m++;
			}
			$stories[$i] -> _set("links",$links);
			
			$i++;
		}
		
		$result->close();
		$result2->close();
		$result3->close();
		$result4->close();
		$result5->close();
		
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
            
            $query2 = "SELECT * FROM study_has_student WHERE story_id='".$stories[$i]->_get("id")."'";
            $result2 = $connection->query($query2);
            $j = 0;
            $study_ids = array();
            $student_ids = array();
            while ($row =$result2->fetch_assoc())
            {
                $study_ids[$j] = $row["study_id"];
                $student_ids[$j] = $row["student_id"];
                $j++;
            }
            $stories[$i] -> _set("study_id",$study_ids);
            $stories[$i] -> _set("student_ids",$student_ids);
			
			$query3 = "SELECT * FROM organization_location WHERE story_id='".$stories[$i]->_get("id")."'";
            $result3 = $connection->query($query3);
            $k = 0;
            $organization_ids = array();
            $location_ids = array();
            while ($row =$result3->fetch_assoc())
            {
                $organization_ids[$k] = $row["organization_id"];
                $location_ids[$k] = $row["location_id"];
                $k++;
            }
            $stories[$i] -> _set("organization_ids",$organization_ids);
            $stories[$i] -> _set("location_ids",$location_ids);
			
			$query4 = "SELECT * FROM residence_location WHERE story_id='".$stories[$i]->_get("id")."'"; 
			$result4 = $connection->query($query4);
			$l = 0;
			$residence_location_ids = array();
			while ($row =$result4->fetch_assoc())
			{
				$residence_location_ids[$l] = $row["location_id"];
				$l++;
			}
			$stories[$i] -> _set("residence_location_ids",$residence_location_ids);
			
			$query5 = "SELECT * FROM story_link WHERE story_id='".$stories[$i]->_get("id")."'"; 
			$result5 = $connection->query($query5);
			$m = 0;
			$links = array();
			while ($row =$result5->fetch_assoc())
			{
				$links[$m] = $row["link"];
				$m++;
			}
			$stories[$i] -> _set("links",$links);
			
			$i++;
			
			$result2->close();
			$result3->close();
			$result4->close();
			$result5->close();
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
            
            $query2 = "SELECT * FROM study_has_student WHERE story_id='".$story->_get("id")."'";
            $result2 = $connection->query($query2);

            $study_ids = array();
            $student_ids = array();
            
            $j = 0;
            while ($row =$result2->fetch_assoc())
            {
                $study_ids[$j] = $row["study_id"];
                $student_ids[$j] = $row["student_id"];
                $j++;
            }
            $story -> _set("study_ids",$study_ids);
            $story -> _set("student_ids",$student_ids);
			
			$query3 = "SELECT * FROM organization_location WHERE story_id='".$story->_get("id")."'";
            $result3 = $connection->query($query3);
            $k = 0;
            $organization_ids = array();
            $location_ids = array();
            while ($row =$result3->fetch_assoc())
            {
                $organization_ids[$k] = $row["organization_id"];
                $location_ids[$k] = $row["location_id"];
                $k++;
            }
            $story -> _set("organization_ids",$organization_ids);
            $story -> _set("location_ids",$location_ids);
			
			$query4 = "SELECT * FROM residence_location WHERE story_id='".$story->_get("id")."'"; 
			$result4 = $connection->query($query4);
			$l = 0;
			$residence_location_ids = array();
			while ($row =$result4->fetch_assoc())
			{
				$residence_location_ids[$l] = $row["location_id"];
				$l++;
			}
			$story -> _set("residence_location_ids",$residence_location_ids);
			
			$query5 = "SELECT * FROM story_link WHERE story_id='".$story->_get("id")."'"; 
			$result5 = $connection->query($query5);
			$m = 0;
			$links = array();
			while ($row =$result5->fetch_assoc())
			{
				$links[$l] = $row["link"];
				$m++;
			}
			$story -> _set("links",$links);
			
		}
		
		$result->close();
		$result2->close();
		$result3->close();
		$result4->close();
		$result5->close();
		
		return $story;
    }
	
	function addStory($story, $connection)
	{
		$type_id = $story -> _get("type_id");
		$startdate = $story->_get("startdate");
		$enddate = $story->_get("enddate");
		$description = $story->_get("description");
		$schoolyear = $story->_get("schoolyear");
		$query = "INSERT INTO story (type_id,startdate,enddate,description,schoolyear) VALUES (?,?,?,?,?)";
		$stmt = $connection ->prepare($query);
		$stmt -> bind_param('isssi',$type_id,$startdate,$enddate,$description,$schoolyear);
		if(!$stmt->execute())
		{
			echo "Execute failed: (" . $stmt -> errno . ") " . $stmt -> error;
		}
		//Haal ID op van ingevoegde story
		$id = mysqli_insert_id($connection);
		$stmt->close();
		
		$organization_id = $story -> _get("organization_ids")[0];
		$location_ids = $story->_get("location_ids");
		foreach($location_ids as &$location_id)
		{
			$query2 = "INSERT INTO organization_location (location_id,organization_id,story_id) VALUES (?,?,?)";
			$stmt2 = $connection ->prepare($query2);
			$stmt2 -> bind_param('iii',$location_id,$organization_id,$id);
			if(!$stmt2->execute())
			{
				echo "Execute failed: (" . $stmt2 -> errno . ") " . $stmt2 -> error;
			}
			$stmt2->close();
		}
		
		$residence_location_ids = $story->_get("residence_location_ids");
		foreach($residence_location_ids as &$residence_location_id)
		{
			$query3 = "INSERT INTO residence_location (location_id,story_id) VALUES (?,?)";
			$stmt3 = $connection ->prepare($query3);
			$stmt3 -> bind_param('ii',$residence_location_id,$id);
			if(!$stmt3->execute())
			{
				echo "Execute failed: (" . $stmt3 -> errno . ") " . $stmt3 -> error;
			}
			$stmt3->close();
		}
		
		$links = $story->_get("links");
		foreach($links as &$link)
		{
			$query4 = "INSERT INTO story_link (story_id,link) VALUES (?,?)";
			$stmt4 = $connection ->prepare($query4);
			$stmt4 -> bind_param('is',$id,$link);
			if(!$stmt4->execute())
			{
				echo "Execute failed: (" . $stmt4 -> errno . ") " . $stmt4 -> error;
			}
			$stmt4->close();
		}
		
		return $id;
	}
?>