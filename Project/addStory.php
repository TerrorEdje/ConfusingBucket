<?php

	include 'db/connection.php';
	include 'repositories/organizationRepository.php';
	include 'repositories/locationRepository.php';
	include 'repositories/storyRepository.php';

	$connection = openDB();
		
	//if(isset($_SESSION["id"]))
	if(true)
	{
		//$check = new Check();
		//$error = $check->checkView($_SESSION["id"], 'upload_story');

		//if($error['bool'] == 'true')
		if(true)
		{
		
			echo '<p>';
			echo 'Story is ge&uuml;pload';
			echo '</p>';
			
			$organization = new Organization();
			$organization->_set("name", $_POST["name"]);
			$organization->_set("description", $_POST["description"]);
			$organization->_set("website", $_POST["website"]);
			
			// Id van de laatst toevoegde organisatie
			$organizationID = addOrganization($organization, $connection);
			
			include_once("assets/functions/geocode.inc.php");
			$latlong = geocode($_POST["city"] . ", " . $_POST["country"]);
			echo("Location: ". $_POST["city"] . ", " . $_POST["country"]);
			
			$location = new Location();
			$location->_set("streetname", $_POST["streetname"]);
			$location->_set("number", $_POST["number"]);
			$location->_set("zipcode", $_POST["zipcode"]);
			$location->_set("city", $_POST["city"]);
			$location->_set("country", $_POST["country"]);
			if ($latlong != null)
			{
				$location->_set("latitude", $latlong["lat"]);
				$location->_set("longitude", $latlong["lng"]);
			}
			
			// Id van de laatst toegevoegde locatie
			$locationID = addLocation($location, $connection);
			
			$residence_location = new Location();
			$residence_location->_set("streetname", $_POST["residence_streetname"]);
			$residence_location->_set("number", $_POST["residence_number"]);
			$residence_location->_set("zipcode", $_POST["residence_zipcode"]);
			$residence_location->_set("city", $_POST["residence_city"]);
			$residence_location->_set("country", $_POST["residence_country"]);
			#$residence_location->_set("latitude",);
			#$residence_location->_set("longitude",);
			
			// Id van de laatst toegevoegde residence_locatie
			$residence_locationID = addLocation($residence_location, $connection);

			$story = new Story();
			$story->_set("type_id", $_POST["type"]);
			$story->_set("startdate", $_POST["startdate"]);
			$story->_set("enddate", $_POST["enddate"]);
			$story->_set("description", $_POST["description"]);
			#$story->_set("schoolyear", $_POST["schoolyear"]);
			
			$organization_ids = array();
			$organization_ids[0] = $organizationID;
			$story->_set("organization_ids", $organization_ids);
			
			$location_ids = array();
			$location_ids[0] = $locationID;
			$story->_set("location_ids", $location_ids);
			
			$residence_location_ids = array();
			$residence_location_ids[0] = $residence_locationID;
			$story->_set("residence_location_ids", $residence_location_ids);
			
			$links = array();
			$links[0] = $_POST["link"];
			$story->_set("links",$links );
			
			addStory($story,$connection);
			
			echo '<p>';
			echo "Type: " .$_POST["type"]. "<br>";
			echo "Begindatum: " .$_POST["startdate"]. "<br>";
			echo "Einddatum: " .$_POST["enddate"]. "<br>";
					
			echo "Naam: " .$_POST["name"]. "<br>";
			echo "Omschrijving: " .$_POST["description"]. "<br>";
			echo "Straat: " .$_POST["streetname"]. "<br>";
			echo "Huisnummer: " .$_POST["number"]. "<br>";
			echo "Postcode: " .$_POST["zipcode"]. "<br>";
			echo "Woonplaats: " .$_POST["city"]. "<br>";
			echo "Land: " .$_POST["country"]. "<br>";
			echo "Website: " .$_POST["website"]. "<br>";
					
			echo "Story: " .$_POST["story"]. "<br>";
			echo "Link: " .$_POST["link"]. "<br>";
					
			echo "Straat: " .$_POST["residence_streetname"]. "<br>";
			echo "Huisnummer: " .$_POST["residence_number"]. "<br>";
			echo "Postcode: " .$_POST["residence_zipcode"]. "<br>";
			echo "Woonplaats: " .$_POST["residence_city"]. "<br>";
			echo "Land: " .$_POST["residence_country"];
			echo '</p>';
				}
		else
		{
			header('Location: index.php');
			die();
		}
	}
	else
	{
		header('Location: index.php');
		die();
	}
?>