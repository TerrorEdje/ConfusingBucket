<?php
include 'repositories/storyRepository.php';
include 'db/connection.php';
$connection = openDB();
$story = new Story();
$story -> _set("type_id","1");
$story -> _set("startdate","2013-12-23");
$story -> _set("enddate","2014-01-01");
$story -> _set("description","test");
$story -> _set("schoolyear","1");
$study_ids = array();
$study_ids[0] = 1;
$story -> _set("study_ids",$study_ids);
$student_ids = array();
$student_ids[0] = 1;
$story -> _set("student_ids",$student_ids);
$organization_ids = array();
$organization_ids[0] = 1;
$story -> _set("organization_ids",$organization_ids);
$location_ids = array();
$location_ids[0] = 1;
$story -> _set("location_ids",$location_ids);
$residence_location_ids = array();
$residence_location_ids[0] = 1;
$story -> _set("residence_location_ids",$residence_location_ids);
$links = array();
$links[0] = "www.test.nl";
$story -> _set("links",$links);
addStory($story,$connection);
?>