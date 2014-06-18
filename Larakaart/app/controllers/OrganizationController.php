<?php

class OrganizationController extends BaseController {

	public function organizationdetail($id)
	{
		$errors = array();		
		$organization = Organization::find($id);
		
		$activities = Activity::where('organization_id','=',$id)->get();
		$experiences = array();
		foreach ($activities as $activity)
		{
			$tempexperience = Experience::where('activity_id','=',$activity->id)->get();
			foreach($tempexperience as $experience)
			{
				array_push($experiences,$experience);
			}
		}
		
		if ($organization == null)
		{
			array_push($errors,"The organization you are looking for does not exist.");
		}
		
		
		return View::make('organization/detail')->with('errors',$errors)->with('organization',$organization)->with('activities',$activities)->with('experiences',$experiences);
	}

	public function organizationlist($ids = "empty")
	{

		if ($ids != "empty")
		{
			$ids = explode(",", $ids);
			
			$DBorganizations = Organization::orderBy('name','asc')->get();
			
			
            $organizations = array();
			
            foreach($DBorganizations as $organization)
			{
				if (in_array($organization->id,$ids))
				{
					array_push($organizations,$organization);
				}
			}
		}
		else
		{
			$organizations = Organization::orderBy('name','asc')->get();

		}
		
		return View::make('organization/list', array('organizations' => $organizations));
	}
	
	public function organizationcms()
	{
		if (checkAccess("Organization"))
		{
			$user = User::find(Auth::user()->id);
			$usertype = Usertype::where('user_id','=',$user->id)->first();
			return Redirect::route('Organization-update-get',$usertype->organization_id);
		}
		$organizations = Organization::orderBy('name','asc')->get();
		return View::make('organization/cms',array('organizations' => $organizations));
	}
	
	public function uploadOrganization()
	{		
		$types = array('' => 'Select...') + Organization_type::lists('name','name');
		return View::make('organization/upload')->with('types',$types);
	}
	
	public function updateOrganization($id)
	{
		$organization = Organization::find($id);
		$location = Location::find($organization->location_id);
		$types = Organization_type::lists('name','name');
		return View::make('organization/update')->with('types',$types)->with('organization',$organization)->with('location',$location);
	}
	
	public function uploadOrganizationAdd()
	{
		$rules = array
		(
			'name' => 'required',
			'type' => 'required',
			'description' => 'required',
			'country' => 'required',
			'city' => 'required'			
		);
		
		$niceNames = array
		(
			'name' => 'Name',
			'type' => 'Type',
			'description' => 'Description',
			'country' => 'Country',
			'city' => 'City'
		);
		
		$messages = array
		(
			'required' => ':attribute is a required field.'
		);
		
		$validator = Validator::make(Input::all(),$rules,$messages);
		$validator-> setAttributeNames($niceNames);
		
		if($validator->fails())
		{
			$types = array('' => 'Select...') + Organization_type::lists('name','name');
			return Redirect::to('organization/upload')->with('types',$types)->withErrors($validator->messages())->withInput();
		}
		else
		{
			$organization = new Organization;
			$organization->name = Input::get('name');
			$organization->description = Input::get('description');
			$organization->type = Input::get('type');
			$organization->status	= 'Needsapproval';
			$organization->website = Input::get('website');
			$location = new Location;
			$location->country = Input::get('country');
			$location->city = Input::get('city');
			$location->streetname = Input::get('streetname');
			$location->number = Input::get('number');
			$location->zipcode = Input::get('zipcode');
			$location->geocode();
			$location->save();
			$organization->location_id = $location->id;
			$organization->save();
			return $organization->name . ' has been uploaded.';
		}
	}
	
	public function updateOrganizationAdd()
	{
		$rules = array
		(
			'name' => 'required',
			'type' => 'required',
			'description' => 'required',
			'country' => 'required',
			'city' => 'required'			
		);
		
		$niceNames = array
		(
			'name' => 'Name',
			'type' => 'Type',
			'description' => 'Description',
			'country' => 'Country',
			'city' => 'City'
		);
		
		$messages = array
		(
			'required' => ':attribute is a required field.'
		);
		
		$validator = Validator::make(Input::all(),$rules,$messages);
		$validator-> setAttributeNames($niceNames);
		
		if($validator->fails())
		{
			$types = array('' => 'Select...') + Organization_type::lists('name','name');
			return Redirect::to('organization/update/' . Input::get('organization_id'))->with('types',$types)->withErrors($validator->messages())->withInput();
		}
		else
		{
			$organization = Organization::find(Input::get('organization_id'));
			$organization->name = Input::get('name');
			$organization->description = Input::get('description');
			$organization->type = Input::get('type');
			$organization->website = Input::get('website');
			$location = Location::find(Input::get('location_id'));
			$location->country = Input::get('country');
			$location->city = Input::get('city');
			$location->streetname = Input::get('streetname');
			$location->number = Input::get('number');
			$location->zipcode = Input::get('zipcode');
			$location->geocode();
			$location->save();
			$organization->save();
			return $organization->name . ' has been updated.';
		}
	}

}
?>