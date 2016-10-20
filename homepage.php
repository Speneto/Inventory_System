<?php
	require_once('auth.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Home Page</title>

<link rel="stylesheet" href="tab.css" type="text/css" media="screen" />
<link href="tabs.css" rel="stylesheet" type="text/css" />
</head>

<body>
</br>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">NOBLE ALCHUKS NIGERIA LIMITED </center>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">ABRO MINI DEPOT </center>
<center style="font:'Courier New', Courier, mono; font-size:large; text-align:center; font-weight:bold; color:#FF0000 ">Sales Inventory System </br> Version : 2.1 </center>
</br>
<div style="margin-left:950px ">
Date : <input type="text" value="<?php echo (date("Y-m-d"))?>"  style="border:none; text-align:left "/>
</div>
<fieldset  style="border-color:#0066FF ">
<table width="100%">
<tr style="color:#FF0000; "><th style="text-align:left ">HEAD OFFICE</th></tr>
<tr style="text-align:left "><td>No. 53 Mubi Road,</br>Jimeta - Yola</br>Adamawa State</br>0816375753250, 070125599884</td>
</tr>
</table>

</fieldset>
</br></br>

<ol id="toc">
    <li><a href="inventory.php"><span>Inventory</span></a></li>
    <li><a href="sales.php"><span>Make Sales</span></a></li>
    <li><a href="addcustomer.php"><span>Add Customer</span></a></li>
	 <li><a href="customerquery.php"><span>Customer Query</span></a></li>
	<li><a href="additem.php"><span>Add Item</span></a></li>
    <li><a href="addproduct.php"><span>Add Product</span></a></li>
	<li><a href="generalquery.php"><span>Product Query</span></a></li>
	<li><a href="addsuppliers.php"><span>Add Supplier</span></a></li>
    <li><a href="editproduct.php"><span>Edit Price/Quantity</span></a></li>
	<li><a href="deposit.php"><span>Deposit/Bal</span></a></li>
	<li><a href="printdailysales.php"><span>Print Daily Sales</span></a></li>
	<li><a href="printpurchase.php"><span>Print Purchase</span></a></li>
	<li><a href="extra.php"><span>More</span></a></li>
	<li><a href="index.php"><span>Logout</span></a></li>
	
</ol>
<div style="margin-top:200px ">
<marquee behavior="scroll"><font   size="+2" face="Times New Roman, Times, serif"><b>This Software Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>
</body>
</html>
