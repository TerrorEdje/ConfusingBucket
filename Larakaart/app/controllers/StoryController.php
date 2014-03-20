<?php

class StoryController extends BaseController {

	public function storylist()
	{
		$stories = Story::All();

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
		echo 'id = '. $id;
		return View::make('storydetail')->with('data', $data);
	}

}