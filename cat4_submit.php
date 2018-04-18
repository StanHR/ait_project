<?php
session_start();
$_SESSION['id'] = 'harshit008';
if(!$_SESSION['id']){
	print("Please log into your account.");
}
else{
	include("db_conn.php");
	$teacher_id = $_SESSION['id'];
	$ref_journal_paper_title = json_decode($_GET['a']);	 	
	$ref_journal_publication_details = json_decode($_GET['b']);	
	$nonref_journal_paper_title = json_decode($_GET['c']);	 	
	$nonref_journal_publication_details = json_decode($_GET['d']);	
	$paper_national_title = json_decode($_GET['e']);	 	
	$paper_national_publication_details = json_decode($_GET['f']);	 
	$paper_international_title = json_decode($_GET['g']);	 	
	$paper_international_publication_details = json_decode($_GET['h']);	
	$tab8_ref_journal = $_GET['p1'];	
	$tab8_nonref_journal = $_GET['p2'];	 	
	$tab8_conf_preceeding_international = $_GET['p3'];	 	
	$tab8_conf_preceeding_national = $_GET['p4'];	
	$cat4_points_achieved = $_GET['p5'];//$_GET[''];
	//print_r(json_decode($_GET['h']));
	// echo $teacher_id,$ref_journal_paper_title,$ref_journal_publication_details,$nonref_journal_paper_title,$nonref_journal_publication_details,$paper_national_title,$paper_national_publication_details,$paper_international_title,$paper_international_publication_details,$tab8_ref_journal,$tab8_nonref_journal,$tab8_conf_preceeding_international,$tab8_conf_preceeding_national,$cat4_points_achieved;
	// $teacher_id = "fsjdsjf";
	// $ref_journal_paper_title = "sdyiewuyriuwer";	 	
	// $ref_journal_publication_details = "erwyiugfdgh";	
	// $nonref_journal_paper_title = "rweyrwierw";	 	
	// $nonref_journal_publication_details = "ewriydfsjkhxv";	
	// $paper_national_title = "weruo7972342";	 	
	// $paper_national_publication_details = "ewroysfdkhvx";	 
	// $paper_international_title = "wowerowryhgkdf";	 	
	// $paper_international_publication_details = "weru97294242";	
	// $tab8_ref_journal = "werweuodksh";	
	// $tab8_nonref_journal = "0865ouirtyry";	 	
	// $tab8_conf_preceeding_international = "ouirwoiur9798sf";	 	
	// $tab8_conf_preceeding_national = "werusfd87";	
	// $cat4_points_achieved = 6;//$_GET[''];

	// query for table cat4_ref_journal
	// $query1 = "INSERT INTO cat4_ref_journal(teacher_id, paper_title, publication_details ) values ('$teacher_id', '$ref_journal_paper_title', '$ref_journal_publication_details' )";
	// print($query1);

	// $result1 = mysqli_query($conn, $query1);

	// if(!$result1)
	// {
	// 	print("Error while submitting data1");
	// }

	// // query for table cat4_nonref_journal
	// $query2 = "INSERT INTO cat4_nonref_journal(teacher_id, paper_title, publication_details ) values ('$teacher_id', '$nonref_journal_paper_title', '$nonref_journal_publication_details' )";
	// print($query2);

	// $result2 = mysqli_query($conn, $query2);

	// if(!$result2)
	// {
	// 	print("Error while submitting data2");
	// }

	// // query for table cat4_paper_national
	// $query3 = "INSERT INTO cat4_paper_national(teacher_id, paper_title, publication_details ) values ('$teacher_id', '$paper_national_title', '$paper_national_publication_details' )";
	// print($query3);

	// $result3 = mysqli_query($conn, $query3);

	// if(!$result3)
	// {
	// 	print("Error while submitting data3");
	// }

	// // query for table cat4_paper_international
	// $query4 = "INSERT INTO cat4_paper_international(teacher_id, paper_title, publication_details ) values ('$teacher_id', '$paper_international_title', '$paper_international_publication_details' )";
	// print($query4);

	// $result4 = mysqli_query($conn, $query4);

	// if(!$result4)
	// {
	// 	print("Error while submitting data4");
	// }

	// // query for table cat4_tab8
	// $query5 = "INSERT INTO cat4_tab8(teacher_id, ref_journal, nonref_journal, conf_preceeding_international, conf_preceeding_national) values ('$teacher_id', '$tab8_ref_journal', '$tab8_nonref_journal', '$$tab8_conf_preceeding_international', '$tab8_conf_preceeding_national')";
	// print($query5);

	// $result5 = mysqli_query($conn, $query5);

	// if(!$result5)
	// {
	// 	print("Error while submitting data5");
	// }

	// // query for table cat4_points
	// $query6 = "INSERT INTO cat4_points(teacher_id,points_achieved) values ('$teacher_id',$cat4_points_achieved)";
	// print($query6);

	// $result6 = mysqli_query($conn, $query6);

	// if(!$result6)
	// {
	// 	print("Error while submitting data6");
	// }
}


?>