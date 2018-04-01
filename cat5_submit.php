<?php

session_start();
$_SESSION['id'] = 'harshit008';
if(!$_SESSION['id']){
	print("Please log into your account.");
}
else{
	include("db_conn.php");
	$teacher_id = $_SESSION['id'];
	$orientation_prog_duration = $_GET[''];
	$orientation_prog_desc = $_GET[''];
	$sttp_duration = $_GET[''];
	$sttp_desc = $_GET[''];
	$workshop_duration = $_GET[''];
	$workshop_desc = $_GET[''];
	$refresher_course_duration = $_GET[''];
	$refresher_course_desc = $_GET[''];
	$fdp_duration = $_GET[''];
	$fdp_desc = $_GET[''];
	$soft_skillsDP_duration = $_GET['']; 
	$oft_skillsDP_desc = $_GET[''];
	$seminars_duration = $_GET[''];
	$seminars_desc = $_GET[''];
	$points_achieved = $_GET[''];
	//test data ends
	$statement = "INSERT INTO cat1(teacher_id, orientation_prog_duration, orientation_prog_desc, sttp_duration, sttp_desc, workshop_duration, workshop_desc, refresher_course_duration, refresher_course_desc, fdp_duration, fdp_desc, soft_skillsDP_duration, soft_skillsDP_desc, seminars_duration, seminars_desc, points_achieved) values ('$teacher_id', orientation_prog_duration, '$orientation_prog_desc', sttp_duration, '$sttp_desc', workshop_duration, '$workshop_desc', refresher_course_duration, '$refresher_course_desc', fdp_duration, '$fdp_desc', soft_skillsDP_duration, '$soft_skillsDP_desc', seminars_duration, '$seminars_desc', $points_achieved)";

	print($statement);
	$sql_result = mysqli_query($conn, $statement);

	if(!$sql_result){
		print("Some error in query");
	}
}

?>
