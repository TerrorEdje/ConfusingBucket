<?php

class ActivityController extends BaseController {
	
    public function Activitycms()
	{
        $sortedActivities = array();
        
        $i = 0;
        $organizations = Organization::all();
        foreach ($organizations as $organization)
        {
            $sortedActivities[$i]['organization_name'] = $organization['name'];
            $sortedActivities[$i]['activities'] = Activity::where('organization_id', '=', $organization['id'])->get();
            $i++;
        }
		return View::make('activity/cms',array('sortedActivities' => $sortedActivities));
	}
    
	public function uploadActivity()
	{
		$organizations = array('' => 'Select...') + Organization::lists('name','id');
		$types = array('' => 'Select...') + Activity_type::lists('name','name');
		$studies = array('' => 'Select...') + Study::lists('name','id');
		$statuses = array('' => 'Select...') + Activity_status::lists('name','name');
		return View::make('activity/upload')->with('organizations', $organizations)->with('types', $types)->with('studies',$studies)->with('statuses',$statuses);
	}
    
    public function updateActivity($id)
	{
        $activity = Activity::find($id);
        $organizations = array('' => 'Select...') + Organization::lists('name','id');
		$types = array('' => 'Select...') + Activity_type::lists('name','name');
		$studies = array('' => 'Select...') + Study::lists('name','id');
		$statuses = array('' => 'Select...') + Activity_status::lists('name','name');
		return View::make('activity/update')->with('activity', $activity)->with('organizations', $organizations)->with('types', $types)->with('studies',$studies)->with('statuses',$statuses);
        
		$organization = Organization::find($id);
		$location = Location::find($organization->location_id);
		$types = Organization_type::lists('name','name');
		return View::make('organization/update')->with('types',$types)->with('organization',$organization)->with('location',$location);
	}
	
	public function uploadActivityAdd()
	{	
		$rules = array
		(
			'organization' => 'required',
			'type' => 'required',
			'name' => 'required',
			'description' => 'required',
			'startdate' => 'date',
			'enddate' => 'date|after:startdate',
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
            ->withInput()
			->withErrors($validator->messages());
		}
		else
		{
            $newActivity = Activity::create(array(
                'name'              => Input::get('name'),
                'description'       => Input::get('description'),
                'startdate'         => Input::get('startdate'),
                'enddate'           => Input::get('enddate'),
                'type'              => Input::get('type'),
                'status'            => Input::get('status'),
                'organization_id'   => Input::get('organization'),
                'study_id'          => Input::get('study')
            ));
            
			return View::make('activity/uploadadd');
		}
	}

}