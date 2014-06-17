<?php

class RegisterController extends BaseController {

	protected $layout = 'layout.main';

	public function index(){

		$newUser = Session::get('newUser');

		if(!empty($newUser->google_token)){

			return View::make('register.step1');

		}else{

			return Redirect::route('Home');

		}
	}

	public function registerStudent(){

		$studies = array('' => 'Select...') + Study::lists('name','id');
		return View::make('register.student')->with('studies',$studies);

	}	

	public function registerOrganization(){

		$types = array('' => 'Select...') + Organization_type::lists('name','name');
		return View::make('register.organization')->with('types',$types);

	}

	public function registerOrganizationPost(){

		$rules = array
		(
			'name' => 'required',
			'type' => 'required',
			'description' => 'required',
			'country' => 'required',
			'city' => 'required'			
		);
		
		$niceNames = array
		(
			'name' => 'Name',
			'type' => 'Type',
			'description' => 'Description',
			'country' => 'Country',
			'city' => 'City'
		);
		
		$messages = array
		(
			'required' => ':attribute is a required field.'
		);
		
		$validator = Validator::make(Input::all(),$rules,$messages);
		$validator-> setAttributeNames($niceNames);
		
		if($validator->fails())
		{
			$types = array('' => 'Select...') + Organization_type::lists('name','name');
			return Redirect::route('register-organization-get')->with('types',$types)->withErrors($validator->messages())->withInput();
		}
		else
		{
			$organization = new Organization;
			$organization->name = Input::get('name');
			$organization->description = Input::get('description');
			$organization->type = Input::get('type');
			$organization->website = Input::get('website');
			$organization->status = 'Needsapproval';
			$location = new Location;
			$location->country = Input::get('country');
			$location->city = Input::get('city');
			$location->streetname = Input::get('streetname');
			$location->number = Input::get('number');
			$location->zipcode = Input::get('zipcode');
			$location->geocode();
			$location->save();
			$organization->location_id = $location->id;
			$organization->save();

			//create user
			$newUser = $this->createUser();

			//create usertype
			$this->createUserType($newUser->id, '', $organization->id, '');

			//loggin in
			if($this->login($newUser)){

				Session::forget('newUser');
				Session::forget('newStudent');

				//conformatie egven account aangemaakt, nog maken
				return '<script type="text/javascript">
					

					window.location = "http://confusingbucket.nl"
					
					</script>';

			}else{

				//inloggen niet gelukt, die nog wat voor maken
				return Redirect::route('Home');

			}
		}

	}	

	public function registerStudentPost(){

		//$studies = array('' => 'Select...') + Student::list('name','id');

		//create user
		$newUser = $this->createUser();

		//create new student
		$newStudent = $this->createStudent($newUser->id, Input::get('study'));

		//create new usertype
		$this->createUserType($newUser->id, $newStudent->id, '', '');

		//loggin in
		if($this->login($newUser)){

			Session::forget('newUser');
			Session::forget('newStudent');

			//conformatie egven account aangemaakt, nog maken
			//voor test gebruik "./"
			return '<script type="text/javascript">
					

					window.location = "http://confusingbucket.nl"
					
					</script>';
		}else{

			//inloggen niet gelukt, die nog wat voor maken
			return Redirect::route('Home');

		}

	}

	private function createUser(){

		$newUser = User::create(array(
			'username' 		=> Session::get('newUser')->username,
			'email'			=> Session::get('newUser')->email,
			'google_token'	=> Session::get('newUser')->google_token,
			'google_value'	=> Session::get('newUser')->google_value
		));

		return $newUser;

	}

	private function createStudent($userID, $studieID){

		$newStudent = Student::create(array(

			'firstname' => Session::get('newStudent')->firstname,
			'surname'	=> Session::get('newStudent')->surname,
			'email'		=> Session::get('newStudent')->email,
			'study_id'  => $studieID
		));

		return $newStudent;

	}

	private function createUserType($userId, $studentId = 'null', $organizationId = 'null', $adminId = 'null'){

		$newUserType = Usertype::create(array(
			'user_id' 			=> $userId,
			'student_id' 		=> $studentId,
			'organization_id'	=> $organizationId,
			'admin_id'			=> $adminId
		));
	}

	private function login($user){

		if(Auth::attempt(array(
				'username' 		=> $user->username,
				'email' 		=> $user->email,
				'google_token' 	=> $user->google_token
			), false)){

			$currentDate = new DateTime(date('Y-m-d H:i:s'));

			//$currentDate = $currentDate->format('YYYY-MM-DD HH:MM:SS');

			$newLog = Login_log::create(array(
				'datetime' 	=> $currentDate,
				'gebruiker' => $user->id,
				'token'		=> $user->google_value
			));

			return true;
			

		}else{

			return false;

		}

	}

}
?>