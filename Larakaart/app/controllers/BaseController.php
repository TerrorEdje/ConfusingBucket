<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$mapLocations = Array();
			
			$storyLocations = Storylocation::all();
			foreach($storyLocations as $storyLocation)
			{
				if ($storyLocation['location_type'] == "Organization")
				{
					$mapLocation = Array();
					$location = Location::where('id','=',$storyLocation['location_id'])->get();
					$story = Story::where('id','=',$storyLocation['story_id'])->get();
					$student = Student::where('id','=',$story[0]['student_id'])->get();
					print_r($student);
				}
			}
			
			
			$this->layout = View::make($this->layout);
			View::share('mapLocations', $mapLocations);
		}
		
	}

}