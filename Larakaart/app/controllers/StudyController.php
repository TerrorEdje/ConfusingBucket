<?php

class StudyController extends BaseController {

	public function studycms()
	{
		$studies = Study::all();
		return View::make('study/cms',array('studies' => $studies));
	}
	
	public function uploadStudy()
	{		
		return View::make('study/upload');
	}
	
	public function updateStudie($id)
	{
		$study = Study::find($id);
		return View::make('study/update')->with('study',$study);
	}
	
	public function uploadStudyAdd()
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
			return 'Your study has been added.';
		}
	}
	
	public function updateStudyAdd()
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
			return 'Your study has been updated.';
		}
	}

}
?>