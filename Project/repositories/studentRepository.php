<?php
	include_once 'model/student.php';
		
	function getAllStudents($connection)
	{
		$query = "SELECT * FROM student";
		$result =$connection->query($query);
		
		$i = 0;
		$students = array();
		
		while ($row =$result->fetch_assoc())
		{
			foreach ($row as $key => $value) {
				$students[$i] -> _set($key, $value);
			}
			
			$i++;
		}
		
		$result->close();
		
		return $students;
	}
    
    function getStudentByID($studentID, $connection)
	{
		$query = "SELECT * FROM student WHERE id = '".$studentID."'";
		$result =$connection->query($query);
		
		$student = new Student();
		
		while ($row =$result->fetch_assoc())
		{
			foreach ($row as $key => $value) {
				$student -> _set($key, $value);
			}
		}
		
		$result->close();
		
		return $student;
	}
	
	function addStudent($student, $connection)
	{
		$firstname = $student -> _get("firstname");
		$insertion = $student -> _get("insertion");
		$surname = $student -> _get("surname");
		$email = $student -> _get("email");
		$user_id = $student -> _get("user_id");
		$query = 'INSERT INTO student (firstname,insertion,surname,email,user_id) VALUES (?,?,?,?,?)';
		$stmt = $connection ->prepare($query);
		$stmt -> bind_param('ssssi',$firstname,$insertion,$surname,$email,$user_id);
		if(!$stmt->execute())
		{
			echo "Execute failed: (" . $stmt -> errno . ") " . $stmt -> error;
		}
		
		//Haal ID op van ingevoegde student
		$id = mysqli_insert_id($connection);
		$stmt->close();
	}
?>