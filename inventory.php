<?php
	require_once('auth.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Inventory Table</title>

<link rel="stylesheet" href="input.css" type="text/css" />
<link rel="stylesheet" href="table.css" type="text/css" />
<link rel="stylesheet" href="tablescrolll.css" type="text/css" />
</head>

<body>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">NOBLE ALCHUKS NIGERIA LIMITED </center>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">ABRO MINI DEPOT </center>
<center style="font:'Courier New', Courier, mono; font-size:large; text-align:center; font-weight:bold; color:#FF0000 ">Sales Inventory System </br> Version : 2.1 </center>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Today's date :  <input  type="text" value="<?php echo(date("d-m-Y"));?>" style="border:none; text-align:center "/>

<fieldset style="border-color:#000000 ">
<legend><em style="color:#0000CC ">Form to display product in stock</em></legend>
<!-- Inventory Table-->
<div id="inventory" class="content">

<table width="100%" >
 <tr class="head"><th>S/N</th><th>DESCRIPTION</th><th>QUANTITY1</th><th>QUANTITY2</th><th>QUANTITY3</th><th>PRICE1</th><th>PRICE2</th><th>PRICE3</th><th>TOTAL</th><th>DATE</th></tr>
<?php 
include ("db.php");

// query table for goods in stock
$sn=1;
 $query = @mysql_query("select * from inventory order by Description ASC");
 while($row=@mysql_fetch_array($query)){
 $description=$row['Description'];
 $quantity1=$row['Quantity1'];
 $quantity2=$row['Quantity2'];
 $quantity3=$row['Quantity3'];
 $price1=$row['Price1'];
 $price2=$row['Price2'];
 $price3=$row['Price3'];
 $total=$row['Total'];
 $date=$row['Date'];
 //test if quantity are available
 if($quantity2==""){
 $quantity2=0;
 }
  if($quantity3==""){
  $quantity3=0;
 }
  if($price2==""){
 $price2=0;
 }
  if ($price3==""){
 $price3=0;
 }
 

?>
<tr class="edit_tr"><td><?php echo $sn ?></td> <td><?php echo $description ?></td> <td><?php echo $quantity1 ?></td> <td><?php echo $quantity2?></td> <td><?php echo $quantity3 ?></td>
<td><?php echo $price1 ?></td><td><?php echo $price2 ?></td><td><?php echo $price3 ?></td><td><?php echo $total ?></td><td><?php echo $date ?></td>

</tr>
<?php
 $sn=$sn +1;
 }
?>
</table>

</div>
</fieldset>

<center>
<div style="margin-top:120px ">
<a href="homepage.php">Click to go to home page</a>	
	</div>
	</center>

<div style="margin-top:10px ">
<marquee behavior="scroll"><font   size="+2" face="Times New Roman, Times, serif"><b>This Software Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>
</body>
</html>
