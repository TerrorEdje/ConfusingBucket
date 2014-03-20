<?php/*
	include 'db/connection.php';
	include 'repositories/locationRepository.php';
	$connection = openDB();
*/?>

{{HTML::script('https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;key=AIzaSyB4ofW1mgEVlMIoa48rMP0WkAksHAALU18')}}
{{HTML::script('assets/js/markerclusterer')}}

<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;key=AIzaSyB4ofW1mgEVlMIoa48rMP0WkAksHAALU18"></script>
<script type="text/javascript" src="assets/js/markerclusterer.js"></script>-->

<script type="text/javascript">
	var locations = new Array();
	<?php/*
		$locations = getAllLocations($connection);
		
		
		foreach ($locations as $location)
		{
			if (($location->_get("latitude") != null) && ($location->_get("longitude") != null))
			{
				echo("locations.push( {  id:".$location->_get("id").", ".
										"country:\"".$location->_get("country")."\", ".
										"city:\"".$location->_get("city")."\", ".
										"street:\"".$location->_get("streetname")."\", ".
										"number:\"".$location->_get("number")."\", ".
										"zipcode:\"".$location->_get("zipcode")."\", ".
										"lat:".$location->_get("latitude").", ".
										"lng:".$location->_get("longitude").", ".
										"title:\"".$location->_get("streetname")." ".$location->_get("number")."\" }); 
										");
			}
		}
	*/?>
</script>

<script type="text/javascript" src="assets/js/mapInit.js"></script>

<div id="map-canvas"></div>