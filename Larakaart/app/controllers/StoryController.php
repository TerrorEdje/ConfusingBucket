<?php

class StoryController extends BaseController {

	public function storylist()
	{
		$stories = Story::all();

		foreach ($stories as $story) {
			# $storyLocation = StoryLocation::find($story->id);
			# $location = Location::find($storyLocation->id);
			# $story->country = $location
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