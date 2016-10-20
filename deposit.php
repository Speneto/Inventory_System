<?php
	require_once('auth.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Deposit and Balance</title>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 

<!-- Function to get customer id -->
<script  type="text/javascript">
function showUp(){
var e = document.getElementById("customer");
var str = e.options[e.selectedIndex].value;
document.getElementById("customerid").value = str;
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
document.getElementById("oldb").value = 0;
}else{
document.getElementById("oldb").value = array[0];
}

}
}
xmlhttp.open("GET","searcholdbalance.php?q="+str,true);
xmlhttp.send();


}
</script>

<!-- Function to get remark id -->
<script  type="text/javascript">
function showUpp(){
var e = document.getElementById("remark");
var str = e.options[e.selectedIndex].value;
document.getElementById("remarkid").value = str;
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
<legend><em style="color:#0000CC ">Deposit/Balance Form</em> </legend>
<form action="<?php echo($_SERVER['PHP_SELF']) ?>" method="post" name="deposit"> 



<center> 
<div style="margin-right:0px ">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Name :
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
<div style="margin-right:35px ">
OldBal : <input type="text" name="oldb" id="oldb" readonly="readonly" style="background-color:#D5EAF0 " />
</div>
</br>
<div style="margin-right:20px ">
Date : <input type=" text" name="date" id="date" class="tcal" style="background-color:#D5EAF0 "   readonly="readonly" />
</div>
</br>

<div style="margin-right:40px ">
Amount : <input type="text" name="amount" id="amount" style="background-color:#D5EAF0 " />
</div>
</br>
<div style="margin-right:45px ">
Remark :
<select name="remark" id="remark" size="1" onChange="showUpp()">
<option>SELECT REMARK</option>
<option>CASH DEPOSIT</option>
<option>BANK DEPOSIT</option>
</select>
</div>
</br>

<input type="submit" name="deposit" id="deposit" value="Make Deposit" />

</br>
<input type="hidden" name="customerid" id="customerid" />
<input type="hidden" name="remarkid" id="remarkid" />
</form>
</center>
</fieldset>

<center>
<div style="margin-top:20px ">
<a href="homepage.php">Click to go to home page</a>	
	</div>
	</center>

<div style="margin-top:5px ">
<marquee behavior="scroll"><font   size="+2" face="Times New Roman, Times, serif"><b>This Software Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>

<?php
if(isset($_POST['deposit'])){

 $customerid = trim(htmlspecialchars(strtoupper($_POST['customerid'])));
	 $remarkid = trim(htmlspecialchars(strtoupper($_POST['remarkid'])));
	 $amount = trim(htmlspecialchars(strtoupper($_POST['amount'])));
	 $date = trim(htmlspecialchars(strtoupper($_POST['date'])));
	 //check if input is entered
	 if(empty($customerid)){
	 echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Select Customer Name')");
	 echo("</script>");
	 exit();
	}else if(empty($date)){
	 echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Select Date')");
	 echo("</script>");
	 exit();
	 }else if(empty($amount)){
	  echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Enter Amount Paid')");
	 echo("</script>");
	 exit();
	 }else if(empty($remarkid)){
	  echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Select Remark')");
	 echo("</script>");
	 exit();
	 
	 }else{
	 //make sql query
	 //get old balance
	 $sql= @mysql_query("Select * from updatedbalance where CustomerId='$customerid'");
	 $count = mysql_num_rows($sql);
	
	 if($count != 0 ){
	 while($row= @mysql_fetch_array($sql)){
	$oldbal =$row['Balance'];
	$newbal = $oldbal + $amount;
	$total ="Deposit";
	}
	}else{
	$oldbal = 0; 
	$newbal = $oldbal + $amount;
	$total ="Deposit";
	}
	
	 
	 //insert into balances table
	 $sql1= @mysql_query("Insert into balances (CustomerId, OldBalance, AmountPaid, Total, NewBalance, Date) VALUES ('$customerid', '$oldbal','$amount', '$total', '$newbal', '$date')");
	//update updatedbalance database
	 $sql2 = @mysql_query("Update updatedbalance set Balance='$newbal', Date='$date' where CustomerId='$customerid' ");
	 if(@mysql_affected_rows($sql2) > 0){
	//do nothing;
	}else{
	//if not record to update in updated balance , insert new balance
	$sql2 =  @mysql_query("Insert into updatedbalance (CustomerId, Balance, Date) VALUES ('$customerid', '$newbal', '$date')");
	}
	// insert deposit made into deposit table
	 $query = @mysql_query("Insert into deposit (CustomerId, Amount, Remark, Date) VALUES ('$customerid', '$amount', '$remarkid', '$date')");
   if(@mysql_affected_rows() > 0){
    // echo ("Deposit Made Successfully ");
	echo ("<script type='text/javascript'>\n");
	echo ("alert('Deposit Made Successfully')");
	echo ("</script>"); 
   }else{
   // echo ("Deposit Not Made");
   echo ("<script type='text/javascript'>\n");
	echo ("alert('Deposit Not Made')");
	echo ("</script>"); 
   }
 }

}
?>
<?php 

@mysql_close($bd);
?>
</body>
</html>
