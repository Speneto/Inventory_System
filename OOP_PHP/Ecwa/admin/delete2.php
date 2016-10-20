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

<body background="1.gif" text="White">

<br />
<br />
<br />
<table align="center" cellpadding="0" background="mdgraphs-ocean-breeze.jpg" width="800" border="3">
  <tr>
    <td>
<table align="center" cellpadding="0" background="mdgraphs-ocean-breeze.jpg" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading">&nbsp;</h1>
  <p align="center">
    <?php 
	 $id=$_REQUEST['id']; 
	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("department",$link) or die ("Cannot select the database!");
	 $query="DELETE FROM students WHERE id='".$id."'";
		
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
		  else
		 {
		  echo "<b>Record number ".$id.", removed successfully!";}
	 ?>
      </p>
      <p align="center"><a href="delete.php"><img src="cooltext457951462MouseOver.png"  onmouseover="this.src='cooltext457951462.png';" onmouseout="this.src='cooltext457951462MouseOver.PNG';" width="95" height="50" border="0" align="bottom" /></a>
	  
	  <a href="../home.php"><img src="cooltext457951615MouseOver.png"   onmouseover="this.src='cooltext457951615.png';" onmouseout="this.src='cooltext457951615MouseOver.PNG';" width="95" height="50" border="0" align="bottom" /></a></p>
      <p align="left">&nbsp;</p>
    <p align="left">&nbsp;</p></td>
  </tr>
</table>
</td>
</tr>
</body>
</html>