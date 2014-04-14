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
		
		$result->close();
		
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