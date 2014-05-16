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

	        $user = new User();
	        $user->google_token = $result['id'];
	        $user->username = $result['name'];
	        $user->email = $result['email'];

	        $dbUser = User::where('google_token', '=', $user->google_token)->first();

	        if(!is_null($dbUser)){

	        	$this->logginIn($user);

			}else{

				$this->createUser($user);

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

		//login try
		if(Auth::login($user)){

			return Redirect::to('Home');

		}else{

			return Redirect::to('home');

		}

	}

	private function createUser(User $user){

		$newUser = User::create(array(
			'google_token' 	=> $user->google_token,
			'username' 		=> $user->username,
			'email' 		=> $user->email
		));

		if($newUser){

			$this->logginIn($user);

		}else{

			/* als er gaan account aangemaakt kon worden || ERROR */
			return Redirect::to('Home')
    		->with('message', 'Something went wrong please try again!!');

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

	public function logout(){

		Auth::logout();

		return Redirect::to('/');

	}

}