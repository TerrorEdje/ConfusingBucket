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
		
		
		return View::make('organizationdetail')->with('errors',$errors)->with('organization',$organization)->with('activities',$activities)->with('experiences',$experiences);
	}

	public function organizationlist($ids = "empty")
	{

		if ($ids != "empty")
		{
			$ids = explode(",", $ids);
			
            $organizations = array();
            
			foreach($ids as $id)
			{
                $DBorganizations = Organization::where('id','=',$id)->get();
                foreach ($DBorganizations as $organization)
                {
                    array_push($organizations,$organization);
                }
			}
		}
		else
		{
			$organizations = Organization::all();
		}
		
		return View::make('organizationlist', array('organizations' => $organizations));
	}
	
	public function organizationcms()
	{
		$organizations = Organization::all();
		return View::make('organization/cms',array('organizations' => $organizations));
	}
	
	public function uploadOrganization()
	{		
		$organization_types = Organization_type::all();
		$types = array();
		foreach($organization_types as $type)
		{
			array_push($types,$type->name);
		}
		return View::make('organization/upload')->with('types',$types);
	}
	
	public function uploadOrganizationAdd()
	{
		return View::make('organization/uploadadd');
	}

}
?>