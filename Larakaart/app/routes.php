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

	Route::get('organization/list', array(
		'as'	=> 'organizationlist',
		'uses'	=> 'OrganizationController@organizationlist'
	));

	Route::get('organization/list/{ids}', array(
		'as'	=> 'organizationlist2',
		'uses'	=> 'OrganizationController@organizationlist'
	));

	Route::get('organization/detail/{id}', array(
		'as'	=> 'organizationdetail',
		'uses'	=> 'OrganizationController@organizationdetail'
	));

	/*
	| cross site scripting safe | ALLE POST functies
	*/
	Route::group(array('before' => 'csrf'), function() {

		/*form activity | post*/
		Route::post('activity/add', array(
			'as'	=> 'Activity-upload-add',
			'uses'	=> 'StoryController@uploadActivityAdd'
		));

		Route::post('login', array(
			'as'	=> 'google-callback',
			'uses'	=> 'LoginController@loggedInWithGoogle'
		));

		/*form experiance | post*/
		Route::post('experience/add', array(
			'as'	=> 'Experience-upload-add',
			'uses'	=> 'StoryController@uploadExperienceAdd'
		));

	});

	/*
	| NIET cross site scripting safe | ALLE GET functies
	*/

	/*login | get*/
	Route::get('login', array(
		'as'	=> 'login-get',
		'uses'	=> 'LoginController@loginWithGoogle'
	));

	/*login van google call back| get CHANGED!!!!*/
	Route::post('login/google', array(
		'as'	=> 'google-callback',
		'uses'	=> 'LoginController@loggedInWithGoogle'
	));

	/*
	| Na inloggen deze functies tonen bij bevoegheid || NOG IN TE BOUWEN!!!
	*/
	Route::get('vuldatabase', array(
		'as'	=> 'vuldatabase',
		'uses'	=> 'DatabaseController@vullen'
	));

	/* experiance form | get*/
	Route::get('experience/upload', array(
		'as'	=> 'Experience-upload-get',
		'uses'	=> 'StoryController@uploadExperience'
	));

	Route::get('activity/upload', array(
		'as'	=> 'Activity-upload-get',
		'uses'	=> 'StoryController@uploadActivity'
	));

});
?>