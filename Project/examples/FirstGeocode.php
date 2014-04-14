<?php 
	echo("<form action='FirstGeocode.php' method='POST'>");
	echo("<input type='text' name='location'></input>");
	echo("<input type='submit' value='verstuur' />");
	echo("</form>");
	
		if (isset($_POST["location"]))
	{
		include_once("../assets/functions/geocode.inc.php");
		echo("Location: ".$_POST["location"]."<br />");

		$location = geocode($_POST["location"]);
		
		if ($location == null)
		{
			echo("no results found<br />");
		}
		else
		{
			echo("Lat: ".$location["lat"]."<br />");
			echo("Lng: ".$location["lng"]."<br />");
			?>
				<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&key=AIzaSyB4ofW1mgEVlMIoa48rMP0WkAksHAALU18"></script>
	
				<script type="text/javascript">
					var map;
					var centerLatlng = new google.maps.LatLng(0,0);

					function initialize() {
						var mapOptions = {
							zoom: 2,
							minZoom: 2,
							center: centerLatlng,
							mapTypeId: google.maps.MapTypeId.HYBRID
						};
						
						map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

						var marker = new google.maps.Marker({
							<?php echo("position: new google.maps.LatLng(".$location["lat"].", ".$location["lng"]."),"); ?>
							map: map,
						});
					}

					google.maps.event.addDomListener(window, 'load', initialize);
				</script>
	
				<div id="map-canvas" style="width: 500px; height: 500px;"></div>
			<?php 
		}
	}
?>
