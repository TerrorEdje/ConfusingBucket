<?php

/*home screen | voor iedereen zichtbaar*/
Route::get('/', array(
	'as'	=> 'Home',
	'uses'	=> 'IndexController@index'
));


/*
| voor gasten | niet ingelogde mensen
*/
Route::group(array('before' => 'guest'), function() {


	/*
	| cross site scripting safe | ALLE POST functies
	*/
	Route::group(array('before' => 'csrf'), function() {

		/*form storylist | post*/
		Route::post('story/add', array(
			'as'	=> 'story-upload-add',
			'uses'	=> 'StoryController@uploadAdd'
		));

	});

	/*
	| NIET cross site scripting safe | ALLE GET functies
	*/

	/*login | get*/
	Route::get('login', array(
		'as'	=> 'login-get',
		'uses'	=> 'loginController@getLogin'
	));

	/*all storylist | get*/
	Route::get('storylist', array(
		'as'	=> 'storylist',
		'uses'	=> 'StoryController@storylist'
	));

	/*single storylist | get*/
	Route::get('storylist/{ids}', array(
		'as'	=> 'storylist2',
		'uses'	=> 'StoryController@storylist'
	));

	/*single story detail | get*/
	Route::get('storydetail/{id}', array(
		'as'	=> 'storydetail',
		'uses'	=> 'StoryController@storydetail'
	));

	/*form story upload | get*/
	Route::get('story/upload', array(
		'as'	=> 'story-upload-get',
		'uses'	=> 'StoryController@uploadGet'
	));

});
?>
