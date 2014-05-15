var geocoder;
var locationMap;
var locationMarker;

function initialize() {
  geocoder = new google.maps.Geocoder();
  var latlng = new google.maps.LatLng(-34.397, 150.644);
  var mapOptions = {
    zoom: 8,
    center: latlng
  }
  locationMap = new google.maps.Map(document.getElementById("location-canvas"), mapOptions);
}

function codeAddress() {
    var address = $('#country').val() + ", " + $('#city').val() + ", " + $('#streetname').val() + " " + $('#number').val();
    geocoder.geocode( { 'address': address}, function(results, status) {
        if (locationMarker != undefined)
        {
            locationMarker.setMap(undefined);
        }
        if (status == google.maps.GeocoderStatus.OK) {
            locationMap.setCenter(results[0].geometry.location);
            locationMarker = new google.maps.Marker({
                map: locationMap,
                position: results[0].geometry.location
            });
        } 
    });
}

$(document).ready(function() {
    $(".address").change(codeAddress);
	initialize();
	codeAddress();
});



