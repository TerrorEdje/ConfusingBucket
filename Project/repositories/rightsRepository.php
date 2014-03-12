<?php
	include_once 'model/rights.php';
		
	function getAllRights($connection)
	{
		$query = "SELECT * FROM rights";
		$result =$connection->query($query);
		
		$i = 0;
		$rights = array();
		
		while ($row =$result->fetch_assoc())
		{
			foreach ($row as $key => $value) {
				$story[$i] -> _set($key, $value);
			}
            
            $query2 = "SELECT * FROM user_has_rights WHERE rights_id='".$row["id"]."'";
            $result2 = $connection->query($query2);
			
            $j = 0;
            $user_usersnames = array();
            
            while ($row =$result2->fetch_assoc())
            {
                $user_usersnames[$j] = $row["user_usersname"];
                $j++;
            }
			
			$i++;
		}
		
		$result->close();
		
		return $rights;
	}
    
    function getRightsByID($rightsID, $connection)
	{
		$query = "SELECT * FROM rights WHERE id = '".$rightsID."'";
		$result =$connection->query($query);
		
		$rights = array();
		
		while ($row =$result->fetch_assoc())
		{
			foreach ($row as $key => $value) {
				$story[$i] -> _set($key, $value);
			}
            
            $query2 = "SELECT * FROM user_has_rights WHERE rights_id='". $row["id"]."'";
            $result2 = $connection->query($query2);
			
            $j = 0;

            $user_usersnames = array();
            
            while ($row =$result2->fetch_assoc())
            {
                $user_usersnames[$j] = $row["user_usersname"];
                $j++;
            }
		}
		
		$result->close();
		
		return $rights;
	}
?>