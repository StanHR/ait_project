<?php

session_start();
$_SESSION['id'] = 'harshit008';
if(!$_SESSION['id']){
	print("Please log into your account.");
}
else{
	include("db_conn.php");
	$teacher_id = $_SESSION['id'];
	$t2_lesson_planning =  $_GET[''];
	$t2_effective_comm = $_GET[''];
	$t2_class_control = $_GET[''];
	$t2_student_involvement = $_GET[''];
	$t2_media_usage = $_GET[''];
	$t2_uniform_coverage = $_GET[''];
	$t2_pracs_tuts = $_GET[''];
	$t2_books_usage = $_GET[''];
	$t2_total_points = $_GET[''];
	$t3_journal_checking = $_GET[''];
	$t3_profile_record_keeping = $_GET[''];
	$t3_answerbook_assessment = $_GET[''];
	$t3_invigilation = $_GET[''];
	$t3_total_points = $_GET[''];
	$grand_total = $_GET[''];

	//test data ends
	$statement = "INSERT INTO cat1(teacher_id, t2_lesson_planning, t2_effective_comm, t2_class_control, t2_student_involvement, t2_media_usage, t2_uniform_coverage, t2_pracs_tuts, t2_books_usage, t2_total_points, t3_journal_checking, t3_profile_record_keeping, t3_answerbook_assessment, t3_invigilation, t3_total_points, grand_total) values ('$teacher_id', '$t2_lesson_planning', '$t2_effective_comm', '$t2_class_control', '$t2_student_involvement', '$t2_media_usage', '$t2_uniform_coverage', '$t2_pracs_tuts', '$t2_books_usage', '$t2_total_points', '$t3_journal_checking', '$t3_profile_record_keeping', '$t3_answerbook_assessment', '$t3_invigilation', '$t3_total_points', '$grand_total')";

	print($statement);
	$sql_result = mysqli_query($conn, $statement);

	if(!$sql_result){
		print("Some error in query");
	}
}

?>
