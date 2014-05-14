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
		$input	= Input::all();
	
		$validator = Validator::make($input, array(
				'organisatie' => 'required',
				'type' 			=> 'required',
				'name' 		=> 'required|max:45|alpha_dash',
				'description' => 'required|alpha_dash',
				'startdate'	=> 'date',
				'enddate' 	=> 'date|after:startdate',
				'status'		=> 'required'
			));		
		
	
		if($validator->fails())
		{
			echo 'Test <br />';
			foreach($input as $x)
			{
				echo $x .'<br />';
			}
			/*return Redirect::route('Activity-upload-add')
				->withErrors($validator)
				->withInput();*/

		}
		else
		{
			$organisatie 	= Input::get('organization');
			$type 				= Input::get('type');
			$name				= Input::get('name');
			$description	= Input::get('description');
			$startdate		= Input::get('startdate');
			$enddate 		= Input::get('enddate');
			$status			= Input::get('status');
			$study				= Input::get('study');

			$newActivity = new Activity;
			$newActivity->name 					= $name;
			$newActivity->description 			= $description;
			$newActivity->startdate 				= $startdate;
			$newActivity->enddate 				= $enddate;
			$newActivity->type 						= $type;
			$newActivity->status 					= $status;
			$newActivity->organization_id 	= $organisatie;
			$newActivity->study_id 				= $study;
			$newActivity->save();
			return View::make('uploadActivityAdd');
		}
	
		/*$startdate = Input::get('startdate');
	
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
		}*/
	}

}