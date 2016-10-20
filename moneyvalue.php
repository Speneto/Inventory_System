<?php
	//require_once('auth.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Money Value of Products In Stock</title>
<link rel="stylesheet" href="tablescrolll.css" type="text/css" />
<link rel="stylesheet" href="table.css" type="text/css" />
</head>

<body>
</br>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">NOBLE ALCHUKS NIGERIA LIMITED </center>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">ABRO MINI DEPOT </center>
<center style="font:'Courier New', Courier, mono; font-size:large; text-align:center; font-weight:bold; color:#FF0000 ">Sales Inventory System </br> Version : 2.1 </center>
</br>
<div style="margin-left:900px ">
Date : <input type="text" value="<?php echo (date("Y-m-d"))?>"  style="border:none; text-align:left "/>
</div>

<fieldset  style="border-color:#000000 ">
<legend><em style="color:#0033FF ">Display money value of items in stock</em></legend>
<center>
<div id="inventory" class="content" style="width:600px ">

<table width="100%">
 <tr class="head" style="visibility:hidden " ><th>S/N</th><th>DESCRIPTION</th><th>QTY1</th><th>QTY2</th><th>QTY3</th><th>PRICE1</th><th>PRICE2</th><th>PRICE3</th><th>TOTQTY</th><th>TOTP1</th><th>TOTP2</th><th>TOTP3</th><th>TOTP</th></tr>
<tr class="head"><th>S/N</th><th>DESCRIPTION</th><th>QUANTITY</th><th>PRICE</th><th>TOTAL AMOUNT</th></tr>
<?php 
include ("db.php");
//include ("updateInventory.php");
// query table for goods in stock
$sn=1;
$sum=0;
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
// $date=$row['Date'];
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
// $totprice1 = $quantity1 * $price1;
 ////$totprice2 =  $quantity2 * $price2;
 // $totprice3 =  $quantity3 * $price3;
// $totprice = $totprice1 + $totprice2 + $totprice3;
 $totamt = $total * $price1;
 $sum = $sum + $totamt;
?>

<tr class="edit_tr"><td><?php echo $sn ?></td> <td><?php echo $description ?></td> <td><?php echo $total ?></td> <td><?php echo $price1?></td> <td><?php echo $totamt?></td>



</tr>
<?php
 $sn=$sn +1;
 }
 ?>
 
</table>
</div>
</center>
</br>
<div style="font-weight:bolder "><center>Grand Total : <?php echo  $sum ?></center></div>
</fieldset>
</div>

<div style="margin-top:45px ">
<center>
<a href="generalquery.php">Click to go back</a>
</center>

</div>

<center>
<div style="margin-top:10px ">
<a href="homepage.php">Click to go to home page</a>	
	</div>
	</center>


<div style="margin-top:10px ">
<marquee behavior="scroll"><font   size="+2" face="Times New Roman, Times, serif"><b>This Program Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>
</body>
</html>
