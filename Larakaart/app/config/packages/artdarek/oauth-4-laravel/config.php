<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Google' => array(
    		'client_id'     => '507801177930-o5m9lstektc9miu5ir27e9anjoqhsveh.apps.googleusercontent.com',
    		'client_secret' => 'uXPcQPVSWWyxbP_uEt51hQnn',
    		'scope'         => array('userinfo_email', 'userinfo_profile'),
		),  

	)

);