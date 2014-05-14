<?php

class ActivityController extends BaseController {
	
	public function uploadActivity()
	{
		$organizations = array('' => 'Select...') + Organization::lists('name','id');
		$types = array('' => 'Select...') + Activity_type::lists('name','name');
		$studies = array('' => 'Select...') + Study::lists('name','id');
		$statuses = array('' => 'Select...') + Activity_status::lists('name','name');
		return View::make('activity/upload')->with('organizations', $organizations)->with('types', $types)->with('studies',$studies)->with('statuses',$statuses);
	}
	
	public function uploadActivityAdd()
	{	
		$rules = array
		(
			'organization' => 'required',
			'type' => 'required',
			'name' => 'required|alpha_dash',
			'description' => 'required|alpha_dash',
			'startdate' => 'required|date',
			'enddate' => 'required|date|after:startdate',
			'status' => 'required'
		);
		
		$messages = array
		(
			'required' => 'The :attribute is a required field.',
			'alpha_dash' => 'The :attribute should consist of alphabetic characters or dashes/underscores.',
			'date' => 'The :attribute should be a date.',
			'after:startdate' => 'The :attribute should be a date after the startdate.',
		);
		
		$validator = Validator::make(Input::all(), $rules, $messages);
		
		if($validator->fails())
		{
			$organizations = array('' => 'Select...') + Organization::lists('name','id');
			$types = array('' => 'Select...') + Activity_type::lists('name','name');
			$studies = array('' => 'Select...') + Study::lists('name','id');
			$statuses = array('' => 'Select...') + Activity_status::lists('name','name');
			return Redirect::to('activity/upload')->with('organizations', $organizations)
			->with('types', $types)->with('studies',$studies)->with('statuses',$statuses)
			->withErrors($validator->messages());
		}
		else
		{
			$activity = new Activity;
			$activity->name = Input::get('name');
			$activity->description = Input::get('description');
			$activity->startdate = Input::get('startdate');
			$activity->enddate = Input::get('enddate');
			$activity->type = Input::get('type');
			$activity->status = Input::get('status');
			$activity->organization_id = Input::get('organization');
			$activity->study_id = Input::get('study');
			$activity->save();
			return View::make('activity/uploadadd');
		}
	}

}