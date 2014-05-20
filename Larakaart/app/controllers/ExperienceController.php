<?php

class ExperienceController extends BaseController {
	
	public function uploadExperience()
	{	
		$organizations = array('' => 'Select...') + Organization::lists('name','id');
		
		$allOrgActivities = array();
		$dbOrganizations = Organization::all();
		foreach ($dbOrganizations as $organization) {
			$activities = Activity::where('organization_id', '=', $organization->id);
			$allOrgActivities[$organization->id] = $activities;
		}
	
		$activities = array('' => 'Select...') + Activity::lists('name','id');
		
		$students = array();
		$allStudents = Student::all();
		foreach ($allStudents as $student) {
			$name = $student->firstname ." ". $student->insertion ." ". $student->surname;
			$students[$student->id] = $name;
		}
		
		return View::make('experience/upload')->with('activities', $activities)->with('students', $students)
		->with('allOrgActivities', $allOrgActivities)->with('organizations', $organizations);
	}
	
	public function uploadExperienceAdd()
	{
		$rules = array
		(
			'organization' => 'required',
			'activity' => 'required',
			'description' => 'required',
			'score' => 'numeric|between:1,10',
			'student' => 'required'
		);
		
		$niceNames = array(
            'activity' => 'Activity',
            'description' => 'Description',
            'score' => 'Score',
            'student' => 'Student'
        );
		
		$messages = array
		(
			'required' => ':attribute is a required field.',
			'alpha_dash' => ':attribute should consist of alphabetic characters or dashes/underscores.',
			'numeric' => ':attribute should be a number.',
			'between' => ':attribute should be between 1 and 10.'
		);
		
		$validator = Validator::make(Input::all(), $rules, $messages);
		$validator->setAttributeNames($niceNames);
	
		if($validator->fails())
		{
			$organizations = array('' => 'Select...') + Organization::lists('name','id');
		
			$allOrgActivities = array();
			$dbOrganizations = Organization::all();
			foreach ($dbOrganizations as $organization) {
				$activities = Activity::where('organization_id', '=', $organization->id);
				$allOrgActivities[$organization->id] = $activities;
			}
		
			$activities = array('' => 'Select...') + Activity::lists('name','id');
			$students = array();
			$allStudents = Student::all();
			foreach ($allStudents as $student) {
				$name = $student->firstname ." ". $student->insertion ." ". $student->surname;
				$students[$student->id] = $name;
			}
			return Redirect::to('experience/upload')->with('activities', $activities)->with('allOrgActivities', $allOrgActivities)->with('organizations', $organizations)
			->with('students', $students)->withInput()->withErrors($validator->messages());
		}
		else
		{
			$experience = new Experience;
			$experience->activity_id = Input::get('activity');
			$experience->description = Input::get('description');
			$experience->cijfer = Input::get('score'); # Cijfer staat op dit moment Nederlands in de database
			$experience->accepted = false;
			$experience->student_id = Input::get('student');
			$experience->save();
			return View::make('experience/uploadAdd');
		}
		
	}

}