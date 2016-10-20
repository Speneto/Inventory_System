<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple Enrollment System</title>
<style type="text/css">
<!--
.heading {
	color: #F90;
	font-family: "Comic Sans MS", cursive;
}
.options {
	font-family: "Comic Sans MS", cursive;
	font-size: 16px;
	font-style: oblique;
	color: #F93;
}
-->
</style>
</head>

<body background="1.gif">

<br />
<br />
<br />
<table align="center" cellpadding="0" background="mdgraphs-ocean-breeze.jpg" width="800" border="3">
  <tr>
    <td>
<table align="center" cellpadding="0" background="mdgraphs-ocean-breeze.jpg" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading">Result Report</h1>
      <p align="center">
	  
	 <?php
	
//session_start();
//$uname = mysql_real_escape_string(trim($_POST['name']));
//$rollno = mysql_real_escape_string(trim($_POST['rollno']));
//$reg = mysql_real_escape_string(trim($_POST['reg']));
//$dept = mysql_real_escape_string(trim($_POST['dept']));

//if (Empty($_POST[$uname])) {
//echo "Empty Field Name! ...  <a href=insert.php><b>Try again</a> ";exit;}
//echo "Empty Field Name! ...  ";exit;}
//elseif (Empty($_POST[$rollno])) {
//echo "Empty Field ID no.! ...   ";exit;}
//elseif (Empty($_POST[$reg])) {
//echo "Empty Field School year! ...  ";exit;}
//elseif (Empty($_POST[$dept])) {
//echo "Empty Field Department name.! ...   ";exit;}
//elseif(is_numeric($_POST[$name])){
//echo "<b>Accepts only Letters for Name!! ....";exit;}
//elseif(!is_numeric($_POST[$rollno])){
//echo "<b>Accepts only Numbers for ID no.!! ....  ";exit;}
//elseif(is_numeric($_POST[$dept])){
//echo "<b>Accepts only Letters for Department Name!! .... ";exit;}

?>
	  
	  
	  
    <?php 
	 $sname=$_REQUEST['name']; 
	 $roll=$_REQUEST['rollno'];
	 $reg=$_REQUEST['reg'];
	 $dept=$_REQUEST['dept']; 

	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("department",$link) or die ("Cannot select the database!");
	 $query="INSERT INTO students (sname, rollno, regno, dname) values('".$sname."', '".$roll."', '".$reg."', '".$dept."')";
		
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		  echo "New record saved successfully!";}
	 ?>

      </p>
      <p align="center"> <a href="insert.php"><img src="cooltext457951462MouseOver.png"  onmouseover="this.src='cooltext457951462.png';" onmouseout="this.src='cooltext457951462MouseOver.PNG';"width="95" height="50" border="0" align="bottom"></a>
	  <a href="../home.php"><img src="cooltext457951615MouseOver.png"  onmouseover="this.src='cooltext457951615.png';" onmouseout="this.src='cooltext457951615MouseOver.PNG';"width="95" height="50" border="0" align="bottom"></a></p>
    </td>
  </tr>
</table>

</td>
</tr>
</body>
</html>