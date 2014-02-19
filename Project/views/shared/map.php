<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

<script type="text/javascript">
	var locations = new Array();
	<?php
		$locations = array();
		
		$locations[0] = (object) array('id' => '0', 'lat' => '51.688946', 'lng'=>'5.287256', 'title'=>'Avans hogeschool');
		$locations[1] = (object) array('id' => '1', 'lat' => '51.67855', 'lng'=>'5.12173', 'title'=>'Robins huis');
		
		foreach ($locations as $location)
		{
			echo("locations.push( {  id:\"".$location->id."\", lat:".$location->lat.", lng:".$location->lng.", title:\"".$location->title."\" }); ");
		}
	?>
</script>

<script type="text/javascript" src="assets/js/mapInit.js"></script>

<div id="map-canvas"></div>