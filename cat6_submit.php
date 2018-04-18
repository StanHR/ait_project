<?php
session_start();
$_SESSION['id'] = 'harshit008';
if(!$_SESSION['id']){
	print("Please log into your account.");
}
else{
	include("db_conn.php");
	$teacher_id = $_SESSION['id'];
	$published_work_national = $_GET[''];	
	$published_work_international 	= $_GET[''];
	$published_work_chapter = $_GET[''];
	$published_work_remarks = $_GET[''];
	$proNres_sponsered 	= $_GET[''];
	$proNres_consulted 	= $_GET[''];
	$proNres_patent = $_GET[''];
	$proNres_remarks = $_GET[''];
	$research_guidance_me = $_GET[''];
	$research_guidance_phd_completed = $_GET[''];
	$research_guidance_phd_thesis = $_GET[''];
	$research_guidance_mphil = $_GET[''];
	$research_guidance_phd_remarks = $_GET[''];
	$position_held_national = $_GET[''];
	$position_held_international = $_GET[''];
	$position_held_remarks = $_GET[''];
	$invited_as_guest_national = $_GET[''];
	$invited_as_guest_international = $_GET[''];
	$invited_as_guest_remarks = $_GET[''];
	$subjects_expert_desc = $_GET[''];
	$subjects_expert_remarks = $_GET[''];	
	$participation_desc = $_GET[''];
	$participation_remarks = $_GET[''];

	$query = "INSERT INTO cat6(teacher_id, published_work_national,	published_work_international, published_work_chapter, published_work_remarks, proNres_sponsered, proNres_consulted, proNres_patent, proNres_remarks, research_guidance_me, research_guidance_phd_completed, research_guidance_phd_thesis, research_guidance_mphil, research_guidance_phd_remarks, position_held_national, position_held_international, position_held_remarks, invited_as_guest_national, invited_as_guest_international, invited_as_guest_remarks, subjects_expert_desc, subjects_expert_remarks, participation_desc, participation_remarks) values ('$teacher_id', '$published_work_national', '$published_work_international', '$published_work_chapter', '$published_work_remarks', '$proNres_sponsered', '$proNres_consulted', '$proNres_patent', '$proNres_remarks', '$research_guidance_me', '$research_guidance_phd_completed', '$research_guidance_phd_thesis', '$research_guidance_mphil', '$research_guidance_phd_remarks', '$position_held_national', '$position_held_international', '$position_held_remarks', '$invited_as_guest_national', '$invited_as_guest_international', '$invited_as_guest_remarks', '$subjects_expert_desc', '$subjects_expert_remarks', '$participation_desc', '$participation_remarks')";

	print($query);
	$result = mysqli_query($conn, $query);
	if(!$result)
	{
		print("Error While Submitting Data.");
	}

}


?>