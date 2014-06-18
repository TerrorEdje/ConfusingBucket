<?php

class StudentController extends BaseController {

	public function studentCMS()
	{
		$students = Student::all();
		return View::make('student/cms')->with('students', $students);
	}
	
	public function addStudentGet()
	{
		$studies = array('' => 'Select...') + Study::lists('name','id');
		return View::make('student/upload')->with('studies', $studies);
	}
	
	public function updateStudentGet($id)
	{
		$student = Student::find($id);
		$studies = array('' => 'Select...') + Study::lists('name','id');
		return View::make('student/update')->with('student', $student)->with('studies', $studies);
	}
	
	public function addStudentPost()
	{
		$rules = array
		(
			'firstname' => 'required',
			'surname' => 'required',
			'email' => 'required|email',
			'study' => 'required'		
		);
		
		$messages = array
		(
			'required' => ':attribute is a required field.',
			'email' => 'this is not a valid email.'
		);
		
		$validator = Validator::make(Input::all(),$rules,$messages);
		
		if($validator->fails())
		{
			$studies = array('' => 'Select...') + Study::lists('name','name');
			return Redirect::to('student/upload')->with('studies', $studies)->withErrors($validator->messages())->withInput();
		}
		else
		{
			$student = new Student;
			$student->firstname = Input::get('firstname');
			$student->insertion = Input::get('insertion');
			$student->surname = Input::get('surname');
			$student->email	= Input::get('email');
			$student->study_id = Input::get('study');
			$student->save();
			return 'The student has been uploaded.';
		}
	}
	
	public function updateStudentPost()
	{
		
	
	
	
		return Redirect::route('Student-cms');
	}
	
	
}
?>