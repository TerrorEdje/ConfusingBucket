<?php

class Organization extends Eloquent {
	public $timestamps = false;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'organization';
	
	public function getLocation()
	{
		$location = Location::find($this->location_id);
		if (isset($location))
		{
			return $location;
		}
	}
}
?>