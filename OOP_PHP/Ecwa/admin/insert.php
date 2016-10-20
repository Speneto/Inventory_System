<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simple Enrollment System ::</title>
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

<body background="1.gif">

<br />
<br />
<br />
<table align="center" cellpadding="0" background="mdgraphs-ocean-breeze.jpg" width="800" border="3">
  <tr>
    <td>
<table align="center" cellpadding="0" background="mdgraphs-ocean-breeze.jpg" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading">Add new student</h1>
      <p align="center">&nbsp;</p>
      <form id="form1" name="form1" method="get" action="insert2.php">
        <table align="center" width="291" border="0">
          <tr>
            <td><strong>I.D. No. :</strong></td>
            <td><input type="text" name="rollno" id="textfield2" /></td>
          </tr>
          <tr>
		  <td width="129"><strong>Name of Student:</strong></td>
            <td width="152"><label>
              <input type="text" name="name" id="textfield" />
            </label></td>
            
          </tr>
          <tr>
            <td><strong>First CA:</strong></td>
            <td><input type="text" name="reg" id="textfield3" /></td>
          </tr>
          <tr>
            <td><strong>Second CA</strong>:</td>
            <td><input type="text" name="dept" id="textfield4" /></td>
          </tr>
		  <tr>
            <td><strong>Third CA</strong>:</td>
            <td><input type="text" name="trdCA" id="textfield4" /></td>
          </tr>
		  <tr>
            <td><strong>Fourth CA</strong>:</td>
            <td><input type="text" name="frtCA" id="textfield4" /></td>
          </tr>
		  <tr>
            <td><strong>Exams </strong>:</td>
            <td><input type="text" name="exams" id="textfield4" /></td>
          </tr>
        </table>
        <p align="center">
          <label>
            <input type="submit" name="button" id="button" value="Submit" />
          </label>
        </p>
        <p align="right"><a href="./"><img src="cooltext457951462MouseOver.png" onmouseover="this.src='cooltext457951462.png';" onmouseout="this.src='cooltext457951462MouseOver.PNG';"width="95" height="50" border="0" align="bottom"></a></p>
    

  </tr>
</table>

</td>
</tr>
  </form>
</body>
</html>