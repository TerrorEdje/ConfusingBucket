<?php

class StudentController extends BaseController {

	public function studentCMS()
	{
		$students = Student::all();
		return View::make('student/cms')->with('students', $students);
	}
	
	public function addStudentGet()
	{
		//$studies = Study::all();
		$studies = array('' => 'Select...') + Study::lists('name','name');
		return View::make('student/upload')->with('studies', $studies);
	}
	
	public function updateStudentGet()
	{
		return View::make('student/update');
	}
	
	public function addStudentPost()
	{
		$organization = Organization::find(Input::get('organizationID'));
		$organization->status = Input::get('status');
		$organization->save();
		return Redirect::route('Student-cms');
	}
	
	
	
}
?>