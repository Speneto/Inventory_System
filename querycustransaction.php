<?php
	//require_once('auth.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Query Customer</title>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 

<script language="javascript">
//Disable/Enable transaction select element
function disable(){
var e = document.getElementById("date");
var date = e.options[e.selectedIndex].value;
if(date == "Select Date"){
document.getElementById("transaction").disabled= false ;
document.getElementById("dateid").value = "";
document.getElementById("transactionid").value = "All Transactions";
}else{
//document.getElementById("transactionid").value = tran;
document.getElementById("transaction").disabled= true ;
document.getElementById("dateid").value = date;
document.getElementById("transactionid").value = "";
}
}
</script>

<!--Function to get dates from database -->
<script type="text/javascript" src="jquery-1.9.1.min.js" ></script>
<script language="javascript">
$('document').ready(function(){
$('#customer').change(function(){
var customer = $("#customer").val();
//$.post("querycustransaction2.php",{ cuscode:customer},function(data, textStatus){
$.ajax({url : 'querycustransaction2.php', data:{cuscode:customer}, type:'post', success : function(resp){
//apend dates to select element on form
$("#date").html(resp);},error:function(resp){} 

});});});
 

 </script>


<!-- Function to get customer id -->
<script  type="text/javascript">
function showUp(){
var e = document.getElementById("customer");
var str = e.options[e.selectedIndex].value;
document.getElementById("customerid").value = str;
}
</script>

<!-- Function to get Transaction id -->
<script  type="text/javascript">
function Transaction(){
var e = document.getElementById("transaction");
var tran = e.options[e.selectedIndex].value;
document.getElementById("transactionid").value = tran;

}
</script>

</head>

<body>

</br> 
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">NOBLE ALCHUKS NIGERIA LIMITED </center>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">ABRO MINI DEPOT </center>
<center style="font:'Courier New', Courier, mono; font-size:large; text-align:center; font-weight:bold; color:#FF0000 ">Sales Inventory System </br> Version : 2.1 </center>
</br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Today's date : <input type="text" value="<?php echo date("d-m-Y"); ?>" style="border:none; text-align:center " />
</br>

<!-- Query Goods Sold -->
<fieldset style="border-color:#000000 ">
<legend><em style="color:#0000CC ">Form to query customers transactions</em> </legend>
<form action="querycustransaction1.php" method="post" name="querycustomer"> 


OPTIONS ; In options select Customer Name first :</br>
1. Select date and click Query Sales to query sales made on a particular day. </br>
2. Select all transaction and click Query Sales to query all sales . </br></br>
<center> 
<div style="margin-right:0px ">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Name :
<?php
include ("db.php");
$sql = @mysql_query("Select * from customer order by Name ASC");
	
	echo '<select name="customer" id="customer"  size="1" width="200" onChange="showUp()"  >';
	echo '<option value="">';
	echo 'SELECT CUSTOMER NAME ';
	echo '</option>';
	 while($res= mysql_fetch_array($sql))
	{
	echo '<option value="'.$res['CustomerId'].'">';
	echo $res['Name'];
	echo'</option>';
	}
	echo'</select>';

?>
</div>
</br>
<div>



</div>





<div style="margin-right:60px ">
<!--Date : <select name="date" id="date" size="1" style="width:100px " onChange="disable()">
<option  value="Select Date">Select Date</option>
</select>-->
</div>

<div style="margin-right:20px ">
Date1 : <input type="text" name="date1" id="date1" class="tcal" style="background-color:#D5EAF0 "   readonly="readonly"  /> </br></br>
Date2 : <input type="text" name="date2" id="date2" class="tcal" style="background-color:#D5EAF0 "   readonly="readonly"  />
</div>

</br>
<div style="margin-right:70px ">
Transactions : <select name="transaction" id="transaction" size="1" onChange="Transaction()">
<option value="">Select Transactions</option>
<option  value="All Transactions">All Transactions</option>
</select>
</div>
</br>
<input type="submit" name="customerquery" id="customerquery" value="Query Customer Sales" />

</br>
<input type="hidden" name="customerid" id="customerid" />
<input type="hidden" name="transactionid" id="transactionid" />
<input type="hidden" name="dateid" id="dateid" />
</form>
</center>
</fieldset>


<center>
<div style="margin-top:10px ">
<a href="customerquery.php">Click to go back</a>

</div>

</center>


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
