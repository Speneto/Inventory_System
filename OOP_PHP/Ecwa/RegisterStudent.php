
<html>
<?php
session_start();
?>

<head>

<title></title>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 

</head>


<body background="images/background.png">
<hr size="50" color="Red" text="Welcome"/>
<center>
<table border="0">
<tr>
<td><img src="images/1.png" widht="200" height="200"/></td>
<td><h1><font color="Green"></font><font color="Green">
  </font><div align="center"><font color="Green" size="+7"><blink>ECWA <font color="#FF00CC">ACADEMY</font> DEMSA</blink> </font></div>
  </h1></td>
<td><img src="images/bd.gif" with="150" height="150"/></td>
</tr>
</table>
</center>
<form method="Post" action="SaveStuRecord.php">
<center>
<table width="597" border="1" background="images/1.gif">
<tr><td><font color="#FF00FF" size="6"><strong><marquee direction="right" loop="-1">WELCOME TO EAD REGISTRATION REGISTRATION PORTALS</marquee></strong></font></td>
</tr>
<tr>
<td><font color="#CC3300" size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Academic Session &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Term</font><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="Session"  > 
          <option >Select Academic Session</option>
          <option >2015/2016</option>
          <option >2016/2017</option>
		  <option >2017/2018</option>
          <option >2018/2019</option>
		  <option >2019/2020</option>
   </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <select name="Term" >
	      <option >Slect Term Please</option> 
          <option >First Term</option>
          <option >Second Term</option>
		  <option >Third Term</option>
       </select>
    </td>
</tr>
<tr>
<td><font color="#CC3300" size="5">Student's Name</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" size="50" name="Name"></td>
</tr>
<tr>
<td><font color="#CC3300" size="5">Admission Number</font><font size="5">&nbsp;</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <input type="text" name="ID_Number" size="50">
  </td>
</tr>
<tr>
<td><font color="#CC3300" size="5">Age</font><font size="5">&nbsp;</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="Age" size="50">
  </td>
</tr>
<tr>
  <td><font color="#CC3300" size="5">Date of Birth&nbsp;</font><font color="#CC3300">&nbsp;</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 
        &nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text"  name="DOB" id="DOB" class="tcal" />
    </td>
</tr>
<tr>
  <td><font color="#CC3300" size="5">NATIONALITY</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="Nationality" > 
          <option >Nigerian</option>
          <option >Non-nigerian</option>
        </select>
    </td>
</tr>
<tr>
<td>
<font color="#CC3300" size="5">State Of Origin</font> <font size="5">&nbsp;&nbsp;</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <select name= "State_of_Origin" >
          <option value="Abia">Abia</option>
          <option value="Adamawa">Adamawa</option>
          <option value="Akwa">Akwa</option>
          <option value="Anambra">Anambra</option>
          <option value="Bauchi">Bauchi</option>
          <option value="Bayelsa">Bayelsa</option>
          <option value="Benue">Benue</option>
          <option value="Borno">Borno</option>
          <option value="Ebonyi">Ebonyi</option>
          <option value="CrossRiver">CrossRiver</option>
          <option value="Delta">Delta</option>
          <option value="Edo">Edo</option>
          <option value="Ekiti">Ekiti</option>
          <option value="Enugu">Enugu</option>
          <option value="Gombe">Gombe</option>
          <option value="imo">Imo</option>
          <option value="Jigawa">Jigawa</option>
          <option value="Kaduna">Kaduna</option>
          <option value="Kano">Kano</option>
          <option value="Kastina">Kastina</option>
          <option value="Kebbi">Kebbi</option>
          <option value="Kogi">Kogi</option>
          <option value="Kwara">Kwara</option>
          <option value="Lagos">Lagos</option>
          <option value="Nassarawa">Nassarawa</option>
          <option value="Niger">Niger</option>
          <option value="Ogun">Ogun</option>
          <option value="Ondo">Ondo</option>
          <option value="Osun">Osun</option>
          <option value="Oyo">Oyo</option>
          <option value="Plateau">Plateau</option>
          <option value="River">River</option>
          <option value="Sokoto">Sokoto</option>
          <option value="Taraba">Taraba</option>
          <option value="Yobe">Yobe</option>
          <option value="Zamfara">Zamfara</option>
          <option value="Abuja">Abuja</option>
		  <option value="Non Nigerian">Non Nigerian</option>

</select>
</td>
</tr>
<tr>
<td>
<font color="#CC3300" size="5">L.G.A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
<input type="text" name="LGA" size="50">
</td>
</tr>
<tr>
  <td><font color="#CC3300" size="5">Class Admitted</font> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <select name="Class">
	        <option >Select Class Please</option>
            <option value="JSS1A">JSS1A</option>
		    <option value="JSS1B">JSS1B</option>
			    <option value="JSS1C">JSS1C</option>
		    <option value="JSS2A">JSS2A</option>
		    <option value="JSS2B">JSS2B</option>
			<option value="JSS2C">JSS2C</option>
		    <option value="JSS3A">JSS3A</option>
		    <option value="JSS3B">JSS3B</option> 
			<option value="JSS3C">JSS3C</option>
            <option value="SSS1A">SSS1A</option>
		    <option value="SSS1B">SSS1B</option>
			 <option value="SSS1C">SSS1C</option>
		    <option value="SSS2A">SSS2A</option>
		    <option value="SSS2B">SSS2B</option>
			<option value="SSS2C">SSS2C</option>
		    <option value="SSS3A">SSS3A</option>
		    <option value="SSS3B">SSS3B</option>
			<option value="SSS3C">SSS3C</option>
      </select></td>
</tr>



<tr>
<td>
<font color="#CC3300" size="5">Parent Address:&nbsp;</font><font color="#CC3300">&nbsp;</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;  
<input type=text size="50" name="Parent_Address">
</td>
</tr>
<tr>
  <td><font color="#CC3300" size="5">Parent Phone:</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <input type=text size="50" name="Parent_Phone"></td>
<tr><td><center><font color="blue" size="5"></font><input type="SUBMIT" value="Submit Registration" name="Submit" id="Submit">
</center></td>
</tr>
</table>
</form>
<center>
<hr color="red" size="8"><br><a href="Admin.php"><img src="images/backred.png"></img><br>
</center>
</body>
</html> 
