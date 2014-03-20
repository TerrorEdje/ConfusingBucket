<?php

class StoryController extends BaseController {

	public function storylist()
	{
		$stories = Story::all();

		foreach ($stories as $story) {
			$storyLocations = StoryLocation::where('story_id',$story->id);
			
			foreach($storyLocations as $storylocation)
			{
				if ($storylocation->location_type == "Organization")
				{
					$location = Location::find($storylocation->id);
					$country = $location->country;
					$city = $location->city;
				}

			}

			

		}

		return View::make('storylist', array('stories' => $stories));
	}

	public function test1()
	{
		$user = User::find(1);
		echo $user->username.' = gebruikersnaam.';
		return View::make('test');
	}
	
	public function storydetail($id)
	{
		$story = Story::find($id);
	
		return View::make('storydetail')->with('story', $story);
	}

}