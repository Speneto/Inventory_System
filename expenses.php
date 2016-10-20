<?php
	require_once('auth.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Expenses</title>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 


</head>

<body>

</br> 
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">NOBLE ALCHUKS NIGERIA LIMITED </center>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">ABRO MINI DEPOT </center>
<center style="font:'Courier New', Courier, mono; font-size:large; text-align:center; font-weight:bold; color:#FF0000 ">Sales Inventory System </br> Version : 2.1 </center>
</br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Today's date : <input type="text" value="<?php echo date("d-m-Y"); ?>" style="border:none; text-align:center " />
</br>

<!-- Query Goods Sold -->
<fieldset style="border-color:#000000 ">
<legend><em style="color:#0000CC ">Form to post expenses</em> </legend>
<form action="<?php echo($_SERVER['PHP_SELF']) ?>" method="post" name="expenses"> 
</br/> </br>
<center>
&nbsp;&nbsp;&nbsp; Description : <input type="text" name="description" id="description"  size="30" style="background-color:#D5EAF0 " /> </br></br>
<div style="margin-right: 20px ">
Amount : <input type="text" id="amount" name="amount" style="background-color:#D5EAF0 " />
</div>
 </br>
Date : <input type="text" name="date" id="date"  class="tcal" style="background-color:#D5EAF0 "   readonly="readonly" /></br></br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="expenses" id="expenses" value="Click to Post Expenses" />
</center>
</div>
</br>
<div>



</div>







</form>
</center>
</fieldset>


<center>
<div style="margin-top:60px ">
<a href="extra.php">Click to go back</a>

</div>

</center>


<center>
<div style="margin-top:10px ">
<a href="homepage.php">Click to go to home page</a>	
	</div>
	</center>

<div style="margin-top:20px ">
<marquee behavior="scroll"><font   size="+2" face="Times New Roman, Times, serif"><b>This Software Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>

<?php
include 'db.php';
if(isset($_POST['expenses'])){

 $description = trim(htmlspecialchars(strtoupper($_POST['description'])));
  $amount = trim(htmlspecialchars(strtoupper($_POST['amount'])));
	 $date = trim(htmlspecialchars(strtoupper($_POST['date'])));
	 //check if input is entered
	 if(empty($description)){
	 echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Enter Expenses Made')");
	 echo("</script>");
	 exit();
	}else  if(empty($amount)){
	 echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Enter Amount')");
	 echo("</script>");
	 exit();
	}else if(empty($date)){
	 echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Select Date')");
	 echo("</script>");
	 exit();
	 }else {
	 
	 $sql = @mysql_query("Insert into expenses (Expenses, Amount, Date ) VALUES ('$description', '$amount', '$date' )");
	 if (@mysql_affected_rows() > 0) {
	 
	  echo '<script type="text/javascript"\n>';
	 echo '(alert("Expenses Posted Successfully"))';
	 echo '</script>';
	 exit;
   }else{
   // echo ("Customer Not Saved");
    echo '<script type="text/javascript"\n>';
	 echo '(alert("Expenses Not Posted"))';
	 echo '</script>';
	 exit;
   
   }
	 
	 }}
	 ?>


</body>
</html>

