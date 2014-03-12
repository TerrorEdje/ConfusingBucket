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
			$id = $row["id"];
			$firstname = $row["firstname"];
			$insertion = $row["insertion"];
			$surname = $row["surname"];
			$email = $row["email"];
			$user_id = $row["user_id"];
            $study_ids = array();
            $story_ids = array();
            
            $query2 = "SELECT * FROM study_has_student WHERE student_id='".$id."'";
            $result2 = $connection->query($query2);
            
            $j = 0;
            
            while ($row =$result2->fetch_assoc())
            {
                $study_ids[$j] = $row["study_id"];
                $story_ids[$j] = $row["story_id"];
            }
			
			$students[$i] = new Student();
			$students[$i] -> _set("id",$id);
			$students[$i] -> _set("firstname",$firstname);
			$students[$i] -> _set("insertion",$insertion);
			$students[$i] -> _set("surname",$surname);
			$students[$i] -> _set("email",$email);
			$students[$i] -> _set("user_id",$user_id);
            $students[$i] -> _set("study_ids",$study_ids);
            $students[$i] -> _set("story_ids",$story_ids);
			
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
			$id = $row["id"];
			$firstname = $row["firstname"];
			$insertion = $row["insertion"];
			$surname = $row["surname"];
			$email = $row["email"];
			$user_id = $row["user_id"];
            $study_ids = array();
            $story_ids = array();
            
            $query2 = "SELECT * FROM study_has_student WHERE student_id='".$id."'";
            $result2 = $connection->query($query2);
            
            $j = 0;
            
            while ($row =$result2->fetch_assoc())
            {
                $study_ids[$j] = $row["study_id"];
                $story_ids[$j] = $row["story_id"];
            }
			
			$student = new Student();
			$student -> _set("id",$id);
			$student -> _set("firstname",$firstname);
			$student -> _set("insertion",$insertion);
			$student -> _set("surname",$surname);
			$student -> _set("email",$email);
			$student -> _set("user_id",$user_id);
            $student -> _set("study_ids",$study_ids);
            $student -> _set("story_ids",$story_ids);
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