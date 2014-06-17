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
			$statuses[$status->name] = $status->name;
		}
		$organization = Organization::find($id);
		return View::make('acceptance/detailOrganization')->with('organization', $organization)->with('statuses', $statuses);
	}
	
	public function updateOrganizationStatus()
	{
		$organization = Organization::find(Input::get('organizationID'));
		$organization->status = Input::get('status');
		$organization->save();
		return Redirect::route('Acceptance-system');
	}
	
	public function detailActivity($id)
	{
		$statuses = array();
		$dbStatuses = Status::all();
		foreach ($dbStatuses as $status) {
			$statuses[$status->name] = $status->name;
		}
		$activity = Activity::find($id);
		$organization = Organization::find($activity->organization_id);
		return View::make('acceptance/detailActivity')->with('activity', $activity)->with('organization', $organization)->with('statuses', $statuses);
	}
	
	public function updateActivityStatus()
	{
		$activity = Activity::find(Input::get('activityID'));
		$activity->status = Input::get('status');
		$activity->save();
		return Redirect::route('Acceptance-system');
	}
	
	public function detailExperience($id)
	{
		$statuses = array();
		$dbStatuses = Status::all();
		foreach ($dbStatuses as $status) {
			$statuses[$status->name] = $status->name;
		}
		$experience = Experience::find($id);
		$activity = Activity::find($experience->activity_id);
		$organization = Organization::find($activity->organization_id);
		$dbStudent = Student::find($experience->student_id);
		$student = $dbStudent->firstname ." ". $dbStudent->insertion ." ". $dbStudent->surname;
		return View::make('acceptance/detailExperience')->with('experience', $experience)->with('activity', $activity)
		->with('organization', $organization)->with('student', $student)->with('statuses', $statuses);
	}
	
	public function updateExperienceStatus()
	{
		$experience = Experience::find(Input::get('experienceID'));
		$experience->status = Input::get('status');
		$experience->save();
		return Redirect::route('Acceptance-system');
	}
	
}
?>