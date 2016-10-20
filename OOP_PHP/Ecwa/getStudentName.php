
<?php 
include_once 'DB_connection.php';
if(isset($_GET['param1'])){

$session = $_GET['param1'];
$class = $_GET['param2'];


$result = mysql_query("SELECT * FROM students JOIN current_class ON students.ID_Number = current_class.ID_Number WHERE current_class.Session ='$session' AND current_class.Class='$class' ");

$textresult ="";
while($row = mysql_fetch_array($result)){
if($textresult ==""){
$textresult = $row[1]."-*-".$row[4];
}else{
$textresult .="xxx".$row[1]."-*-".$row[4];
}
}
echo $textresult;
}
?>