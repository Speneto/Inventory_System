<?php
	require_once('auth.php');
?>


<?php
if(isset($_POST['cuscode'])){
include ("db.php");
$customerid= $_POST['cuscode'];

	//$sql = @mysql_query("Select DISTINCT Date from sales Where CustomerId='$customerid'  order by Date ASC");
	//$sql = @mysql_query("Select DISTINCT sales.Date, debitsales.Date from sales OUTERJOIN debitsales ON  debitsales.CustomerId = sales.CustomerId  Where sales.CustomerId='$customerid' && debitsales.CustomerId='$customerid'");
	$sql= @mysql_query("Select sales.Date from sales Where sales.CustomerId='$customerid' UNION Select debitsales.Date from debitsales Where debitsales.CustomerId='$customerid' order by Date ASC ");
	echo '<option>';
	echo ("Select Date");
	echo '</option>';
	while($row=@mysql_fetch_array($sql)){
	//echo'<option value="'. $row['CustomerId'].'">';
	//echo $row['Date'];
	//echo '</option>';
	echo'<option value="'. $row['Date'].'">'. $row['Date']. '</option>';
	}
}
?>