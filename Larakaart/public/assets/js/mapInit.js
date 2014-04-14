var map;
var mc;
var markers = [];
var centerLatlng = new google.maps.LatLng(0,0);

var studies = [];

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
        //Make a marker
		var marker = new google.maps.Marker({
			id: locations[i].id, 
			position: new google.maps.LatLng(locations[i].lat, locations[i].lng),
			title: locations[i].title,
			icon: 'images/markers/default.png'
		});
        
        //Add marker to marker list
        markers.push(marker);
        
        //Add a click event to the markers
        google.maps.event.addListener(marker,'click',function() {
			load(storyListURL+this.id);
		});
        
        //Add study to studies array if it doesn't exist already
        if($.inArray(locations[i].study, studies)<0) {
            studies.push(locations[i].study);
        } 
		
	}
    
    //Add study options to filter dropdown
    $.each(studies, function(key, value) {   
        $('#filter-study')
            .append($("<option></option>")
            .attr("value",value)
            .text(value)); 
    });
    
    //Initialize markerClusterer for displaying markers
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

