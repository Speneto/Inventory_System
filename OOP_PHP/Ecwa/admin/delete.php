<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple Enrollment System </title>
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

<body background="1.gif" text="black">

<br />
<br />
<br />

<table align="center" cellpadding="0"background="mdgraphs-ocean-breeze.jpg" width="800" border="3">
  <tr>
    <td><h1 align="center" class="heading">Select Record to Delete</h1>
      <p align="center">
 
    <?php 
	 	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("department",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM students";
		
		  $resource=mysql_query($query,$link);
		  echo "
		<table align=\"center\" border=\"0\" width=\"70%\">
		<tr>
		<td><b>Name</b></td> <td><b>I.D. No.</b></td><td><b>School Year</b></td><td><b>Deparment</b></td><td><b>Action</b></td></tr> ";
while($result=mysql_fetch_array($resource))
	{ 
	//echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td>
	echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td>
	<td><a href=\"delete2.php?id=".$result[0]."\"><img border=\"0\" src=\"images/cooltext457952800.png\" onmouseover=\"this.src='images/cooltext457952800MouseOver.png';\"  onmouseout=\"this.src='images/cooltext457952800.png';\" /></a>
	</td></tr>";
	} echo "</table>";
	 ?>

      </p>
  <p align="center">&nbsp;</p>
  <br>
      <p align="right"><a href="./"><img src="cooltext457951462MouseOver.png" onmouseover="this.src='cooltext457951462.png';" onmouseout="this.src='cooltext457951462MouseOver.PNG';" width="95" height="50" border="0" align="bottom" /></a>
	 
      <p align="center"><a href="../about.php"></a></p></td>
  </tr>
</table>

</body>
</html>