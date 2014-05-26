<?php

class StudyController extends BaseController {

	public function studycms()
	{
		$sortedStudies = array();
		$i = 0;
		$schools = School::orderBy('name','asc')->get();
		foreach($schools as $school)
		{
			$sortedStudies[$i]['school_name'] = $school['name'];
			$sortedStudies[$i]['studies'] = Study::where('school_id','=',$school['id'])->get();
			$i++;
		} 

		return View::make('study/cms',array('sortedStudies' => $sortedStudies));
	}
	
	public function uploadStudy()
	{
		$schools = array('' => 'Select...') + School::orderBy('name','asc')->lists('name','id');
		return View::make('study/upload')->with('schools',$schools);
	}
	
	public function updateStudy($id)
	{
		$schools = array('' => 'Select...') + School::orderBy('name','asc')->lists('name','id');
		$study = Study::find($id);
		return View::make('study/update')->with('study',$study)->with('schools',$schools);
	}
	
	public function uploadStudyAdd()
	{
		$rules = array
		(
			'name' => 'required',
			'school' => 'required'
		);
		
		$niceNames = array
		(
			'name' => 'Name',
			'school' => 'School'
		);
		
		$messages = array
		(
			'required' => ':attribute is a required field.',
		);
		
		$validator = Validator::make(Input::all(),$rules,$messages);
		$validator-> setAttributeNames($niceNames);
		
		if($validator->fails())
		{
			return Redirect::route('Study-upload-get')->withErrors($validator->messages())->withInput();
		}
		else
		{
			$study = new Study;
			$study->name = Input::get('name');
			$study->school_id = Input::get('school');
			$study->description = Input::get('description');
			$study->save();
			return 'Your study has been added.';
		}
	}
	
	public function updateStudyAdd()
	{
		$rules = array
		(
			'name' => 'required',
			'school' => 'required'
		);
		
		$niceNames = array
		(
			'name' => 'Name',
			'school' => 'School'
		);
		
		$messages = array
		(
			'required' => ':attribute is a required field.'
		);
		
		$validator = Validator::make(Input::all(),$rules,$messages);
		$validator-> setAttributeNames($niceNames);
		
		if($validator->fails())
		{
			return Redirect::to('study/update/' . Input::get('study_id'))->withErrors($validator->messages())->withInput();
		}
		else
		{
			$study = Study::find(Input::get('study_id'));
			$study->name = Input::get('name');
			$study->school_id = Input::get('school');
			$study->description = Input::get('description');
			$study->save();
			return 'Your study has been updated.';
		}
	}

}
?>