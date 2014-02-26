<?php
	include 'db/connection.php';
	include 'repositories/locationRepository.php';
	$connection = openDB();
?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<script type="text/javascript">
	var locations = new Array();
	<?php
		$locations = getAllLocations($connection);
		
		
		foreach ($locations as $location)
		{
			if (($location->_get("latitude") != null) && ($location->_get("longitude") != null))
			{
				echo("locations.push( {  id:".$location->_get("id").", lat:".$location->_get("latitude").", lng:".$location->_get("longitude").", title:\"".$location->_get("streetname")." ".$location->_get("number")."\" }); ");
			}
		}
	?>
</script>

<script type="text/javascript" src="assets/js/mapInit.js"></script>

<div id="map-canvas"></div>