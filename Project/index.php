<!DOCTYPE html>
<html>
<head>
	<title>Wereldkaart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" />

	
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false" />
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script>
		var map;
		function initialize() {
			var mapOptions = {
				zoom: 8,
				center: new google.maps.LatLng(-34.397, 150.644)
			};
			map = new google.maps.Map(document.getElementById('map-canvas'),
			mapOptions);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	
</head>
<body>
	<div id="map-canvas"></div>

</body>
</html>