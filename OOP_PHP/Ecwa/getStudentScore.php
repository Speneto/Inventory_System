<?php
//include("DB_connection.php");
if(isset($_GET['studentid'])){
$student_id = $_GET['studentid'];
$session_id = $_GET['sessionid'];
$class_id = $_GET['classid'];
$subject_id = $_GET['subjectid'];
$term_id = $_GET['termid'];

 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
 mysql_select_db("ecwa",$link) or die ("Cannot select the database!");
//echo $student_id; echo $session_id; echo $class_id; echo $subject_id; echo $term_id;
//$result= mysql_query("SELECT * FROM score_sheet WHERE ID_Number = '$student_id' AND Session = '$session_id' AND Class = '$class_id' AND Subj_ID = '$subject_id' AND Term = '$term_id'");
//$result= mysql_query("SELECT * FROM score_sheet WHERE ID_Number = '$student_id'");
$result= mysql_query("SELECT * FROM score_sheet WHERE ID_Number = '$student_id' AND Session = '$session_id' AND Class = '$class_id' AND Subj_ID = '$subject_id' AND Term = '$term_id'");

while($row = mysql_fetch_array($result)){

$first = $row['First'];
$second = $row['Second'];
$third = $row['Third'];
$fourth = $row['Fourth'];
$exams = $row['Exams'];


//if(mysql_num_rows($sql) ){
/*
if($first == "" || $first == null){
$first = "0";
}

if($second == "" || $second == null){
$second = "0";
}

if($third == "" || $third == null){
$third = "0";
}

if($fourth == "" || $fourth == null){
$fourth = "0";
}

if($exams == "" || $exams == null){
$exams = "0";
}*/

echo $first; echo ","; echo $second; echo","; echo $third; echo ","; echo $fourth; echo","; echo $exams; 
}
/*}else{
$first = "0";
$second = "0";
$third = "0";
$fourth = "0";
$exams = "0";
echo $first; echo ","; echo $second; echo","; echo $third; echo ","; echo $fourth; echo","; echo $exams; 

}*/
}
?>