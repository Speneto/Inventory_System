<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php 
//if(isset(['print_result']){

include "DB_connection.php";

//$class_id = $_POST['class_id'];
//term_id = $_POST['term_id'];
//$session_id = $_POST['session_id'];
//$session_id = "2015/2016"
//$result= mysql_query("SELECT subject.Subj_ID, subject.Subjects, teacher_login.Subject1 from teacher_login JOIN subject ON teacher_login.Subject1 = subject.Subj_ID WHERE teacher_login.User_Name= '".$_POST['username']."' AND teacher_login.Password = '".$_POST['password']."' UNION ALL SELECT subject.Subj_ID, subject.Subjects, teacher_login.Subject2 from teacher_login JOIN subject ON teacher_login.Subject2 = subject.Subj_ID WHERE teacher_login.User_Name= '".$_POST['username']."' AND teacher_login.Password = '".$_POST['password']."' UNION ALL SELECT subject.Subj_ID, subject.Subjects, teacher_login.Subject3 from teacher_login JOIN subject ON teacher_login.Subject3 = subject.Subj_ID WHERE teacher_login.User_Name= '".$_POST['username']."' AND teacher_login.Password = '".$_POST['password']."'");	

$generate = "SELECT students.ID_Number, students.Name, subject.Subjects, score_sheet.First, score_sheet.Second, score_sheet.Third, score_sheet.Fourth, score_sheet.Exams FROM score_sheet JOIN subject ON score_sheet.Subj_ID = subject.Subj_ID JOIN students ON students.ID_Number = score_sheet.ID_Number";


//$generate = "SELECT students.ID_Number, students.Name, subject.Subjects, score_sheet.First, score_sheet.Second, score_sheet.Third, score_sheet.Fourth, score_sheet.Exams FROM students JOIN score_sheet ON students.ID_Number = score_sheet.ID_Number JOIN subject  ON subject.Subj_ID = score_sheet.Subj_ID WHERE score_sheet.Session = '$session'  ";
$fetch = mysql_query($generate);
$previousId = -1;
while($row = mysql_fetch_array($fetch) or die(mysql_error())){
if($row['ID_Number'] != $previousId){
//new student show name and other info
echo "***".$row['Name'] . "***";
echo "Subjects First Second Third Fourth Exams";
echo "----------------------------------------";
$previousId = $row['ID_Number'];


}
?>
<?php echo $row['Subjects']; ?>
<?php echo $row['First']; ?>
<?php echo $row['Second']; ?>
<?php echo $row['Third']; ?>
<?php echo $row['Fourth']; ?>
<?php echo $row['Exams']; ?>

<?php

}




//}



?>
</body>
</html>
