<?php

class StoryController extends BaseController {

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