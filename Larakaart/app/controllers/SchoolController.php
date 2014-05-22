<?php

class SchoolController extends BaseController {

	public function schoolcms()
	{
		$schools = School::all();
		return View::make('school/cms',array('schools' => $schools));
	}
	
	public function uploadSchool()
	{		
		return View::make('school/upload');
	}
	
	public function updateSchool($id)
	{
		$school = School::find($id);
		return View::make('school/update')->with('school',$school);
	}
	
	public function uploadSchoolAdd()
	{
		$rules = array
		(
			'name' => 'required|unique:school',
			'website' => 'required'		
		);
		
		$niceNames = array
		(
			'name' => 'Name',
			'website' => 'Website',
		);
		
		$messages = array
		(
			'required' => ':attribute is a required field.',
			'unique' => 'This school already exists.'
		);
		
		$validator = Validator::make(Input::all(),$rules,$messages);
		$validator-> setAttributeNames($niceNames);
		
		if($validator->fails())
		{
			return Redirect::to('school/upload')->withErrors($validator->messages())->withInput();
		}
		else
		{
			$school = new School;
			$school->name = Input::get('name');
			$school->website = Input::get('website');
			$school->save();
			return $school->name . ' has been uploaded.';
		}
	}
	
	public function updateSchoolAdd()
	{
		$rules = array
		(
			'name' => 'required',
			'website' => 'required'
		);
		
		$niceNames = array
		(
			'name' => 'Name',
			'website' => 'Website'
		);
		
		$messages = array
		(
			'required' => ':attribute is a required field.'
		);
		
		$validator = Validator::make(Input::all(),$rules,$messages);
		$validator-> setAttributeNames($niceNames);
		
		if($validator->fails())
		{
			return Redirect::to('school/update/' . Input::get('school_id'))->withErrors($validator->messages())->withInput();
		}
		else
		{
			$school = School::find(Input::get('school_id'));
			$school->name = Input::get('name');
			$school->website = Input::get('website');
			$school->save();
			return $school->name . ' has been updated.';
		}
	}

}
?>