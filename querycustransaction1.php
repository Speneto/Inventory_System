<?php
	require_once('auth.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Customer Transactions</title>
<link rel="stylesheet" href="tablescrolll.css" type="text/css" />
<link rel="stylesheet" href="table.css" type="text/css" />
</head>

<body>
</br>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">NOBLE ALCHUKS NIGERIA LIMITED </center>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">ABRO MINI DEPOT </center>
<center style="font:'Courier New', Courier, mono; font-size:large; text-align:center; font-weight:bold; color:#FF0000 ">Sales Inventory System </br> Version : 2.1 </center>
</br>
<fieldset  style="border-color:#000000 ">
<legend><em style="color:#0033FF ">Form display of customers transactions</em></legend>
<center>
<div style="margin-left:10px ">
<table width="50%"  >
 <tr class="head" style="visibility:hidden "><th width=4%">S/N</th><th width="30%">DESCRIPTION</th><th  width="8%">QUANTITY</th><th  width="5%">RATE</th><th width="8%">AMOUNT</th></tr>
</table>
</div>
<div id="inventory" class="content" style="width:60% ">
<table width="80%">
 <tr class="head" ><th>S/N</th><th width="60%">DESCRIPTION</th><th>QUANTITY</th><th width="7%">RATE</th><th>AMOUNT</th></tr>
<?php 
//if(isset($_POST['nosales'])){
include ("db.php");
$customerid = ($_POST['customerid']);
$date = ($_POST['date1']);
$date2 = ($_POST['date2']);
$transaction = ($_POST['transactionid']);
// query table for goods in stock
$sn=1;
$sum=0;

if(!empty($date) && empty($date2)){
$sql= @mysql_query("SELECT inventory.Description, sales.Quantity, sales.Rate, sales.Amount FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.CustomerId='$customerid' AND sales.Date = '$date' UNION ALL SELECT inventory.Description, debitsales.Quantity, debitsales.Rate, debitsales.Amount FROM debitsales JOIN inventory ON debitsales.ProductCode = inventory.ProductCode WHERE debitsales.CustomerId='$customerid' AND debitsales.Date = '$date' ");
//$sql= @mysql_query("SELECT inventory.Description, sales.Quantity, sales.Rate, sales.Amount FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.Date = '$date' AND sales.CustomerId='$customerid' order by inventory.Date, inventory.Description ASC");
if(@mysql_num_rows($sql) > 0){
//do nothing
}else{
$sql= @mysql_query("SELECT inventory.Description, debitsales.Quantity, debitsales.Rate, debitsales.Amount FROM debitsales JOIN inventory ON debitsales.ProductCode = inventory.ProductCode WHERE debitsales.Date = '$date' AND debitsales.CustomerId='$customerid' order by inventory.Date, inventory.Description ASC");
}

}else if(!empty($date) && !empty($date2)){
$sql= @mysql_query("SELECT inventory.Description, sales.Quantity, sales.Rate, sales.Amount FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.CustomerId='$customerid' AND sales.Date BETWEEN '$date' AND '$date2' UNION ALL SELECT inventory.Description, debitsales.Quantity, debitsales.Rate, debitsales.Amount FROM debitsales JOIN inventory ON debitsales.ProductCode = inventory.ProductCode WHERE debitsales.CustomerId='$customerid' AND debitsales.Date BETWEEN '$date' AND '$date2' ");

}else if(!empty($transaction)){
// $sql= @mysql_query("SELECT inventory.Description, sales.Quantity, sales.Rate, sales.Amount FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.CustomerId='$customerid' order by inventory.Date, inventory.Description ASC");
$sql= @mysql_query("SELECT inventory.Description, sales.Quantity, sales.Rate, sales.Amount FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.CustomerId='$customerid' UNION ALL SELECT inventory.Description, debitsales.Quantity, debitsales.Rate, debitsales.Amount FROM debitsales JOIN inventory ON debitsales.ProductCode = inventory.ProductCode WHERE debitsales.CustomerId='$customerid' ");
}else{
 //do nothing
}
 while($row=@mysql_fetch_array($sql)){
 $description=$row['Description'];
 $quantity = $row['Quantity'];
 $rate = $row['Rate'];
 $amount = $row['Amount'];
 //$totalquantitysold=$row['TotalQuantitySold'];
 $sum = $sum + $amount;

 
?>

<tr class="edit_tr"><td><?php echo $sn ?></td> <td><?php echo $description ?></td> <td><?php echo $quantity ?></td><td><?php echo $rate ?></td><td><?php echo $amount ?></td>

</tr>
<?php
 $sn=$sn +1;
 }//}
 
 
 if(@mysql_num_rows($sql) <=0){
 echo("No Transaction was Found On The Date Specified!!!");
 }
 ?>
 
</table>
</div>
</center>
<div style="font-weight:bolder "><center>Grand Total : <?php echo  $sum ?></center></div>
</fieldset>

<center>
<div style="margin-top:10px ">
<a href="querycustransaction.php">Click to go back</a>	
	</div>
	</center>
<center>
<div style="margin-top:10px ">
<a href="homepage.php">Click to go to home page</a>	
	</div>
	</center>

<div style="margin-top:20px ">
<marquee behavior="scroll"><font   size="+2" face="Times New Roman, Times, serif"><b>This Program Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>
</body>
</html>
