<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>LogIn Form</title>

<!-- Include style sheet for login form-->
<link  rel="stylesheet" href="login.css" />
</head>

<script type="text/javascript" src="jquery-1.9.1.min.js" >
</script>
<script language="javascript">
$('document').ready(function(){
$('#button').click(function(){
if($('#username').val()==""){
alert("Please Enter User Name ");
return false;
}else if ($('#loginPass').val()==""){
alert(" Please Enter PassWord ");
return false;
}else{
var username = $('#username').val();
var password = $('#loginPass').val();
}

$.post("login.php",{ user : username, pass : password
},function(data, textStatus){
if(data == "success"){
 location="homepage.php";
 }else{
 alert("UserName or PassWord Not Found");}});});});

</script>
<body></br>

<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">NOBLE ALCHUKS NIGERIA LIMITED </center>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">ABRO MINI DEPOT </center>
<center style="font:'Courier New', Courier, mono; font-size:large; text-align:center; font-weight:bold; color:#FF0000 ">Sales Inventory System </br> Version : 2.1 </center>		
		
		<div id="formContainer">

			<form id="login" >

				<!--<a href="#" id="flipToRecover" class="flipLink">Forgot?</a>-->

				<input type="text" name="username" id="username" /> <div id="err"></div>

				<input type="password" name="password" id="loginPass"  />

				<input type="button" name="submit"   id="button" value="Login" />

			</form>

			
		</div></br>
<marquee behavior="scroll"><font color="#CCCCCC"  size="+2" face="Times New Roman, Times, serif"><b>This Program Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</body>
</html>
