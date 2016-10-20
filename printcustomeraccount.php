
<?php
	require_once('auth.php');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Print Customers Account</title>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 
</head>

<body>
</br>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">NOBLE ALCHUKS NIGERIA LIMITED </center>
<center style="font: 'Courier New', Courier, mono;  font-size:xx-large; color:#FF0000; text-align:center; font-weight:bolder ">ABRO MINI DEPOT </center>
<center style="font:'Courier New', Courier, mono; font-size:large; text-align:center; font-weight:bold; color:#FF0000 ">Sales Inventory System </br> Version : 2.1 </center>
</br>

<div style="margin-left:900px ">
Date : <input type="text" value="<?php echo (date("Y-m-d"))?>"  style="border:none; text-align:left "/>
</div>

<fieldset style="border-color:#000000 ">
<legend><em style="color:#0033CC ">Print customers account form</em></legend>


<form method="post" action="" >

OPTIONS ; In all options select Customer Name first :</br>
1. Select date1 and date2 then click Print Customer,s Account to print account between those dates. </br>
2. Select All account  and click Print Customer,s Account to print summary account. </br></br>


<center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Name :
<?php
include ("db.php");
$sql = @mysql_query("Select * from customer order by Name ASC");
	
	echo '<select name="customer" id="customer"  size="1" width="200" >';
	echo '<option value="">';
	echo 'SELECT CUSTOMER NAME ';
	echo '</option>';
	 while($res= mysql_fetch_array($sql))
	{
	echo '<option value="'.$res['CustomerId'].'">';
	echo $res['Name'];
	echo'</option>';
	}
	echo'</select>';

?>

</br></br>

Date1 : <input type="text" name="date1" id="date1"  class="tcal" style="background-color:#D5EAF0 "   readonly="readonly" /></br></br>
Date2 : <input type="text" name="date2" id="date2"  class="tcal" style="background-color:#D5EAF0 "   readonly="readonly" /></br></br>

All Account : <select name="account" id="account" size="1">
<option>Select type</option>
<option>All Account</option>
</select>
</br></br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="print"  id="print" value="Print Customer Account" />

</center>
</form> 

<!--</div>-->

<?php
//Include PHPEcel Libraris
include ("db.php");
include('PHPExcel\PHPExcel\IOFactory.php');
require_once'PHPExcel\PHPExcel.php';
require_once'PHPExcel\PHPExcel\Writer\Excel2007.php';

//if print button is clicked
if(isset($_POST['print'])){
$customer= trim(htmlspecialchars(strtoupper( $_POST['customer'])));
$date1= trim(htmlspecialchars(strtoupper( $_POST['date1'])));
$date2= trim(htmlspecialchars(strtoupper( $_POST['date2'])));
$account = trim(htmlspecialchars(strtoupper( $_POST['account'])));
$date = date("d-m-Y");
//echo($type);
$fileName= "Customers account"; 
//$fileName= "Daily sales";
//*** Excel Document Root ***//
			$strFileName = $fileName.".xlsx";

if(empty($customer)){
echo("<script type='text/javascript'>\n");
echo("alert('Please Select Customers Name')");
echo("</script>");
//exit;
}else if( !empty($customer) && empty($date1) && empty($date2) && $account=="SELECT TYPE")  {
echo("<script type='text/javascript'>\n");
echo("alert('Please Select Date or Account')");
echo("</script>");
}else{


//make queries

if(!empty($customer) && !empty($date1) && empty($date2) && $account=="SELECT TYPE" ){
$sql = @mysql_query("Select * from balances where CustomerId='$customer' && Date='$date1' ");
//echo("OK");
}else if(!empty($customer) && !empty($date1) && !empty($date2) && $account=="SELECT TYPE" ){
$sql = @mysql_query("Select * from balances where CustomerId='$customer' && Date BETWEEN '$date1' AND '$date2' ");
}else if(!empty($customer) && empty($date1) && empty($date2) && $account=="ALL ACCOUNT" ) {
$sql = @mysql_query("Select * from balances where CustomerId='$customer' ");
}

if(@mysql_affected_rows() >0){


//instance of PHPEcel
$spreadsheet= new PHPEXcel;
$spreadsheet->setActiveSheetIndex(0);
$spreadsheet->getActiveSheet()->setTitle('Customers account'); 
//$spreadsheet->getActiveSheet()->setTitle('Daily sales');
$type=PHPExcel_Cell_DataType::TYPE_STRING;//defining type

//SET WIDTH
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth('15');//set width
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth('15');
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth('15');
$spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth('15');
$spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth('10');

//Format Headings Make it bold
$spreadsheet->getActiveSheet()->getStyle('B4')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('C4')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('D4')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('E4')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('F4')->getFont()->setBold(true);

//Format Header and Increase Its Size
$spreadsheet->getActiveSheet()->getStyle('B1')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('C2')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('E3')->getFont()->setBold(true);
$spreadsheet->getActiveSheet()->getStyle('B1')->getFont()->setSize(19);
$spreadsheet->getActiveSheet()->getStyle('C2')->getFont()->setSize(12);
$spreadsheet->getActiveSheet()->getStyle('E3')->getFont()->setSize(12);

//Center Headers and Headings
$spreadsheet->getActiveSheet()->getStyle('B4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('C4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('D4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('E4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$spreadsheet->getActiveSheet()->getStyle('F4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

//Set Values of Document Titel
$datee= date("d-m-Y");
$worksheet=$spreadsheet->getActiveSheet();

$worksheet->setCellValue('B1','NOBLE ALCHUKS NIGERIA LTD ABRO MINI DEPOT');//Title
$worksheet->setCellValue('C2','SUMMARY OF CUSTOMERS ACCOUNT');//Title
$worksheet->setCellValue('E3','Date : ' . $date);//Title

//PLacing Border
$spreadsheet->getActiveSheet()->getStyle('B4:F4')->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
//Heading From Data Base
$worksheet->setCellValue('B4','OLD BALANCE');
$worksheet->setCellValue('C4','AMMOUNT PAID');
$worksheet->setCellValue('D4','TOTAL/DEPOSIT');
$worksheet->setCellValue('E4','NEW BALANCE');
$worksheet->setCellValue('F4','DATE');
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
$spreadsheet->getActiveSheet()->getStyle('F'. $introw)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//borders
//$styleArray = array('borders'=>array('allborders'=>array('style'=>PHPExcel_Style_Border::BORDER_THIN)));
$spreadsheet->getActiveSheet()->getStyle('B'.$introw.':' .'F'.$introw)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);
//$spreadsheet->getActiveSheet()->getStyle(12,$introw)->applyFromArray($styleArray);
//unset($styleArray);

//populate excel with data
$oldbal= $row['OldBalance'];
$amtpaid = $row['AmountPaid'];
$total = $row['Total'];
$newbal = $row['NewBalance'];
$date = $row['Date'];

$worksheet->setCellValueByColumnAndRow(1,$introw,$oldbal); 
$worksheet->setCellValueByColumnAndRow(2,$introw,$amtpaid);
$worksheet->setCellValueByColumnAndRow(3,$introw,$total);
$worksheet->setCellValueByColumnAndRow(4,$introw,$newbal);
$worksheet->setCellValueByColumnAndRow(5,$introw,$date);

$introw= $introw + 1;//increment row
}

$introw= $introw ;

//set border
//$spreadsheet->getActiveSheet()->getStyle('D'.$introw.':' .'F'.$introw)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);

//Align Total and Sales to center
//$spreadsheet->getActiveSheet()->getStyle('D'. $introw)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
//$spreadsheet->getActiveSheet()->getStyle('E'. $introw)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

//set sum and total value

//$worksheet->setCellValueByColumnAndRow(3,$introw,'TOTAL');
//$worksheet->setCellValueByColumnAndRow(4,$introw,$sum);

//Format Total Sales
//$spreadsheet->getActiveSheet()->getStyle('D'. $introw)->getFont()->setBold(true);
//$spreadsheet->getActiveSheet()->getStyle('E'. $introw)->getFont()->setBold(true);

@unlink($strFileName); //*** Delete old files ***//	
//writing excel file to hard disk
$writer=new PHPExcel_Writer_Excel2007($spreadsheet);
//$writer->save('hello-world.xlsx');//works
//$writer->save('C:/Users/SIWES/Desktop/Master-List.xlsx'); 
$writer->save($strFileName);
//echo("<script type= 'text/javascript'>\n");
 // echo("alert('Students Record Has Been Generated And Saved')");
   // echo("</script
	echo("Customers Account Has Been Generated Successfully!!!");
	echo("</br></br>");
	?>
	
	ExcelSheet Created <a href= "<?php echo( $strFileName) ?> ">Click here</a> to Download.

</fieldset>
<?php 

}else{
echo ("No Transaction was Found on The Date Specified!!!");

}
}
}
?>
</fieldset>

<center>
<div style="margin-top:10px ">
<a href="customerquery.php">Click to go back</a>	
	</div>
	</center>
<center>

<div style="margin-top:10px ">
<a href="homepage.php">Click to go to home page</a>	
	</div>
	</center>


<div style="margin-top:10px ">
<marquee behavior="scroll"><font   size="+2" face="Times New Roman, Times, serif"><b>This Program Was Designed By Adeyemo David Sunday For Noble Alchuks Nig. Ltd and Protected By Copy Right Law!!! Contact : 08062628486, 08052127350 </b></font></marquee>
</div>

</body>
</html>
