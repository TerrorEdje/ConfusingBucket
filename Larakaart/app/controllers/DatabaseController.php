<?php

class DatabaseController extends BaseController {

	public function vullen()
	{	
		# Het toevoegen van organization types
		$school = new Organization_type;
		$school->name = "School";
		$school->save();
		
		$company = new Organization_type;
		$company->name = "Company";
		$company->save();
/*-----------------------------------------------------------------*/			
		# Het toevoegen van de Activity types
		$internship = new Activity_type;
		$internship->name = "Internship";
		$internship->save();
		
		$eps = new Activity_type;
		$eps->name = "EPS";
		$eps->save();
		
		$finalThesis = new Activity_type;
		$finalThesis->name = "Final thesis";
		$finalThesis->save();
		
		$minor = new Activity_type;
		$minor->name = "Minor";
		$minor->save();
/*-----------------------------------------------------------------*/		
		# Het toevoegen van Activity_status
		$open = new Activity_status;
		$open->name = "Open";
		$open->save();
		
		$closed = new Activity_status;
		$closed->name = "Closed";
		$closed->save();
/*-----------------------------------------------------------------*/			
		# Het toevoegen van scholen
		$avans = new School;
		$avans->name = "Avans Hogeschool";
		$avans->website = "www.avans.nl";
		$avans->save();
/*-----------------------------------------------------------------*/			
		# Het toevoegen van locaties: Afstuderen
		$herentals = new Location;
		$herentals->country = "Belgium";
		$herentals->city = "Herentals";
		$herentals->latitude = 51.17685;
		$herentals->longitude = 4.83559;
		$herentals->save();
		
		$wellington = new Location;
		$wellington->country = "New Zealand";
		$wellington->city = "Wellington";
		$wellington->latitude = -41.28646;
		$wellington->longitude = 174.77624;
		$wellington->save();

		# Het toevoegen van locaties: EPS
		$copenhagen = new Location;
		$copenhagen->country = "Denmark";
		$copenhagen->city = "Copenhagen";
		$copenhagen->latitude = 55.67610;
		$copenhagen->longitude = 12.56834;
		$copenhagen->save();
		
		$vaasa = new Location;
		$vaasa->country = "Finland";
		$vaasa->city = "Vaasa";
		$vaasa->latitude = 63.09514;
		$vaasa->longitude = 21.61651;
		$vaasa->save();
		
		# Het toevoegen van locaties: Minor
		$valencia = new Location;
		$valencia->country = "Spain";
		$valencia->city = "Valencia";
		$valencia->latitude = 39.46991;
		$valencia->longitude = -0.37629;
		$valencia->save();
		
		$kongsberg = new Location;
		$kongsberg->country = "Norway";
		$kongsberg->city = "Kongsberg";
		$kongsberg->latitude = 59.66888;
		$kongsberg->longitude =  	9.65019;
		$kongsberg->save();
		
		# Het toevoegen van locaties: Stage
		$sydney = new Location;
		$sydney->country = "Australia";
		$sydney->city = "Sydney";
		$sydney->latitude = -33.86749;
		$sydney->longitude =  	151.20699;
		$sydney->save();
		
		$paramaribo = new Location;
		$paramaribo->country = "Suriname";
		$paramaribo->city = "Paramaribo";
		$paramaribo->latitude = 5.85204;
		$paramaribo->longitude =  	-55.20383;
		$paramaribo->save();
/*-----------------------------------------------------------------*/			
		# Het toevoegen van de organisaties: Afstuderen
		$kraft = new Organization;
		$kraft->name = "Kraft Foods";
		$kraft->type = $company->name;
		$kraft->location_id = $herentals->id;
		$kraft->save();
		
		$weltec = new Organization;
		$weltec->name = "Weltec Centre for Smart Product";
		$weltec->type = $company->name;
		$weltec->location_id = $wellington->id;
		$weltec->save();
		
		# Het toevoegen van de organisaties: EPS
		$copenhagenUni = new Organization;
		$copenhagenUni->name = "Copenhagen University of Engineering";
		$copenhagenUni->type = $school->name;
		$copenhagenUni->location_id = $copenhagen->id;
		$copenhagenUni->save();
		
		$novia = new Organization;
		$novia->name = "Novia University of Applied Sciences";
		$novia->type = $school->name;
		$novia->location_id = $vaasa->id;
		$novia->save();
		
		# Het toevoegen van de organisaties: Minor
		$politecnica = new Organization;
		$politecnica->name = "Universidad Politecnica de Valencia";
		$politecnica->type = $school->name;
		$politecnica->location_id = $valencia->id;
		$politecnica->save();
		
		$buskerud = new Organization;
		$buskerud->name = "Noorwegen, Buskerud University";
		$buskerud->type = $school->name;
		$buskerud->location_id = $kongsberg->id;
		$buskerud->save();
		
		# Het toevoegen van de organisaties: Stage
		$robotics = new Organization;
		$robotics->name = "Australian Centre for Field Robotics";
		$robotics->type = $company->name;
		$robotics->location_id = $sydney->id;
		$robotics->save();
		
		$suralco = new Organization;
		$suralco->name = "Suralco LLC";
		$suralco->type = $company->name;
		$suralco->location_id = $paramaribo->id;
		$suralco->save();
/*-----------------------------------------------------------------*/		
		# Het toevoegen van opleidingen
		$ie = new Study;
		$ie->name = "Industrial Engineering";
		$ie->school_id = $avans->id;
		$ie->save();
		
		$me = new Study;
		$me->name = "Mechanical Engineering";
		$me->school_id = $avans->id;
		$me->save();

		$ce = new Study;
		$ce->name = "Computer Engineering";
		$ce->school_id = $avans->id;
		$ce->save();
		
		$cs = new Study;
		$cs->name = "Computer Science";
		$cs->school_id = $avans->id;
		$cs->save();
		
		$ee = new Study;
		$ee->name = "Electrical Engineering";
		$ee->school_id = $avans->id;
		$ee->save();
		
		$cmd = new Study;
		$cmd->name = "Communication and Multimedia Design";
		$cmd->school_id = $avans->id;
		$cmd->save();
/*-----------------------------------------------------------------*/			
		# Het toevoegen van studenten: Afstuderen
		$student1 = new Student;
		$student1->firstname = "Donald";
		$student1->surname = "Rutgers";
		$student1->study_id = $ie->id; 
		$student1->save();
		
		$student2 = new Student;	
		$student2->firstname = "Jorick";
		$student2->surname = "Dam";
		$student2->study_id = $ie->id; 
		$student2->save();
		
		$student3 = new Student;
		$student3->firstname = "Arthur";
		$student3->surname = "Kampschoer";
		$student3->study_id = $me->id;
		$student3->save();
	
		# Het toevoegen van studenten: EPS
		$student4 = new Student;
		$student4->firstname = "Bram";
		$student4->surname = "Bosch";
		$student4->study_id = $ce->id;
		$student4->save();
		
		$student5 = new Student;
		$student5->firstname = "Paul";
		$student5->surname = "Claessens";
		$student5->study_id = $ce->id;
		$student5->save();
		
		$student6 = new Student;
		$student6->firstname = "Rudy";
		$student6->surname = "Chambon";
		$student6->study_id = $cs->id;
		$student6->save();
		
		$student7 = new Student;
		$student7->firstname = "Rick";
		$student7->insertion = "van";
		$student7->surname = "Uden";
		$student7->study_id = $ee->id;
		$student7->save();
		
		# Het toevoegen van studenten: Minor
		$student8 = new Student;
		$student8->firstname = "Joey";
		$student8->insertion = "van der";
		$student8->surname = "Veeken";
		$student8->study_id = $cmd->id;
		$student8->save();
		
		$student9 = new Student;
		$student9->firstname = "Dominique";
		$student9->surname = "Lankheet";
		$student9->study_id = $cmd->id;
		$student9->save();
		
		$student10 = new Student;
		$student10->firstname = "Paul";
		$student10->surname = "Plantaz";
		$student10->study_id = $cmd->id;
		$student10->save();
		
		$student11 = new Student;
		$student11->firstname = "Linda";
		$student11->surname = "Janssen";
		$student11->study_id = $cmd->id;
		$student11->save();
		
		# Het toevoegen van studenten: Stage
		$student12 = new Student;
		$student12->firstname = "Luc";
		$student12->insertion = "de";
		$student12->surname = "Wolf";
		$student12->study_id = $me->id;
		$student12->save();
		
		$student13 = new Student;
		$student13->firstname = "Lukas";
		$student13->insertion = "van der";
		$student13->surname = "Linden";
		$student13->study_id = $me->id;
		$student13->save();
		
		$student14 = new Student;
		$student14->firstname = "Pepijn";
		$student14->surname = "Veldhuizen";
		$student14->study_id = $ie->id;
		$student14->save();
		
		$student15 = new Student;
		$student15->firstname = "Kevin";
		$student15->surname = "Tai-Tin-Woei";
		$student15->study_id = $ie->id;
		$student15->save();
/*-----------------------------------------------------------------*/			
		# Het toevoegen van Activity: Afstuderen
		$Activity1 = new Activity;
		$Activity1->name = "Final thesis Kraft Foods";
		$Activity1->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity1->type = $finalThesis->name;
		$Activity1->status = $closed->name;
		$Activity1->organization_id = $kraft->id;
		$Activity1->startdate = '2012-01-01';
		$Activity1->enddate = '2013-01-01';
		$Activity1->study_id = $ie->id;
		$Activity1->save();
		
		$Activity2 = new Activity;
		$Activity2->name = "Final thesis Weltec Centre for Smart Product";
		$Activity2->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity2->type = $finalThesis->name;
		$Activity2->status = $closed->name;
		$Activity2->organization_id = $weltec->id;
		$Activity2->startdate = '2012-01-01';
		$Activity2->enddate = '2013-01-01';
		$Activity2->study_id = $me->id;
		$Activity2->save();

		# Het toevoegen van Activity: EPS
		$Activity3 = new Activity;
		$Activity3->name = "EPS Copenhagen University of Engineering";
		$Activity3->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity3->type = $eps->name;
		$Activity3->status = $closed->name;
		$Activity3->organization_id = $copenhagenUni->id;
		$Activity3->startdate = '2012-01-01';
		$Activity3->enddate = '2013-01-01';
		$Activity3->study_id = $ce->id;
		$Activity3->save();
		
		$Activity4 = new Activity;
		$Activity4->name = "EPS Novia University of Applied Sciences";
		$Activity4->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity4->type = $eps->name;
		$Activity4->status = $closed->name;
		$Activity4->organization_id = $novia->id;
		$Activity4->startdate = '2012-01-01';
		$Activity4->enddate = '2013-01-01';
		$Activity4->study_id = $cs->id;
		$Activity4->save();
		
		# Het toevoegen van Activity: Minor
		$Activity5 = new Activity;
		$Activity5->name = "Minor Universidad Politecnica de Valencia";
		$Activity5->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity5->type = $minor->name;
		$Activity5->status = $closed->name;
		$Activity5->organization_id = $politecnica->id;
		$Activity5->startdate = '2012-01-01';
		$Activity5->enddate = '2013-01-01';
		$Activity5->study_id = $cmd->id;
		$Activity5->save();
		
		$Activity6 = new Activity;
		$Activity6->name = "Minor Noorwegen, Buskerud University";
		$Activity6->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity6->type = $minor->name;
		$Activity6->status = $closed->name;
		$Activity6->organization_id = $buskerud->id;
		$Activity6->startdate = '2012-01-01';
		$Activity6->enddate = '2013-01-01';
		$Activity6->study_id = $cmd->id;
		$Activity6->save();
		
		$Activity7 = new Activity;
		$Activity7->name = "Minor Copenhagen University of Engineering";
		$Activity7->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity7->type = $minor->name;
		$Activity7->status = $closed->name;
		$Activity7->organization_id = $copenhagenUni->id;
		$Activity7->startdate = '2012-01-01';
		$Activity7->enddate = '2013-01-01';
		$Activity7->study_id = $cmd->id;
		$Activity7->save();
		
		# Het toevoegen van Activity: Stage
		$Activity8 = new Activity;
		$Activity8->name = "Internship Australian Centre for Field Robotics";
		$Activity8->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity8->type = $internship->name;
		$Activity8->status = $closed->name;
		$Activity8->organization_id = $robotics->id;
		$Activity8->startdate = '2012-01-01';
		$Activity8->enddate = '2013-01-01';
		$Activity8->study_id = $me->id;
		$Activity8->save();
		
		$Activity9 = new Activity;
		$Activity9->name = "Internship Suralco LLC";
		$Activity9->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$Activity9->type = $internship->name;
		$Activity9->status = $closed->name;
		$Activity9->organization_id = $suralco->id;
		$Activity9->startdate = '2012-01-01';
		$Activity9->enddate = '2013-01-01';
		$Activity9->study_id = $ie->id;
		$Activity9->save();
/*-----------------------------------------------------------------*/		
		# Add experiences for final thesis'
		$experience1 = new Experience;
		$experience1->Activity_id=$Activity1->id;
		$experience1->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience1->accepted=1;
		$experience1->student_id=$student1->id;
		$experience1->save();
		
		$experience2 = new Experience;
		$experience2->Activity_id=$Activity1->id;
		$experience2->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience2->accepted=1;
		$experience2->student_id=$student2->id;
		$experience2->save();
		
		$experience3 = new Experience;
		$experience3->Activity_id=$Activity2->id;
		$experience3->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience3->accepted=1;
		$experience3->student_id=$student3->id;
		$experience3->save();
		
		# Add experiences for EPS
		$experience4 = new Experience;
		$experience4->Activity_id=$Activity3->id;
		$experience4->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience4->accepted=1;
		$experience4->student_id=$student4->id;
		$experience4->save();
		
		$experience5 = new Experience;
		$experience5->Activity_id=$Activity3->id;
		$experience5->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience5->accepted=1;
		$experience5->student_id=$student5->id;
		$experience5->save();
		
		$experience6 = new Experience;
		$experience6->Activity_id=$Activity4->id;
		$experience6->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience6->accepted=1;
		$experience6->student_id=$student6->id;
		$experience6->save();
		
		$experience7 = new Experience;
		$experience7->Activity_id=$Activity3->id;
		$experience7->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience7->accepted=1;
		$experience7->student_id=$student7->id;
		$experience7->save();
		
		# Add experiences for minors
		$experience8 = new Experience;
		$experience8->Activity_id=$Activity5->id;
		$experience8->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience8->accepted=1;
		$experience8->student_id=$student8->id;
		$experience8->save();
		
		$experience9 = new Experience;
		$experience9->Activity_id=$Activity5->id;
		$experience9->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience9->accepted=1;
		$experience9->student_id=$student9->id;
		$experience9->save();
		
		$experience10 = new Experience;
		$experience10->Activity_id=$Activity6->id;
		$experience10->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience10->accepted=1;
		$experience10->student_id=$student10->id;
		$experience10->save();
		
		$experience11 = new Experience;
		$experience11->Activity_id=$Activity7->id;
		$experience11->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience11->accepted=1;
		$experience11->student_id=$student11->id;
		$experience11->save();
		
		# Add experiences for internships
		$experience12 = new Experience;
		$experience12->Activity_id=$Activity8->id;
		$experience12->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience12->accepted=1;
		$experience12->student_id=$student12->id;
		$experience12->save();
		
		$experience13 = new Experience;
		$experience13->Activity_id=$Activity8->id;
		$experience13->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience13->accepted=1;
		$experience13->student_id=$student13->id;
		$experience13->save();
		
		$experience14 = new Experience;
		$experience14->Activity_id=$Activity9->id;
		$experience14->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience14->accepted=1;
		$experience14->student_id=$student14->id;
		$experience14->save();
		
		$experience15 = new Experience;
		$experience15->Activity_id=$Activity9->id;
		$experience15->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience15->accepted=1;
		$experience15->student_id= $student15->id;
		$experience15->save();
/*-----------------------------------------------------------------*/			
		
		
		/*# Het toevoegen van crud operaties
		$create = new Crud_operation();
		$create->type = "create";
		$create->save();
		
		$delete = new Crud_operation();
		$delete->type = "delete";
		$delete->save();
		
		$read = new Crud_operation();
		$read->type = "read";
		$read->save();
		
		$update = new Crud_operation();
		$update->type = "update";
		$update->save();*/
			
		return View::make('gevuld');	
	}

}
?>
