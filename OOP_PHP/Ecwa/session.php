
<?php  
ob_start(); 
      
    ?>
<html>
<head>
<title>User Registration</title>
<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
</head>

<body background="1.gif" text="white">

<br />
<br />
<br />
<br />
<br />
<form action="session2.php" method="post">
<center>
<table border=0 CellPadding=5  border="black" background="AquaLoop Wallpaper Bk.jpg" WIDTH=10% text="blue" >
<tr><td>
<table border=0 CellPadding=5  border="black" background="mdgraphs-ocean-breeze.jpg" WIDTH=10% text="blue" >
<tr  font face ="Britannic Bold" border="0" color="Red" size="500" ALIGN="CENTER">  <TH COLSPAN=4> <fieldset> <p font size=0>REGISTER STUDENT</fieldset></TH>
<th bgcolor="" colspan=2 align="right"><a href="Admin.php"><img src="9.gif"  width="100" height="100" border="0"></a></th></TR>


<div align="center"><span class="style1">
<tr><td>
Select Academic Session:
<select name="AcadSession"n>
<option>2015/2016 <Option>
<option>2016/2017 <Option>
<option>2017/2018 <Option>
<option>2019/2020 <Option>
<option>2020/2021 <Option>
</Select>
</td></tr>
<tr><td>
Select Academic Term:
<select name="Term">
<option>First Term<Option>
<option>Second Term<Option>
<option>Third Term<Option>

</Select></td></tr>
<tr><td>
<tr><td>
Enter Your Password:<input type="password" name="password"  id = "password" size="30"></td></tr>
</span>
<tr><td>
<input name="submit" type="submit" value="OK">
<p ALIGN="right"><img src="cooltext457951462MouseOver.PNG" width="95" height="50" border="0" align="bottom" />
</div>
 </td></tr>
 </td></tr>
</form>
<?php
ob_end_flush();
?>