<?php

class AcceptanceController extends BaseController {

	public function acceptanceSystem()
	{
		$organizations = Organization::all();
		$activities = Activity::all();
		$experiences = Experience::all();
		return View::make('acceptance/acceptanceSystem')->with('organizations', $organizations)->with('activities', $activities)->with('experiences', $experiences);
	}
	
	public function detailOrganization($id)
	{
		$statuses = array();
		$dbStatuses = Status::all();
		foreach ($dbStatuses as $status) {
			array_push($statuses, $status->name);
		}
		$organization = Organization::find($id);
		return View::make('acceptance/detailOrganization')->with('organization', $organization)->with('statuses', $statuses);
	}
	
	public function updateOrganizationStatus()
	{
		$organization = Organization::find(Input::get('organizationID');
		$organization->status = Input::get('status');
		$organization->save();
		return Redirect::route('Acceptance-system');
	}
	
}
?>