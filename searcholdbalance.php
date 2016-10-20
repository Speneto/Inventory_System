<?php
	require_once('auth.php');
?>


<?php
include("db.php");
if(isset($_GET['q'])){
$customerid = $_GET['q'];
$sql= @mysql_query("SELECT sales.Date,updatedbalance.Balance FROM sales JOIN updatedbalance ON sales.CustomerId = updatedbalance.CustomerId WHERE sales.CustomerId='$customerid' ");
while($row=@mysql_fetch_array($sql)){
if(@mysql_num_rows($sql) > 0){
$balance=$row['Balance'];
$date = $row['Date'];
echo $balance; echo ","; echo $date; 
}else{
$balance = "0";
$date = "0";
echo $balance; echo ","; echo $date; 
}
}

$sql1= @mysql_query("SELECT debitsales.Date,updatedbalance.Balance FROM debitsales JOIN updatedbalance ON debitsales.CustomerId = updatedbalance.CustomerId WHERE debitsales.CustomerId='$customerid' ");
while($row=@mysql_fetch_array($sql1)){
if($sql1){
$balance=$row['Balance'];
$date = $row['Date'];
echo $balance; echo ","; echo $date; 
}else{
$balance = "0";
$date = "0";
echo $balance; echo ","; echo $date; 
}
}


$sql2= @mysql_query("SELECT * FROM  updatedbalance WHERE CustomerId='$customerid' ");
while($row=@mysql_fetch_array($sql2)){
if($sql2){
$balance=$row['Balance'];
$date = $row['Date'];
echo $balance; echo ","; echo $date; 
}else{
$balance = "0";
$date = "0";
echo $balance; echo ","; echo $date; 
}
}

}
@mysql_close($bd);
?>
