<?php
	include 'model/study.php';
		
	function getAllStudies($connection)
	{
		$query = "SELECT * FROM study";
		$result =$connection->query($query);
		
		$i = 0;
		$studies = array();
		
		while ($row =$result->fetch_assoc())
		{
			$study[$i] = new Study();
			foreach ($row as $key => $value) {
				$story[$i] -> _set($key, $value);
			}
            
            
            $query2 = "SELECT * FROM study_has_student WHERE study_id='".$row["id"]."'";
            $result2 = $connection->query($query2);
            
            $j = 0;
			$story_ids = array();
            $student_ids = array();
            
            while ($row =$result2->fetch_assoc())
            {
                $story_ids[$j] = $row["story_id"];
                $student_ids[$j] = $row["student_id"];
				$j++;
            }
            
            $study[$i] -> _set("story_ids",$story_ids);
            $study[$i] -> _set("student_ids",$student_ids);
			
			$i++;
		}
		
		$result->close();
		
		return $studies;
	}
    
    function getStudyByID($studyID, $connection)
	{
		$query = "SELECT * FROM opleiding WHERE id = '".$studyID."'";
		$result =$connection->query($query);
		
		$study = new Study();
		
		while ($row =$result->fetch_assoc())
		{
		
		
			foreach ($row as $key => $value) {
				$story -> _set($key, $value);
			}
            
            $query2 = "SELECT * FROM study_has_student WHERE study_id='".$row["id"]."'";
            $result2 = $connection->query($query2);
            
			$story_ids = array();
            $student_ids = array();
			
            $j = 0;
            
            while ($row =$result2->fetch_assoc())
            {
                $story_ids[$j] = $row["story_id"];
                $student_ids[$j] = $row["student_id"];
				$j++;
            }
            
            $study -> _set("story_ids",$story_ids);
            $study -> _set("student_ids",$student_ids);
		}
		
		$result->close();
		
		return $study;
	}
?>