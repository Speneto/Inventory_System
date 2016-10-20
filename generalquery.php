<?php
	require_once('auth.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>General Query</title>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 


<!--Function to get dates from database 
<script type="text/javascript" src="jquery-1.9.1.min.js" ></script>
<script language="javascript">
$('document').ready(function(){
$('#description').change(function(){
var desc = $("#description").val();

//$.post("querycustransaction2.php",{ cuscode:customer},function(data, textStatus){
$.ajax({url : 'querycustransactio.php', data:{description:desc}, type:'post', success : function(resp){
//apend dates to select element on form
$("#date").html(resp);},error:function(resp){} 

});});});
 

 </script>-->



</head>

<body>

<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">NOBLE ALCHUKS NIGERIA LIMITED </center>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">ABRO MINI DEPOT </center>
<center style="font:'Courier New', Courier, mono; font-size:large; text-align:center; font-weight:bold; color:#FF0000 ">Sales Inventory System </br> Version : 2.1 </center>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Today's date : <input type="text" value="<?php echo date("d-m-Y"); ?>" style="border:none; text-align:center " />
<fieldset style="border-color:#000000 ">
<legend><em  style="color:#0000CC ">Form to query the individual and total money value of products in stock</em></legend>
<center>
<form action="moneyvalue.php" method="post" name="generatemoneyvalue">

<input type="submit" name="genrateMoneyValue" id="generateMoneyValue" value="Click To Generate Money Value" />
</center>

</form>
</fieldset>
</br>
<!-- Query Goods Sold -->
<fieldset style="border-color:#000000 ">
<legend><em style="color:#0000CC ">Form to query quantity of each product sold</em> </legend>
<form action="soldproduct.php" method="post" name="querysales"> 

<fieldset style="border-color:#6666FF ">
<legend ><em>Options</em></legend>
1. Select description, date1 and click Query Qty to query Qty of product sold on a particular day. </br>
2. Select description, date1, date2 and click Query Qty to query Qty of product sold between those dates.</br>
3. Select description and click Query Qty to query Qty of product sold in all. </br>

</fieldset>
 </br>
<center> 
<div style="margin-right:20px ">
<!--Date From : <input type=" text" name="from" id="from" class="tcal" style="background-color:#D5EAF0 "   readonly="readonly" />-->
Description :

<?php
 include ("db.php");
	$des= mysql_query("select * from inventory order by Description ASC");
	
	echo '<select name="description" id="description"  size="1" width="200" >';
	echo '<option value="">';
	echo 'SELECT PRODUCT DESCRIPTION ';
	echo '</option>';
	 while($res= mysql_fetch_array($des))
	{
	echo '<option value="'.$res['ProductCode'].'">';
	echo $res['Description'];
	echo'</option>';
	}
	echo'</select>';
?>

</div>
</br>
<div style="margin-right:6px ">
Date1  : <input type=" text" name="date" id="date" class="tcal" style="background-color:#D5EAF0 "   readonly="readonly" />
</br>
Date2  : <input type=" text" name="to" id="to" class="tcal" style="background-color:#D5EAF0 "   readonly="readonly" />
</div>


</br>
<input type="submit" name="nosales" id="nosales" value="Query Qty Sold" />

</br>


</form>
</center>
</fieldset>
</br>
<center>
<div style="margin-top:15x ">
<a href="homepage.php">Click to go to home page</a>	
	</div>
	</center>
<div style="margin-top:10px ">
<marquee behavior="scroll"><font   size="+2" face="Times New Roman, Times, serif"><b>This Software Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>
</body>
</html>
