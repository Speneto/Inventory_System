<?php
	require_once('auth.php');
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Add New Product</title>
<link rel="stylesheet" href="input.css" type="text/css" />
<link rel="stylesheet" href="tab.css" type="text/css" media="screen" />
<link href="tabs.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="validateInput.js?123456" > </script>


<!-- Function to get supplier id -->
<script  type="text/javascript">
function showUp(){
var e = document.getElementById("supplier");
var str = e.options[e.selectedIndex].value;
document.getElementById("supplierid").value = str;
}
</script>
<!--<script language="javascript" src="comfirm.js" > </script>-->


<script language="javascript">
//ask whethere to add new produc
function addproduct(){
var productcode = document.getElementById("productcode").value;
var productdescription = document.getElementById("productdescription").value;
var quantity = document.getElementById("quantity").value;
var price =document.getElementById("price").value;
if( productdescription !="" && quantity !="" && price !="" && productcode !=""){
var ans = confirm("Are You Sure To Add This Product ?")
if(ans == true){
return ans;
}else{
alert("Product Not Saved");
return ans;
}
}
}
</script>

<!--Code to Generate Customer ID-->
<script type="text/javascript" src="jquery-1.9.1.min.js" ></script>
<script language="javascript">
$('document').ready(function(){
$('#generateproductcode').click(function(){
var proid = $('#proid').val();

$.post("generateproductcode.php",{ productid : proid },function(data, textStatus){
document.getElementById("productcode").value = data;

 }); });});
 </script>
 

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

<!-- Product Form -->
<fieldset style="border-color:#000000 ">
<legend><em style="color:#0000CC ">Form for addition of new products</em></legend>
<div id="addproduct" class="">

<form action="<?php echo($_SERVER['PHP_SELF']);?>" method="post" name="addproduct">
</br>
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

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ProductCode  : <input type="text" name="productcode" id="productcode" style="border:none " readonly="readonly"  value=""/> 
<input type="button" name="generateproductcode" id="generateproductcode" value="..." /> </br></br> 
<input type="hidden" name="supplierid" id="supplierid">
Description  : <input type="text" name="productdescription" id="productdescription"  style="border:none " onKeyUp="validateProductDescription(document.addproduct.productdescription)" /> </br></br>
&nbsp;&nbsp;&nbsp;&nbsp; Quantity : <input type="text" name="quantity" id="quantity" style="border:none "  onKeyUp="validatequantity(document.addproduct.quantity)" /> </br></br>
&nbsp;&nbsp; CostPrice : <input type="text" name="price" id="price" style="border:none " onKeyUp="validateprice(document.addproduct.price)"/> </br></br>
&nbsp;&nbsp;&nbsp; SellPrice : <input type="text" name="sellprice" id="sellprice" style="border:none " onKeyUp="validatesellprice(document.addproduct.sellprice)"/> </br></br>
&nbsp; QtyPerCtn : <input type="text" name="qtyperctn" id="qtyperctn" style="border:none " onKeyUp="validateqtyperctn(document.addproduct.qtyperctn)" /> </br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="submitproduct" id="submitproduct" value="Click To Save Product"  onClick=" addproduct()"/>
<input type="hidden" value="1" name="proid" id="proid" />
</form>

</div>
 </fieldset>	
	<div style="margin-top:20px ">
<a href="homepage.php">Click to go to home page</a>	
	</div>
	
<div style="margin-top:10px ">
<marquee behavior="scroll"><font   size="+2" face="Times New Roman, Times, serif"><b>This Software Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>		
	
	<?php
//Code to save Customers Information to dataBase
include ("db.php");
  if(isset($_POST['submitproduct'])){
 
     $productcode = trim(htmlspecialchars(strtoupper($_POST['productcode'])));
	 $description = trim(htmlspecialchars(strtoupper($_POST['productdescription'])));
	 $quantity1 = trim(htmlspecialchars(strtoupper($_POST['quantity'])));
	 $price1 =  trim(htmlspecialchars(strtoupper($_POST['price'])));
	 $sellprice =  trim(htmlspecialchars(strtoupper($_POST['sellprice'])));
	 $supplierid = trim(htmlspecialchars(strtoupper($_POST['supplierid'])));
	  $qtyperctn = trim(htmlspecialchars(strtoupper($_POST['qtyperctn'])));
	 $date = date("d-m-Y");
	 $quantity = 0;
	 $quantity2 =0; $quantity3 =0;
	  $price2 =0;  $price3 =0;
	  $total = $quantity1 + $quantity2 + $quantity3; 
	 //check if input is entered
	  if(empty($supplierid)){
	 echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Select Supplier')");
	 echo("</script>");
	 exit();
	}else if(empty($productcode)){
	 echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Click to Generate Product Code')");
	 echo("</script>");
	 exit();
	 }else if(empty($description)){
	  echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Enter Product Description')");
	 echo("</script>");
	 exit();
	 }else if($quantity1 == ""){
	  echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Enter Product Quantity')");
	 echo("</script>");
	 exit();
	}else if($price1 ==""){
	 echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Enter The  Cost Price of Product')");
	 echo("</script>");
	 exit();
	 }else if($sellprice ==""){
	 echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Enter The Selling Price of Product')");
	 echo("</script>");
	 exit();
	 }else if($qtyperctn ==""){
	 echo("<script type = 'text/javascript'>\n");
	 echo("alert('Please Enter Quantity Per Carton!')");
	 echo("</script>");
	 exit();
	 }else{
	 //make sql query
	
	 $sql=@mysql_query("Select * from inventory where ProductCode='$productcode'");
	 if(@mysql_num_rows($sql) > 0){
	 $firstpart="P";
	  while($row= @mysql_fetch_array($sql)){
	    $proid = $row['ProductCode'];
		$proid =  substr($proid,1,4);
		if($proid > 9  && $proid <= 99){
		$secondpart="00";
		$proid++;
		}else if($proid > 99){
         $secondpart = "0";
		 $proid++;
		}else{
		// DO NOTHING
		}
	  }
	  
	  $fourthpart= $secondpart . $proid;
      $productcode = $firstpart . $fourthpart ;
	 }
	
  $query = @mysql_query("Insert into inventory (ProductCode, Description, Quantity1, Quantity2, Quantity3, Price1, Price2, Price3, Total, Date, SupplierId, SellingPrice, QuantityPerCtn) VALUES('$productcode', '$description', '$quantity', '$quantity2', '$quantity3', '$price1', '$price2', '$price3', '$total', '$date', '$supplierid', '$sellprice', '$qtyperctn')");
   if(@mysql_affected_rows() > 0){
    // echo ("Product Savad Successfully ");
	 echo '<script type="text/javascript"\n>';
	 echo '(alert("Product Savad Successfully"))';
	 echo '</script>';
	 exit;
   }else{
    //echo ("Product Not Saved");
	echo '<script type="text/javascript"\n>';
	 echo '(alert("Product Not Savad"))';
	 echo '</script>';
	 exit;
	
   }
 }}
 @mysql_close();
?>
 
</body>
</html>
