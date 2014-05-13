<?php

class ActivityController extends BaseController {
	
	public function uploadActivity()
	{
		$organizations = array('' => 'Select...') + Organization::lists('name','id');
		$types = array('' => 'Select...') + Activity_type::lists('name','name');
		$studies = array('' => 'Select...') + Study::lists('name','id');
		$statuses = array('' => 'Select...') + Activity_status::lists('name','name');
		return View::make('uploadActivity')->with('organizations', $organizations)->with('types', $types)->with('studies',$studies)->with('statuses',$statuses);
	}
	
	public function uploadActivityAdd()
	{	
		$startdate = Input::get('startdate');
	
		$rules = array
		(
			'organisatie' => array('required'),
			'type' => array('required'),
			'name' => array('required', 'alpha_dash'),
			'description' => array('required', 'alpha_dash'),
			'startdate' => array('date'),
			'enddate' => array('after:startdate'),
			'status' => array('required')
		);
		
		$messages = array
		(
			'required' => ':attribute is a required field',
			'alpha_dash' => ':attribute should consist of alphabetic characters or dashes/underscores'
		);
		
		$validator = Validator::make(Input::all(), $rules, $messages);
		
		if($validator->fails())
		{
			$messages = $validator->messages();
			$organizations = array('' => 'Select...') + Organization::lists('name','id');
			$types = array('' => 'Select...') + Activity_type::lists('name','name');
			$studies = array('' => 'Select...') + Study::lists('name','id');
			$statuses = array('' => 'Select...') + Activity_status::lists('name','name');
			return View::make('uploadActivity')->with_errors($validator)->with('organizations', $organizations)
			->with('types', $types)->with('studies',$studies)->with('statuses',$statuses);
		}
		else
		{
			$activity = new Activity;
			$activity->name = Input::get('name');
			$activity->description = Input::get('description');
			$activity->startdate = $startdate;
			$activity->enddate = Input::get('enddate');
			$activity->type = Input::get('type');
			$activity->status = Input::get('status');
			$activity->organization_id = Input::get('organization');
			$activity->study_id = Input::get('study');
			$activity->save();
			return View::make('uploadActivityAdd');
		}
	}

}