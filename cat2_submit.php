<?php

session_start();
$_SESSION['id'] = 'harshit008';
if(!$_SESSION['id']){
	print("Please log into your account.");
}
else{
	$id = $_SESSION['id'];
	include("db_conn.php");
	$teacher_id = $_SESSION['id'];
	//test data begins
	$cultural_and_sports = $_GET['a'];
	$assembly_participationn = $_GET['b'];
	$inst_academic_and_admin = $_GET['c'];
	$dept_academic_and_admin = $_GET['d'];
	$seminar_and_workshop = $_GET['e'];
	$total_points = $_GET['p'];
	//test data ends
	$statement = "INSERT INTO cat2(teacher_id, cultural_and_sports, assembly_participation, inst_academic_and_admin, dept_academic_and_admin, seminar_and_workshop, total_points) values ('$teacher_id', '$cultural_and_sports', '$assembly_participationn', '$inst_academic_and_admin', '$dept_academic_and_admin', '$seminar_and_workshop', '$total_points')";

	print($statement);
	$sql_result = mysqli_query($conn, $statement);

	if(!$sql_result){
		print("Some error in query");
	}
}

?>