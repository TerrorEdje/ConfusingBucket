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

	        $student = new Student();
	        $student->firstname = $result['given_name'];
	        $student->surname = $result['family_name'];
	        $student->email = $result['email'];

	        $user = new User();
	        $user->google_token = $result['id'];
	        $user->username 	= $result['name'];
	        $user->email 		= $result['email'];
	        $user->google_value = $code;

	        $dbUser = User::where('google_token', '=', $user->google_token)->first();

	        if(!empty($dbUser)){

	        	return $this->logginIn($user);

			}else{

				return $this->createUser($user, $student);

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
		if(Auth::attempt(array(
				'username' 		=> $user->username,
				'email' 		=> $user->email,
				'google_token' 	=> $user->google_token
			), false)){

			$currentDate = new DateTime(date('Y-m-d H:i:s'));

			$newLog = Login_log::create(array(
				'datetime' 	=> $currentDate,
				'gebruiker' => Auth::user()->id,
				'token'		=> $user->google_value
			));

			//login loggen
			if($newLog){
                
                return Redirect::route('Home');

			}else{

				return Redirect::route('Home');

			}
			

		}else{

			return Redirect::route('Home');

		}

	}

	private function createUser(User $user, Student $student){

		Session::put('newUser', $user);
		Session::put('newStudent', $student);

		return Redirect::route('register');

	}

	public function logout(){

		Auth::logout();

		return Redirect::route('Home');

	}

}