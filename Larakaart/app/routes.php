<?php

Route::get('/', array(
	'as'	=> 'Home',
	'uses'	=> 'IndexController@index'
));

Route::get('test', array(
	'as'	=> 'test',
	'uses'	=> 'TestController@test1'
));

Route::get('account/login', array(
	'as'	=> 'account-login-get',
	'uses'	=> 'AccountController@login'
));

Route::get('storylist', array(
	'as'	=> 'storylist',
	'uses'	=> 'StoryController@storylist'
));

Route::get('storylist/{ids}', array(
	'as'	=> 'storylist2',
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
/*
Route::get('story/upload', array(
	'as'	=> 'Story-upload-get',
	'uses'	=> 'StoryController@uploadGet'
));

Route::post('story/add', array(
	'as'	=> 'Story-upload-add',
	'uses'	=> 'StoryController@uploadAdd'
));
*/

Route::get('activity/upload', array(
	'as'	=> 'Activity-upload-get',
	'uses'	=> 'StoryController@uploadActivity'
));

Route::post('activity/add', array(
	'as'	=> 'Activity-upload-add',
	'uses'	=> 'StoryController@uploadActivityAdd'
));

Route::get('experience/upload', array(
	'as'	=> 'Experience-upload-get',
	'uses'	=> 'StoryController@uploadExperience'
));

Route::post('experience/add', array(
	'as'	=> 'Experience-upload-add',
	'uses'	=> 'StoryController@uploadExperienceAdd'
));

?>
