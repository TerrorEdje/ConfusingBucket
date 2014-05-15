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
        
        $niceNames = array(
            'organization' => 'Organization',
            'type' => 'Type',
            'name' => 'Name',
            'study' => 'Study',
            'startdate' => 'Start date',
            'enddate' => 'End date',
            'status' => 'Status',
            'description' => 'Description'
        );
        
		
		$messages = array
		(
			'required' => ':attribute is a required field.',
			'alpha_dash' => ':attribute should consist of alphabetic characters or dashes/underscores.',
			'date' => ':attribute should be a date.',
			'after:startdate' => ':attribute should be a date after the start date.',
		);
		
		$validator = Validator::make(Input::all(), $rules, $messages);
        $validator->setAttributeNames($niceNames); 
		
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