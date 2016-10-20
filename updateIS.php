<?php
	require_once('auth.php');
?>

<?php

 if (isset($_POST['des1'])){
include("db.php");
$quantity1 = trim(htmlspecialchars(strtoupper( $_POST['qty1']))); $price1 = trim(htmlspecialchars(strtoupper( $_POST['pric1']))); $description1 = trim(htmlspecialchars(strtoupper( $_POST['des1']))); $amount1 = trim(htmlspecialchars(strtoupper( $_POST['amt1'])));
$quantity2 = trim(htmlspecialchars(strtoupper( $_POST['qty2']))); $price2 = trim(htmlspecialchars(strtoupper( $_POST['pric2']))); $description2 = trim(htmlspecialchars(strtoupper( $_POST['des2']))); $amount2 = trim(htmlspecialchars(strtoupper( $_POST['amt2'])));
$quantity3 = trim(htmlspecialchars(strtoupper( $_POST['qty3']))); $price3 = trim(htmlspecialchars(strtoupper( $_POST['pric3']))); $description3 = trim(htmlspecialchars(strtoupper( $_POST['des3']))); $amount3 = trim(htmlspecialchars(strtoupper( $_POST['amt3'])));
$quantity4 = trim(htmlspecialchars(strtoupper( $_POST['qty4']))); $price4 = trim(htmlspecialchars(strtoupper( $_POST['pric4']))); $description4 = trim(htmlspecialchars(strtoupper( $_POST['des4']))); $amount4 = trim(htmlspecialchars(strtoupper( $_POST['amt4'])));
$quantity5 = trim(htmlspecialchars(strtoupper( $_POST['qty5']))); $price5 = trim(htmlspecialchars(strtoupper( $_POST['pric5']))); $description5 = trim(htmlspecialchars(strtoupper( $_POST['des5']))); $amount5 = trim(htmlspecialchars(strtoupper( $_POST['amt5'])));
$quantity6 = trim(htmlspecialchars(strtoupper( $_POST['qty6']))); $price6 = trim(htmlspecialchars(strtoupper( $_POST['pric6']))); $description6 = trim(htmlspecialchars(strtoupper( $_POST['des6']))); $amount6 = trim(htmlspecialchars(strtoupper( $_POST['amt6'])));
$quantity7 = trim(htmlspecialchars(strtoupper( $_POST['qty7']))); $price7 = trim(htmlspecialchars(strtoupper( $_POST['pric7']))); $description7 = trim(htmlspecialchars(strtoupper( $_POST['des7']))); $amount7 = trim(htmlspecialchars(strtoupper( $_POST['amt7'])));
$quantity8 = trim(htmlspecialchars(strtoupper( $_POST['qty8']))); $price8 = trim(htmlspecialchars(strtoupper( $_POST['pric8']))); $description8 = trim(htmlspecialchars(strtoupper( $_POST['des8']))); $amount8 = trim(htmlspecialchars(strtoupper( $_POST['amt8'])));
$quantity9 = trim(htmlspecialchars(strtoupper( $_POST['qty9']))); $price9 = trim(htmlspecialchars(strtoupper( $_POST['pric9']))); $description9 = trim(htmlspecialchars(strtoupper( $_POST['des9']))); $amount9 = trim(htmlspecialchars(strtoupper( $_POST['amt9'])));
$quantity10 = trim(htmlspecialchars(strtoupper( $_POST['qty10']))); $price10 = trim(htmlspecialchars(strtoupper( $_POST['pric10']))); $description10 = trim(htmlspecialchars(strtoupper( $_POST['des10']))); $amount10 = trim(htmlspecialchars(strtoupper( $_POST['amt10'])));
$quantity11 = trim(htmlspecialchars(strtoupper( $_POST['qty11']))); $price11 = trim(htmlspecialchars(strtoupper( $_POST['pric11']))); $description11 = trim(htmlspecialchars(strtoupper( $_POST['des11'])));  $amount11 = trim(htmlspecialchars(strtoupper( $_POST['amt11'])));
$customerId = trim(htmlspecialchars(strtoupper( $_POST['cusId']))); 
$datee = trim(htmlspecialchars(strtoupper( $_POST['datte'])));
$oldbal = trim(htmlspecialchars(strtoupper( $_POST['oldbal1'])));
$amtpaid = trim(htmlspecialchars(strtoupper( $_POST['amtpaid1'])));
$discount = trim(htmlspecialchars(strtoupper( $_POST['discount'])));

if(empty($discount)){
$discount = 0;
}
if(empty($amtpaid) || $amtpaid==""){
$amtpaid = 0;
}
$amtp = $amtpaid;
$amtpaid = $amtpaid + $discount;
$total = trim(htmlspecialchars(strtoupper( $_POST['total1'])));
$newbal = trim(htmlspecialchars(strtoupper( $_POST['newbal1'])));
$date = date("Y-m-d");

$upsd= @mysql_query( "Select * from salesdiscount where Date ='$date' "); 
if(@mysql_num_rows($upsd) > 0){
//do nothing
}else{
$cashdiscount=0;
$debitdiscount = 0;
$upsd1 =  @mysql_query("Insert into salesdiscount (cashdiscount, debitdiscount, Date) VALUES ('$cashdiscount', '$debitdiscount', '$date') ");
//$upsd1 =  @mysql_query("Update salesdiscount set  cashdiscount=  '$cashdiscount' , debitdiscount='$debitdiscount', Date='$date' ");
}


//update inventory table
//update first product1
if($description1 !="" && $quantity1 !="" && $price1 !="" && $amtpaid == $total && $oldbal ==0){
$sql1= @mysql_query( "select * from inventory where ProductCode='$description1' "); 
if($sql1){
while($res1=mysql_fetch_array($sql1)){
//$qty1= $res1['Quantity1']; 
//$total1 = $res1['Total'];
//$qtyleft1= $qty1 - $quantity1;
//$totalleft1 = $total1 - $quantity1; 
/*$sql11= @mysql_query( "select Date from salesdiscount where Date='$date' "); 
while($w = mysql_fetch_array($sql11)){
$dat = $w['Date'];
if(@mysql_num_rows($sql11) > 0){
//if($dat==$date){
$updatecash = @mysql_query("Update salesdiscount set  cashdiscount= cashdiscount + '$discount' where Date='$date'");
}else{
$qu= @mysql_query("Insert into salesdiscount (cashdiscount, Date) VALUES ('$cashdiscount', '$date')  ");
}
}*/

$updatecash = @mysql_query("Update salesdiscount set  cashdiscount= cashdiscount + '$discount' where Date='$date' ");
$update1 = @mysql_query("Update inventory set  Total= Total - '$quantity1' where ProductCode='$description1' ");
$sell1 = @mysql_query("Insert into sales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description1','$quantity1', '$price1', '$amount1', '$date')");
}
}
}

//update debit inventory table if customer did not pay cash
else if($description1 !="" && $quantity1 !="" && $price1 !="" || $amtpaid < $total || $oldbal != 0 || $oldbal==0 || $amtpaid > $total ){
$sql1= @mysql_query( "select * from inventory where ProductCode='$description1' "); 
if($sql1){
while($res1=mysql_fetch_array($sql1)){
//$qty1= $res1['Quantity1']; $total1 = $res1['Total'];
//$qtyleft1= $qty1 - $quantity1;
//$totalleft1 = $total1 - $quantity1; 

/*$sql11= @mysql_query( "select Date from salesdiscount where Date='$date' "); 
while($w = mysql_fetch_array($sql11)){
$dat = $w['Date'];
if(@mysql_num_rows($sql11) > 0){
//if($dat==$date){
$updatedebit = @mysql_query("Update salesdiscount set  debitdiscount= debitdiscount + '$discount' where Date='$date' ");
}else{
$qu= @mysql_query("Insert into salesdiscount (debitdiscount, Date) VALUES ('$debitdiscount', '$date')  ");
}
}*/

$updatedebit = @mysql_query("Update salesdiscount set  debitdiscount= debitdiscount + '$discount' where Date='$date' ");
$update1 = @mysql_query("Update inventory set Total= Total - '$quantity1' where ProductCode='$description1' ");
$sell1 = @mysql_query("Insert into debitsales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description1','$quantity1', '$price1', '$amount1', '$date')");
}
}
}else{
// do nothing
}

//update second product
if($description2 !="" && $quantity2 !="" && $price2 !="" && $amtpaid >= $total && $oldbal ==0){
$sql2= @mysql_query( "select * from inventory where ProductCode='$description2' "); 
if($sql2){
while($res2= @mysql_fetch_array($sql2)){
//$qty2= $res2['Quantity1']; $total2 = $res2['Total'];
//$qtyleft2= $qty2 - $quantity2;
//$totalleft2 = $total2 - $quantity2; 
$update2 = @mysql_query("Update inventory set Total= Total - '$quantity2' where ProductCode='$description2' ");
$sell2 = @mysql_query("Insert into sales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description2','$quantity2', '$price2', '$amount2', '$date')");
}
}
}
// debit sales
else if($description2 !="" && $quantity2 !="" && $price2 !="" || $amtpaid < $total || $oldbal != 0 || $oldbal==0 || $amtpaid > $total){
$sql2= @mysql_query( "select * from inventory where ProductCode='$description2' "); 
if($sql2){
while($res2= @mysql_fetch_array($sql2)){
//$qty2= $res2['Quantity1']; $total2 = $res2['Total'];
//$qtyleft2= $qty2 - $quantity2;
//$totalleft2 = $total2 - $quantity2; 
$update2 = @mysql_query("Update inventory set Total= Total - '$quantity2' where ProductCode='$description2' ");
$sell2 = @mysql_query("Insert into debitsales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description2','$quantity2', '$price2', '$amount2', '$date')");
}
}
}else{
// do nothing
}


//update third product
if($description3 !="" && $quantity3 !="" && $price3 !="" && $amtpaid >= $total && $oldbal ==0){
$sql3=mysql_query( "select * from inventory where ProductCode='$description3' "); 
if($sql3){
while($res3=mysql_fetch_array($sql3)){
//$qty3= $res3['Quantity1']; $total3 = $res3['Total'];
//$qtyleft3= $qty3 - $quantity3;
//$totalleft3 = $total3 - $quantity3; 
$update3 = mysql_query("Update inventory set Total= Total - '$quantity3' where ProductCode='$description3' ");
$sell3 = @mysql_query("Insert into sales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description3','$quantity3', '$price3', '$amount3', '$date')");
}
}}
//debit sales
else if($description3 !="" && $quantity3 !="" && $price3 !="" || $amtpaid < $total || $oldbal != 0 || $oldbal==0 || $amtpaid > $total){
$sql3=mysql_query( "select * from inventory where ProductCode='$description3' "); 
if($sql3){
while($res3=mysql_fetch_array($sql3)){
//$qty3= $res3['Quantity1']; $total3 = $res3['Total'];
//$qtyleft3= $qty3 - $quantity3;
//$totalleft3 = $total3 - $quantity3; 
$update3 = mysql_query("Update inventory set Total= Total - '$quantity3' where ProductCode='$description3' ");
$sell3 = @mysql_query("Insert into debitsales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description3','$quantity3', '$price3', '$amount3', '$date')");
}
}}else{
// do nothing
}

//update fourth product
if($description4 !="" && $quantity4 !="" && $price4 !="" && $amtpaid >= $total && $oldbal ==0){
$sql4=mysql_query( "select * from inventory where ProductCode='$description4' "); 
if($sql4){
while($res4=mysql_fetch_array($sql4)){
//$qty4= $res4['Quantity1']; $total4 = $res4['Total'];
//$qtyleft4= $qty4 - $quantity4;
//$totalleft4 = $total4 - $quantity4; 
$update4 = mysql_query("Update inventory set Total= Total - '$quantity4' where ProductCode='$description4' ");
$sell4 = @mysql_query("Insert into sales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description4','$quantity4', '$price4', '$amount4', '$date')");
}
}}
// debit sales
else if($description4 !="" && $quantity4 !="" && $price4 !="" || $amtpaid < $total || $oldbal != 0 || $oldbal==0 || $amtpaid > $total){
$sql4=mysql_query( "select * from inventory where ProductCode='$description4' "); 
if($sql4){
while($res4=mysql_fetch_array($sql4)){
//$qty4= $res4['Quantity1']; $total4 = $res4['Total'];
//$qtyleft4= $qty4 - $quantity4;
//$totalleft4 = $total4 - $quantity4; 
$update4 = mysql_query("Update inventory set Total= Total - '$quantity4' where ProductCode='$description4' ");
$sell4 = @mysql_query("Insert into debitsales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description4','$quantity4', '$price4', '$amount4', '$date')");
}
}}else{
// do nothing
}


//update fifth product
if($description5 !="" && $quantity5 !="" && $price5 !="" && $amtpaid >= $total && $oldbal ==0){
$sql5=mysql_query( "select * from inventory where ProductCode='$description5' "); 
if($sql5){
while($res5=mysql_fetch_array($sql5)){
//$qty5= $res5['Quantity1']; $total5 = $res5['Total'];
//$qtyleft5= $qty5 - $quantity5;
//$totalleft5 = $total5 - $quantity5; 
$update5 = mysql_query("Update inventory set Total= Total - '$quantity5' where ProductCode='$description5' ");
$sell5 = @mysql_query("Insert into sales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description5','$quantity5', '$price5', '$amount5', '$date')");
}
}}
// debit sales
else if($description5 !="" && $quantity5 !="" && $price5 !="" || $amtpaid < $total || $oldbal != 0 || $oldbal==0 || $amtpaid > $total){
$sql5=mysql_query( "select * from inventory where ProductCode='$description5' "); 
if($sql5){
while($res5=mysql_fetch_array($sql5)){
//$qty5= $res5['Quantity1']; $total5 = $res5['Total'];
//$qtyleft5= $qty5 - $quantity5;
//$totalleft5 = $total5 - $quantity5; 
$update5 = mysql_query("Update inventory set Total= Total - '$quantity5' where ProductCode='$description5' ");
$sell5 = @mysql_query("Insert into debitsales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description5','$quantity5', '$price5', '$amount5', '$date')");
}
}}else{
// do nothing
}


//update sixth product
if($description6 !="" && $quantity6 !="" && $price6 !="" && $amtpaid >= $total && $oldbal ==0){
$sql6=mysql_query( "select * from inventory where ProductCode='$description6' "); 
if($sql6){
while($res6=mysql_fetch_array($sql6)){
//$qty6= $res6['Quantity1']; $total6 = $res6['Total'];
//$qtyleft6= $qty6 - $quantity6;
//$totalleft6 = $total6 - $quantity6; 
$update6 = mysql_query("Update inventory set Total= Total - '$quantity6' where ProductCode='$description6' ");
$sell6 = @mysql_query("Insert into sales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description6','$quantity6', '$price6', '$amount6', '$date')");
}
}}
// debit sales
else if($description6 !="" && $quantity6 !="" && $price6 !="" || $amtpaid < $total || $oldbal != 0 || $oldbal==0 || $amtpaid > $total){
$sql6=mysql_query( "select * from inventory where ProductCode='$description6' "); 
if($sql6){
while($res6=mysql_fetch_array($sql6)){
//$qty6= $res6['Quantity1']; $total6 = $res6['Total'];
//$qtyleft6= $qty6 - $quantity6;
//$totalleft6 = $total6 - $quantity6; 
$update6 = mysql_query("Update inventory set Total= Total - '$quantity6' where ProductCode='$description6' ");
$sell6 = @mysql_query("Insert into debitsales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description6','$quantity6', '$price6', '$amount6', '$date')");
}
}}else{
// do nothing
}


//update seventh product
if($description7 !="" && $quantity7 !="" && $price7 !="" && $amtpaid >= $total && $oldbal ==0){
$sql7=mysql_query( "select * from inventory where ProductCode='$description7' "); 
if($sql7){
while($res7=mysql_fetch_array($sql7)){
//$qty7= $res7['Quantity1']; $total7 = $res7['Total'];
//$qtyleft7= $qty7 - $quantity7;
//$totalleft7 = $total7 - $quantity7; 
$update7 = mysql_query("Update inventory set Total= Total - '$quantity7' where ProductCode='$description7' ");
$sell7 = @mysql_query("Insert into sales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description7','$quantity7', '$price7', '$amount7', '$date')");
}
}}
// debit sales
else if($description7 !="" && $quantity7 !="" && $price7 !="" || $amtpaid < $total || $oldbal != 0 || $oldbal==0 || $amtpaid > $total){
$sql7=mysql_query( "select * from inventory where ProductCode='$description7' "); 
if($sql7){
while($res7=mysql_fetch_array($sql7)){
//$qty7= $res7['Quantity1']; $total7 = $res7['Total'];
//$qtyleft7= $qty7 - $quantity7;
//$totalleft7 = $total7 - $quantity7; 
$update7 = mysql_query("Update inventory set Total= Total - '$quantity7' where ProductCode='$description7' ");
$sell7 = @mysql_query("Insert into debitsales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description7','$quantity7', '$price7', '$amount7', '$date')");
}
}}else{
// do nothing
}

//update eigth product
if($description8 !="" && $quantity8 !="" && $price8 !="" && $amtpaid >= $total && $oldbal ==0){
$sql8=mysql_query( "select * from inventory where ProductCode='$description8' "); 
if($sql8){
while($res8=mysql_fetch_array($sql8)){
//$qty8= $res8['Quantity1']; $total8 = $res8['Total'];
//$qtyleft8= $qty8 - $quantity8;
//$totalleft8 = $total8 - $quantity8; 
$update8 = mysql_query("Update inventory set Total= Total - '$quantity8' where ProductCode='$description8'");
$sell8 = @mysql_query("Insert into sales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description8','$quantity8', '$price8', '$amount8', '$date')");
}
}}
// debit sales
else if($description8 !="" && $quantity8 !="" && $price8 !="" || $amtpaid < $total || $oldbal != 0 || $oldbal==0 || $amtpaid > $total){
$sql8=mysql_query( "select * from inventory where ProductCode='$description8' "); 
if($sql8){
while($res8=mysql_fetch_array($sql8)){
//$qty8= $res8['Quantity1']; $total8 = $res8['Total'];
//$qtyleft8= $qty8 - $quantity8;
//$totalleft8 = $total8 - $quantity8; 
$update8 = mysql_query("Update inventory set Total= Total - '$quantity8' where ProductCode='$description8'");
$sell8 = @mysql_query("Insert into debitsales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description8','$quantity8', '$price8', '$amount8', '$date')");
}
}}else{
// do nothing
}



//update ninth product
if($description9 !="" && $quantity9 !="" && $price9 !="" && $amtpaid >= $total && $oldbal ==0){
$sql9=mysql_query( "select * from inventory where ProductCode='$description9' "); 
if($sql9){
while($res9=mysql_fetch_array($sql9)){
//$qty9= $res9['Quantity1']; $total9 = $res9['Total'];
//$qtyleft9= $qty9 - $quantity9;
//$totalleft9 = $total9 - $quantity9; 
$update9 = mysql_query("Update inventory set Total= Total - '$quantity9' where ProductCode='$description9' ");
$sell9 = @mysql_query("Insert into sales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description9','$quantity9', '$price9', '$amount9', '$date')");
}
}}
// debit sales
else if($description9 !="" && $quantity9 !="" && $price9 !="" || $amtpaid < $total || $oldbal != 0 || $oldbal==0 || $amtpaid > $total){
$sql9=mysql_query( "select * from inventory where ProductCode='$description9' "); 
if($sql9){
while($res9=mysql_fetch_array($sql9)){
//$qty9= $res9['Quantity1']; $total9 = $res9['Total'];
//$qtyleft9= $qty9 - $quantity9;
//$totalleft9 = $total9 - $quantity9; 
$update9 = mysql_query("Update inventory set Total= Total - '$quantity9' where ProductCode='$description9' ");
$sell9 = @mysql_query("Insert into debitsales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description9','$quantity9', '$price9', '$amount9', '$date')");
}
}}else{
// do nothing
}



//update tenth product
if($description10 !="" && $quantity10 !="" && $price10 !=""  && $amtpaid >= $total && $oldbal ==0){
$sql10=mysql_query( "select * from inventory where ProductCode='$description10' "); 
if($sql10){
while($res10=mysql_fetch_array($sql10)){
//$qty10= $res10['Quantity1']; $total10 = $res10['Total'];
//$qtyleft10= $qty10 - $quantity10;
//$totalleft10 = $total10 - $quantity10; 
$update10 = mysql_query("Update inventory set Total= Total - '$quantity10' where ProductCode='$description10' ");
$sell10 = @mysql_query("Insert into sales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description10','$quantity10', '$price10', '$amount10', '$date')");
}
}}
// debit sales
else if($description10 !="" && $quantity10 !="" && $price10 !=""  || $amtpaid < $total || $oldbal != 0 || $oldbal==0 || $amtpaid > $total){
$sql10=mysql_query( "select * from inventory where ProductCode='$description10' "); 
if($sql10){
while($res10=mysql_fetch_array($sql10)){
//$qty10= $res10['Quantity1']; $total10 = $res10['Total'];
//$qtyleft10= $qty10 - $quantity10;
//$totalleft10 = $total10 - $quantity10; 
$update10 = mysql_query("Update inventory set Total= Total - '$quantity10' where ProductCode='$description10' ");
$sell10 = @mysql_query("Insert into debitsales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description10','$quantity10', '$price10', '$amount10', '$date')");
}
}}else{
// do nothing
}



//update eleventh product
if($description11 !="" && $quantity11 !="" && $price11 !="" && $amtpaid >= $total && $oldbal ==0){
$sql11=mysql_query( "select * from inventory where ProductCode='$description11' "); 
if($sql11){
while($res11=mysql_fetch_array($sql11)){
//$qty11= $res11['Quantity1']; $total11 = $res11['Total'];
//$qtyleft11= $qty11 - $quantity11;
//$totalleft11 = $total11 - $quantity11; 
$update11 = @mysql_query("Update inventory set Total= Total - '$quantity11' where ProductCode='$description11' ");
$sell11 = @mysql_query("Insert into sales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description11','$quantity11', '$price11', '$amount11', '$date')");
mysql_close();
}
}}
// debit sales
else if($description11 !="" && $quantity11 !="" && $price11 !="" || $amtpaid < $total || $oldbal != 0 || $oldbal==0 || $amtpaid > $total){
$sql11=mysql_query( "select * from inventory where ProductCode='$description11' "); 
if($sql11){
while($res11=mysql_fetch_array($sql11)){
//$qty11= $res11['Quantity1']; $total11 = $res11['Total'];
//$qtyleft11= $qty11 - $quantity11;
//$totalleft11 = $total11 - $quantity11; 
$update11 = @mysql_query("Update inventory set Total = Total - '$quantity11' where ProductCode='$description11' ");
$sell11 = @mysql_query("Insert into debitsales (CustomerId, ProductCode, Quantity, Rate, Amount, Date) VALUES ('$customerId', '$description11','$quantity11', '$price11', '$amount11', '$date')");
//mysql_close();
}
}}else{
// do nothinh
}

//insert, update discount , deposit

if($oldbal != 0 && $amtp > 0 || $oldbal == 0 && $amtp > 0 && $newbal !=0){
$remark = "CASH PAID";
$deposit = @mysql_query("Insert into deposit (CustomerId, Amount, Remark, Date) VALUES ('$customerId', '$amtp', '$remark', '$date')");
}


$updatee = @mysql_query("Update updatedbalance set Balance='$newbal', Date='$date' where CustomerId='$customerId' ");
$queryy= @mysql_query("Insert into balances (CustomerId, OldBalance, AmountPaid, Total, NewBalance, Date) VALUES ('$customerId', '$oldbal','$amtpaid', '$total', '$newbal', '$date')");

if(@mysql_affected_rows($updatee) > 0){
//do nothing;
}else{
$queryy1 =  @mysql_query("Insert into updatedbalance (CustomerId, Balance, Date) VALUES ('$customerId', '$newbal', '$date')");
}

  if(($update1) || ($update2)||($update3) || ($update4)|| ($update5)|| ($update6)|| ($update7)|| ($update8)|| ($update9)|| ($update10)|| ($update11)){
 echo ("success");
 }else{
 echo ("fail");
 }
 }
 ?>
