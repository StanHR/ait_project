<?php
session_start();
$_SESSION['id'] = 'harshit008';
if(!$_SESSION['id']){
	print("Please log into your account.");
}
else{
	include("db_conn.php");
	$teacher_id = $_SESSION['id'];
	$ref_journal_paper_title = $_GET[''];	 	
	$ref_journal_publication_details = $_GET[''];	
	$nonref_journal_paper_title = $_GET[''];	 	
	$nonref_journal_publication_details = $_GET[''];	
	$paper_national_title = $_GET[''];	 	
	$paper_national_publication_details = $_GET[''];	 
	$paper_international_title = $_GET[''];	 	
	$paper_international_publication_details = $_GET[''];	
	$tab8_ref_journal = $_GET[''];	
	$tab8_nonref_journal = $_GET[''];	 	
	$tab8_conf_preceeding_international = $_GET[''];	 	
	$tab8_conf_preceeding_national = $_GET[''];	
	$cat4_points_achieved = $_GET[''];

	// query for table cat4_ref_journal
	if ($ref_journal_paper_title)
	{
		$query1 = "INSERT INTO cat4_ref_journal(teacher_id, paper_title, publication_details ) values ('$teacher_id', '$ref_journal_paper_title', '$ref_journal_publication_details' )";
		print($query1);

		$result1 = mysqli_query($conn, $query1);
		if(!$result1)
		{
			print("Error while submitting data1");
		}
	}

	// query for table cat4_nonref_journal
	if ($nonref_journal_paper_title)
	{
		$query2 = "INSERT INTO cat4_nonref_journal(teacher_id, paper_title, publication_details ) values ('$teacher_id', '$nonref_journal_paper_title', '$nonref_journal_publication_details' )";
		print($query2);

		$result2 = mysqli_query($conn, $query2);

		if(!$result2)
		{
			print("Error while submitting data2");
		}
	}

	// query for table cat4_paper_national
	if ($paper_national_title)
	{
		$query3 = "INSERT INTO cat4_paper_national(teacher_id, paper_title, publication_details ) values ('$teacher_id', '$paper_national_title', '$paper_national_publication_details' )";
		print($query3);

		$result3 = mysqli_query($conn, $query3);

		if(!$result3)
		{
			print("Error while submitting data3");
		}
	}

	// query for table cat4_paper_international
	if ($paper_international_title)
	{
		$query4 = "INSERT INTO cat4_paper_international(teacher_id, paper_title, publication_details ) values ('$teacher_id', '$paper_international_title', '$paper_international_publication_details' )";
		print($query4);

		$result4 = mysqli_query($conn, $query4);

		if(!$result4)
		{
			print("Error while submitting data4");
		}
	}

	// query for table cat4_tab8
	if($tab8_ref_journal)
	{
		$query5 = "INSERT INTO cat4_tab8(teacher_id, ref_journal, nonref_journal, conf_preceeding_international, conf_preceeding_national) values ('$teacher_id', '$tab8_ref_journal', '$tab8_nonref_journal', '$$tab8_conf_preceeding_international', '$tab8_conf_preceeding_national')";
		print($query5);

		$result5 = mysqli_query($conn, $query5);

		if(!$result5)
		{
			print("Error while submitting data5");
		}
	}

	// query for table cat4_points
	if($cat4_points_achieved)
	{
		$query6 = "INSERT INTO cat4_points(teacher_id,points_achieved) values ('$teacher_id',$cat4_points_achieved)";
		print($query6);

		$result6 = mysqli_query($conn, $query6);

		if(!$result6)
		{
			print("Error while submitting data6");
		}
	}
}


?>