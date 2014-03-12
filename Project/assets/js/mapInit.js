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
	

	var markers = [];
	
	for( i = 0; i < locations.length; ++i)
	{
		var marker = new google.maps.Marker({
			id: locations[i].id, 
			position: new google.maps.LatLng(locations[i].lat, locations[i].lng),
			title: locations[i].title
		});
		
		markers.push(marker);
		
		google.maps.event.addListener(marker,'click',function() {
			load('storylist.php?locationid='+this.id);
		});
	}
	var mcOptions = {zoomOnClick: false, 
					gridSize: 41,
					imagePath: 'images/markers/m'};
	var mc = new MarkerClusterer(map, markers, mcOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

