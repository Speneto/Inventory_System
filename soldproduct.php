<?php
	require_once('auth.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Sold Products</title>
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
<legend><em style="color:#0033FF ">Form display of total quantity of each product sold</em></legend>
<center>

<div id="inventory" class="content" style="width:60% ">
<table width="80%">
 <tr class="head" ><th>S/N</th><th width="60%">DESCRIPTION</th><th>TOTAL QUANTITY SOLD</th><th>DATE</th></tr>
<?php 
//if(isset($_POST['nosales'])){
include ("db.php");
$productcode=  ($_POST['description']); 
$date = ($_POST['date']);
$to = ($_POST['to']);
//$to = ($_POST['to']);
// query table for goods in stock
$sn=1;
$sum=0;

/*if(!empty($to) && empty($from)){
 $sql= @mysql_query("SELECT inventory.Description, SUM(sales.Quantity) AS TotalQuantitySold FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.Date = '$to' GROUP BY sales.ProductCode   order by inventory.Description ASC");
}elseif(!empty($from) && empty($to)){
 $sql= @mysql_query("SELECT inventory.Description, SUM(sales.Quantity) AS TotalQuantitySold FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.Date = '$from' GROUP BY sales.ProductCode   order by inventory.Description ASC");
}elseif(empty($from) || empty($to)){
$sql= @mysql_query("SELECT inventory.Description, SUM(sales.Quantity) AS TotalQuantitySold FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode GROUP BY sales.ProductCode   order by inventory.Description ASC");
}else{
 $sql= @mysql_query("SELECT inventory.Description, SUM(sales.Quantity) AS TotalQuantitySold FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.Date BETWEEN '$from' AND '$to' GROUP BY sales.ProductCode   order by inventory.Description ASC");
}*/
if(!empty($productcode) && empty($date)){
$sql= @mysql_query("SELECT inventory.Description, sales.Date, SUM(sales.Quantity) AS TotalQuantitySold FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.ProductCode='$productcode' GROUP BY sales.ProductCode, sales.Date  UNION ALL SELECT inventory.Description, debitsales.Date, SUM(debitsales.Quantity) AS TotalQuantitySold FROM debitsales JOIN inventory ON debitsales.ProductCode = inventory.ProductCode WHERE debitsales.ProductCode='$productcode' GROUP BY debitsales.ProductCode, debitsales.Date  ");

$sql1 = @mysql_query("SELECT sales.Date, SUM(sales.Quantity) AS TotalQuantitySold1 FROM sales WHERE sales.ProductCode='$productcode' ");
$sql2 = @mysql_query("SELECT debitsales.Date, SUM(debitsales.Quantity) AS TotalQuantitySold2 FROM debitsales WHERE debitsales.ProductCode='$productcode' ");


}else if(!empty($productcode) && !empty($date) && !empty($to)){

$sql= @mysql_query("SELECT inventory.Description, sales.Date, SUM(sales.Quantity) AS TotalQuantitySold FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.ProductCode='$productcode' AND sales.Date BETWEEN '$date' AND '$to' GROUP BY sales.ProductCode, sales.Date UNION ALL SELECT inventory.Description, debitsales.Date, SUM(debitsales.Quantity) AS TotalQuantitySold FROM debitsales JOIN inventory ON debitsales.ProductCode = inventory.ProductCode WHERE debitsales.ProductCode='$productcode' AND debitsales.Date BETWEEN '$date' AND '$to' GROUP BY debitsales.ProductCode, debitsales.Date");

$sql1 = @mysql_query("SELECT sales.Date, SUM(sales.Quantity) AS TotalQuantitySold1 FROM sales WHERE sales.ProductCode='$productcode' AND sales.Date BETWEEN '$date' AND '$to' ");
$sql2 = @mysql_query("SELECT debitsales.Date, SUM(debitsales.Quantity) AS TotalQuantitySold2 FROM debitsales WHERE debitsales.ProductCode='$productcode' AND debitsales.Date BETWEEN '$date' AND '$to' ");

}else{

$sql= @mysql_query("SELECT inventory.Description, sales.Date, SUM(sales.Quantity) AS TotalQuantitySold FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.ProductCode='$productcode' AND sales.Date = '$date' GROUP BY sales.ProductCode, sales.Date  UNION ALL SELECT inventory.Description, debitsales.Date, SUM(debitsales.Quantity) AS TotalQuantitySold FROM debitsales JOIN inventory ON debitsales.ProductCode = inventory.ProductCode WHERE debitsales.ProductCode='$productcode' AND debitsales.Date = '$date' GROUP BY debitsales.ProductCode, debitsales.Date  ");

$sql1 = @mysql_query("SELECT sales.Date, SUM(sales.Quantity) AS TotalQuantitySold1 FROM sales WHERE sales.ProductCode='$productcode' AND sales.Date = '$date'  ");
$sql2 = @mysql_query("SELECT debitsales.Date, SUM(debitsales.Quantity) AS TotalQuantitySold2 FROM debitsales WHERE debitsales.ProductCode='$productcode' AND debitsales.Date = '$date' ");

}
//$sql= @mysql_query("SELECT inventory.Description, sales.Date, SUM(sales.Quantity) AS TotalQuantitySold FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.ProductCode='$productcode' AND sales.Date = '$date' UNION ALL SELECT inventory.Description, debitsales.Date, SUM(debitsales.Quantity) AS TotalQuantitySold FROM debitsales JOIN inventory ON debitsales.ProductCode = inventory.ProductCode WHERE debitsales.ProductCode='$productcode' AND debitsales.Date = '$date' ");
//$sql= @mysql_query("SELECT inventory.Description, sales.Date, SUM(sales.Quantity) AS TotalQuantitySold FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.ProductCode='$productcode' GROUP BY sales.ProductCode, sales.Date   order by inventory.Description, sales.Date ASC");
 while($row=@mysql_fetch_array($sql)){
 $description=$row['Description'];
 $totalquantitysold=$row['TotalQuantitySold'];
 $date = $row['Date'];

?>

<tr class="edit_tr"><td><?php echo $sn ?></td> <td><?php echo $description ?></td> <td><?php echo $totalquantitysold ?></td>  <td><?php echo $date ?></td>

</tr>
<?php
 $sn=$sn +1;
 }//}
 if(@mysql_num_rows($sql) <=0){
 echo("No Transaction was Found On The Product Specified!!!");
 
 }
 ?>
 
</table>
</div>
</center>

<?php 
while($row1 =@mysql_fetch_array($sql1)){
 $tot1=$row1['TotalQuantitySold1'];
}
while($row2 =@mysql_fetch_array($sql2)){
 $tot2=$row2['TotalQuantitySold2'];
}
$sum1 = $tot1 + $tot2;
?>
</br>
<center>
Total : <?php echo $sum1; ?>
</center>
</fieldset>
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
