 <?php
session_start();
?>
 
 <html>
 <head>
 <title>PHP Log-In</title>
 </head>
<body   background="1.gif" text="white" >
<br />
<br />
<br />
<br />
<br />
<br /><center>
<table border=0 CellPadding=5  border="black" background="AquaLoop Wallpaper Bk.jpg" WIDTH=10% text="blue" ><center>
<tr><td>
<table  align="center" border=0 CellPadding=5  border="black" background="3438593196_e91fcc6316.jpg" WIDTH=10% text="blue" >
<tr  font face ="Britannic Bold" border="0" color="Red" size="500" ALIGN="CENTER">  <TH COLSPAN=4> <fieldset> <p font size=0>Log-In Process</fieldset></TH>
<th bgcolor="" colspan=2 align="right"><img src="indicator.gif"  width="150" height="150" border="0"></th></TR>

 
 <tr>
   
	    	<th>			










<center>

<?php
ob_start();

//include("config.php"); 

// connect to the mysql server 


 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
 mysql_select_db("ecwa",$link) or die ("Cannot select the database!");

$match = "select id from teacher_login where User_Name = '".$_POST['username']."' and password = '".$_POST['password']."';"; 

$qry = mysql_query($match) or die ("Could not match data because ".mysql_error()); 
$num_rows = mysql_num_rows($qry); 

if ($num_rows <= 0) { 

		
echo  '<span style="color:#000000;text-align:center;"><b>Sorry, there is no username with the specified password.<br></span>'; 
echo "<a href=index.php><b>Try again</a>"; 
exit; 
} else { 

setcookie("loggedin", "TRUE", time()+(3600 * 24));
//setcookie("mysite_username", "$username");


echo '<span style="color:#000000;text-align:center;"><b>You are now logged in!<br></span>';
echo '<p style="color: red; text-align: center">
	  <a href=staffwelcome.php><b>continue...</a>
      </p>';




}
ob_end_flush();
?>
</th>
</tr>
</td>
</tr>
 </b></center>
 </body>
 </html>