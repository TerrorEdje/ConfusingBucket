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
		echo 'id = '. $id;
		$story = $id;
		return View::make('storydetail')->with('data', $data);
	}

	public function uploadGet()
	{
		return View::make('Story.uploadGet');
	}

}