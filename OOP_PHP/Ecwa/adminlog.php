<?php
ob_start();

//include("config.php"); 

// connect to the mysql server 
    $username=$_POST['username'];
	$password=$_POST['password'];

 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
 mysql_select_db("2015junior_class_firstterm_results",$link) or die ("Cannot select the database!");

$match = "select id from admin where username = '".$_POST['username']."' 
and password = '".$_POST['password']."';"; 

$qry = mysql_query($match) or die ("Could not match data because ".mysql_error()); 
$num_rows = mysql_num_rows($qry); 

if ($num_rows <= 0) { 

		
echo  '<span style="color:#000000;text-align:center;"><b>Sorry, there is no username with the specified password.<br></span>'; 
echo "<a href=Admin_login.php><b>Try again</a>"; 
exit; 
} else { 

setcookie("loggedin", "TRUE", time()+(3600 * 24));
//setcookie("mysite_username", "$username");


 echo "<script> window.open('Admin.php','_self')</script>";
 }
	   exit();  
ob_end_flush();
?>