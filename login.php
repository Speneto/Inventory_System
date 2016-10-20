<?php
 if(isset($_POST['pass'])){
 //Start Session
session_start();
//Include database connection details
include("db.php");

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
$str = @trim($str);
if(get_magic_quotes_gpc()) {
$str = stripslashes($str);
}
return mysql_real_escape_string($str);
}
 
//Sanitize the POST values
$username = clean($_POST['user']);
$password = clean( $_POST['pass']);
//$password= md5($password);
 
 //Make Query to Password table
$query = @mysql_query("Select * from password where UserName='$username' && PassWord='$password'");
//session_regenerate_id();
while($row=@mysql_fetch_array($query)){
 $_SESSION['SESS_MEMBER_ID'] = $row['Id'];
$_SESSION['SESS_FIRST_NAME'] = $row['UserName'];
$_SESSION['SESS_LAST_NAME'] = $row['PassWord'];
session_write_close();
}
if(@mysql_num_rows($query) > 0){
 echo ("success");
}else{
echo ("fail");
}
}
?>