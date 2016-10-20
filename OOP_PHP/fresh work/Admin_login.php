 <?php
session_start();

?>
<html>	 
<head>
<title>Login</title>
</head>

<body background="1.gif" text="white" >
<br />
<br />
<br />

<blockquote>&nbsp;</blockquote>
<form action="adminlog.php" method="post">
<Center>
<table border=0 CellPadding=5  border="black" background="AquaLoop Wallpaper Bk.jpg" WIDTH=10% text="blue" ><center>
<tr><td>
               <table border=0 CellPadding=5  border="black" background="3438593196_e91fcc6316.jpg" WIDTH=10% text="blue" >

        <tr  font face ="Britannic Bold" border="0" color="Red" size="500" ALIGN="CENTER">  <TH COLSPAN=4> <fieldset> Admin LogIn </fieldset></TH>
<th bgcolor="" colspan=2 align="right"><img src="indicator.GIF"  width="100" height="100" border="0"></th></TR>
        
		
  <div align="center" style="color:#000000">
  <tr>
 <td> Username	: <input type="text" name="username" size="30" value=""></td></tr>
 <tr>
 <td>
  Password	:<input type="password" name="password" size="30"></td></tr>
  <tr><td colspan="2">
  <input name="submit" type="submit" value="Log In"> <a href="register.html"><b>Sign Up? </a></td> </tr> </div> 
 <!--<td&nbsp;&nbsp&nbsp;<a href="logInForm.php">Click here to Log-Out</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;  </td>-->
  </td></tr>
   
</form>
</body>
</html>
