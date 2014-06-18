<?php

class ExperienceController extends BaseController {

	# Toont lijst met alle organisaties
	public function experiencecmsList()
	{
		$organizations = Organization::all();
		return View::make('experience/cmsList', array('organizations' => $organizations));
	}
	
	# Toont de detail view van een organisatie
	public function experiencecmsDetail($id)
	{
		$organization = Organization::find($id);
		
		$activities = Activity::where('organization_id','=',$id)->where('status', '=', 'Approved')->get();
		$experiences = array();
		foreach ($activities as $activity)
		{
			$tempexperience = Experience::where('activity_id','=',$activity->id)->where('status', '=', 'Approved')->get();
			foreach($tempexperience as $experience)
			{
				array_push($experiences,$experience);
			}
		}
		
		$students = array();
		$allStudents = Student::all();
		foreach ($allStudents as $student) {
			$name = $student->firstname ." ". $student->insertion ." ". $student->surname;
			$students[$student->id] = $name;
		}
		
		return View::make('experience/cmsDetail')->with('organization',$organization)->with('activities',$activities)
		->with('experiences',$experiences)->with('students',$students);
	}
	
	public function uploadExperience($id)
	{	
		$dbActivities = Activity::where('organization_id', '=', $id)->where('status', '=', 'Approved')->get();
		
		$infoActivities = array();
		foreach ($dbActivities as $activity) {
			$infoActivities[$activity->id] = $activity->name;
		}
		$activities = array('' => 'Select...') + $infoActivities;
		
		$students = array();
		$allStudents = Student::all();
		foreach ($allStudents as $student) {
			$name = $student->firstname ." ". $student->insertion ." ". $student->surname;
			$students[$student->id] = $name;
		}
		
		return View::make('experience/upload')->with('orgID', $id)->with('activities', $activities)->with('students', $students);
	}
	
	public function uploadExperienceAdd()
	{
		$rules = array
		(
			'activity' => 'required',
			'description' => 'required',
			'score' => 'numeric|between:1,10',
			'student' => 'required'
		);
		
		$niceNames = array
		(
            'activity' => 'Activity',
            'description' => 'Description',
            'score' => 'Score',
            'student' => 'Student'
        );
		
		$messages = array
		(
			'required' => ':attribute is a required field.',
			'numeric' => ':attribute should be a number.',
			'between' => ':attribute should be between 1 and 10.'
		);
		
		$validator = Validator::make(Input::all(), $rules, $messages);
		$validator->setAttributeNames($niceNames);
	
		if($validator->fails())
		{		
			$id = Input::get('orgID');
			$dbActivities = Activity::wherewhere('organization_id', '=', $id)->where('status', '=', 'Approved')->get();
		
			$infoActivities = array();
			foreach ($dbActivities as $activity) {
				$infoActivities[$activity->id] = $activity->name;
			}
			$activities = array('' => 'Select...') + $infoActivities;
			
			$students = array();
			$allStudents = Student::all();
			foreach ($allStudents as $student) {
				$name = $student->firstname ." ". $student->insertion ." ". $student->surname;
				$students[$student->id] = $name;
			}
		
			return Redirect::to('experience/upload/'.$id)->with('orgID', $id)->with('activities', $activities)->with('students', $students)
			->withInput()->withErrors($validator->messages());
		}
		else
		{
			/*$experience = new Experience;
			$experience->activity_id = Input::get('activity');
			$experience->description = Input::get('description');
			$experience->score = Input::get('score'); # Cijfer staat op dit moment Nederlands in de database
			$experience->accepted = false;
			$experience->student_id = Input::get('student');
			$expierence->status = 'Needsapproval';			
			$experience->save();*/
			
			$newExperience = Experience::create(array(
                'activity_id'       	=> Input::get('activity'),
                'description'      	=> Input::get('description'),
                'score'         		=> Input::get('score'),
                'accepted'          => false,
                'student_id'       	=> Input::get('student'),
				'status'				=> 'Needsapproval'
            ));
			
			
			return 'Expierence has been uploaded.';
		}
		
	}
	
	public function updateExperience($id)
	{	
		$experience = Experience::find($id);
		
		$students = array();
		$allStudents = Student::all();
		foreach ($allStudents as $student) {
			$name = $student->firstname ." ". $student->insertion ." ". $student->surname;
			$students[$student->id] = $name;
		}
		
		return View::make('experience/update')->with('students', $students)->with('experience', $experience);
	}
	
	public function updateExperienceAdd()
	{
		$rules = array
		(
			'description' => 'required',
			'score' => 'numeric|between:1,10',
			'student' => 'required'
		);
		
		$niceNames = array(
            'description' => 'Description',
            'score' => 'Score',
            'student' => 'Student'
        );
		
		$messages = array
		(
			'required' => ':attribute is a required field.',
			'numeric' => ':attribute should be a number.',
			'between' => ':attribute should be between 1 and 10.'
		);
		
		$validator = Validator::make(Input::all(), $rules, $messages);
		$validator->setAttributeNames($niceNames);
	
		$expID = Input::get('expID');
		
		if($validator->fails())
		{
			$experience = Experience::find($expID);
			
			$students = array();
			$allStudents = Student::all();
			foreach ($allStudents as $student) {
				$name = $student->firstname ." ". $student->insertion ." ". $student->surname;
				$students[$student->id] = $name;
			}
			return Redirect::to('experience/update/' .$expID)->with('students', $students)->with('experience', $experience)
			->with('students', $students)->withInput()->withErrors($validator->messages());
		}
		else
		{
			$experience = Experience::find($expID);
			$experience->description = Input::get('description');
			$experience->cijfer = Input::get('score'); # Cijfer staat op dit moment Nederlands in de database
			$experience->accepted = false;
			$experience->student_id = Input::get('student');
			$experience->save();
			return 'Expierence has been updated.';
		}	
	}

}