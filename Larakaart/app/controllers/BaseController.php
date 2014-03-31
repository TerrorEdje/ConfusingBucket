<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			echo($this->layout);
			echo("HALLOOOO");
			$mapLocations = "blah";
			$this->layout = View::make($this->layout)->with('mapLocations', $mapLocations);
		}
		
	}

}