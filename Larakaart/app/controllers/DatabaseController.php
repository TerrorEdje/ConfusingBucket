<?php

class DatabaseController extends BaseController {

	public function vullen()
	{
		# Het toevoegen van scholen
		$school = new School();
		$school->name = "Avans Hogeschool";
		$school->website = "www.avans.nl";
		$school->save();
		
		# Het toevoegen van opleidingen
		$study = new Study();
		$study->name = "industrial engineering";
		$study->school_id = 1;
		$study->save();
		
		$study->name = "mechanical engineering";
		$study->school_id = 1;
		$study->save();
		
		$study->name = "computer engineering";
		$study->school_id = 1;
		$study->save();
		
		$study->name = "computer science";
		$study->school_id = 1;
		$study->save();
		
		$study->name = "electrical engineering";
		$study->school_id = 1;
		$study->save();
		
		$study->name = "communication and multimedia design";
		$study->school_id = 1;
		$study->save();
		
		# Het toevoegen van studenten: Afstuderen
		$student = new Student();
		$student->firstname = "Donald";
		$student->surname = "Rutgers";
		$student->study_id = 1; 
		$student->save();
	
		$student->firstname = "Jorick";
		$student->surname = "Dam";
		$student->study_id = 1;
		$student->save();
		
		$student->firstname = "Arthur";
		$student->surname = "Kampschöer";
		$student->study_id = 2;
		$student->save();
	
		# Het toevoegen van studenten: EPS
		$student->firstname = "Bram";
		$student->surname = "Bosch";
		$student->study_id = 3;
		$student->save();
		
		$student->firstname = "Paul";
		$student->surname = "Claessens";
		$student->study_id = 3;
		$student->save();
		
		$student->firstname = "Rudy";
		$student->surname = "Chambon";
		$student->study_id = 4;
		$student->save();
		
		$student->firstname = "Rick";
		$student->insertion = "van";
		$student->surname = "Uden";
		$student->study_id = 5;
		$student->save();
		
		# Het toevoegen van studenten: Minor
		$student->firstname = "Joey";
		$student->insertion = "van der";
		$student->surname = "Veeken";
		$student->study_id = 6;
		$student->save();
		
		$student->firstname = "Dominique";
		$student->surname = "Lankheet";
		$student->study_id = 6;
		$student->save();
		
		$student->firstname = "Paul";
		$student->surname = "Plantaz";
		$student->study_id = 6;
		$student->save();
		
		$student->firstname = "Linda";
		$student->surname = "Janssen";
		$student->study_id = 6;
		$student->save();
		
		# Het toevoegen van studenten: Stage
		$student->firstname = "Luc";
		$student->insertion = "de";
		$student->surname = "Wolf";
		$student->study_id = 2;
		$student->save();
		
		$student->firstname = "Lukas";
		$student->insertion = "van der";
		$student->surname = "Linden";
		$student->study_id = 2;
		$student->save();
		
		$student->firstname = "Pepijn";
		$student->surname = "Veldhuizen";
		$student->study_id = 1;
		$student->save();
		
		$student->firstname = "Kevin";
		$student->surname = "Tai-Tin-Woei";
		$student->study_id = 1;
		$student->save();
		
		
		
		
		
		
		
		# Het toevoegen van organization types
		$type = new Organization_type();
		$type->name = "school";
		$type->save();
		
		$type->name = "business";
		$type->save();
		
		# Het toevoegen van locaties: Afstuderen
		$location = new Location();
		$location->country = "Belgium";
		$location->city = "Herentals";
		$location->latitude = ;
		$location->longitude = ;
		$location->save();
		
		$location->country = "New Zealand";
		$location->city = "Wellington";
		$location->latitude = ;
		$location->longitude = ;
		$location->save();

		# Het toevoegen van locaties: EPS
		$location->country = "Denmark";
		$location->city = "Copenhagen";
		$location->latitude = ;
		$location->longitude = ;
		$location->save();
		
		$location->country = "Finland";
		$location->city = "Vaasa";
		$location->latitude = ;
		$location->longitude = ;
		$location->save();
		
		# Het toevoegen van locaties: Minor
		$location->country = "Spain";
		$location->city = "Valencia";
		$location->latitude = ;
		$location->longitude = ;
		$location->save();
		
		$location->country = "Norway";
		$location->city = "Kongsberg";
		$location->latitude = ;
		$location->longitude = ;
		$location->save();
		
		# Het toevoegen van locaties: Stage
		$location->country = "Australia";
		$location->city = "Sydney";
		$location->latitude = ;
		$location->longitude = ;
		$location->save();
		
		$location->country = "Suriname";
		$location->city = "Paramaribo";
		$location->latitude = ;
		$location->longitude = ;
		$location->save();
		
		# Het toevoegen van de organisaties: Afstuderen
		$organization = new Organization();
		$organization->name "Kraft Foods";
		$organization->type "business";
		$organization->location_id 1;
		$organization->save();
		
		$organization->name "Weltec Centre for Smart Product";
		$organization->type "business";
		$organization->location_id 2;
		$organization->save();
		
		# Het toevoegen van de organisaties: EPS
		$organization->name "Copenhagen University of Engineering";
		$organization->type "school";
		$organization->location_id 3;
		$organization->save();
		
		$organization->name "Novia University of Applied Sciences";
		$organization->type "school";
		$organization->location_id 4;
		$organization->save();
		
		# Het toevoegen van de organisaties: Minor
		$organization->name "Universidad Politécnica de Valencia";
		$organization->type "school";
		$organization->location_id 5;
		$organization->save();
		
		$organization->name "Noorwegen, Buskerud University";
		$organization->type "school";
		$organization->location_id 6;
		$organization->save();
		
		# Het toevoegen van de organisaties: Stage
		$organization->name "Australian Centre for Field Robotics";
		$organization->type "business";
		$organization->location_id 7;
		$organization->save();
		
		$organization->name "Suralco LLC";
		$organization->type "business";
		$organization->location_id 8;
		$organization->save();
		
		
	
	
	
	
	
		# Het toevoegen van de activity types
		$type = new Activity_type();
		$type->name = "internship";
		$type->save();
		
		$type->name = "EPS";
		$type->save();
		
		$type->name = "final thesis";
		$type->save();
		
		$type->name = "minor";
		$type->save();	
			
		return View::make('gevuld');	
	}

}