<?php

class StoryController extends BaseController {

	public function storylist()
	{
		$stories = Story::all();

		$allStories = array();

		# Get the story organization location (for each)
		foreach($stories as $story) 
		{
			$storyLocations = StoryLocation::where('story_id','=',$story->id)->get();			
			
			$location = array();
			foreach($storyLocations as $storylocation)
			{
				if ($storylocation->location_type == "Organization")
				{
					array_push($location, Location::find($storylocation->location_id));
				}
			}

			# Get the current student's name
			$student = Student::find($story->student_id);
			$naam_student = $student->firstname . ' ' . $student->insertion . ' ' . $student->surname;

			# Current story combined
			$curStory = array(
			'id' => $story->id,
			'type' => $story->type,
			'country' => $location[0]->country,
			'city' => $location[0]->city,
			'startdate' => $story->startdate,
			'enddate' => $story->enddate,
			'name' => $naam_student
			);

			array_push($allStories, $curStory);

		}

		return View::make('storylist', array('stories' => $allStories));
	}

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
		
		$storylocations = Storylocation::where('story_id','=', $id)->get();
		$locations = array();
		

		foreach ($storylocations as $storylocation)
		{
			$location = Location::find($storylocation->location_id);
			array_push($locations,$location);
		}
		return View::make('storydetail')->with('story', $story)->with('student', $student)->with('study', $study)->with('organization', $organization)->with('school', $school)->with('locations', $locations)->with('storylocations', $storylocations);
	}

	public function uploadGet()
	{
		$types = Storytype::all();
		return View::make('Story.uploadGet')->with('type', $types);
	}

}