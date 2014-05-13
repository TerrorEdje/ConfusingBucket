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
                $mapLocation['organization'] = $organization['name'];
                
                //Locatie toevoegen
				$location = Location::find($organization['location_id']);
				$mapLocation['id'] = $organization['id'];
                if ($location != null) //ALS RESULT NIET LEEG IS
                {

                    $mapLocation['country']     = $location['country'];
                    $mapLocation['city']        = $location['city'];
                    $mapLocation['streetname']  = $location['streetname'];
                    $mapLocation['number']      = $location['number'];
                    $mapLocation['zipcode']     = $location['zipcode'];
                    $mapLocation['latitude']    = $location['latitude'];
                    $mapLocation['longitude']   = $location['longitude'];
                }
                
                $mapLocation['years'] = array();
                
				$activities = Activity::where('organization_id','=',$organization['id'])->get();
				if ($activities != null)
                {
                    foreach($activities as $activity)
                    {
                        $year = array();
                        if ($activity['startdate'] != null || $activity['enddate'] != null)
                        {
                            if ($activity['startdate'] != null) 
                            {
                                $year['start'] = date('Y', strtotime($activity['startdate']));
                            }
                            else
                                $year['start'] = 0;
                            if ($activity['enddate'] != null) 
                            {
                                $year['end'] = date('Y', strtotime($activity['enddate']));
                            }
                            else
                                $year['end'] = 9999;
                            $year['type'] = $activity['type'];
                        }
                        
                        $studies = Study::where('id','=',$activity['study_id'])->get();
                        if ($studies != null)
                        {
                            foreach($studies as $study)
                            {
                                $year['study'] = $study['name'];
                            }
                        }
                        array_push($mapLocation['years'], $year);
                    }
                }
				
                array_push($mapLocations,$mapLocation);
			}			

			$this->layout = View::make($this->layout);
			View::share('mapLocations', $mapLocations);
		}
		
	}

}