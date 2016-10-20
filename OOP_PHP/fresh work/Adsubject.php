
<?php
//ob_start();
include"DB_connection.php";

$subject = $_POST['Subject'];

$match = mysql_query("SELECT * from subject where Subjects ='$subject'"); 

//$num_rows = mysql_num_rows($match); 
$count  = mysql_num_rows($match);
if ($count > 0) { 

		
echo  '<span style="color:#000000;text-align:center;"><b>Sorry, Subject Already In Database</b>></span>'; 

echo "<a href=Adsubject.html><b>Try again</a>"; 
exit; 
} else { 

$query = mysql_query("Insert into subject (Subjects) VALUES ('".$_POST['Subject']."')");

//setcookie("loggedin", "TRUE", time()+(3600 * 24));
//setcookie("mysite_username", "$username");


echo "<script> window.open('Adsubject.html','_self')</script>";


}
//ob_end_flush();
?>
