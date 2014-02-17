var map;
var avansLatlng = new google.maps.LatLng(51.688946, 5.287256);
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
		new google.maps.Marker({
		position: new google.maps.LatLng(locations[i].lat, locations[i].lng),
		map: map,
		title: locations[i].title
		});
	}
  
}

google.maps.event.addDomListener(window, 'load', initialize);

