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
                    
					$story = Story::where('id','=',$storyLocation['story_id'])->get();
					if (count($story) > 0)
                    {
                        //Type toevoegen
                        $mapLocation['storyType'] = $story[0]['type'];
                        
                        //Studentnaam toevoegen
                        $student = Student::where('id','=',$story[0]['student_id'])->get();
                        if (count($student) > 0)
                        {
                            $student = $student[0];
                            if ($student['insertion'] != null)
                            {
                                $mapLocation['person'] = $student['firstname'] . " " . $student['insertion'] . " " . $student['surname'];
                            }
                            else
                            {
                                $mapLocation['person'] = $student['firstname'] . " " . $student['surname'];
                            }
                        }
                        else
                        {
                            $mapLocation['person'] = "";
                        }
                        
                        //Opleiding toevoegen
                        $study = Study::where('id','=',$story[0]['study_id'])->get();
                        if (count($study) > 0)
                        {
                            $study = $study[0];
                            $mapLocation['study'] = $study['name'];
                        }
					}
                    
                    array_push($mapLocations,$mapLocation);
				}
			}*/
			
				
                array_push($mapLocations,$mapLocation);
			}			
			$this->layout = View::make($this->layout);
			View::share('mapLocations', $mapLocations);
		}
		
	}

}