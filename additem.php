<?php
	require_once('auth.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script language="javascript" src="validateInput.js" > </script>


<!-- Function to get supplier id -->
<script  type="text/javascript">
function showUp(){
var e = document.getElementById("supplier");
var str = e.options[e.selectedIndex].value;
document.getElementById("supplierid").value = str;
}
</script>

<script language="javascript">
function additemn(){
var description = document.getElementById("description").value;
var quantity = document.getElementById("quantity").value;
var price =document.getElementById("price").value;
if( description !="" && quantity !="" && price !=""){
var ans = confirm("Are You Sure To Add This Item ?")
if(ans == true){
return ans;
}else{
alert("Item Not Added");
return ans;
}
}
}
</script>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Add Item</title>
<link rel="stylesheet" href="input.css" type="text/css" />
<link rel="stylesheet" href="tab.css" type="text/css" media="screen" />
<link href="tabs.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="comfirm.js" > </script> 

</head>

<body>
<?php
include ("db.php");
?>
</br> 
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">NOBLE ALCHUKS NIGERIA LIMITED </center>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">ABRO MINI DEPOT </center>
<center style="font:'Courier New', Courier, mono; font-size:large; text-align:center; font-weight:bold; color:#FF0000 ">Sales Inventory System </br> Version : 2.1 </center>
</br></br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Today's date : <input type="text" value="<?php echo date("d-m-Y"); ?>" style="border:none; text-align:center " />

<!-- Add Item Form -->
<fieldset style="border:solid ">
<legend><em style="color:#0000CC ">Form for addtion of items</em></legend>
</br>
<div id="additem" class="">
<form action="<?php echo($_SERVER['PHP_SELF']);?>" method="post" name="additem">

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Supplier : 
<?php
  
	$sup= @mysql_query("select * from suppliers order by Supplier ASC");
	
	echo '<select name="supplier" id="supplier"  size="1" width="200"   onChange="showUp()">';
	echo '<option value="">';
	echo 'SELECT SUPPLIER ';
	echo '</option>';
	 while($res= mysql_fetch_array($sup))
	{
	echo '<option value="'.$res['Sn'].'">';
	echo $res['Supplier'];
	echo'</option>';
	}
	echo'</select>';
?>
</br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Description  :  
<?php

//make query to inventory table
$query=@mysql_query("Select * from inventory order by Description ASC");
echo'<select name="description" id="description" size="1">';
echo '<option value="">';
echo 'SELECT PRODUCT DESCRIPTION';
echo '</option>';
while ($row=@mysql_fetch_array($query)){
   echo '<option value="'.$row['ProductCode'].'">';
   echo $row['Description'];
   echo '</option>';
}
echo'</select>';

?>


</br></br>

&nbsp;&nbsp;&nbsp;&nbsp; Quantity : <input type="text" name="quantity" id="quantity" style="border:none "  onKeyUp="validateQuantity(document.additem.quantity)"/> </br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Price : <input type="text" name="price" id="price" style="border:none " onKeyUp="validatePrice(document.additem.price)"  /> </br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="submitproduct" id="submitproduct" value="Click To Add Item"  onClick=" return additemn();"/>
<input type="hidden" value="1" name="proid" id="proid" />
<input type="hidden" name="supplierid" id="supplierid">
</form>

</div>
 </fieldset>	
	
	<div style="margin-top:120px ">
<a href="homepage.php">Click to go to home page</a>	
	</div>
<div style="margin-top:10px ">
<marquee behavior="scroll"><font   size="+2" face="Times New Roman, Times, serif"><b>This Software Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>	
	
	
	<?php
//Code to save Customers Information to dataBase
include ("db.php");
  if(isset($_POST['submitproduct'])){
 
    // $productcode = trim(htmlspecialchars(strtoupper($_POST['productcode'])));
	 $productcode = trim(htmlspecialchars(strtoupper($_POST['description'])));
	 $quantity = trim(htmlspecialchars(strtoupper($_POST['quantity'])));
	 $price =  trim(htmlspecialchars(strtoupper($_POST['price'])));
	  $supplierid =  trim(htmlspecialchars(strtoupper($_POST['supplierid'])));
	 $amount = $quantity * $price;
	 $date = date("d-m-Y");
	  
	 //check if input is entered
	  if (empty($supplierid)){
	  echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Select Supplier')");
	 echo("</script>");
	// return false;
	 exit();
	 }else if (empty($productcode)){
	  echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Select Product Description')");
	 echo("</script>");
	 return false;
	 exit();
	 }else if(empty($quantity)){
	  echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Enter Product Quantity')");
	 echo("</script>");
	 exit();
	}else if(empty($price)){
	 echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Enter The Price of Product')");
	 echo("</script>");
	 exit();
	 }else{
	 
	 
	
	 //make query to inventory table
	  $query= @mysql_query("Select * from inventory where ProductCode='$productcode'");
	  while($row=@mysql_fetch_array($query)){
	   $productcode = $row['ProductCode'];
$quantity1 = $row['Quantity1'];
$quantity2 = $row['Quantity2'];
$quantity3 = $row['Quantity3'];
$price1 = $row['Price1'];
$price2 = $row['Price2'];
$price3 = $row['Price3'];
$total = $row['Total'];
	  
	  }
	
	
     if($total == 0 ){
	  $query1= @mysql_query("Update inventory set Total ='$quantity', Price1= '$price'  where ProductCode='$productcode'");
	 
	 }else if ($total > 0 && $price1 == $price ){
	  $query1= @mysql_query("Update inventory set Total = Total + '$quantity', Price1= '$price'  where ProductCode='$productcode'");
	  
	 }else if ($total > 0 && $price1 > $price ){
	  $query1= @mysql_query("Update inventory set Total = Total + '$quantity', Price1= '$price1'  where ProductCode='$productcode'");
	 } else if ($total > 0 && $price1 < $price ){
	  $query1= @mysql_query("Update inventory set Total = Total + '$quantity', Price1= '$price'  where ProductCode='$productcode'");
	 }else{
	 //do nothing
	 echo ("product not saved");
	 exit;
	 }
	 }
	 
	 $query5= @mysql_query("Insert into purchase (ProductCode, Quantity, Price, Amount, Date, SupplierId) VALUES ('$productcode', '$quantity', '$price', '$amount','$date', '$supplierid')");
	  echo ("Item Added Sucessfully");
	 }
	
 @mysql_close();
?>
 
 
</body>
</html>
