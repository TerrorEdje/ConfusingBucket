<?php

class StoryController extends BaseController {

	public function test1()
	{
		$user = User::find(1);
		echo $user->username.' = gebruikersnaam.';
		return View::make('test');
	}
	
	public function storydetail($id)
	{
		$story = Story::find($id);
		$student = Student::find($story->student_id);
		$study = Study::find($story->study_id);
		$organization = Organization::find($story->organization_id);
		$school = School::find($study->school_id);
		$storylocations = Storylocation::where('story_id', $id);
		$locations = array();
		echo "$storylocations";
		foreach ($storylocations as $storylocation)
		{
		
			$location = Location::find($storylocation->location_id);
			array_push($locations,$location);
		}
		
	
		return View::make('storydetail')->with('story', $story)->with('student', $student)->with('study', $study)->with('organization', $organization)->with('school', $school)->with('locations', $locations);
	}

}