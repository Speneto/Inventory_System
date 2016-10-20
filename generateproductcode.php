<?php
	require_once('auth.php');
?>



<?php
if(isset($_POST['productid'])){
include("db.php");
$productcode="P0001";
$i=2;
$query =@mysql_query("select * from inventory");
while($row=@mysql_fetch_array($query)){
$id = $row['ProductCode'];
if ($id==$productcode){
$firstpart = "P";
if($i > 9 && $i <= 99){
$secondpart="00";
}else if($i > 99){
$secondpart = "0";
}else{
$secondpart = "0001";
}
$thirdpart = substr($secondpart,0,3);
$fourthpart= $thirdpart . $i;
$productcode = $firstpart . $fourthpart;
}else{
$productcode=$productcode;
}
$i=$i + 1;
}
echo $productcode;
}
//@mysql_close();
?>

