<?php
	include_once 'model/school.php';
		
	function getAllSchools($connection)
	{
		$query = "SELECT * FROM school";
		$result = $connection->query($query);
		
		$i = 0;
		$schools = array();
		
		while ($row = $result->fetch_assoc())
		{
			$schools[$i] = new School();
			foreach($row as $key => $value)
			{
				$schools[$i] -> _set($key, $value);
			}
			
			$query2 = "SELECT * FROM school_has_location WHERE school_id ='".$row["id"]."'";
			$result2 = $connection->query($query2);
			$j = 0;
			$location_ids = array();
			while ($row = $result2->fetch_assoc())
			{
				$location_ids[$j] = $row["location_id"];
				$j++;
			}
			$school[$i] -> _set("location_ids",$location_ids);
			
			$query3 = "SELECT * FROM study WHERE school_id ='".$row["id"]."'";
			$result3 = $connection->query($query3);
			$k = 0;
			$study_ids = array();
			while ($row = $result3->fetch_assoc())
			{
				$study_ids[$k] = $row["id"];
				$k++;
			}
			$school[$i] -> _set("study_ids",$study_ids);
			$i++;
		}
		
		$result->close();
		$result2 -> close();
		$result3 -> close();
		
		return $schools;
	}
    
    function getSchoolByID($schoolID, $connection)
	{
		$query = "SELECT * FROM school WHERE id = '".$schoolID."'";
		$result = $connection->query($query);
		
		$school = new School();

		while ($row = $result->fetch_assoc())
		{
			foreach ($row as $key => $value) {
				$school -> _set($key, $value);
			}
		}
		
		$query2 = "SELECT * FROM school_has_location WHERE school_id ='".$row["id"]."'";
		$result2 = $connection->query($query2);
		$j = 0;
		$location_ids = array();
		while ($row = $result2->fetch_assoc())
		{
			$location_ids[$j] = $row["location_id"];
			$j++;
		}
		$school -> _set("location_ids",$location_ids);
		
		$query3 = "SELECT * FROM study WHERE school_id ='".$row["id"]."'";
		$result3 = $connection->query($query3);
		$k = 0;
		$study_ids = array();
		while ($row = $result3->fetch_assoc())
		{
			$study_ids[$k] = $row["id"];
			$k++;
		}
		$school -> _set("study_ids",$study_ids);
		
		$result->close();
		$result2 -> close();
		$result3 -> close();
		
		return $school;
	}
	
	function addSchool($school, $connection)
	{
		$name = $school -> _get("name");
		$website = $school -> _get("website");	
		$query = 'INSERT INTO school (name,website) VALUES (?,?)';
		$stmt = $connection ->prepare($query);
		$stmt -> bind_param('ss',$name,$website);
		if(!$stmt->execute())
		{
			echo "Execute failed: (" . $stmt -> errno . ") " . $stmt -> error;
		}
		
		//Haal ID op van ingevoegde school
		$id = mysqli_insert_id($connection);
		$stmt->close();
		
		return $id;
	}
?>