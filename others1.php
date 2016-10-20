<?php
	require_once('auth.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<title>Other Action Page</title>
<link rel="stylesheet" href="input.css" type="text/css" />

 

<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script>

<script language="javascript" src="comfirm.js" > </script>
<script language="javascript" src="validateInput.js?1234" > </script>


<!-- confirm update -->
<script type="text/javascript">
function updated(){
var answer = confirm("Are You Sure To Perform This Operation?")	
if (answer ==true) 
{ 
return answer;
}else{
alert("Update Not Made ");
return answer;
}	

}
</script>


<!-- disable -->
<script  type="text/javascript">
function showUp(){
var e = document.getElementById("action");
var str = e.options[e.selectedIndex].value;
if(str== "RETURNED GOODS"){
document.getElementById("quantity").readOnly= false ;
document.getElementById("description").disabled= false ;

}else if(str=="DISCOUNT ALLOWED"){
document.getElementById("amount").value= "" ;
document.getElementById("total").value= "" ;
document.getElementById("quantity").value= "" ;
document.getElementById("quantity").readOnly= true ;
document.getElementById("description").disabled= true ;
document.others.amount.focus();
}else if (str=="TRANSPORT DEBIT" || str=="TRANSPORT CREDIT"){
document.getElementById("amount").value= "" ;
document.getElementById("total").value= "" ;
document.getElementById("quantity").value= "" ;
document.getElementById("quantity").readOnly= true ;
document.getElementById("description").disabled= true ;
document.others.amount.focus();
}else{
alert("SELECT ACTION TO PERFORM");
return false;
}

}

</script>

<!-- Validate quantity on Others    -->
<script type="text/javascript">
function validate(){	
var format =  /^[0-9]{1,}$/;//text
var quantity = document.getElementById("quantity").value;
var amount = document.getElementById("amount").value;
 if(amount =="" || amount== null){
amount =0;
//return true;
}
if(quantity =="" || quantity==null){
 quantity=0;
 document.getElementById("total").value = parseInt(quantity) * parseInt(amount);
return true;
//} if(document.getElementById("quantity").value.match(format) ){
} if(quantity.match(format) ){
//get total
document.getElementById("total").value = parseInt(quantity) * parseInt(amount);
return true;
}else{
alert("Please Amount Should be Only Numbers e.g 20,50,450,1000 E.T.C");
document.others.quantity.focus();
return false;
}
}
</script>


<!-- Validate Amount on Others    -->
<script type="text/javascript">
function validateamount(){	
var format =  /^[0-9]{1,}$/;//text

var quantity = document.getElementById("quantity").value;
var amount = document.getElementById("amount").value;
 if(quantity =="" || quantity== null){
quantity =1;
//return true;
}
if(amount =="" || amount==null){
 amount=0;
 document.getElementById("total").value = parseInt(quantity) * parseInt(amount);
return true;
//} if(document.getElementById("quantity").value.match(format) ){
} if(amount.match(format) ){
//get total
document.getElementById("total").value = parseInt(quantity) * parseInt(amount);
return true;

}else{
alert("Please Amount Should be Only Numbers e.g 20,50,450,1000 E.T.C");
document.others.amount.focus();
return false;
}
}
</script>


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
<legend><em style="color:#0033FF ">Other Actions form</em></legend>
Options: </br>
1. Return goods </br>
2. Discount allowed </br>
3. Transport debit/credit </br>
<center>
<form method="post" action="<?php echo($_SERVER['PHP_SELF'])?>" name="others" >
<table >
<tr class="">
<td>
Name : 

<?php
$query= @mysql_query("Select * from customer order by Name ASC ");
echo '<select name="customername"  id="customername" size="1" nChange="showUp()">' ;
echo '<option value="">';
echo 'SELECT CUSTOMER NAME';
echo '</option>';
while ($row=@mysql_fetch_array($query))
{
echo '<option value="'.$row['CustomerId'].'">';
echo $row['Name'];
echo '</option>';
}
echo '</select>';
?>
</td>

<td>
Quantity : <input type="text" name="quantity" id="quantity"  style="border:none"  onKeyUp ="return validate();"/> 
</td>
</tr>

<tr></tr><tr></tr><tr></tr><tr></tr>

<tr>
<td>
<div style="margin-Right:15px ">
Action : 

<?php

echo '<select name="action"  id="action" size="1" onChange="showUp()">' ;
echo '<option value="">';
echo 'SELECT ACTION TO PERFORM';
echo '</option>';

echo '<option value="RETURNED GOODS">';
echo 'RETURNED GOODS';
echo '</option>';

echo '<option value="DISCOUNT ALLOWED">';
echo 'DISCOUNT ALLOWED';
echo '</option>';

echo '<option value="TRANSPORT DEBIT">';
echo 'TRANSPORT DEBIT';
echo '</option>';

echo '<option value="TRANSPORT CREDIT">';
echo 'TRANSPORT CREDIT';
echo '</option>';

echo '</select>';
?>
</div>
</td>

<td>
&nbsp;Amount : <input type="text" name="amount" id="amount" value=""  style="border:none" onKeyUp="return validateamount();"/>
</td>
</tr>

<tr></tr><tr></tr><tr></tr><tr></tr>

<tr>
<td>
&nbsp; Description :

<?php
$query= @mysql_query("Select * from inventory order by Description ASC ");
echo '<select name="description"  id="description" size="1" >' ;
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total : <input type="text" name="total" id="total" value=""  style="border:none"  readonly="readonly"/>
</td>
</tr>

<tr></tr><tr></tr><tr></tr><tr></tr>
<tr>
<td>
<div style="margin-right:90px ">Date : <input type="text" name="datee" id="datee"  class="tcal" style="background-color:#D5EAF0 "    value="Select Date Good Sold" /> </div> </br></br>
</td>
</tr>


<tr>
<td><div style="margin-left:200px "> <input type="submit" name="update" value="Click To Update"  onClick="return updated();" /></div> </td>

</tr>
</table>

</form>
</center>
</fieldset>


<center>
<div style="margin-top:40px ">
<a href="extra.php">Click to go back</a>	
	</div>
<div style="margin-top:10px ">
<a href="homepage.php">Click to go to home page</a>	
	</div>
	</center>

<div style="margin-top:10px ">
<marquee behavior="scroll"><font   size="+2" face="Times New Roman, Times, serif"><b>This Software Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>

<?php
if(isset($_POST['update'])){

$customername =  trim(htmlspecialchars(strtoupper($_POST['customername'])));
$action= trim(htmlspecialchars(strtoupper($_POST['action'])));
//$description= trim(htmlspecialchars(strtoupper($_POST['description'])));
$quantity= trim(htmlspecialchars(strtoupper($_POST['quantity'])));
$amount =  trim(htmlspecialchars(strtoupper($_POST['amount'])));
$total =  trim(htmlspecialchars(strtoupper($_POST['total'])));
$datee = trim(htmlspecialchars(strtoupper($_POST['datee'])));

$date = date("Y-m-d");

if($customername =="" || $customername == "SELECT CUSTOMER NAME" ){
echo ("<script type='text/javascript'\n>");
echo ("alert('Please Select Customer Name')");
echo ("</script>");
exit;
}else if ($action =="" || $action == "SELECT ACTION TO PERFORM"){
echo ("<script type='text/javascript'\n>");
echo ("alert('Please Select Action To Perform')");
echo ("</script>");
exit;
}else if($action =="RETURNED GOODS" ){
$description= trim(htmlspecialchars(strtoupper($_POST['description'])));
if ($description =="" || $description == "SELECT PRODUCT DESCRIPTION "){
echo ("<script type='text/javascript'\n>");
echo ("alert('Please Select Product Description')");
echo ("</script>");
exit;
}else if ($quantity =="" ){
echo ("<script type='text/javascript'\n>");
echo ("alert('Please Enter Quantity To Return')");
echo ("</script>");
exit;
}else if ($amount =="" ){
echo ("<script type='text/javascript'\n>");
echo ("alert('Please Enter Price of Goods Sold')");
echo ("</script>");
exit;
}
//Insert goods to return table
$sql = @mysql_query("Insert into returnedgoods (CustomerId, ProductCode, Quantity, Amount, Total, Date) VALUES ('$customername', '$description','$quantity', '$amount', '$total', '$date')");
//Return goods to inventory
$sql2 = @mysql_query("Update inventory set Total= Total+'$quantity' where ProductCode='$description' ");

//remove goods from sales 
$query = @mysql_query("Select * from sales where CustomerId='$customername' && ProductCode='$description' && Date ='$datee'");
while($rw= @mysql_fetch_array($query)){
$qty = $rw['Quantity'];
$rate = $rw['Rate'];
}
if($qty == $quantity){
$sql1 = @mysql_query("Delete from sales where CustomerId = '$customername' && ProductCode='$description' && Date ='$datee' ");
}else if ($qty > $quantity){
$qtyleft = $qty - $quantity;
$amount = $qtyleft * $rate;
$sql1 = @mysql_query("Update sales set Quantity = Quantity - '$quantity', Amount='$amount' where CustomerId = '$customername'  && ProductCode='$description' && Date ='$datee' ");

}else{
//do nothing

}

//remove goods from  debitsales
$query = @mysql_query("Select * from debitsales where CustomerId='$customername' && ProductCode='$description' && Date ='$datee'");
while($rw= @mysql_fetch_array($query)){
$qty = $rw['Quantity'];
$rate = $rw['Rate'];
}
if($qty == $quantity){
$sql1 = @mysql_query("Delete from debitsales where CustomerId = '$customername' && ProductCode='$description' && Date ='$datee' ");
}else if ($qty > $quantity){
$qtyleft = $qty - $quantity;
$amount = $qtyleft * $rate;
$sql1 = @mysql_query("Update debitsales set Quantity = Quantity - '$quantity', Amount='$amount' where CustomerId = '$customername'  && ProductCode='$description' && Date ='$datee' ");
}else{
//do nothing
}
//update updated balance
$sql3 = @mysql_query("Select * from updatedbalance where CustomerId='$customername'");
while($row= @mysql_fetch_array($sql3)){
$oldbal = $row['Balance'];
}
//$amtpaid = 0;
$newbal = $oldbal + $total;
if(@mysql_num_rows($sql3) > 0){
$update = @mysql_query("Update updatedbalance set Balance=Balance+'$total', Date='$date' where CustomerId='$customername' ");
$sql4 =  @mysql_query("Insert into balances (CustomerId, OldBalance, AmountPaid, Total, NewBalance, Date) VALUES ('$customername', '$oldbal','$total', '$action', '$newbal', '$date')");
}else{
$oldbal = 0;
$update = @mysql_query("Insert into updatedbalance (CustomerId, Balance, Date) VALUES ('$customername', '$total', '$date')");
$sql4 =  @mysql_query("Insert into balances (CustomerId, OldBalance, AmountPaid, Total, NewBalance, Date) VALUES ('$customername', '$oldbal','$total', '$action', '$total', '$date')");
}
if(@mysql_affected_rows() > 0){
    // echo ("Returned Made Successfully ");
	echo ("<script type='text/javascript'>\n");
	echo ("alert('Goods Returned Successfully')");
	echo ("</script>"); 
   }else{
   // echo ("Deposit Not Made");
   echo ("<script type='text/javascript'>\n");
	echo ("alert('Goods Not Returned Successfully')");
	echo ("</script>"); 
   }
}else if($action =="DISCOUNT ALLOWED"){
if ($amount =="" ){
echo ("<script type='text/javascript'\n>");
echo ("alert('Please Enter Discount Allowed')");
echo ("</script>");
exit;
}
$sql =  @mysql_query("Insert into discount (CustomerId, Action, Amount, Date) VALUES ('$customername', '$action', '$amount', '$date')");

//update updated balance
$sql2 = @mysql_query("Select * from updatedbalance where CustomerId='$customername'");
while($row= @mysql_fetch_array($sql2)){
$oldbal = $row['Balance'];
}
$newbal = $oldbal + $total;
if(@mysql_num_rows($sql2) > 0){
$update = @mysql_query("Update updatedbalance set Balance=Balance+'$total', Date='$date' where CustomerId='$customername' ");
$sql3 =  @mysql_query("Insert into balances (CustomerId, OldBalance, AmountPaid, Total, NewBalance, Date) VALUES ('$customername', '$oldbal','$total', '$action', '$newbal', '$date')");
}else{
$oldbal = 0;
$update = @mysql_query("Insert into updatedbalance (CustomerId, Balance, Date) VALUES ('$customername', '$total', '$date')");
$sql3 =  @mysql_query("Insert into balances (CustomerId, OldBalance, AmountPaid, Total, NewBalance, Date) VALUES ('$customername', '$oldbal','$total', '$action', '$total', '$date')");
}
if(@mysql_affected_rows() > 0){
    // echo ("Deposit Made Successfully ");
	echo ("<script type='text/javascript'>\n");
	echo ("alert('Discount Made Successfully')");
	echo ("</script>"); 
   }else{
   // echo ("Deposit Not Made");
   echo ("<script type='text/javascript'>\n");
	echo ("alert('Discount Not Made')");
	echo ("</script>"); 
   }
}else if($action =="TRANSPORT DEBIT"){
if ($amount =="" ){
echo ("<script type='text/javascript'\n>");
echo ("alert('Please Enter Amount To Debit For Transport')");
echo ("</script>");
exit;
}
$sql =  @mysql_query("Insert into discount (CustomerId, Action, Amount, Date) VALUES ('$customername', '$action', '$amount', '$date')");
//update updated balance
$sql2 = @mysql_query("Select * from updatedbalance where CustomerId='$customername'");
while($row= @mysql_fetch_array($sql2)){
$oldbal = $row['Balance'];
}
$newbal = $oldbal - $total;
if(@mysql_num_rows($sql2) > 0){
$update = @mysql_query("Update updatedbalance set Balance=Balance-'$total', Date='$date' where CustomerId='$customername' ");
$sql3 =  @mysql_query("Insert into balances (CustomerId, OldBalance, AmountPaid, Total, NewBalance, Date) VALUES ('$customername', '$oldbal','$total', '$action', '$newbal', '$date')");
}else{
$oldbal = 0;
$total = -$total;
$update = @mysql_query("Insert into updatedbalance (CustomerId, Balance, Date) VALUES ('$customername', '$total', '$date')");
$sql3 =  @mysql_query("Insert into balances (CustomerId, OldBalance, AmountPaid, Total, NewBalance, Date) VALUES ('$customername', '$oldbal','$total', '$action', '$total', '$date')");
}
if(@mysql_affected_rows() > 0){
    // echo ("Deposit Made Successfully ");
	echo ("<script type='text/javascript'>\n");
	echo ("alert('Transport Debit Made Successfully')");
	echo ("</script>"); 
   }else{
   // echo ("Deposit Not Made");
   echo ("<script type='text/javascript'>\n");
	echo ("alert('Transport Debit Not Made')");
	echo ("</script>"); 
   }
}else if($action =="TRANSPORT CREDIT"){
if ($amount =="" ){
echo ("<script type='text/javascript'\n>");
echo ("alert('Please Enter Amount To Credit For Transport')");
echo ("</script>");
exit;
}
$sql =  @mysql_query("Insert into discount (CustomerId, Action, Amount, Date) VALUES ('$customername', '$action', '$amount', '$date')");

//update updated balance
$sql2 = @mysql_query("Select * from updatedbalance where CustomerId='$customername'");
while($row= @mysql_fetch_array($sql2)){
$oldbal = $row['Balance'];
}
$newbal = $oldbal + $total;
if(@mysql_num_rows($sql2) > 0){
$update = @mysql_query("Update updatedbalance set Balance=Balance+'$total', Date='$date' where CustomerId='$customername' ");
$sql3 =  @mysql_query("Insert into balances (CustomerId, OldBalance, AmountPaid, Total, NewBalance, Date) VALUES ('$customername', '$oldbal','$total', '$action', '$newbal', '$date')");
}else{
$oldbal = 0;
$update = @mysql_query("Insert into updatedbalance (CustomerId, Balance, Date) VALUES ('$customername', '$total', '$date')");
$sql3 =  @mysql_query("Insert into balances (CustomerId, OldBalance, AmountPaid, Total, NewBalance, Date) VALUES ('$customername', '$oldbal','$total', '$action', '$total', '$date')");
}



if(@mysql_affected_rows() > 0){
    // echo ("Deposit Made Successfully ");
	echo ("<script type='text/javascript'>\n");
	echo ("alert('Transport Credit Made Successfully')");
	echo ("</script>"); 
   }else{
   // echo ("Deposit Not Made");
   echo ("<script type='text/javascript'>\n");
	echo ("alert('Transport Credit Not Made')");
	echo ("</script>"); 
   }
}



}
?>



</body>
</html>
