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
    		'client_id'     => '507801177930-04tfjq02c204g8a7a7kf1cj96rleflif.apps.googleusercontent.com',
    		'client_secret' => 'ZM5UtcIrLFggwswlmPF0K71y',
    		'scope'         => array('userinfo_email', 'userinfo_profile'),
		),  

	)

);