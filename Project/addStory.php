<?php

	include 'db/connection.php';
	include 'repositories/typeRepository.php';
	include 'repositories/organizationRepository.php';
	include 'repositories/locationRepository.php';
	include 'repositories/storyRepository.php';
	
	$connection = openDB();
		
		echo '<p>';
		echo 'Story is ge&uuml;pload';
		echo '</p>';
		
		$organization = new Organization();
		$organization->_set("name", $_POST["name"]);
		$organization->_set("description", $_POST["description"]);
		$organization->_set("website", $_POST["website"]);
		
		// Id van de laatst toevoegde organisatie
		$organizationID = addOrganization($organization, $connection);
		
		$location = new Location();
		$location->_set("streetname", $_POST["streetname"]);
		$location->_set("number", $_POST["number"]);
		$location->_set("zipcode", $_POST["zipcode"]);
		$location->_set("city", $_POST["city"]);
		$location->_set("country", $_POST["country"]);
		#$location->_set("latitude",);
		#$location->_set("longitude",);
		
		// Id van de laatst toegevoegde locatie
		$locationID = addLocation($location, $connection)
		
		$story = new Story();
		$story->_set("type_id", $_POST["type"]);
		$story->_set("startdate", $_POST["startdate"]);
		$story->_set("enddate", $_POST["enddate"]);
		$story->_set("description", $_POST["description"]);
		$story->_set("schoolyear", $_POST["schoolyear"]);
		
		$story->_set("organization_ids", );
		$story->_set("location_ids", );
		$story->_set("residence_location_ids", );
		$links = array();
		$links[0] = $
		$story->_set("links",$links );
		
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
                
		echo "Straat: " .$_POST["recidence_streetname"]. "<br>";
		echo "Huisnummer: " .$_POST["recidence_number"]. "<br>";
		echo "Postcode: " .$_POST["recidence_zipcode"]. "<br>";
		echo "Woonplaats: " .$_POST["recidence_city"]. "<br>";
		echo "Land: " .$_POST["recidence_country"];
		echo '</p>';



?>