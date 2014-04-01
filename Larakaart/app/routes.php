<?php

Route::get('/', array(
	'as'	=> 'Home',
	'uses'	=> 'IndexController@index'
));

Route::get('test', array(
	'as'	=> 'test',
	'uses'	=> 'TestController@test1'
));

Route::get('storylist', array(
	'as'	=> 'storylist',
	'uses'	=> 'StoryController@storylist'
));

Route::get('story/upload', array(
	'as'	=> 'Story-upload-get',
	'uses'	=> 'StoryController@uploadGet'

));

Route::get('storydetail/{id}', array(
	'as'	=> 'storydetail',
	'uses'	=> 'StoryController@storydetail'
));

Route::get('story/upload', array(
	'as'	=> 'Story-upload-get',
	'uses'	=> 'StoryController@uploadGet'
));

?>
