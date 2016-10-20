<?php
	require_once('auth.php');
?>


<?php
include("db.php");
if(isset($_GET['q'])){
$productcode = $_GET['q'];
$query=@mysql_query("Select * from inventory where ProductCode='$productcode'");
while($row=@mysql_fetch_array($query)){
$quantity1=$row['Total'];
$quantity2=$row['Quantity2'];
$quantity3=$row['Quantity3'];
$price1=$row['Price1'];
$price2=$row['Price2'];
$price3=$row['Price3'];
$sellprice = $row['SellingPrice'];
$qtyperctn= $row['QuantityPerCtn'];
$name = $row['Description'];
if(  $sellprice =="" ){
$sellprice=0;
}


}
echo $quantity1; echo ","; echo $quantity2; echo ","; echo $quantity3; echo ","; echo $price1; echo ","; echo $price2; echo ","; echo $price3; echo ","; echo $sellprice; echo ","; echo $qtyperctn; echo ","; echo $name; 

}
@mysql_close($bd);
?>

