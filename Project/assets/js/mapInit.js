var map;
var mc;
var markers = [];
var centerLatlng = new google.maps.LatLng(0,0);

function initialize() {
	var mapOptions = {
		zoom: 2,
		minZoom: 2,
		center: centerLatlng,
		mapTypeId: google.maps.MapTypeId.HYBRID
	};
	
	map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	
	for( i = 0; i < locations.length; ++i)
	{
		var marker = new google.maps.Marker({
			id: locations[i].id, 
			position: new google.maps.LatLng(locations[i].lat, locations[i].lng),
			title: locations[i].title,
			icon: 'images/markers/default.png'
		});
		
		markers.push(marker);
		
		google.maps.event.addListener(marker,'click',function() {
			load('storylist.php?locationid='+this.id);
		});
	}
	var mcOptions = {zoomOnClick: false, 
					gridSize: 41,
					imagePath: 'images/markers/m',
					averageCenter: true};
	mc = new MarkerClusterer(map, markers, mcOptions);
}

function resetMarkers()
{
	mc.clearMarkers();
	mc.addMarkers(markers);
}

function filterMarkers(newMarkers)
{
	mc.clearMarkers();
	mc.addMarkers(newMarkers);
}

google.maps.event.addDomListener(window, 'load', initialize);

