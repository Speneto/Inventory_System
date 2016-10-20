
<?php
	require_once('auth.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Add New Customer</title>
<link rel="stylesheet" href="input.css" type="text/css" />
<link rel="stylesheet" href="tab.css" type="text/css" media="screen" />
<link href="tabs.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="validateInput.js" > </script>


<script language="javascript">
//ask whethere to add new customer
function addcustomer(){
var customercode = document.getElementById("customercode").value;
var customerid = document.getElementById("customerid").value;
var address = document.getElementById("address").value;

if( customercode !="" && customerid !="" && address !="" ){
var ans = confirm("Are You Sure To Add This Customer ?")
if(ans == true){
return ans;
}else{
alert("Customer Not Saved");
return ans;
}
}
}
</script>

<!--Code to Generate Customer ID-->
<script type="text/javascript" src="jquery-1.9.1.min.js" ></script>
<script language="javascript">
$('document').ready(function(){
$('#generatecustomerid').click(function(){
alert("ok");
var cusid = $('#cusid').val();

$.post("generatecustomerid.php",{ customerid : cusid },function(data, textStatus){
document.getElementById("customercode").value = data;

 }); });});
 </script>
 

</head>

<body>
</br>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">NOBLE ALCHUKS NIGERIA LIMITED </center>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">ABRO MINI DEPOT </center>
<center style="font:'Courier New', Courier, mono; font-size:large; text-align:center; font-weight:bold; color:#FF0000 ">Sales Inventory System </br> Version : 2.1 </center>
</br></br>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Today's date : <input type="text" value="<?php echo date("d-m-Y"); ?>" style="border:none; text-align:center " />

<!-- Cutomers Form -->
<fieldset style="border-color:#000000 ">
<legend><em style="color:#0033CC ">Add new customers form</em></legend>
<div id="addcustomer" class="">
<form action="<?php echo($_SERVER['PHP_SELF']);?>" method="post" name="addcustomer">
CustomerCode : <input type="text" name="customercode" id="customercode" style="border:none " readonly="readonly"  value=""/> 
<input type="button" name="generatecustomerid" id="generatecustomerid" value="..." /> </br></br> 
Name &nbsp;&nbsp;&nbsp; : <input type="text" name="customername" id="customerid"  style="border:none "  onKeyUp= "validateCustomerName(document.addcustomer.customerid)"/> </br></br>
Address : <input type="text" name="address" id="address" style="border:none " /> </br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="submitcus" id="submitcus" value="Click To Save Customer"  onClick=" return addcustomer();"/>
<input type="hidden" value="1" name="cusid" id="cusid" />
</form>
 </div>
 </fieldset>
 <div style="margin-top:160px ">
<a href="homepage.php">Click to go to home page</a>	
	</div>
	<div style="margin-top:10px ">
<marquee behavior="scroll"><font   size="+2" face="Times New Roman, Times, serif"><b>This Software Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>
	
	<?php
//Code to save Customers Information to dataBase
include ("db.php");
  if(isset($_POST['submitcus'])){
 
     $customercode = trim(htmlspecialchars(strtoupper($_POST['customercode'])));
	 $customername = trim(htmlspecialchars(strtoupper($_POST['customername'])));
	 $customeraddress = trim(htmlspecialchars(strtoupper($_POST['address'])));
	 $date = date("d-m-Y");
	 $datee = date("Y-m-d");
	 //check if input is entered
	 if(empty($customercode)){
	 echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Click to Generate Customer Code')");
	 echo("</script>");
	 exit();
	 }else if(empty($customername)){
	  echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Enter customer Name')");
	 echo("</script>");
	 exit();
	 }else if(empty($customeraddress)){
	  echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Enter Customers Address')");
	 echo("</script>");
	 exit();
	 
	 }else{
	 //make sql query
	 $sql=@mysql_query("Select * from customer where CustomerId='$customercode'");
	 if(@mysql_num_rows($sql) > 0){
	 $firstpart="CUS";
	  while($row= @mysql_fetch_array($sql)){
	    $cusid = $row['CustomerId'];
		$cusid =  substr($cusid,3,4);
		if($cusid > 9  && $i <= 99){
		$secondpart="00";
		$cusid++;
		}else if($cusid > 99){
         $secondpart = "0";
		 $cusid++;
		}else{
		
		}
	  }
	  
	  $fourthpart= $secondpart . $cusid;
      $customercode = $firstpart . $fourthpart ;
	 }
	 
	 
	 $balance = 0;
	 $query=@mysql_query("Insert into customer (CustomerId, Name, Address, Date) VALUES ('$customercode', '$customername', '$customeraddress', '$date')");
	 $query1 = @mysql_query("Insert into updatedbalance (CustomerId, Balance, Date) VALUES ('$customercode', '$balance', '$datee')");
   if(@mysql_affected_rows() > 0){
     //echo ("Customer Savad Successfully ");
	 echo '<script type="text/javascript"\n>';
	 echo '(alert("Customer Savad Successfully"))';
	 echo '</script>';
	 exit;
   }else{
   // echo ("Customer Not Saved");
    echo '<script type="text/javascript"\n>';
	 echo '(alert("Customer Not Savad"))';
	 echo '</script>';
	 exit;
   
   }
 }}
?>

</body>
</html>
