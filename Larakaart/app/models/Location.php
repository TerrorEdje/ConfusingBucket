<?php

class Location extends Eloquent {
	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'location';
	
	function geocode(){
		$stringlocation = $this->country . ", " . $this->city . ", " . $this->streetname . ", " . $this->number;
		$locationclean = str_replace (" ", "+", urlencode($stringlocation));
		$details_url = "http://maps.googleapis.com/maps/api/geocode/json?address=" . $locationclean . "&sensor=false";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $details_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$geoloc = json_decode(curl_exec($ch), true);
		
		if ($geoloc['status'] != "OK")
		{
			return null;
		}
		
		$this->latitude = $geoloc['results'][0]['geometry']['location']['lat'];
		$this->longitude = $geoloc['results'][0]['geometry']['location']['lng'];
	}
}
?>