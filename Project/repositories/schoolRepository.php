<?php
	include 'model/school.php';
		
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
		
		$result->close();
		
		return $school;
	}
?>