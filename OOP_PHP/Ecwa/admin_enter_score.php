

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Enter Student Score</title>
<!-- Function to Set Class ID -->
<script  type="text/javascript">
function LoadClass(){
var e = document.getElementById("class");
var str = e.options[e.selectedIndex].value;
document.getElementById("class_id").value = str;
str +='&' + (new Date()).getTime();
if(str == "" || str=="Please Select Class"){
alert("Please Select Class");
return;
}
}
</script>

<!-- Function to Set Term ID -->
<script  type="text/javascript">
function LoadTerm(){
var e = document.getElementById("term");
var str = e.options[e.selectedIndex].value;
document.getElementById("term_id").value = str;
str +='&' + (new Date()).getTime();
if(str == "" || str=="Please Select Term"){
alert("Please Select Term");
return;
}
}
</script>

<!-- Function to Set Subject ID -->
<script  type="text/javascript">
function LoadSubject(){
var e = document.getElementById("subject");
var str = e.options[e.selectedIndex].value;
document.getElementById("subject_id").value = str;
str +='&' + (new Date()).getTime();
if(str == "" || str=="Please Select Subject"){
alert("Please Select Subject");
return;
}
}
</script>







<!-- Function to get Session ID and Load Students Name -->
<script  type="text/javascript">
function ShowUp(){
var str1 = document.getElementById("class_id").value;
str1 +='&' + (new Date()).getTime();
var e = document.getElementById("lstSession");
var str = e.options[e.selectedIndex].value;
document.getElementById("session_id").value = str;
str +='&' + (new Date()).getTime();

if(str == "" || str=="Please Select Session"){
alert("Please Select Session");
return;
}
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}else{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4  && xmlhttp.status == 200){
// reference the name select list
var lstname = document.getElementById("lst_name");
//clear the list
while(lstname.options.length >= 1)
lstname.options.length = 0;
// populate student names into list

if(xmlhttp.responseText.length > 1){
var string = xmlhttp.responseText.split("xxx");
//document.getElementById("fca")value= string[4];
//alert(string);
//(string[0].split("-*-")[1]);
//alert(str1);
//alert(str);
//alert(str1);
   
var selectBoxOption = document.createElement("option");//create new option
selectBoxOption.value = "Please Select Name";//set option value
selectBoxOption.text = "Please Select Name";// set display text
try{
lstname.options.add(selectBoxOption,null);
}catch(err){
lstname.options.add(selectBoxOption); // IE browsers
}

var i;
for(i=0; i < string.length; i++){
selectBoxOption = document.createElement("option");//create new option
selectBoxOption.value = string[i].split("-*-")[0];//set option value
selectBoxOption.text = string[i].split("-*-")[1];// set display text
//alert the Element Created
try{
lstname.options.add(selectBoxOption,null);
}catch(err){
lstname.options.add(selectBoxOption); // IE browsers
}
}
}
}
}
//xmlhttp.open("GET","getStudentName.php?q="+str,true);
xmlhttp.open("GET","getStudentName.php?param1="+str+"&param2="+str1,true);
xmlhttp.send();

}
</script>




<!-- Function to get Students Scores -->

<script  type="text/javascript">
function LoadScore(){

var session_id = document.getElementById("session_id").value;
var class_id = document.getElementById("class_id").value;
var term_id = document.getElementById("term_id").value;
var subject_id = document.getElementById("subject_id").value;

var e = document.getElementById("lst_name");
var student_id = e.options[e.selectedIndex].value;
document.getElementById("student_id").value = student_id;
student_id +='&' + (new Date()).getTime();

if(student_id == "" || student_id=="Please Select Name"){
alert("Please Select Name");
return;
}
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();

}else{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4  && xmlhttp.status == 200){
var string = xmlhttp.responseText;
var array = string.split(',');
//alert(string);
//alert(array);
//document.getElementById("id").value = array[0];
var t = array[0];
//alert(t);
//alert(array[1]);
//var t = string;
if( t == "" || t == null){
document.getElementById("fca").value = 0;
document.getElementById("sca").value = 0;
document.getElementById("tca").value = 0;
document.getElementById("frca").value = 0;
document.getElementById("ex").value = 0;
}else{
document.getElementById("fca").value = array[0];
document.getElementById("sca").value = array[1];
document.getElementById("tca").value = array[2];
document.getElementById("frca").value = array[3];
document.getElementById("ex").value = array[4];
}

}
}

xmlhttp.open("GET","getStudentScore.php?studentid="+student_id+"&sessionid="+session_id+"&classid="+class_id+"&termid="+term_id+"&subjectid="+subject_id,true);
xmlhttp.send();


}
</script>



<!-- Function to save Students Record -->
<script  type="text/javascript">
function SaveRecord(){
var student_id  = document.getElementById("student_id").value;
var session_id = document.getElementById("session_id").value;
var class_id = document.getElementById("class_id").value;
var term_id = document.getElementById("term_id").value;
var subject_id = document.getElementById("subject_id").value;
var fca_id = document.getElementById("fca").value;
var sca_id = document.getElementById("sca").value;
var tca_id = document.getElementById("tca").value;
var frca_id = document.getElementById("frca").value;
var ex_id = document.getElementById("ex").value;



if(subject_id == "" || subject_id=="Please Select Subject"){
alert("Please Select Subject");
return;
}

if(class_id == "" || class_id=="Please Select Class"){
alert("Please Select Class");
return;
}

if(term_id == "" || term_id=="Please Select Term"){
alert("Please Select Term");
return;
}

if(session_id == "" || session_id=="Please Select Session"){
alert("Please Select Session");
return;
}

if(student_id == "" || student_id=="Please Select Name"){
alert("Please Select Name");
return;
}


if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();

}else{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4  && xmlhttp.status == 200){
var string = xmlhttp.responseText;
var array = string.split(',');
alert(string);
//alert(array);

document.getElementById("fca").value = 0;
document.getElementById("sca").value = 0;
document.getElementById("tca").value = 0;
document.getElementById("frca").value = 0;
document.getElementById("ex").value = 0;


}
}
xmlhttp.open("GET","save_score.php?studentid="+student_id+"&sessionid="+session_id+"&classid="+class_id+"&termid="+term_id+"&subjectid="+subject_id+"&fca="+fca_id+"&sca="+sca_id+"&tca="+tca_id+"&frca="+frca_id+"&ex="+ex_id,true);
xmlhttp.send();



}
</script>






<style type="text/css">
<!--
.style9 {
	font-size: 46px;
	color: #000099;
}
-->
</style>
</head>

<body background="1.gif">
<hr color="Blue" size="8"><br>

<center>
<img src="images/1.jpg" width="111" height="108"><span class="style9">ECWA ACADEMY DEMSA</span><img src="images/bd.gif" width="111" height="108"><br>
<marquee direction="left" loop="-1"><font color="#FF0000">This Online E-School System is Designed for ECWA Academy Demsa .  Only Authorised Persons Are Allowed to Use This Software.  All Copy Right Reserved. Any UnAuthorised Access or usage of This Program is Prohibited</font></marquee> 
<table border="1">
<form name="myForm" action="editinfoexec.php" method="post">

<?php
  include 'DB_connection.php';
	//$sbj= mysql_query("select CONCAT(Subject1, Subject2, Subject3) AS subjects from teacher_login where User_Name= '".$_POST['username']."' AND Password = '".$_POST['password']."' order by 1");
	
    //$result= mysql_query("select Subject1, Subject2, Subject3 from teacher_login where User_Name= '".$_POST['username']."' AND Password = '".$_POST['password']."' order by 1");	
	
	//$result= mysql_query("SELECT subject.Subj_ID, subject.Subjects, teacher_login.Subject1 from teacher_login JOIN subject ON teacher_login.Subject1 = subject.Subj_ID WHERE teacher_login.User_Name= '".$_POST['username']."' AND teacher_login.Password = '".$_POST['password']."' UNION ALL SELECT subject.Subj_ID, subject.Subjects, teacher_login.Subject2 from teacher_login JOIN subject ON teacher_login.Subject2 = subject.Subj_ID WHERE teacher_login.User_Name= '".$_POST['username']."' AND teacher_login.Password = '".$_POST['password']."' UNION ALL SELECT subject.Subj_ID, subject.Subjects, teacher_login.Subject3 from teacher_login JOIN subject ON teacher_login.Subject3 = subject.Subj_ID WHERE teacher_login.User_Name= '".$_POST['username']."' AND teacher_login.Password = '".$_POST['password']."'");	
	
	$result= mysql_query("SELECT subject.Subj_ID, subject.Subjects FROM subject ");	
	
	echo '<select name="subject" id="subject"  size="1" width="200" onChange="LoadSubject()">';
	echo '<option value="">';
	echo 'Please Select Subject ';
	echo '</option>';
	 while($row= mysql_fetch_array($result))
	{
	echo '<option value="'.$row['Subj_ID'].'">';
	echo $row['Subjects'];
	echo'</option>';
	}
	echo'</select>';


?>


</br></br>

Class
<br/>
<select name="class" id="class"  size="1" onChange="LoadClass()">
<option  value="Please Select Class">Please Select Class</option>
            <option value="JSS1A">JSS1A</option>
		    <option value="JSS1B">JSS1B</option>
			<option value="JSS1C">JSS1C</option>
		    <option value="JSS2A">JSS2A</option>
		    <option value="JSS2B">JSS2B</option>
			<option value="JSS2C">JSS2C</option>
		    <option value="JSS3A">JSS3A</option>
		    <option value="JSS3B">JSS3B</option>
			<option value="JSS3C">JSS3C</option>
			<option value="SSS1A">SSS1A</option>
		    <option value="SSS1B">SSS1B</option>
			<option value="SSS1C">SSS1C</option>
		    <option value="SSS2A">SSS2A</option>
		    <option value="SSS2B">SSS2B</option>
			<option value="SSS2C">SSS2C</option>
		    <option value="SSS3A">SSS3A</option>
		    <option value="SSS3B">SSS3B</option>
			<option value="SSS3C">SSS3C</option>
</select>
<br/><br/>
Term
<br/>
<select name="term" id="term" onChange="LoadTerm()">
<option value="Please Select Term">Please Select Term</option>
<option value="First Term">First Term</Option>
<option value="Second Term">Second Term</Option>
<option value="Third Term">Third Term</Option>
</select>
<br/><br/>
Academic Session
<br/>

<select name="lstSession"  id="lstSession" onChange="ShowUp()">
<option value="Please Select Session">Please Select Session</option>
<option value="2015/2016">2015/2016</option>
<option value="2016/2017">2016/2017</option>
<option value="2017/2018">2017/2018</option>
<option value="2018/2019">2018/2019</option>
<option value="2019/2020">2019/2020</option>
</select>
<br/><br/>

<input type="hidden" name="session_id" id="session_id" />
<input type="hidden" name="class_id" id="class_id" />
<input type="hidden" name="term_id" id="term_id" />
<input type="hidden" name="subject_id" id="subject_id" />
<input type="hidden" name="student_id" id="student_id" />



Name
<br />
<select name="lst_name" id="lst_name" onChange="LoadScore()" > </select>
<br>
First CA
<br />
<input name="firstca" type="text" class="ed" id="fca" value="" />
<br>
Second CA
<br />
<input name="secondca" type="text" class="ed" id="sca" value="" />
<br>
Third CA
<br />
<input name="thirdca" type="text" class="ed" id="tca" value="" />
<br>
Forth CA
<br />
<input name="fourthca" type="text" class="ed" id="frca" value="" />
<br>
Exams
<br />
<input name="exams" type="text" class="ed" id="ex" value="" />
<br /><br>
<input type="button" name="button" value="Click to Save/Update Record" id="button1" onClick="SaveRecord()" />
</form>
</table>
<hr color="red" size="8"><br><a href="Admin.php"><img src="images/backred.png"></img><br>
</center>

</body>
</html>
