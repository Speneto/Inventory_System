<?php
//Start session
session_start();

//Check Whethere session variable is present or not
if(!isset($_SESSION['SESS_MEMBER_ID'])){
header("location: index.php");
exit();
}

?>