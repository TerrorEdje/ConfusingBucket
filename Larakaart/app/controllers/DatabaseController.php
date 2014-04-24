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
	
	
	
	
	
	
	
	
	
	#DIT MOET ERGENS TUSSEN!!!!!!!!!!
	#DIT MOET ERGENS TUSSEN!!!!!!!!!!
	#DIT MOET ERGENS TUSSEN!!!!!!!!!!
	# Add experiences for final thesis'
	$experience1 = new Experience();
	$experience1->activity_id=$activity1->id;
	$experience1->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
	$experience1->accepted=True;
	$experience1->student_id=$student1->id;
	$experience1->save();
	
	$experience2 = new Experience();
	$experience2->activity_id=$activity1->id;
	$experience2->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
	$experience2->accepted=True;
	$experience2->student_id=$student2->id;
	$experience2->save();
	
	$experience3 = new Experience();
	$experience3->activity_id=$activity2->id;
	$experience3->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
	$experience3->accepted=True;
	$experience3->student_id=$student3->id;
	$experience3->save();
	
	# Add experiences for EPS
	$experience4 = new Experience();
	$experience4->activity_id=$activity3->id;
	$experience4->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
	$experience4->accepted=True;
	$experience4->student_id=$student4->id;
	$experience4->save();
	
	$experience5 = new Experience();
	$experience5->activity_id=$activity3->id;
	$experience5->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
	$experience5->accepted=True;
	$experience5->student_id=$student5->id;
	$experience5->save();
	
	$experience6 = new Experience();
	$experience6->activity_id=$activity4->id;
	$experience6->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
	$experience6->accepted=True;
	$experience6->student_id=$student6->id;
	$experience6->save();
	
	$experience7 = new Experience();
	$experience7->activity_id=$activity3->id;
	$experience7->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
	$experience7->accepted=True;
	$experience7->student_id=$student7->id;
	$experience7->save();
	
	# Add experiences for minors
	$experience8 = new Experience();
	$experience8->activity_id=$activity5->id;
	$experience8->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
	$experience8->accepted=True;
	$experience8->student_id=$student8->id;
	$experience8->save();
	
	$experience9 = new Experience();
	$experience9->activity_id=$activity5->id;
	$experience9->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
	$experience9->accepted=True;
	$experience9->student_id=$student9->id;
	$experience9->save();
	
	$experience10 = new Experience();
	$experience10->activity_id=$activity6->id;
	$experience10->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
	$experience10->accepted=True;
	$experience10->student_id=$student10->id;
	$experience10->save();
	
	$experience11 = new Experience();
	$experience11->activity_id=$activity7->id;
	$experience11->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
	$experience11->accepted=True;
	$experience11->student_id=$student11->id;
	$experience11->save();
	
	# Add experiences for internships
	$experience12 = new Experience();
	$experience12->activity_id=$activity8->id;
	$experience12->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
	$experience12->accepted=True;
	$experience12->student_id=$student12->id;
	$experience12->save();
	
	$experience13 = new Experience();
	$experience13->activity_id=$activity8->id;
	$experience13->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
	$experience13->accepted=True;
	$experience13->student_id=$student13->id;
	$experience13->save();
	
	$experience14 = new Experience();
	$experience14->activity_id=$activity9->id;
	$experience14->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
	$experience14->accepted=True;
	$experience14->student_id=$student14->id;
	$experience14->save();
	
	$experience15 = new Experience();
	$experience15->activity_id=$activity9->id;
	$experience15->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
	$experience15->accepted=True;
	$experience15->student_id= $student15->id;
	$experience15->save();

}
?>