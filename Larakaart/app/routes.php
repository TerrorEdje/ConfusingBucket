<?php

/*home screen | voor iedereen zichtbaar*/
Route::get('/', array(
	'as'	=> 'Home',
	'uses'	=> 'IndexController@index'
));

Route::get('/logout', array(
	'as'	=> 'logout',
	'uses'	=> 'LoginController@logout'
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
			'uses'	=> 'ActivityController@uploadActivityAdd'
		));
		
		Route::post('activity/update-add', array(
			'as'	=> 'Activity-update-add',
			'uses'	=> 'ActivityController@updateActivityAdd'
		));

		Route::post('login', array(
			'as'	=> 'google-callback',
			'uses'	=> 'LoginController@loggedInWithGoogle'
		));

		/*form experiance | post*/
		Route::post('experience/add', array(
			'as'	=> 'Experience-upload-add',
			'uses'	=> 'ExperienceController@uploadExperienceAdd'
		));
		
		/*
		| Organization CMS post methods.
		*/
		Route::post('organization/add', array(
			'as'	=> 'Organization-upload-add',
			'uses'	=> 'OrganizationController@uploadOrganizationAdd'
		));
		
		Route::post('experience/update-add', array(
			'as'	=> 'Experience-update-add',
			'uses'	=> 'ExperienceController@updateExperienceAdd'
		));
		
		Route::post('organization/update-add', array(
			'as'	=> 'Organization-update-add',
			'uses'	=> 'OrganizationController@updateOrganizationAdd'
		));
		
		/*
		| School CMS post methods.
		*/
		Route::post('school/add', array(
			'as'	=> 'School-upload-add',
			'uses'	=> 'SchoolController@uploadSchoolAdd'
		));
		
		Route::post('school/update-add', array(
			'as'	=> 'School-update-add',
			'uses'	=> 'SchoolController@updateSchoolAdd'
		));
		
		/*
		| Study CMS post methods.
		*/
		Route::post('study/add', array(
			'as'	=> 'Study-upload-add',
			'uses'	=> 'StudyController@uploadStudyAdd'
		));
		
		Route::post('study/update-add', array(
			'as'	=> 'Study-update-add',
			'uses'	=> 'StudyController@updateStudyAdd'
		));
		
		/*
		| Acceptance system post methods.
		*/
		Route::post('organization/status/update', array(
			'as'	=> 'Update-organization-status',
			'uses'	=> 'AcceptanceController@updateOrganizationStatus'
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
	Route::get('experience/upload/{id}', array(
		'as'	=> 'Experience-upload-get',
		'uses'	=> 'ExperienceController@uploadExperience'
	));

	Route::get('experience/update/{id}', array(
			'as'	=> 'Experience-update-get',
			'uses'	=> 'ExperienceController@updateExperience'
	));
	
	Route::get('activity/upload', array(
		'as'	=> 'Activity-upload-get',
		'uses'	=> 'ActivityController@uploadActivity'
	));
    
    Route::get('activity/update/{id}', array(
			'as'	=> 'Activity-update-get',
			'uses'	=> 'ActivityController@updateActivity'
	));
    
    Route::get('activity/cms', array(
		'as'	=> 'Activity-cms',
		'uses'	=> 'ActivityController@Activitycms'
	));
	
	/*
	| Organization CMS screens.
	*/
	Route::get('organization/upload', array(
			'as'	=> 'Organization-upload-get',
			'uses'	=> 'OrganizationController@uploadOrganization'
	));
	
	Route::get('organization/update/{id}', array(
			'as'	=> 'Organization-update-get',
			'uses'	=> 'OrganizationController@updateOrganization'
	));
	
	Route::get('organization/cms', array(
			'as'	=> 'Organization-cms',
			'uses'	=> 'OrganizationController@organizationcms'
	));
	
	/*
	| School CMS screens.
	*/
	Route::get('school/cms', array(
			'as'	=> 'School-cms',
			'uses'	=> 'SchoolController@schoolcms'
	));
	
	Route::get('school/upload', array(
			'as'	=> 'School-upload-get',
			'uses'	=> 'SchoolController@uploadSchool'
	));
	
	Route::get('school/update/{id}', array(
			'as'	=> 'School-update-get',
			'uses'	=> 'SchoolController@updateSchool'
	));
	
	/*
	| Study CMS screens.
	*/
	Route::get('study/cms', array(
			'as'	=> 'Study-cms',
			'uses'	=> 'StudyController@studycms'
	));
	
	Route::get('study/upload', array(
			'as'	=> 'Study-upload-get',
			'uses'	=> 'StudyController@uploadStudy'
	));
	
	Route::get('study/update/{id}', array(
			'as'	=> 'Study-update-get',
			'uses'	=> 'StudyController@updateStudy'
	));
	
	Route::get('experience/cms/list', array(
			'as'	=> 'Experience-cms-list',
			'uses'	=> 'ExperienceController@experiencecmsList'
	));
	
	Route::get('experience/cmsDetail/{id}', array(
		'as'	=> 'Experience-cms-detail',
		'uses'	=> 'ExperienceController@experiencecmsDetail'
	));
	
	/*
	| Acceptance system
	*/
	
	Route::get('acceptanceSystem', array(
		'as'	=> 'Acceptance-system',
		'uses'	=> 'AcceptanceController@acceptanceSystem'
	));
	
	Route::get('detailOrganization/{id}', array(
		'as'	=> 'Detail-organization',
		'uses'	=> 'AcceptanceController@detailOrganization'
	));

});
?>