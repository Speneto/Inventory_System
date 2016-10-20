
<?php
	require_once('auth.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title>Edit Product Page</title>
<link rel="stylesheet" href="input.css" type="text/css" />
<script language="javascript" src="comfirm.js?1234" > </script>
<script language="javascript" src="validateInput.js?12345678" > </script>


<!-- Function to search for Product -->
<script   type="text/javascript">
function showUp(){
var e = document.getElementById("description");
var str = e.options[e.selectedIndex].value;
str +='&' + (new Date()).getTime();//solve caching issue
if(str == "" || str=="SELECT PRODUCT DESCRIPTION"){
alert("Please Select product description");
return;
}
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}else{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4 && xmlhttp.status == 200  ){
var string = xmlhttp.responseText;
var array = string.split(',');
document.getElementById("quantity1").value = array[0];
document.getElementById("quantity2").value = array[1];
document.getElementById("quantity3").value = array[2];
document.getElementById("price1").value = array[3];
document.getElementById("price2").value = array[4];
document.getElementById("price3").value = array[5];
document.getElementById("sellprice").value = array[6];
document.getElementById("qtyperctn").value = array[7];
document.getElementById("name").value = array[8];
}
}
xmlhttp.open("GET","editproduct1.php?q="+str,true);
xmlhttp.send();
}
</script>


<!-- Function to search for Product 
<script   type="text/javascript">
function showUp(){
var e = document.getElementById("description");
var str = e.options[e.selectedIndex].value;

if(str == "" || str=="SELECT PRODUCT DESCRIPTION"){
alert("Please Select product description");
return;
}
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}else if(window.ActiveXObject){
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
//if(xmlhttp){
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4 && xmlhttp.status == 200  ){


var string = xmlhttp.responseText;
//alert(string);
var array = string.split(',');
document.getElementById("quantity1").value = array[0];
document.getElementById("quantity2").value = array[1];
document.getElementById("quantity3").value = array[2];
document.getElementById("price1").value = array[3];
document.getElementById("price2").value = array[4];
document.getElementById("price3").value = array[5];
document.getElementById("sellprice").value = array[6];

}
}
//}else{
//alert("no");
//}
xmlhttp.open("POST",editproduct1.php,true);
xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
xmlhttp.send(+str);
return true;

}
</script>-->


</head>

<body>
</br>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">NOBLE ALCHUKS NIGERIA LIMITED </center>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">ABRO MINI DEPOT </center>
<center style="font:'Courier New', Courier, mono; font-size:large; text-align:center; font-weight:bold; color:#FF0000 ">Sales Inventory System </br> Version : 2.1 </center>

<?php
include("db.php");
?>

</br></br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Today's date : <input type="text" value="<?php echo date("d-m-Y"); ?>" style="border:none; text-align:center " />
</br>
<fieldset style="border-color:#000000 ">
<legend><em style="color:#0033FF ">Edit product and price form</em></legend>
<center>
<form method="post" action="<?php echo($_SERVER['PHP_SELF'])?>" name="editproduct" >
<table>
<tr class="">
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Description :

<?php

$query= @mysql_query("Select * from inventory order by Description ASC ");
echo '<select name="description"  id="description" size="1" onChange="showUp()">' ;
echo '<option value="">';
echo 'SELECT PRODUCT DESCRIPTION';
echo '</option>';
while ($row=@mysql_fetch_array($query))
{
echo '<option value="'.$row['ProductCode'].'">';
echo $row['Description'];
echo '</option>';
}
echo '</select>';
?>
</td>

<td>
&nbsp;Name : <input type="text" name="name" id="name" style="border:none" />
</td>
</tr>



<tr>
<td>Quantity1 : <input type="text" name="quantity1" id="quantity1"  style="border:none" onKeyUp="validateEditquantity1(document.editproduct.quantity1)"/></td>
<td>Price1 : <input type="text" name="price1" id="price1" value=""  style="border:none" onKeyUp="validateEditprice1(document.editproduct.price1)"/></td>
</tr>

<tr>
<td>Quantity2 : <input type="text" name="quantity2" id="quantity2"  style="border:none" onKeyUp="validateEditquantity2(document.editproduct.quantity2)"/></td>
<td>Price2 : <input type="text" name="price2" id="price2" value="" style="border:none" onKeyUp="validateEditprice2(document.editproduct.price2)" /></td>
</tr>

<tr>
<td>Quantity3 : <input type="text" name="quantity3" id="quantity3"  style="border:none" onKeyUp="validateEditquantity3(document.editproduct.quantity3)"/></td>
<td>Price3 : <input type="text" name="price3" id="price3" value="" style="border:none" onKeyUp="validateEditprice3(document.editproduct.price3)" /></td>
</tr>
<tr>
<td>&nbsp;SellPrice : <input type="text" name="sellprice" id="sellprice" style="border:none " onKeyUp="validateEditSellprice(document.editproduct.sellprice)" /></td>
<td>Qty/Ctn:<input type="text" name="qtyperctn" id="qtyperctn" style="border:none "  onKeyUp="validateqtypercnt(document.editproduct.qtyperctn)" /></td>
</tr>
<tr>
<td><input type="submit" name="edit" value="Edit Product" onClick="return editproduct();" /></td>
<td><input type="submit" name="delete" value="Delete Product" onClick="return deleteproduct();"  /></td>
</tr>
</table>
</form>
</center>
</fieldset>


<center>
<div style="margin-top:100px ">
<a href="homepage.php">Click to go to home page</a>	
	</div>
	</center>

<div style="margin-top:10px ">
<marquee behavior="scroll"><font   size="+2" face="Times New Roman, Times, serif"><b>This Software Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>

<?php
if(isset($_POST['edit'])){

$productcode=  trim(htmlspecialchars(strtoupper($_POST['description'])));
$quantity1= trim(htmlspecialchars(strtoupper($_POST['quantity1'])));
$quantity2= trim(htmlspecialchars(strtoupper($_POST['quantity2'])));
$quantity3= trim(htmlspecialchars(strtoupper($_POST['quantity3'])));
$price1 =  trim(htmlspecialchars(strtoupper($_POST['price1'])));
$price2 =  trim(htmlspecialchars(strtoupper($_POST['price2'])));
$price3 =  trim(htmlspecialchars(strtoupper($_POST['price3'])));
$sellprice =  trim(htmlspecialchars(strtoupper($_POST['sellprice'])));
$qtyperctn =  trim(htmlspecialchars(strtoupper($_POST['qtyperctn'])));
$name =  trim(htmlspecialchars(strtoupper($_POST['name'])));
$total= $quantity1 + $quantity2 + $quantity3;
if(empty($productcode)){
echo("<script type='text/javascript'>\n");
echo("alert('Please Select Product Description')");
echo ("</script>");
exit();
}else{
$query=@mysql_query("Update inventory set Description='$name', Total='$quantity1', Quantity2='$quantity2', Quantity3='$quantity3', Price1='$price1', Price2='$price2', Price3='$price3', Total='$total', SellingPrice='$sellprice', QuantityPerCtn='$qtyperctn' where ProductCode='$productcode'");

if(@mysql_affected_rows() > 0){
echo("<script type='text/javascript'>\n");
echo("alert('Product Edited Successfully')");
echo ("</script>");
exit();
}else{
 echo("<script type='text/javascript'>\n");
echo("alert('Product Not Edited Successfully')");
echo ("</script>");
exit();
}
}
//@mysql_close();
}

if(isset($_POST['delete'])){
  $productcode=  trim(htmlspecialchars(strtoupper($_POST['description'])));
  if(empty($productcode)){
echo("<script type='text/javascript'>\n");
echo("alert('Please Select a Product')");
echo ("</script>");
exit();
}else{
$query=@mysql_query("Delete from inventory where ProductCode='$productcode'");

if(@mysql_affected_rows() > 0){
echo("<script type='text/javascript'>\n");
echo("alert('Product Deleted Successfully')");
echo ("</script>");
exit();
}else{
 echo("<script type='text/javascript'>\n");
echo("alert('Product Not Deleted Successfully')");
echo ("</script>");
exit();
}
}  
}
@mysql_close($bd);
?>



</body>
</html>
