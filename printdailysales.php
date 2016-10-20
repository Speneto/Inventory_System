
<?php
	//require_once('auth.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Print Daily Sales</title>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 
</head>

<body>
</br>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">NOBLE ALCHUKS NIGERIA LIMITED </center>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">ABRO MINI DEPOT </center>
<center style="font:'Courier New', Courier, mono; font-size:large; text-align:center; font-weight:bold; color:#FF0000 ">Sales Inventory System </br> Version : 2.1 </center>
</br></br>
<fieldset style="border-color:#000000 ">
<legend><em style="color:#0033CC ">Print daily sales form</em></legend>
<!--<div style="margin-left:450px ">-->
<center>
<form method="post" action="" >
Select Date:</br></br>
Date1 : <input type="text" name="date" id="date"  class="tcal" style="background-color:#D5EAF0 "   readonly="readonly" /></br></br>
Date2 : <input type="text" name="date2" id="date2"  class="tcal" style="background-color:#D5EAF0 "   readonly="readonly" /></br></br>
Type : <select name="type" id="type" size="1">
<option>Select type</option>
<option>Cash</option>
<option>Debit</option> 
</select>
</br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="print"  id="print" value="Print Daily Sales" />
</form> 
</center>
<!--</div>-->





<?php
//Include PHPEcel Libraris
include ("db.php");
include('PHPExcel\PHPExcel\IOFactory.php');
require_once'PHPExcel\PHPExcel.php';
require_once'PHPExcel\PHPExcel\Writer\Excel2007.php';

//if print button is clicked
if(isset($_POST['print'])){
$date= trim(htmlspecialchars(strtoupper( $_POST['date'])));
$date2= trim(htmlspecialchars(strtoupper( $_POST['date2'])));
if(!empty($date2)){
//$date= $date .'-'. $date2;
}
$typee = trim(htmlspecialchars(strtoupper( $_POST['type'])));
//echo($type);
$fileName= $typee."Daily sales"; 
//$fileName= "Daily sales";
//*** Excel Document Root ***//
			$strFileName = $fileName.".xlsx";

if(empty($date)){
echo("<script type='text/javascript'>\n");
echo("alert('Please Select Date')");
echo("</script>");
//exit;
}else if($typee=="SELECT TYPE"){
echo("<script type='text/javascript'>\n");
echo("alert('Please Select Type')");
echo("</script>");
}else{

//query expenses
if(!empty($date) && empty($date2)){
$expenses = @mysql_query("Select SUM(Amount) as Total from expenses where Date='$date'");
}else{
$expenses = @mysql_query("Select SUM(Amount) as Total from expenses where Date BETWEEN '$date' AND '$date2'");
}
if (@mysql_num_rows($expenses) > 0){
while($exrow = @mysql_fetch_array($expenses)){
$extot = $exrow['Total'];
}

}else{
$extot = 0;
}



//make queries
//$sql= @mysql_query("Select * from sales where Date='$date'");
if($typee == "CASH"){

if(!empty($date) && empty($date2)){
$sql= @mysql_query("SELECT sales.Quantity,sales.Rate,sales.Amount,sales.Date,inventory.Description FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.Date='$date' order by inventory.Description ASC");
$sqlc = @mysql_query("SELECT sum(cashdiscount) AS cashdiscount from salesdiscount where Date ='$date' ");
}else{
$sql= @mysql_query("SELECT sales.Quantity,sales.Rate,sales.Amount,sales.Date,inventory.Description FROM sales JOIN inventory ON sales.ProductCode = inventory.ProductCode WHERE sales.Date BETWEEN '$date' AND '$date2' order by inventory.Description ASC");
$sqlc = @mysql_query("SELECT sum(cashdiscount) AS cashdiscount from salesdiscount where Date BETWEEN '$date' AND '$date2' ");
}
while($rc= @mysql_fetch_array($sqlc)){
//$dc = $rc['Date'];
}
if(@mysql_num_rows($sqlc) > 0){
//if($dc==$date){
if(!empty($date) && empty($date2)){
$sql0 = @mysql_query("SELECT cashdiscount from salesdiscount Where Date='$date'");
}else{
$sql0 = @mysql_query("SELECT sum(cashdiscount) AS cashdiscount from salesdiscount Where Date BETWEEN '$date' AND '$date2'");
}
while($rw = @mysql_fetch_array($sql0)){
$cashdiscount = $rw['cashdiscount'];
}
}else{
$cashdiscount =0;
}

if(!empty($date) && empty($date2)){
$sql1 = @mysql_query("SELECT sum(Amount) As Amount FROM sales where Date='$date'");
}else{
$sql1 = @mysql_query("SELECT sum(Amount) AS Amount FROM sales where Date BETWEEN '$date' AND '$date2'");
}
while($row1 = @mysql_fetch_array($sql1))
{
    $sum=$row1['Amount'];
	
 }
$sum1 = $sum - $cashdiscount; 
$sum = $sum - $cashdiscount - $extot;

}else if ($typee == "DEBIT"){
if(!empty($date) && empty($date2)){
$sql= @mysql_query("SELECT debitsales.Quantity,debitsales.Rate,debitsales.Amount,debitsales.Date,inventory.Description FROM debitsales JOIN inventory ON debitsales.ProductCode = inventory.ProductCode WHERE debitsales.Date='$date' order by inventory.Description ASC");
$sqld = @mysql_query("SELECT sum(debitdiscount) As debitdiscount from salesdiscount where Date ='$date'");
}else{
$sql= @mysql_query("SELECT debitsales.Quantity,debitsales.Rate,debitsales.Amount,debitsales.Date,inventory.Description FROM debitsales JOIN inventory ON debitsales.ProductCode = inventory.ProductCode WHERE debitsales.Date BETWEEN '$date' AND '$date2' order by inventory.Description ASC");
$sqld = @mysql_query("SELECT sum(debitdiscount) AS debitdiscount from salesdiscount where Date BETWEEN '$date' AND '$date2'");
}
while($rd= @mysql_fetch_array($sqld)){
//$dc= $rd['debitdiscount'];
}
if(@mysql_num_rows($sqld) > 0){
//if($dc==$date){
if(!empty($date) && empty($date2)){
$sql0 = @mysql_query("SELECT debitdiscount from salesdiscount Where Date='$date'");
}else{
$sql0 = @mysql_query("SELECT sum(debitdiscount) AS debitdiscount from salesdiscount Where Date BETWEEN '$date' AND '$date2' ");
}
while($rw = @mysql_fetch_array($sql0)){
$debitdiscount = $rw['debitdiscount'];
}
}else{
$debitdiscount = 0;
}

if(!empty($date) && empty($date2)){
$sql1 = @mysql_query("SELECT sum(Amount) AS Amount FROM debitsales where Date='$date'");
}else{
$sql1 = @mysql_query("SELECT sum(Amount) As Amount FROM debitsales where Date BETWEEN '$date' AND '$date2'");
}
while($row1 = @mysql_fetch_array($sql1))
{
    $sum=$row1['Amount'];
	
 }
  
    $sum = $sum - $debitdiscount;
	$sum1 = $sum;
}

if(@mysql_affected_rows() >0){
//$sql1 = @mysql_query("SELECT sum(Amount) FROM sales where Date='$date'");
//while($row1 = @mysql_fetch_array($sql1))
//{
   // $sum=$row1['sum(Amount)'];
	
// }

//instance of PHPEcel
$spreadsheet= new PHPEXcel;
$spreadsheet->setActiveSheetIndex(0);
$spreadsheet->getActiveSheet()->setTitle($typee.'Daily sales'); 
//$spreadsheet->getActiveSheet()->setTitle('Daily sales');
$type=PHPExcel_Cell_DataType::TYPE_STRING;//defining type

//SET WIDTH
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth('10');//set width
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth('45');
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth('10');
$spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth('10');


//Format Headings Make it bold
$spreadsheet->getActiveSheet()->getStyle('B4')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('C4')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('D4')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('E4')->getFont()->setBold(true);

//Format Header and Increase Its Size
$spreadsheet->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('C2')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('D2')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('B1')->getFont()->setSize(20);
$spreadsheet->getActiveSheet()->getStyle('C2')->getFont()->setSize(12);
$spreadsheet->getActiveSheet()->getStyle('D2')->getFont()->setSize(12);

//Center Headers and Headings
$spreadsheet->getActiveSheet()->getStyle('B4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('C4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('D4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('E4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

//Set Values of Document Titel
$datee= date("d-m-Y");
$worksheet=$spreadsheet->getActiveSheet();

$worksheet->setCellValue('B1','NOBLE ALCHUKS NIGERIA LTD ABRO MINI DEPOT');//Title
$worksheet->setCellValue('C2',$typee . '-DAILY SALES REPORT');//Title
$worksheet->setCellValue('D2','Date : ' . $date);//Title

//PLacing Border
$spreadsheet->getActiveSheet()->getStyle('B4:E4')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
//Heading From Data Base
$worksheet->setCellValue('B4','QUANTITY');
$worksheet->setCellValue('C4','DESCRIPTION OF GOODS');
$worksheet->setCellValue('D4','RATE');
$worksheet->setCellValue('E4','AMOUNT');

//Populate Excel With Data
$introw =5;
$count =0;
while($row= @mysql_fetch_array($sql)){
//for($i = 1; $i< count($Array1); $i++){

//Align data to center
$spreadsheet->getActiveSheet()->getStyle('B'. $introw)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('C'. $introw)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('D'. $introw)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('E'. $introw)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

//borders
//$styleArray = array('borders'=>array('allborders'=>array('style'=>PHPExcel_Style_Border::BORDER_THIN)));
$spreadsheet->getActiveSheet()->getStyle('B'.$introw.':' .'E'.$introw)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
//$spreadsheet->getActiveSheet()->getStyle(12,$introw)->applyFromArray($styleArray);
//unset($styleArray);

//populate excel with data
$quantity= $row['Quantity'];
//$productcode = $row['ProductCode'];
$description = $row['Description'];
$rate = $row['Rate'];
$amount = $row['Amount'];

$worksheet->setCellValueByColumnAndRow(1,$introw,$quantity); 
$worksheet->setCellValueByColumnAndRow(2,$introw,$description);
$worksheet->setCellValueByColumnAndRow(3,$introw,$rate);
$worksheet->setCellValueByColumnAndRow(4,$introw,$amount);

$introw= $introw + 1;//increment row
}

$introw= $introw ;

//set border
$spreadsheet->getActiveSheet()->getStyle('D'.$introw.':' .'E'.$introw)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

//Align Total and Sales to center
$spreadsheet->getActiveSheet()->getStyle('D'. $introw)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('E'. $introw)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

//set sum and total value

$worksheet->setCellValueByColumnAndRow(3,$introw,'TOTAL');
$worksheet->setCellValueByColumnAndRow(4,$introw,$sum1);


//Format Total Sales
$spreadsheet->getActiveSheet()->getStyle('D'. $introw)->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('E'. $introw)->getFont()->setBold(true);

$introw = $introw + 1;

//Align Balance and Sales to center

$spreadsheet->getActiveSheet()->getStyle('D'. $introw)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('E'. $introw)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$worksheet->setCellValueByColumnAndRow(3,$introw,'BALANCE');
$worksheet->setCellValueByColumnAndRow(4,$introw,$sum);

//Format Total Sales
$spreadsheet->getActiveSheet()->getStyle('D'. $introw)->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('E'. $introw)->getFont()->setBold(true);

//set border
$spreadsheet->getActiveSheet()->getStyle('D'.$introw.':' .'E'.$introw)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);


@unlink($strFileName); //*** Delete old files ***//	
//writing excel file to hard disk
$writer=new PHPExcel_Writer_Excel2007($spreadsheet);
//$writer->save('hello-world.xlsx');//works
//$writer->save('C:/Users/SIWES/Desktop/Master-List.xlsx'); 
$writer->save($strFileName);
//echo("<script type= 'text/javascript'>\n");
 // echo("alert('Students Record Has Been Generated And Saved')");
   // echo("</script
	echo("Daily Sales Has Been Generated Successfully!!!");
	echo("</br></br>");
	?>
	
	ExcelSheet Created <a href= "<?php echo( $strFileName) ?> ">Click here</a> to Download.

</fieldset>
<?php 
//exit;
}else{
echo ("No Transaction was Found on The Date Specified!!!");
//exit;
}
}
}
?>


</fieldset>
<center>
<div style="margin-top:130px ">
<a href="homepage.php">Click to go to home page</a>	
	</div>
	</center>


<div style="margin-top:10px ">
<marquee behavior="scroll"><font   size="+2" face="Times New Roman, Times, serif"><b>This Program Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>

</body>
</html>
