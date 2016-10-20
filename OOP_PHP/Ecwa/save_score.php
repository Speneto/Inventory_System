<?php 
include "DB_connection.php";

if(isset($_GET['studentid'])){

$student_id = $_GET['studentid'];
$session_id = $_GET['sessionid'];
$class_id = $_GET['classid'];
$term_id = $_GET['termid'];
$subject_id = $_GET['subjectid'];
$fca_id = $_GET['fca'];
$sca_id = $_GET['sca'];
$tca_id = $_GET['tca'];
$frca_id = $_GET['frca'];
$ex_id = $_GET['ex'];



if($fca_id == "" || $fca_id == null){
$fca_id = "0";
}

if($sca_id == "" || $sca_id == null){
$sca_id = "0";
}

if($tca_id == "" || $tca_id == null){
$tca_id = "0";
}

if($frca_id == "" || $frca_id == null){
$frca_id = "0";
}

if($ex_id == "" || $ex_id == null){
$ex_id = "0";
}


$search = mysql_query("Select * From score_sheet WHERE ID_Number='$student_id' AND Session='$session_id' AND Class='$class_id' AND Term='$term_id' AND Subj_ID='$subject_id'");

if(mysql_num_rows($search) > 0){
//Update Record
$update = mysql_query("Update score_sheet Set First='$fca_id', Second='$sca_id', Third='$tca_id', Fourth='$frca_id', Exams='$ex_id' WHERE ID_Number='$student_id' AND Session='$session_id' AND Class='$class_id' AND Term='$term_id' AND Subj_ID='$subject_id'");
echo "Student Record Updated Successfully";
}else{
//Insert New Record
$Insert = mysql_query("INSERT INTO score_sheet (ID_Number, First, Second, Third, Fourth, Exams, Session, Class, Term, Subj_ID) VALUES ('$student_id', '$fca_id', '$sca_id', '$tca_id', '$frca_id', '$ex_id', '$session_id', '$class_id', '$term_id', '$subject_id')");

echo "Student Record Inserted Successfully";
}
}


?>