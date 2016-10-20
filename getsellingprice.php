<?php
	require_once('auth.php');
?>


<?php
require ("db.php");
//include("db.php");
if(isset($_GET['q'])){
$productcode = $_GET['q'];
$sql= @mysql_query("SELECT * from inventory where ProductCode='$productcode' ");
while($row=@mysql_fetch_array($sql)){
if($sql){
$sellprice=$row['SellingPrice'];
$qtyleft = $row['Total'];
$date = $row['Date'];
$qtyperctn = $row['QuantityPerCtn'];
echo $sellprice; echo ","; echo $qtyleft; echo ","; echo $qtyperctn; echo ","; echo $date; 
}else{
$sellprice = "0";
$qtyleft = "0";
$date = "0";
$qtyperctn= "1";
echo $sellprice; echo ","; echo $qtyleft; echo ","; echo $qtyperctn; echo ","; echo $date; 
}
}
//echo $balance; echo ","; echo $date; 
}
@mysql_close($bd);
?>
<?php 
//@mysql_close($bd);
?>