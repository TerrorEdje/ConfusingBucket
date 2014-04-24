<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 *
	 * activity, organization, location, student, study
	 *
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$mapLocations = Array();
			
			$organizations = Organization::all();
			foreach($organizations as $organization)
			{
				$mapLocation = Array();
                //Locatie toevoegen
				$location = Location::find($organization['location_id']);
                if ($location != null) //ALS RESULT NIET LEEG IS
                {
                    $mapLocation['id']          = $location['id'];
                    $mapLocation['country']     = $location['country'];
                    $mapLocation['city']        = $location['city'];
                    $mapLocation['streetname']  = $location['streetname'];
                    $mapLocation['number']      = $location['number'];
                    $mapLocation['zipcode']     = $location['zipcode'];
                    $mapLocation['latitude']    = $location['latitude'];
                    $mapLocation['longitude']   = $location['longitude'];
                }
				
				/*$activity = Activity::where('organization_id','=',$organization['id'])->get();
				if ($activity != null)
                {
					echo 'test';
					var_dump($activity);
                    //Type toevoegen
                    //$mapLocation['type'] = $activity['type'];
                    
                    //Opleiding toevoegen
                    $study = Study::where('id','=',$activity[0]['study_id'])->get();
                    if ($study != null)
                    {
                        $study = $study[0];
                        $mapLocation['study'] = $study['name'];
                    }
				}*/
                array_push($mapLocations,$mapLocation);
			}			
			$this->layout = View::make($this->layout);
			View::share('mapLocations', $mapLocations);
		}
		
	}

}