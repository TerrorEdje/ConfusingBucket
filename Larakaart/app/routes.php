<?php

Route::get('/', array(
	'as'	=> 'Home',
	'uses'	=> 'IndexController@index'
));

Route::get('test', array(
	'as'	=> 'test',
	'uses'	=> 'TestController@test1'
));

Route::get('Storylist', array(
	'as'	=> 'storylist',
	'uses'	=> 'StorylistController@index'
));