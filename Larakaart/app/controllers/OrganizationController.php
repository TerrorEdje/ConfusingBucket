<?php

class OrganizationController extends BaseController {

	public function organizationdetail($id)
	{
		$errors = array();		
		$organization = Organization::find($id);
		
		$activities = Activity::where('organization_id','=',$id)->get();
		foreach ($activities as $activity)
		{
			echo $activity -> getStudyName();
		}
		
		if ($organization == null)
		{
			array_push($errors,"The organization you are looking for does not exist.");
		}
		
		return View::make('organizationdetail')->with('errors',$errors)->with('organization',$organization)->with('activities',$activities);
	}

}
?>