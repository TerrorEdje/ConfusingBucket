<?php

class StudentController extends BaseController {

	public function studentCMS()
	{
		$students = Student::all();
		return View::make('student/cms')->with('students', $students);
	}
	
	public function addStudentGet()
	{
		return View::make('student/upload');
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
		//return Redirect::route('Acceptance-system');
	}
	
	
	
}
?>