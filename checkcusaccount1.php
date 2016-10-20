<?php
	require_once('auth.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Customer account</title>
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
<legend><em style="color:#0033FF ">Form display of customers account</em></legend>
<center>
<div style="margin-right:30px ">
<table width="55%"  >
  <tr class="head" style="visibility:hidden " ><th>S/N</th><th>OLDBAL</th><th>SUPPLY/DEPOSIT</th><th>AMOUNT PAID</th><th>NEWBAL</th><th width="15%">DATE</th></tr>
</table>
</div>
 <div id="inventory" class="content" style="width:80% ">
<table width="70%">

 <tr class="head" ><th>S/N</th><th>OLDBAL</th><th>SUPPLY/DEPOSIT</th><th>AMOUNT PAID</th><th>NEWBAL</th><th>DATE</th></tr>

<?php 
//if(isset($_POST['nosales'])){
include ("db.php");
$customerid = ($_POST['customerid']);

// query table for customer account
$sn=1;
$sum=0;

if(!empty($customerid)){
 //$sql= @mysql_query("SELECT inventory.Description, sales.Quantity, sales.Rate, sales.Amount FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.Date = '$date' AND sales.CustomerId='$customerid' order by inventory.Date, inventory.Description ASC");
$sql = @mysql_query("Select * from balances where CustomerId='$customerid'");
}else{
 //do nothing
}
 while($row=@mysql_fetch_array($sql)){
 $oldbal=$row['OldBalance'];
 $amtpaid = $row['AmountPaid'];
 $total = $row['Total'];
 $newbal = $row['NewBalance'];
 $date = $row['Date'];
 //$totalquantitysold=$row['TotalQuantitySold'];
// $sum = $sum + $amount;

 
?>

<tr class="edit_tr"><td><?php echo $sn ?></td> <td><?php echo $oldbal ?></td> <td><?php echo $total ?></td><td><?php echo $amtpaid ?></td><td><?php echo $newbal ?></td><td><?php echo $date ?></td>

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

</fieldset>

<center>
<div style="margin-top:30px ">
<a href="checkcusaccount.php">Click to go back</a>	
	</div>
	</center>
<center>
<div style="margin-top:10px ">
<a href="homepage.php">Click to go to home page</a>	
	</div>
	</center>

<div style="margin-top:10px ">
<marquee behavior="scroll"><font   size="+2" face="Times New Roman, Times, serif"><b>This Software Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>
</body>
</html>
