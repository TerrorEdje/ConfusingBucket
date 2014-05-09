var map;
var mc;
var markers = [];
var centerLatlng = new google.maps.LatLng(0,0);

var studies = [];
var years = [];
var cities = [];
var countries = [];

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
			load(organizationDetailURL+this.id, "organizationdetailmenu");
		});
		
        //Add years to years array
        $.each(locations[i]['years'], function (key, year) {
            var start = false;
            var end = false;
            
            if ((year['start'] != 0) && (year['end'] != 9999))
            {
                for (j = year['start']; j <= year['end']; ++j)
                {
                    if ($.inArray(j.toString(), years)<0)
                        years.push(j.toString());
                }
            }
            
            if ((year['start'] == 0) && (year['end'] != 9999))
            {
                if ($.inArray(year['end'].toString(), years)<0)
                    years.push(year['end'].toString());
            }
            
            if ((year['start'] != 0) && (year['end'] == 9999))
            {
                if ($.inArray(year['start'].toString(), years)<0)
                    years.push(year['start'].toString());
            }
            
            //Add study to studies array if it doesn't exist already
            if($.inArray(year['study'], studies)<0) {
                studies.push(year['study']);
            } 
        });
        
        if($.inArray(locations[i]['city'], cities)<0) {
            cities.push(locations[i]['city']);
        } 
        
        if($.inArray(locations[i]['county'], countries)<0) {
            countries.push(locations[i]['country']);
        } 
	}
    
    //Add study options to filter dropdown
    $('#filter-study').autocomplete({ source: studies });
    
    //Add years to the year autocomplete
    $('#filter-year').autocomplete({ source: years });
    
    //Add countries to the filter autocomplete
    $('#filter-input').autocomplete({ source: countries});
    
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

