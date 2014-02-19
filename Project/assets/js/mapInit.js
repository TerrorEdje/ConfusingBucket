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
	
	for( i = 0; i < locations.length; ++i)
	{
		//var contentstring = '<p><a href="storylist_detail.php?'.locations[i].id</p>';
	
		var infowindow = new google.maps.InfoWindow({
			//content: contentstring
		});
		
		new google.maps.Marker({
			position: new google.maps.LatLng(locations[i].lat, locations[i].lng),
			map: map,
			title: locations[i].title
		});
		
		google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		});
	}
	
}

google.maps.event.addDomListener(window, 'load', initialize);

