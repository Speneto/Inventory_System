
<?php
	require_once('auth.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Debtors</title>
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
<legend><em style="color:#0033FF ">Form display of Debtors </em></legend>
<center>

<div id="inventory" class="content" style="width:60% ">
<table width="80%">
 <tr class="head" ><th>S/N</th><th width="60%">NAME</th><th>AMOUNT</th><th>DATE</th></tr>
<?php 
if(isset($_POST['debtors'])){
include ("db.php");
$ba=0;
$sn=1;

$sql1 = @mysql_query("SELECT SUM(updatedbalance.Balance) AS Total FROM updatedbalance WHERE updatedbalance.Balance < '$ba' ");
 while($row1=@mysql_fetch_array($sql1)){
 $sum = abs($row1['Total']);
 }

//$sql= @mysql_query("SELECT inventory.Description, sales.Quantity, sales.Rate, sales.Amount FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.CustomerId='$customerid' AND sales.Date = '$date' UNION ALL SELECT inventory.Description, debitsales.Quantity, debitsales.Rate, debitsales.Amount FROM debitsales JOIN inventory ON debitsales.ProductCode = inventory.ProductCode WHERE debitsales.CustomerId='$customerid' AND debitsales.Date = '$date' ");
 $sql = @mysql_query("SELECT customer.Name, updatedbalance.Balance,  updatedbalance.Date FROM updatedbalance JOIN customer ON customer.CustomerId = updatedbalance.CustomerId WHERE updatedbalance.Balance < '$ba' order by updatedbalance.Date ASC ");
 while($row=@mysql_fetch_array($sql)){
 $name=$row['Name'];
 $bal= abs ($row['Balance']);
 $date = $row['Date'];
 

?>

<tr class="edit_tr"><td><?php echo $sn ?></td> <td><?php echo $name ?></td> <td><?php echo $bal ?></td>  <td><?php echo $date ?></td>

</tr>
<?php
 $sn=$sn +1;
 }}
 
 ?>
 
</table>

</div>
</br>
Total : <?php echo $sum;  ?>
</center>
</fieldset>
<div style="margin-top:45px ">
<center>
<a href="debtors.php">Click to go back</a>
</center>
</div>

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
