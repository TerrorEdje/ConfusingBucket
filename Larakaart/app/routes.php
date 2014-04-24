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
/*
Route::get('story/upload', array(
	'as'	=> 'Story-upload-get',
	'uses'	=> 'StoryController@uploadGet'

));
*/
Route::get('storydetail/{id}', array(
	'as'	=> 'storydetail',
	'uses'	=> 'StoryController@storydetail'
));

Route::get('vuldatabase', array(
	'as'	=> 'vuldatabase',
	'uses'	=> 'DatabaseController@vullen'
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
?>
