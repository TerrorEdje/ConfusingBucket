<?php
	include 'model/user.php';
		
	function getAllUsers($connection)
	{
		$query = "SELECT * FROM user";
		$result =$connection->query($query);
		
		$i = 0;
		$users = array();
		
		while ($row =$result->fetch_assoc())
		{
			$users[$i] = new User();
			foreach ($row as $key => $value) {
				$story[$i] -> _set($key, $value);
			}
            
            $query2 = "SELECT * FROM user_has_rights WHERE username='".$row["username"]."'";
            $result2 = $connection->query($query2);
            
            $j = 0;
            $rights_ids = array();
			
            while ($row =$result2->fetch_assoc())
            {
                $rights_ids[$j] = $row["rechten_id"];
				$j++;
            }
			
            $users[$i] -> _set("rights_ids",$rights_ids);
			
			$i++;
		}
		
		$result->close();
		
		return $users;
	}
    
    function getUserByUsername($username,$connection)
	{
		$query = "SELECT * FROM user where username='".$username."'";
		$result =$connection->query($query);
		
		$user = new Gebruiker();
		
		while ($row =$result->fetch_assoc())
		{
			foreach ($row as $key => $value) {
				$story[$i] -> _set($key, $value);
			}
            
			$query2 = "SELECT * FROM user_has_rights WHERE username='".$row["username"]."'";
            $result2 = $connection->query($query2);
            
            $j = 0;
            $rights_ids = array();
			
            while ($row =$result2->fetch_assoc())
            {
                $rights_ids[$j] = $row["rechten_id"];
				$j++;
            }
			
            $users[$i] -> _set("rights_ids",$rights_ids);
			
			$i++;
		}
		
		$result->close();
		
		return $user;
	}
?>