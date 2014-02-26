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
			$story[$i] = new Story();
			foreach ($row as $key => $value) {
				$story[$i] -> _set($key, $value);
			}
            
            $query2 = "SELECT * FROM study_has_student WHERE story_id='".$row["id"]."'";
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
            $story[$i] -> _set("study_id",$study_ids);
            $story[$i] -> _set("student_ids",$student_ids);
			
			$query3 = "SELECT * FROM organization_location WHERE story_id='".$row["id"]."'";
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
            $story[$i] -> _set("organization_ids",$organization_ids);
            $story[$i] -> _set("location_ids",$location_ids);			
			$i++;
		}
		
		$result->close();
		$result2->close();
		$result3->close();
		
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
            
            $query2 = "SELECT * FROM study_has_student WHERE story_id='".$row["id"]."'";
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
		}
		
		$result->close();
		$result2->close();
		$result3->close();
		
		return $story;
    }
?>