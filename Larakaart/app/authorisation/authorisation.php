<?php

//	Pagina bv organisatie 
//	Nummertje van organisatie
pu

function checkAdminAccess($id)
{
	if($Auth::user() != null) {

		$user = User::find(Auth::user()->id);
		$usertype = Usertype::find($user->id);

		if($usertype != null) {
			if ($usertype->$admin_id != 0)
			{
				return true;
			}
		}
	}

	return false;
}

function myContent($storyId)
{
	if(Auth::user() != null) {

		$user = User::find(Auth::user()->id);
		$usertype = Usertype::find($user->id);

		if($usertype->student_id != null) {
			
			$experience = Experience::find($storyId);

			if($experience != null) {
				if($experience->student_id == $usertype->student_id) {
					return true;
				}
			}
		}

		if($usertype->organization_id != null) {

			$activity = Activity::find($storyId);

			if($activity != null) {
				if($activity->organization_id == $usertype->organization_id)
				{
					return true;
				}
			}
		}
	}

	return false;
}

function checkPageAcces($pageType, $id) {
	
	if(Auth::user() != null) {

		$user = User::find(Auth::user()->id);
		$usertype = Usertype::find($user->id);

		if($pageType == "organization") {
			if( $usertype->organization_id != null) {
				return true;
			}
		}
		if($pageType == "student") {
			if($usertype->student_id != null ) {
				return true;
			}
		}
	}

	return false;
}

?>