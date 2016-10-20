<?php
	require_once('auth.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Add Suppliers</title>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 
</head>

<body>

<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">NOBLE ALCHUKS NIGERIA LIMITED </center>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">ABRO MINI DEPOT </center>
<center style="font:'Courier New', Courier, mono; font-size:large; text-align:center; font-weight:bold; color:#FF0000 ">Sales Inventory System </br> Version : 2.1 </center>
</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Today's date : <input type="text" value="<?php echo date("d-m-Y"); ?>" style="border:none; text-align:center " />

<!-- Query Goods Sold -->
<fieldset style="border-color:#000000 ">
<legend><em style="color:#0000CC ">Form to add suppliers</em> </legend>
<center>
<form action="<?php echo($_SERVER['PHP_SELF']) ?>" method="post" name="addsuppliers"> 
<div style="margin-right:25px ">
Name : <input type="text" name="name" id="name"  style="background-color:#D5EAF0 " />
</div>
 </br>
 <div style="margin-right:40px ">
Address : <input type="text" name="address" id="address" style="background-color:#D5EAF0 "  />
</div>
</br> 
<div style="margin-right:20px ">
Date : <input date=" text" name="date" id="date" class="tcal" style="background-color:#D5EAF0 "   readonly="readonly" />
</div>

</br>
<input type="submit" name="addsupplier" id="addsupplier" value="Add suppliers" />
</br>
</form>
</center>



<?php
if(isset($_POST['addsupplier'])){
include("db.php"); 
 $name = trim(htmlspecialchars(strtoupper($_POST['name'])));
	 $address = trim(htmlspecialchars(strtoupper($_POST['address'])));
	 $date= trim(htmlspecialchars(strtoupper($_POST['date'])));
	 
	 //check if input is entered
	 if(empty($name)){
	 echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Enter Supplier Name')");
	 echo("</script>");
	// exit();
	 }else if(empty($address)){
	  echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Enter Quantity')");
	 echo("</script>");
	 //exit();
	 }else if(empty($date)){
	  echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Select Date')");
	 echo("</script>");
	// exit();
	 
	 }else{
	 //make sql query
	 $query=@mysql_query("Insert into suppliers (Supplier, Date, Address) VALUES ('$name', '$date', '$address')");
   if(@mysql_affected_rows() > 0){
     echo ("Supplier Savad Successfully ");
	 
   }else{
    echo ("Supplier Not Saved");
   }
 }}
?>

</fieldset>
<center>
<div style="margin-top:110px ">
<a href="homepage.php">Click to go to home page</a>	
	</div>
	</center>
<div style="margin-top:10px ">
<marquee behavior="scroll"><font   size="+2" face="Times New Roman, Times, serif"><b>This Software Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>
</body>
</html>
