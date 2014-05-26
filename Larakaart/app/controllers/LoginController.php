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

	        if(!empty($dbUser)){

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

		$newLog = Login_log::create(array(
				'datetime' 	=> '2000-01-01 00:00:00',
				'gebruiker' => '256416',
				'token'		=> 'hjfnanl4885'
			));

		//login try
		if(Auth::login($user)){

			/*$hee = new DateTime('now');*/

			/*$newUser = User::create(array(
				'google_token' 	=> 'hee',
				'username' 		=> $hee,
				'email' 		=> 'hoi'
			));*/

			$newLog = Login_log::create(array(
				'datetime' 	=> '2000-01-01 00:00:00',
				'gebruiker' => '256416',
				'token'		=> 'hjfnanl4885'
			));

			if($newLog){

				return Redirect::to('Home');

			}else{

				return '111hee';

			}
			

		}else{

			return Redirect::to('Home');

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

	public function logout(){

		Auth::logout();

		return Redirect::to('/');

	}

}