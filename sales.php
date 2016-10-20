<?php
	require_once('auth.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Sales Form</title>
<link rel="stylesheet" href="input.css" type="text/css" />
<link rel="stylesheet" href="table.css" type="text/css" />
<script language="javascript" src="printss1.js?12345" > </script>
<script type="text/javascript" src="tcal.js"></script> 
<script language="javascript" src="addamountt.js?12345678901234" > </script>
<script language="javascript" src="comfirm.js" > </script>
<script language="javascript" src="getsellingpriceeee.js?1234" > </script>
<script language="javascript" src="multiplyqtyyy.js?1234567891234" > </script>

<!-- Reset   -->
<script type="text/javascript" src="jquery-1.9.1.min.js" ></script>
<script language="javascript">
$('document').ready(function(){
$('#reset').click(function(){
var line_no = document.getElementById("resett").value;
if(line_no=="" || line_no==null){
alert("Please Enter No Of Line to Reset");
return;
}else if(line_no==1){
document.getElementById("quantity1").value =""; document.getElementById("price1").value =""; document.getElementById("amount1").value =0;
 document.getElementById("resett").value ="";
}else if(line_no==2){
document.getElementById("quantity2").value =""; document.getElementById("price2").value =""; document.getElementById("amount2").value =0;
 document.getElementById("resett").value ="";
}else if(line_no==3){
document.getElementById("quantity3").value =""; document.getElementById("price3").value =""; document.getElementById("amount3").value =0;
 document.getElementById("resett").value ="";
}else if(line_no==4){
document.getElementById("quantity4").value =""; document.getElementById("price1").value =""; document.getElementById("amount1").value =0;
 document.getElementById("resett").value ="";
}else if(line_no==5){
document.getElementById("quantity5").value =""; document.getElementById("price5").value =""; document.getElementById("amount5").value =0;
 document.getElementById("resett").value ="";
}else if(line_no==6){
document.getElementById("quantity1").value =""; document.getElementById("price6").value =""; document.getElementById("amount6").value =0;
 document.getElementById("resett").value ="";
}else if(line_no==7){
document.getElementById("quantity7").value =""; document.getElementById("price7").value =""; document.getElementById("amount7").value =0;
 document.getElementById("resett").value ="";
}else if(line_no==8){
document.getElementById("quantity8").value =""; document.getElementById("price8").value =""; document.getElementById("amount8").value =0;
 document.getElementById("resett").value ="";
}else if(line_no==9){
document.getElementById("quantity9").value =""; document.getElementById("price9").value =""; document.getElementById("amount9").value =0;
 document.getElementById("resett").value ="";
}else if(line_no==10){
document.getElementById("quantity10").value =""; document.getElementById("price10").value =""; document.getElementById("amount10").value =0;
 document.getElementById("resett").value ="";
}else if(line_no==11){
document.getElementById("quantity11").value =""; document.getElementById("price11").value =""; document.getElementById("amount11").value =0;
 document.getElementById("resett").value ="";
}else{
alert("You Entered a Wrong Line No!");
document.getElementById("resett").value ="";
}


});
});
</script>


<!--Function to get discount -->
<script type="text/javascript">
function discount(){
var format =  /^[0-9-]{1,}$/;
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
var discount = document.getElementById("discount").value;

//Test if discount, amount paid and old balance are  empty
//if(amtpaid=="" || amtpaid== null && oldbal=="" || oldbal==null && discount=="" || discount==null){
if(amtpaid=="" && oldbal=="" && discount=="" ){
amtpaid = 0;
oldbal = 0;
discount = 0;
document.getElementById("newbal").value = parseInt(-total)  + parseInt(amtpaid) + parseInt(oldbal) + parseInt(discount);
//alert(oldbal);
//alert(1);

//}else if(discount=="" || discount== null && oldbal != "" || oldbal != null && amtpaid !="" || amtpaid != null){
}else if(discount==""   && oldbal != ""  && amtpaid !="" ){
discount =0;
document.getElementById("newbal").value = parseInt(-total)  + parseInt(amtpaid) + parseInt(oldbal) + parseInt(discount);
//alert(2);

//}else if (oldbal=="" || oldbal==null && amtpaid !="" || amtpaid != null && discount !="" || discount != null ){
}else if (oldbal==""  && amtpaid !=""  && discount !="" ){
oldbal= 0;
document.getElementById("newbal").value = parseInt(-total)  + parseInt(amtpaid) + parseInt(oldbal) + parseInt(discount);
//alert(3);

//}else if (oldbal !="" || oldbal !=null && amtpaid =="" || amtpaid == null && discount !="" || discount != null ){
}else if (oldbal !="" && amtpaid =="" && discount !="" ){
amtpaid= 0;
document.getElementById("newbal").value = parseInt(-total)  + parseInt(amtpaid) + parseInt(oldbal) + parseInt(discount);
//alert(4);
//}else if (oldbal =="" || oldbal==null && amtpaid !="" || amtpaid != null && discount =="" || discount == null ){
}else if (oldbal ==""  && amtpaid !=""  && discount ==""  ){
discount = 0;
oldbal = 0;
document.getElementById("newbal").value = parseInt(-total)  + parseInt(amtpaid) + parseInt(oldbal) + parseInt(discount);

//}else if (oldbal !="" || oldbal!=null && amtpaid =="" || amtpaid == null && discount =="" || discount == null ){
}else if (oldbal !=""  && amtpaid =="" && discount =="" ){
discount = 0;
amtpaid = 0;
document.getElementById("newbal").value = parseInt(-total)  + parseInt(amtpaid) + parseInt(oldbal) + parseInt(discount);

//}else if (oldbal =="" || oldbal==null && amtpaid =="" || amtpaid == null && discount !="" || discount != null ){
}else if (oldbal =="" && amtpaid =="" && discount !="" ){
oldbal = 0;
amtpaid = 0;
document.getElementById("newbal").value = parseInt(-total)  + parseInt(amtpaid) + parseInt(oldbal) + parseInt(discount);

}else {
document.getElementById("newbal").value = parseInt(-total)  + parseInt(amtpaid) + parseInt(oldbal) + parseInt(discount);
}

}
</script>

<!-- Function to Validate Old Balance  -->
<script type="text/javascript">
function getBalance(){
var format =  /^[0-9-]{1,}$/;
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;

//Test if both amount paid and old balance are  empty
if(amtpaid=="" || amtpaid== null && oldbal=="" || oldbal==null){
amtpaid = 0;
document.getElementById("newbal").value = parseInt(-total)  + parseInt(amtpaid);
//document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);
}

 //Test if old balance is empty but amount paid is not
 if(oldbal=="" || oldbal== null){
oldbal = 0;
document.getElementById("newbal").value = parseInt(-total)  + parseInt(amtpaid);

}else if(document.getElementById("oldbal").value.match(format)){

//Both are not empty
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);
}else{
alert("Please Quantity Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.oldbal.focus();
return false;
}
}
</script>

<!-- Function to Get new Balance  -->
<script type="text/javascript">
function getNewBalance(){
var format =  /^[0-9]{1,}$/;
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;

//Test if both amount paid and old balance are not empty
if(amtpaid=="" || amtpaid== null && oldbal=="" || oldbal==null){
oldbal = 0;
document.getElementById("newbal").value = parseInt(-total)  + parseInt(oldbal);
//document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);
}

 
 //Test if amount paid is not empty butold balance is empty
if( oldbal=="" || oldbal==null){
oldbal = 0;
document.getElementById("newbal").value = parseInt(-total)  + parseInt(amtpaid);
//document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);
} 
  
  //Test if  amount paid is empty and old balance is not
 if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
document.getElementById("newbal").value = parseInt(-total)  + parseInt(oldbal);

}else if(document.getElementById("amtpaid").value.match(format)){

//Both of them are not
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);
}else{
alert("Please Quantity Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.amtpaid.focus();
return false;
}
}
</script>

<!-- Function to search for Old Balance Using Customers Code -->
<script   type="text/javascript">
function showUp(){
var e = document.getElementById("customer");
var str = e.options[e.selectedIndex].value;

str +='&' + (new Date()).getTime();
if(str == "" || str=="SELECT CUSTOMER NAME"){
alert("Please Select Customers Name");
return;
}
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}else{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4  && xmlhttp.status == 200){
var string = xmlhttp.responseText;
var array = string.split(',');
//document.getElementById("id").value = array[0];
var t = array[0];
if(t=="" || t==null){
document.getElementById("oldbal").value = 0;
}else{
document.getElementById("oldbal").value = array[0];
}

}
}
xmlhttp.open("GET","searcholdbalance.php?q="+str,true);
xmlhttp.send();
}
</script>

<!--Code to Print Receipt-->
<script type="text/javascript" src="jquery-1.9.1.min.js" ></script>
<script language="javascript">
$('document').ready(function(){
$('#print').click(function(){
if($('#total').val()==0){
alert("Please Enter Qty to Sell, Select a Product and Enter Price");
return false;
}else if ($('#customer').val() =="") {
alert("Please Select Customers Name");
return false;
}else{

var e = document.getElementById("description1");
var str = e.options[e.selectedIndex].text;
alert(str);
 
}
$.post("printform.php",{ des1:description1, cusId:customerId, datte:date},function(data, textStatus){
 // alert(data);
 if(data ){
 
 
}else{
 alert("Error In Updating and Making Sales");}}); }); });
 </script>



<!-- Code To Make Sales    -->
<script type="text/javascript" src="jquery-1.9.1.min.js" ></script>
<script language="javascript">
$('document').ready(function(){
$('#button').click(function(){
if($('#total').val()==0){
alert("Please Enter Qty to Sell, Select a Product and Enter Price");
return false;
}else if ($('#customer').val() =="") {
alert("Please Select Customers Name");
return false;
}else{

//Confirm Sales
var description1 = document.getElementById("description1").value;
var customer = document.getElementById("customer").value;
var quantity1 = document.getElementById("quantity1").value;
var price1 =document.getElementById("price1").value;
//alert(description1);
if( description1 !="" && quantity1 !="" && price1 !="" && customer !="" ){
var ans = confirm("Are You Sure To Make This Sales ?")
if(ans == false){
alert("Sales Not Made Successfully");
return ans;
stop;
}else{

var quantity1 = $('#quantity1').val(); var price1 = $('#price1').val(); var description1 = $('#description1').val(); var amount1= $('#amount1').val();
 var quantity2 = $('#quantity2').val(); var price2 = $('#price2').val(); var description2 = $('#description2').val(); var amount2= $('#amount2').val();
 var quantity3 = $('#quantity3').val(); var price3 = $('#price3').val(); var description3 = $('#description3').val(); var amount3= $('#amount3').val();
 var quantity4 = $('#quantity4').val(); var price4 = $('#price4').val(); var description4 = $('#description4').val(); var amount4= $('#amount4').val();
 var quantity5 = $('#quantity5').val(); var price5 = $('#price5').val(); var description5 = $('#description5').val(); var amount5= $('#amount5').val();
 var quantity6 = $('#quantity6').val(); var price6 = $('#price6').val(); var description6 = $('#description6').val(); var amount6= $('#amount6').val();
 var quantity7 = $('#quantity7').val(); var price7 = $('#price7').val(); var description7 = $('#description7').val(); var amount7= $('#amount7').val();
 var quantity8 = $('#quantity8').val(); var price8 = $('#price8').val(); var description8 = $('#description8').val(); var amount8= $('#amount8').val();
 var quantity9 = $('#quantity9').val(); var price9 = $('#price9').val(); var description9 = $('#description9').val(); var amount9= $('#amount9').val();
 var quantity10 = $('#quantity10').val(); var price10 = $('#price10').val(); var description10 = $('#description10').val(); var amount10= $('#amount10').val();
 var quantity11 = $('#quantity11').val(); var price11 = $('#price11').val(); var description11 = $('#description11').val(); var amount11= $('#amount11').val();
 var customerId = $('#customer').val() ; var date = $('#date').val(); 
 var oldbal = $('#oldbal').val(); var amtpaid = $('#amtpaid').val(); var total = $('#total').val(); var newbal = $('#newbal').val();
 var discount1 = $('#discount').val();
   
}}}
$.post("updateIS.php",{ qty1 : quantity1, pric1:price1, des1:description1 ,  qty2 : quantity2, pric2:price2, des2:description2, 
      qty3 : quantity3, pric3:price3, des3:description3,  qty4 : quantity4, pric4:price4, des4:description4, 
	  qty5 : quantity5, pric5:price5, des5:description5, qty6 : quantity6, pric6:price6, des6:description6, 
	  qty7 : quantity7, pric7:price7, des7:description7, qty8 : quantity8, pric8:price8, des8:description8, 
	  qty9 : quantity9, pric9:price9, des9:description9, qty10 : quantity10, pric10:price10, des10:description10, 
	  qty11 : quantity11, pric11:price11, des11:description11, amt1:amount1, amt2:amount2, amt3:amount3, amt4:amount4,
	  amt5:amount5, amt6:amount6, amt7:amount7, amt8:amount8, amt9:amount9,
	  amt10:amount10, amt11 : amount11, cusId:customerId, datte:date ,
	  oldbal1 : oldbal, amtpaid1 : amtpaid, total1 : total, newbal1 : newbal, discount : discount1 
	  },function(data, textStatus){
	 // alert(data);
 if(data ){
 alert("Sales Made Successfully");
 location.reload(true);
 
}else{
 alert("Error In Updating and Making Sales");}}); }); });
 </script>

</head>



<body>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">NOBLE ALCHUKS NIGERIA LIMITED </center>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">ABRO MINI DEPOT </center>
<center style="font:'Courier New', Courier, mono; font-size:large; text-align:center; font-weight:bold; color:#FF0000 ">Sales Inventory System </br> Version : 2.1 </center>

<?php
//require_once 'db.php';
include 'db.php';
//$date= date("d-m-Y");
?>

<fieldset>
Name : 

<?php
  
	$cus= mysql_query("select * from customer order by Name ASC");
	
	echo '<select name="customer" id="customer"  size="1" width="200" onChange="showUp()">';
	echo '<option value="">';
	echo 'SELECT CUSTOMER NAME ';
	echo '</option>';
	 while($res= mysql_fetch_array($cus))
	{
	echo '<option value="'.$res['CustomerId'].'">';
	echo $res['Name'];
	echo'</option>';
	}
	echo'</select>';
	
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Today's date :  <input  type="text" id="date" value="<?php echo(date("d-m-Y"));?>" style="border:none; text-align:center "/>
</fieldset>


<div id="sales" class="content" style="border:solid ">
<center>
<table  width="100%" >
<form name="sales"  method="post">
<tr class="head">
<th>QUANTITY</th>
<th>DESCRIPTION OF GOODS</th>
<th>CTN/PICS</th>
<th>RATE</th>
<th>AMOUNT</th>
<th>SELLING PRICE</th>
<th>QTY LEFT</th>
<th style="visibility:hidden">QTY</th>
</tr>

<!--First row-->

<tr class="edit_tr" >
<td width="5%" ><input type="text"  style="border:none; "   width="100%"  name="quantity1" id="quantity1"         onKeyUp= "verifyquantity1(document.sales.quantity1)" /></td>
<td width="5%">
<?php
 
	$des1= mysql_query("select * from inventory order by Description ASC");
	
	echo '<select name="description1" id="description1"  size="1" width="200" onChange="getsell1()" >';
	echo '<option value="">';
	echo 'SELECT A PRODUCT TO SELL ';
	echo '</option>';
	 while($res= mysql_fetch_array($des1))
	{
	echo '<option value="'.$res['ProductCode'].'">';
	echo $res['Description'];
	echo'</option>';
	}
	echo'</select>';
?>
</td>
<td width="5%">
<select name="type1" id="type1" size="1" onChange="get1()" >
<option>CTN/PICS</option>
<option>CTN</option>
<option>PICS</option>
</select>
</td>
<td width="5%" ><input type="text"  style="border:none "   width="100%" name="price1"  id="price1"   onKeyUp = "verifyprice1(document.sales.price1)"  /></td>
<td width="10%" ><input type="text"  style="border:none; color:#009933 "   width="100%"   readonly="readonly" name="amount1" id="amount1"  value="0"/></td>
<td width="10%" ><input type="text"  style="border:none; color:#0000CC"   width="100%"   readonly="readonly" name="sell1" id="sell1"  value="0"/></td>
<td width="5%" ><input type="text"  style="border:none; color:#FF0000"   width="100%"   readonly="readonly" name="qtyleft1" id="qtyleft1"  value="0"/></td>
<td width="1%" style="visibility:hidden "><input type="text"  style="border:none; color:#FF0000"   width="1%" readonly="readonly" name="qtycnt1" id="qtyctn1"  value="0"/></td>
</tr>

<!--Second row-->

<tr class="edit_tr" >
<td width="5%" ><input type="text"  style="border:none "   width="100%"  name="quantity2" id="quantity2" onKeyUp = "verifyquantity2(document.sales.quantity2)" /></td>
<td width="5%">
<?php
 
	$des2= mysql_query("select * from inventory order by Description ASC");
	
	echo '<select name="description2" id="description2"  size="1" width="200" onChange="getsell2()">';
	echo '<option value="">';
	echo 'SELECT A PRODUCT TO SELL ';
	echo '</option>';
	 while($res= mysql_fetch_array($des2))
	{
	echo '<option value="'.$res['ProductCode'].'">';
	echo $res['Description'];
	echo'</option>';
	}
	echo'</select>';
?>
</td>
</td>
<td width="5%">
<select name="type2" id="type2" size="1" onChange="get2()" >
<option>CTN/PICS</option>
<option>CTN</option>
<option>PICS</option>
</select>
</td>
<td width="5%" ><input type="text"  style="border:none "   width="100%" name="price2" id="price2" onKeyUp= "verifyprice2(document.sales.price2)"  /></td>
<td width="10%" ><input type="text"  style="border:none; color:#009933 "   width="100%"   readonly="readonly" name="amount2" id="amount2"  value="0" /></td>
<td width="10%" ><input type="text"  style="border:none; color:#0000CC "   width="100%"   readonly="readonly" name="sell2" id="sell2"  value="0"/></td>
<td width="10%" ><input type="text"  style="border:none;color:#FF0000"   width="100%"   readonly="readonly" name="qtyleft2" id="qtyleft2"  value="0"/></td>
<td  width="1%" style="visibility:hidden " ><input type="text"  style="border:none; color:#FF0000"   width="1%" readonly="readonly" name="qtycnt2" id="qtyctn2"  value="0"/></td>
</tr>

<!--Third row-->

<tr  class="edit_tr">
<td width="5%" ><input type="text"  style="border:none "   width="100%"  name="quantity3" id="quantity3" onKeyUp= "verifyquantity3(document.sales.quantity3)"/></td>
<td width="5%">
<?php
 
	$des3= mysql_query("select * from inventory order by Description ASC");
	
	echo '<select name="description3" id="description3"  size="1" width="200" onChange="getsell3()" >';
	echo '<option value="">';
	echo 'SELECT A PRODUCT TO SELL ';
	echo '</option>';
	 while($res= mysql_fetch_array($des3))
	{
	echo '<option value="'.$res['ProductCode'].'">';
	echo $res['Description'];
	echo'</option>';
	}
	echo'</select>';
?>
</td>
</td>
<td width="5%">
<select name="type3" id="type3" size="1" onChange="get3()" >
<option>CTN/PICS</option>
<option>CTN</option>
<option>PICS</option>
</select>
</td>
<td width="5%" ><input type="text"  style="border:none "   width="100%" name="price3"  id="price3" onKeyUp= "verifyprice3(document.sales.price3)" /></td>
<td width="10%" ><input type="text"  style="border:none; color:#009933 "   width="100%"   readonly="readonly" name="amount3" id="amount3"  value="0"/></td>
<td width="10%" ><input type="text"  style="border:none; color:#0000CC "   width="100%"   readonly="readonly" name="sell3" id="sell3"  value="0"/></td>
<td width="10%" ><input type="text"  style="border:none;color:#FF0000"   width="100%"   readonly="readonly" name="qtyleft3" id="qtyleft3"  value="0"/></td>
<td  width="1%" style="visibility:hidden " ><input type="text"  style="border:none; color:#FF0000"   width="1%" readonly="readonly" name="qtycnt3" id="qtyctn3"  value="0"/></td>
</tr>

<!--Fourth row-->

<tr  class="edit_tr">
<td width="5%" ><input type="text"  style="border:none "   width="100%"  name="quantity4" id="quantity4" onKeyUp= "verifyquantity4(document.sales.quantity4)" /></td>
<td width="5%">
<?php
 
	$des4= mysql_query("select * from inventory order by Description ASC");
	
	echo '<select name="description4" id="description4"  size="1" width="200" onChange="getsell4()" >';
	echo '<option value="">';
	echo 'SELECT A PRODUCT TO SELL ';
	echo '</option>';
	 while($res= mysql_fetch_array($des4))
	{
	echo '<option value="'.$res['ProductCode'].'">';
	echo $res['Description'];
	echo'</option>';
	}
	echo'</select>';
?>
</td>
</td>
<td width="5%">
<select name="type4" id="type4" size="1" onChange="get4()" >
<option>CTN/PICS</option>
<option>CTN</option>
<option>PICS</option>
</select>
</td>
<td width="5%" ><input type="text"  style="border:none "   width="100%" name="price4"  id="price4" onKeyUp= "verifyprice4(document.sales.price4)" /></td>
<td width="10%" ><input type="text"  style="border:none; color:#009933 "   width="100%"   readonly="readonly" name="amount4" id="amount4" value="0" /></td>
<td width="10%" ><input type="text"  style="border:none; color:#0000CC "   width="100%"   readonly="readonly" name="sell4" id="sell4"  value="0"/></td>
<td width="10%" ><input type="text"  style="border:none;color:#FF0000"   width="100%"   readonly="readonly" name="qtyleft4" id="qtyleft4"  value="0"/></td>
<td  width="1%" style="visibility:hidden " ><input type="text"  style="border:none; color:#FF0000"   width="1%" readonly="readonly" name="qtycnt4" id="qtyctn4"  value="0"/></td>
</tr>

<!--Fifth row-->

<tr  class="edit_tr">
<td width="5%" ><input type="text"  style="border:none "   width="100%"  name="quantity5" id="quantity5"  onKeyUp= "verifyquantity5(document.sales.quantity5)" /></td>
<td width="5%">
<?php
 
	$des5= mysql_query("select * from inventory order by Description ASC");
	
	echo '<select name="description5" id="description5"  size="1" width="200" onChange="getsell5()">';
	echo '<option value="">';
	echo 'SELECT A PRODUCT TO SELL ';
	echo '</option>';
	 while($res= mysql_fetch_array($des5))
	{
	echo '<option value="'.$res['ProductCode'].'">';
	echo $res['Description'];
	echo'</option>';
	}
	echo'</select>';
?>
</td>
</td>
<td width="5%">
<select name="type5" id="type5" size="1" onChange="get5()" >
<option>CTN/PICS</option>
<option>CTN</option>
<option>PICS</option>
</select>
</td>
<td width="5%" ><input type="text"  style="border:none "   width="100%" name="price5" id="price5" onKeyUp= "verifyprice5(document.sales.price5)" /></td>
<td width="10%" ><input type="text"  style="border:none; color:#009933 "   width="100%"   readonly="readonly" name="amount5" id="amount5"  value="0"/></td>
<td width="10%" ><input type="text"  style="border:none; color:#0000CC "   width="100%"   readonly="readonly" name="sell5" id="sell5"  value="0"/></td>
<td width="10%" ><input type="text"  style="border:none;color:#FF0000"   width="100%"   readonly="readonly" name="qtyleft5" id="qtyleft5"  value="0"/></td>
<td  width="1%" style="visibility:hidden "><input type="text"  style="border:none; color:#FF0000"   width="1%" readonly="readonly" name="qtycnt5" id="qtyctn5"  value="0"/></td>
</tr>

<!--Sixth row-->

<tr class="edit_tr" >
<td width="5%" ><input type="text"  style="border:none "   width="100%"  name="quantity6" id="quantity6"  onKeyUp = "verifyquantity6(document.sales.quantity6)" /></td>
<td width="5%">
<?php
 
	$des6= mysql_query("select * from inventory order by Description ASC");
	
	echo '<select name="description6" id="description6"  size="1" width="200" onChange="getsell6()">';
	echo '<option value="">';
	echo 'SELECT A PRODUCT TO SELL ';
	echo '</option>';
	 while($res= mysql_fetch_array($des6))
	{
	echo '<option value="'.$res['ProductCode'].'">';
	echo $res['Description'];
	echo'</option>';
	}
	echo'</select>';
?>
</td>
</td>
<td width="5%">
<select name="type6" id="type6" size="1" onChange="get6()" >
<option>CTN/PICS</option>
<option>CTN</option>
<option>PICS</option>
</select>
</td>
<td width="5%" ><input type="text"  style="border:none "   width="100%" name="price6" id="price6" onKeyUp= "verifyprice6(document.sales.price6)" /></td>
<td width="10%" ><input type="text"  style="border:none; color:#009933 "   width="100%"   readonly="readonly" name="amount6" id="amount6" value="0" /></td>
<td width="10%" ><input type="text"  style="border:none; color:#0000CC "   width="100%"   readonly="readonly" name="sell6" id="sell6"  value="0"/></td>
<td width="10%" ><input type="text"  style="border:none;color:#FF0000"   width="100%"   readonly="readonly" name="qtyleft6" id="qtyleft6"  value="0"/></td>
<td  width="1%" style="visibility:hidden "><input type="text"  style="border:none; color:#FF0000"   width="1%" readonly="readonly" name="qtycnt6" id="qtyctn6"  value="0"/></td>
</tr>

<!--Seventh row-->

<tr class="edit_tr" >
<td width="5%" ><input type="text"  style="border:none "   width="100%"  name="quantity7"  id="quantity7" onKeyUp= "verifyquantity7(document.sales.quantity7)" /></td>
<td width="5%">
<?php
 
	$des7= mysql_query("select * from inventory order by Description ASC");
	
	echo '<select name="description7" id="description7"  size="1" width="200" onChange="getsell7()" >';
	echo '<option value="">';
	echo 'SELECT A PRODUCT TO SELL ';
	echo '</option>';
	 while($res= mysql_fetch_array($des7))
	{
	echo '<option value="'.$res['ProductCode'].'">';
	echo $res['Description'];
	echo'</option>';
	}
	echo'</select>';
?>
</td>
</td>
<td width="5%">
<select name="type7" id="type7" size="1" onChange="get7()" >
<option>CTN/PICS</option>
<option>CTN</option>
<option>PICS</option>
</select>
</td>
<td width="5%" ><input type="text"  style="border:none "   width="100%" name="price7"  id="price7" onKeyUp= "verifyprice7(document.sales.price7)" /></td>
<td width="10%" ><input type="text"  style="border:none; color:#009933 "   width="100%"   readonly="readonly" name="amount7" id="amount7" value="0" /></td>
<td width="10%" ><input type="text"  style="border:none; color:#0000CC "   width="100%"   readonly="readonly" name="sell7" id="sell7"  value="0"/></td>
<td width="10%" ><input type="text"  style="border:none;color:#FF0000"   width="100%"   readonly="readonly" name="qtyleft7" id="qtyleft7"  value="0"/></td>
<td  width="1%" style="visibility:hidden "><input type="text"  style="border:none; color:#FF0000"   width="1%" readonly="readonly" name="qtycnt7" id="qtyctn7"  value="0"/></td>
</tr>

<!--Eight row-->

<tr  class="edit_tr">
<td width="5%" ><input type="text"  style="border:none "   width="100%"  name="quantity8" id="quantity8" onKeyUp= "verifyquantity8(document.sales.quantity8)" /></td>
<td width="5%">
<?php
 
	$des8= mysql_query("select * from inventory order by Description ASC");
	
	echo '<select name="description8" id="description8"  size="1" width="200" onChange="getsell8()">';
	echo '<option value="">';
	echo 'SELECT A PRODUCT TO SELL ';
	echo '</option>';
	 while($res= mysql_fetch_array($des8))
	{
	echo '<option value="'.$res['ProductCode'].'">';
	echo $res['Description'];
	echo'</option>';
	}
	echo'</select>';
?>
</td>
</td>
<td width="5%">
<select name="type8" id="type8" size="1" onChange="get8()" >
<option>CTN/PICS</option>
<option>CTN</option>
<option>PICS</option>
</select>
</td>
<td width="5%" ><input type="text"  style="border:none "   width="100%" name="price8" id="price8" onKeyUp= "verifyprice8(document.sales.price8)" /></td>
<td width="10%" ><input type="text"  style="border:none; color:#009933 "   width="100%"   readonly="readonly" name="amount8" id="amount8"  value="0"/></td>
<td width="10%" ><input type="text"  style="border:none; color:#0000CC "   width="100%"   readonly="readonly" name="sell8" id="sell8"  value="0"/></td>
<td width="10%" ><input type="text"  style="border:none;color:#FF0000"   width="100%"   readonly="readonly" name="qtyleft8" id="qtyleft8"  value="0"/></td>
<td  width="1%" style="visibility:hidden "><input type="text"  style="border:none; color:#FF0000"   width="1%" readonly="readonly" name="qtycnt8" id="qtyctn8"  value="0"/></td>
</tr >

<!--Nineth row-->

<tr  class="edit_tr">
<td width="5%" ><input type="text"  style="border:none "   width="100%"  name="quantity9" id="quantity9" onKeyUp= "verifyquantity9(document.sales.quantity9)"/></td>
<td width="5%">
<?php
 
	$des9= mysql_query("select * from inventory order by Description ASC");
	
	echo '<select name="description9" id="description9"  size="1" width="200" onChange="getsell9()">';
	echo '<option value="">';
	echo 'SELECT A PRODUCT TO SELL ';
	echo '</option>';
	 while($res= mysql_fetch_array($des9))
	{
	echo '<option value="'.$res['ProductCode'].'">';
	echo $res['Description'];
	echo'</option>';
	}
	echo'</select>';
?>
</td>
</td>
<td width="5%">
<select name="type9" id="type9" size="1" onChange="get9()" >
<option>CTN/PICS</option>
<option>CTN</option>
<option>PICS</option>
</select>
</td>
<td width="5%" ><input type="text"  style="border:none "   width="100%" name="price9"  id="price9" onKeyUp= "verifyprice9(document.sales.price9)" /></td>
<td width="10%" ><input type="text"  style="border:none; color:#009933 "   width="100%"   readonly="readonly" name="amount9"  id="amount9"  value="0"/></td>
<td width="10%" ><input type="text"  style="border:none; color:#0000CC "   width="100%"   readonly="readonly" name="sell9" id="sell9"  value="0"/></td>
<td width="10%" ><input type="text"  style="border:none;color:#FF0000"   width="100%"   readonly="readonly" name="qtyleft9" id="qtyleft9"  value="0"/></td>
<td  width="1%" style="visibility:hidden "><input type="text"  style="border:none; color:#FF0000"   width="1%" readonly="readonly" name="qtycnt9" id="qtyctn9"  value="0"/></td>
</tr>

<!--Tenth row-->
<tr class="edit_tr" >
<td width="5%" ><input type="text"  style="border:none "   width="100%"  name="quantity10" id="quantity10" onKeyUp= "verifyquantity10(document.sales.quantity10)"/></td>
<td width="5%">
<?php
 
	$des10= mysql_query("select * from inventory order by Description ASC");
	
	echo '<select name="description10" id="description10"  size="1" width="200" onChange="getsell10()">';
	echo '<option value="">';
	echo 'SELECT A PRODUCT TO SELL ';
	echo '</option>';
	 while($res= mysql_fetch_array($des10))
	{
	echo '<option value="'.$res['ProductCode'].'">';
	echo $res['Description'];
	echo'</option>';
	}
	echo'</select>';
?>
</td>
</td>
<td width="5%">
<select name="type10" id="type10" size="1" onChange="get10()" >
<option>CTN/PICS</option>
<option>CTN</option>
<option>PICS</option>
</select>
</td>
<td width="5%" ><input type="text"  style="border:none "   width="100%" name="price10"  id="price10" onKeyUp= "verifyprice10(document.sales.price10)"  /></td>
<td width="10%" ><input type="text"  style="border:none; color:#009933 "   width="100%"   readonly="readonly" name="amount10" id="amount10"  value="0" /></td>
<td width="10%" ><input type="text"  style="border:none; color:#0000CC "   width="100%"   readonly="readonly" name="sell10" id="sell10"  value="0"/></td>
<td width="10%" ><input type="text"  style="border:none;color:#FF0000"   width="100%"   readonly="readonly" name="qtyleft10" id="qtyleft10"  value="0"/></td>
<td  width="1%" style="visibility:hidden "><input type="text"  style="border:none; color:#FF0000"   width="1%" readonly="readonly" name="qtycnt10" id="qtyctn10"  value="0"/></td>
</tr>

<!--Eleventh row-->

<tr class="edit_tr" >
<td width="5%" ><input type="text"  style="border:none "   width="100%"  name="quantity11" id="quantity11" onKeyUp= "verifyquantity11(document.sales.quantity11)"/></td>
<td width="5%">
 <?php
 
	$des11= mysql_query("select * from inventory order by Description ASC");
	
	echo '<select name="description11" id="description11"  size="1" width="200" onChange="getsell11()">';
	echo '<option value="">';
	echo 'SELECT A PRODUCT TO SELL ';
	echo '</option>';
	 while($res= mysql_fetch_array($des11))
	{
	echo '<option value="'.$res['ProductCode'].'">';
	echo $res['Description'];
	echo'</option>';
	}
	echo'</select>';
	
?>

</td>
</td>
<td width="5%">
<select name="type11" id="type11" size="1" onChange="get11()" >
<option>CTN/PICS</option>
<option>CTN</option>
<option>PICS</option>
</select>
</td>
<td width="5%" ><input type="text"  style="border:none "   width="100%" name="price11"  id="price11" onKeyUp= "verifyprice11(document.sales.price11)" /></td>
<td width="10%" ><input type="text"  style="border:none; color:#009933 "   width="100%"   name="amount11" id="amount11" value="0" readonly="readonly" /></td>
<td width="10%" ><input type="text"  style="border:none; color:#0000CC "   width="100%"   readonly="readonly" name="sell11" id="sell11"  value="0"/></td>
<td width="10%" ><input type="text"  style="border:none;color:#FF0000"   width="100%"   readonly="readonly" name="qtyleft11" id="qtyleft11"  value="0"/></td>
<td  width="1%" style="visibility:hidden "><input type="text"  style="border:none; color:#FF0000"   width="1%" readonly="readonly" name="qtycnt11" id="qtyctn11"  value="0"/></td>
</tr>

</form>
</table>


<div  style="margin-left 100px "> <input type="button" name="printt" id="printt"  value="Preview receipt"  style="cursor:pointer" onClick="openPreview();" /> <input  type="button" id="button" name="button" value="Click To Make Sales"   border="" disabled="true"  />  
Discount <input type="text" name="discount" id="discount" style="border:none "  size="6"  onKeyUp=" discount()"/>
AmtPaid : <input type="text" name="amtpaid" id="amtpaid" style="border:none "  size="6"  onKeyUp="getNewBalance()"/>
OldBal : <input type="text" name="oldbal" id="oldbal" value="0" style="border:none " size="7" onKeyUp= "getBalance()" readonly="readonly" />
Total :  <input type="text"  name="total" id="total" readonly="readonly" value="0" style="border:none " size="7" /> &nbsp;&nbsp;&nbsp;&nbsp;
NewBal : <input type="text" name="newbal" id="newbal" value="0" style="border:none " readonly="readonly"  size="6"/>
Reset :  <input type="button" name="reset" id="reset" value="Reset" /> : <input type="text" name="resett" id="resett" size="3" style="border:none " />
</div>


</div>

<div style="margin-top:1px ">
<a href="homepage.php">Click to go to home page</a>	
	</div>
	</center>

<div style="margin-top:0px ">
<marquee behavior="scroll"><font size="+1" face="Times New Roman, Times, serif"><b>This Software Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>
</body>
</html>
