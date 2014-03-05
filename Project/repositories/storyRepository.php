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
		}
		
		$result->close();
		$result2->close();
		$result3->close();
		$result4->close();
		$result5->close();
		
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
		$query = 'INSERT INTO story (type_id,startdate,enddate,description,schoolyear) VALUES (' .$story->_get("type_id"). ',' .$story->_get("startdate"). ',' .$story->_get("enddate"). ',' .$story->_get("description"). ',' .$story->_get("schoolyear"). ')';
		$result = $connection->query($query);
		$result->close();
	}
?>