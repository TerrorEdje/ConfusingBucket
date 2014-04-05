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
		$types = array('' => 'Select...') + Storytype::lists('name','name');
		$studies = array('' => 'Select...') + Study::lists('name','id');
		return View::make('uploadget')->with('types', $types)->with('studies', $studies);
	}
	
	public function uploadAdd()
	{
		$rules = array
		(
			'startdate' => array('required', 'date'),
			'enddate' => array('required', 'after:startdate'),
			'type'  => array('required'),
			
			'stufirstname' => array('required', 'alpha_dash'),
			'stuinsertion' => array('alpha_dash'),
			'stusurname' => array('required', 'alpha_dash'),
			'stuemail' => array('email'),
			
			'orgname' => array('required'),
			'orgwebsite' => array('url'),
			'orgstreet' => array('alpha_num'),
			'orghousenumber' => array('alpha_num'),
			'orgzipcode' => array('alpha_num'),
			'orgcity' => array('required', 'alpha'),
			'orgcountry' => array('required', 'alpha'),
			'orgwebsite' => array('url'),
			
			'study' => array('required'),
			
			'website' => array('required', 'url'),
			
			'resiwebsite' => array('url'),
			'resicountry' => array('alpha'),
			'resicity' => array('alpha'),
			'resistreet' => array('alpha_num'),
			'resihousenumber' => array('alpha_num'),
			'resizipcode' => array('alpha_num')
		);
		
		$messages = array
		(
			'required' => ':attribute is a required field',
			'url' => 'Please enter a valid website',
			'alpha_num' => ':attribute should consist of alphabetic or numeric characters or dashes/underscores',
			'alpha' => ':attribute should consist of only alphabetic characters',
			'alpha_dash' => ':attribute should consist of alphabetic characters or dashes/underscores',
		);
	
		$validator = Validator::make(Input::all(), $rules, $messages);
	
		if ( Session::token() !== Input::get( '_token' ) ) {
            return Response::json( array(
                'msg' => 'Unauthorized attempt to create setting'
            ) );
        }
		
		if($validator->fails())
		{
			$messages = $validator->messages();
			return View::make('uploadGet')->with_errors($validator);
		}
		else
		{
			$story = new Story;
			$story->startdate = Input::get('startdate');
			$story->enddate = Input::get('enddate');
			$story->schoolyear = Input::get('schoolyear');
			$story->type = Input::get('type');
			
			$student = new Student;
			$student->firstname = Input::get('stufirstname');
			$student->insertion = Input::get('stuinsertion');
			$student->surname = Input::get('stusurname');
			$student->email = Input::get('stuemail');
			$student->save();
			
			$organization = new Organization;
			$organization->name = Input::get('orgname');
			$organization->description = Input::get('orgdescription');
			$organization->website = Input::get('orgwebsite');
			$organization->save();
			
			$story->student_id = $student->id;
			$story->study_id = Input::get('study');
			$story->organization_id = $organization->id;
			$story->save();
			
			/*$storylink = new Link;
			$storylink->story_id = $story->id;
			$storylink->link = Input::get('website');
			$storylink->save();
			
			$resilink = new Link;
			$resilink->story_id = $story->id;
			$resilink->link = Input::get('resiwebsite');
			$resilink->save();*/
			
			$resiLocation = new Location;
			$resiLocation->country = Input::get('resicountry');
			$resiLocation->city = Input::get('resicity');
			$resiLocation->streetname = Input::get('resistreet');
			$resiLocation->number = Input::get('resihousenumber');
			$resiLocation->zipcode = Input::get('resizipcode');
			$resiLocation->latitude = "0";
			$resiLocation->longitude = "0";
			$resiLocation->save();
			
			$resiStorylocation = new Storylocation;
			$resiStorylocation->story_id = $story->id;
			$resiStorylocation->location_id = $resiLocation->id;
			$resiStorylocation->location_type = "Residence";
			$resiStorylocation->save();
			
			$orgLocation = new Location;
			$orgLocation->country = Input::get('orgcountry');
			$orgLocation->city = Input::get('orgcity');
			$orgLocation->streetname = Input::get('orgstreet');
			$orgLocation->number = Input::get('orghousenumber');
			$orgLocation->zipcode = Input::get('orgzipcode');
			$orgLocation->latitude = "0";
			$orgLocation->longitude = "0";
			$orgLocation->save();
			
			$orgStorylocation = new Storylocation;
			$orgStorylocation->story_id = $story->id;
			$orgStorylocation->location_id = $orgLocation->id;
			$orgStorylocation->location_type = "Organization";
			$orgStorylocation->save();
			
			return View::make('uploadAdd');
		}
	}

}