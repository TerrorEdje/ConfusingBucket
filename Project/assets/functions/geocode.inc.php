<?php 
	function geocode($location){
		$locationclean = str_replace (" ", "+", $location);
		$locationclean = str_replace (" ", "+", urlencode($location));
		$details_url = "http://maps.googleapis.com/maps/api/geocode/json?address=" . $locationclean . "&sensor=false";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $details_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$geoloc = json_decode(curl_exec($ch), true);
		
		//echo("<br />Status: ".$geoloc['status']."<br />");
		//print_r($geoloc);
		
		if ($geoloc['status'] != "OK")
		{
			return null;
		}
		
		$latlong = [
			"lat" => $geoloc['results'][0]['geometry']['location']['lat'],
			"lng" => $geoloc['results'][0]['geometry']['location']['lng'],
		];
		
		return $latlong;
	}
?>
