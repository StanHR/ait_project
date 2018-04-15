<?php

session_start();
$_SESSION['id'] = 'harshit008';
if(!$_SESSION['id']){
	print("Please log into your account.");
}
else{
	$id = $_SESSION['id'];
	include("db_conn.php");

	// Table 5 Data Retrieved Here
	$teacher_id = $_SESSION['id'];
	$t5_class =  $_GET['a'];
	$t5_subject_taught = $_GET['b'];
	$students_present = $_GET['c']; 
	$lectures_actually_engaged = $_GET['d'];
	$students_o_roll = $_GET['e'];
	$avg_attendance = $_GET['avr'];
	$performance_per_subject = $_GET['avg'];
	$rows1=$_GET['rows1'];                  //number of rows of the first table
	// Table 6 Data Retrieved Here 
	$t6_class = $_GET['f'];
	$t6_subject_taught = $_GET['g'];
	$institute_passing_percent = $_GET['h'];
	$current_passing_percent = $_GET['i'];
	$points_per_subject = $_GET['m'];
	$rows2=$_GET['rows2'];					//number of rows of the second table

	//Table 7 Data Retrieved Here
	$t7_class = $_GET['o'];
	$t7_subject_taught = $_GET['p'];
	$total_students = $_GET['q'];
	$review_excellent = $_GET['r'];
	$review_good = $_GET['s'];
	$review_satisfactory = $_GET['t'];
	$review_poor = $_GET['u'];
	$performance = $_GET['n'];
	$rows3=$_GET['rows3'];					//number of rows of the third table
	echo $teacher_id,$t5_class,$t5_subject_taught,$students_present,$lectures_actually_engaged,$students_o_roll,$avg_attendance,$performance_per_subject,$rows1."<br>".$t6_class,
	$t6_subject_taught,$institute_passing_percent,$current_passing_percent,$points_per_subject,$rows2."<br>".$t7_class,$t7_subject_taught,$total_students,$review_excellent,$review_good,
	$review_satisfactory,$review_poor,$performance,$rows3;
	// echo $review_satisfactory;
	// Average Data Retrieved Here
	// $t5_avg = $_GET[''];
	// $t5_points_achieved = $_GET[''];
	// $t6_points_achieved = $_GET[''];
	// $t7_avg = $_GET[''];
	// $t7_points_achieved = $_GET[''];

	// $statement1 = "INSERT INTO cat3_tab5 (teacher_id, class, subject_taught, students_present, lectures_actually_engaged, students_o_roll, avg_attendance, performance_per_subject) values ('$teacher_id', '$t5_class', '$t5_subject_taught', $students_present, $lectures_actually_engaged, $students_o_roll, $avg_attendance, $performance_per_subject)";

	// $statement2 = "INSERT INTO cat3_tab6 (teacher_id, class, subject_taught, institute_passing_percent, current_passing_percent, points_per_subject) values ('$teacher_id', '$t6_class', '$t6_subject_taught', $institute_passing_percent, $current_passing_percent, $points_per_subject)";

	// $statement3 = "INSERT INTO cat3_tab7 (teacher_id, class, subject_taught, total_students, review_excellent, review_good, review_satisfactory, review_poor, performance) values ('$teacher_id', '$t7_class', '$t7_subject_taught', $total_students, $review_excellent, $review_good, $review_satisfactory, $review_poor, $performance)";

	// $statement4 = "INSERT INTO cat3_avgs (teacher_id, t5_avg, t5_points_achieved, t6_points_achieved, t7_avg, t7_points_achieved) values ('$teacher_id', $t5_avg, $t5_points_achieved, $t6_points_achieved, $t7_avg, $t7_points_achieved)";

	// print($statement1);
	// print($statement2);
	// print($statement3);
	// print($statement4);
	
	// $sql_result1 = mysqli_query($conn, $statement1);
	// if($sql_result1){
	// 	$sql_result2 = mysqli_query($conn, $statement2);
	// 	if($sql_result2){
	// 		$sql_result3 = mysqli_query($conn, $statement3);
	// 		if($sql_result3){
	// 			$sql_result4 = mysqli_query($conn, $statement4);
	// 			if($sql_result4)
	// 			{
	// 				print("Data Submitted Successfully.")
	// 			}
	// 			else{
	// 				print("Some error in query2");
	// 			}
	// 		}	
	// 		else{
	// 			print("Some error in query2");
	// 		}
	// 	}	
	// 	else{
	// 		print("Some error in query2");
	// 	}
	// }
	// else{
	// 	print("Some error in query1");
	// }
}

?>