<?php

class LoginController extends BaseController {

	protected $layout = 'layout.main';

	public function getLogin()
	{
		//$this->layout->content = View::make('home');
		return 'hhee';
		//return View::make('login.form');
		//return View::make('login.loginVeld');
	}

	public function loginWithGoogle() {

	    // get data from input
	    $code = Input::get( 'code' );

	    // get google service
	    $googleService = OAuth::consumer( 'Google' );

	    // check if code is valid

	    // if code is provided get user data and sign in
	    if ( !empty( $code ) ) {

	        // This was a callback request from google, get the token
	        $token = $googleService->requestAccessToken( $code );

	        // Send a request with it
	        $result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );

	        /*
	        $message = 'Your unique Google user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
	        echo $message. "<br/>";
	        */

	        $user = new User();
	        $user->google_id = $result['id'];

	        if(User::find($user->google_id)){

	        	logginIn($user);

			}else{
				
				$user->save();
				'';

			}

	    }
	    // if not ask for permission first
	    else {
	        // get googleService authorization
	        $url = $googleService->getAuthorizationUri();

	        // return to facebook login url
	        return Redirect::to( (string)$url );
    	}
	}

	private function logginIn(User $user){

		if (Auth::attempt(array('google_id' => $user->google_id))) {
	    		/*return Redirect::to('home')->with('message', 'You have succesfully logged in!');*/
	    		return 'gelukt';
			} else {
	    		/*return Redirect::to('users/login')
	        	->with('message', 'Something went wrong please try again!!');*/
	        	return 'gefaalt';
			}

	}

	public function loggedInWithGoogle() {

		$code = Input::get('code');

		/*sessie zetten*/

		/*if (Auth::attempt(array('google_token'=>Input::get('code')))) {
    		return Redirect::to('home')->with('message', 'You have succesfully logged in!');
		} else {
    		return Redirect::to('users/login')
        	->with('message', 'Something went wrong please try again!!');
		}*/

		/*return '<pre>print_r($1)</pre>--->'.$code;*/

	}

}