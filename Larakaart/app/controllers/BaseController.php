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
			$locations = array();
			$this->layout = View::make($this->layout)->with('locations', $locations);
		}
	}

}