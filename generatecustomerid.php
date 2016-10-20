<?php
	require_once('auth.php');
?>



<?php
if(isset($_POST['customerid'])){
include("db.php");
$customerid="CUS0001";
$i=2;
$query =@mysql_query("select * from customer");
while($row=@mysql_fetch_array($query)){
$id = $row['CustomerId'];
//$idc = substr($id,0,5);
if ($id==$customerid){
$firstpart = "CUS";

if($i >9  && $i <= 99){
$secondpart="00";
}else if($i > 99){
$secondpart = "0";
}else {
 $secondpart = "0001";
}


$thirdpart = substr($secondpart,0,3);
$fourthpart= $thirdpart . $i;
$customerid = $firstpart . $fourthpart;
}else{
$customerid=$customerid;
}
$i=$i + 1;
}
echo $customerid;
}
//@mysql_close();
?>
