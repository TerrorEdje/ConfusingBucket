<?php

class AcceptanceController extends BaseController {

	public function acceptanceSystem()
	{
		$organizations = Organization::all();
		$activities = Activity::all();
		$experiences = Experience::all();
		return View::make('acceptanceSystem')->with('organizations', $organizations)->with('activities', $activities)->with('experiences', $experiences);
	}
	
}
?>