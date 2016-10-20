function openPreview(){
document.getElementById("button").disabled = false;
var popWin = window.open('printform.php',"","directories=no, status=no, menubar=no, scrollbars=no, resizable=no,width=380, height=480,top=0,left=900");
var popquantity1 = popWin.document.getElementById("quantity1");

//get values from sales form
var amtpaid = document.getElementById("amtpaid").value;
if(amtpaid ==null  || amtpaid ==""){
	
amtpaid=0;	
}
var oldbal = document.getElementById("oldbal").value;
var newbal = document.getElementById("newbal").value;
var date=  document.getElementById("date");
var e12=  document.getElementById("customer");
var customer = e12.options[e12.selectedIndex].text;
var quantity1=  document.getElementById("quantity1").value; var price1=  document.getElementById("price1").value; var amount1=  document.getElementById("amount1"); var e1=  document.getElementById("description1"); 
var description1 = e1.options[e1.selectedIndex].text;
var quantity2=  document.getElementById("quantity2").value; var price2=  document.getElementById("price2").value; var amount2=  document.getElementById("amount2"); var e2=  document.getElementById("description2"); 
var description2 = e2.options[e2.selectedIndex].text;
var quantity3=  document.getElementById("quantity3").value; var price3=  document.getElementById("price3").value; var amount3=  document.getElementById("amount3"); var e3=  document.getElementById("description3"); 
var description3 = e3.options[e3.selectedIndex].text;
var quantity4=  document.getElementById("quantity4").value; var price4=  document.getElementById("price4").value; var amount4=  document.getElementById("amount4"); var e4=  document.getElementById("description4"); 
var description4 = e4.options[e4.selectedIndex].text;
var quantity5=  document.getElementById("quantity5").value; var price5=  document.getElementById("price5").value; var amount5=  document.getElementById("amount5"); var e5=  document.getElementById("description5"); 
var description5 = e5.options[e5.selectedIndex].text;
var quantity6=  document.getElementById("quantity6").value; var price6=  document.getElementById("price6").value; var amount6=  document.getElementById("amount6"); var e6=  document.getElementById("description6"); 
var description6 = e6.options[e6.selectedIndex].text;
var quantity7=  document.getElementById("quantity7").value; var price7=  document.getElementById("price7").value; var amount7=  document.getElementById("amount7"); var e7=  document.getElementById("description7"); 
var description7 = e7.options[e7.selectedIndex].text;
var quantity8=  document.getElementById("quantity8").value; var price8=  document.getElementById("price8").value; var amount8=  document.getElementById("amount8"); var e8=  document.getElementById("description8"); 
var description8 = e8.options[e8.selectedIndex].text;
var quantity9=  document.getElementById("quantity9").value; var price9=  document.getElementById("price9").value; var amount9=  document.getElementById("amount9"); var e9=  document.getElementById("description9"); 
var description9 = e9.options[e9.selectedIndex].text;
var quantity10=  document.getElementById("quantity10").value; var price10=  document.getElementById("price10").value; var amount10=  document.getElementById("amount10"); var e10=  document.getElementById("description10"); 
var description10 = e10.options[e10.selectedIndex].text;
var quantity11=  document.getElementById("quantity11").value; var price11=  document.getElementById("price11").value; var amount11=  document.getElementById("amount11"); var e11=  document.getElementById("description11"); 
var description11 = e11.options[e11.selectedIndex].text;
var total=  document.getElementById("total");

//test to see if description is selected
if(description1=="SELECT A PRODUCT TO SELL"){
	description1="nill";
	quantity1="0";
	price1="0";
}
if(description2=="SELECT A PRODUCT TO SELL"){
	description2="nill";
	quantity2="0";
	price2="0";
}
if(description3=="SELECT A PRODUCT TO SELL"){
	description3="nill";	
	quantity3="0";
	price3="0";
}
if(description4=="SELECT A PRODUCT TO SELL"){
	description4="nill";		
	quantity4="0";
	price4="0";
}
if(description5=="SELECT A PRODUCT TO SELL"){
	description5="nill";	
	quantity5="0";
	price5="0";
}
if(description6=="SELECT A PRODUCT TO SELL"){
	description6="nill";
	quantity6="0";
	price6="0";
}
if(description7=="SELECT A PRODUCT TO SELL"){
	description7="nill";
	quantity7="0";
	price7="0";
}
if(description8=="SELECT A PRODUCT TO SELL"){
	description8="nill";
	quantity8="0";
	price8="0";
}
if(description9=="SELECT A PRODUCT TO SELL"){
	description9="nill";	
	quantity9="0";
	price9="0";
}
if(description10=="SELECT A PRODUCT TO SELL"){
	description10="nill";
	quantity10="0";
	price10="0";
}
if(description11=="SELECT A PRODUCT TO SELL"){
	description11="nill";	
	quantity11="0";
	price11="0";
}



//alert(quantity1);

//begin to print receipt
popWin.document.writeln('<div style="margin-left:50px; font-weight:bold; font-size:larger " >NOBLE ALCHUKS NIG LTD.</div><div style="margin-left:100px; font-weight:bold; font-size:larger " >ABRO MINI DEPOT</div><div style="margin-left:130px; font-weight:700">Cash Receipt</div>\
						<div><table width="100%" cellpadding="0" cellspacing="0" style="margin-left:0px; font-weight:bold; font-size:11px; " border="1" ><tr><td width="100">Name: '+customer+' </td><td style="text-align:right; width:27%"> Date : '+date.value+'</td></tr></table></div>');

//popWin.document.writeln('<table width="100%" style="border-style:inset;   border-width:thin "><tr><th>QTY</th><th>PRODUCT</th><th>RATE</th><th>AMOUNT</th></tr>\
//<tr><td>'+quantity1.value+'</td><td>'+description1+'</td><td>'+price1.value+'</td><td>'+amount1.value+'</td></tr></table>');
//popWin.document.writeln('<table width="100%" cellpadding="0" cellspacing="0" border="thin" style="border-style:inset; text-align:center; font-size:12px;  "><tr><th>QTY</th><th>DESCRIPTION OF GOODS</th><th>RATE</th><th>AMOUNT</th></tr>\

popWin.document.writeln('<table width="100%" cellpadding="0" cellspacing="0" border="1" style="text-align:center; font-size:12px;"><tr><th>QTY</th><th style=" width:65%">DESCRIPTION OF GOODS</th><th>RATE</th><th>AMOUNT</th></tr>\
<tr><td>'+quantity1+'</td><td>'+description1+'</td><td>'+price1+'</td><td>'+amount1.value+'</td></tr>\
<tr><td>'+quantity2+'</td><td>'+description2+'</td><td>'+price2+'</td><td>'+amount2.value+'</td></tr>\
<tr><td>'+quantity3+'</td><td>'+description3+'</td><td>'+price3+'</td><td>'+amount3.value+'</td></tr>\
<tr><td>'+quantity4+'</td><td>'+description4+'</td><td>'+price4+'</td><td>'+amount4.value+'</td></tr>\
<tr><td>'+quantity5+'</td><td>'+description5+'</td><td>'+price5+'</td><td>'+amount5.value+'</td></tr>\
<tr><td>'+quantity6+'</td><td>'+description6+'</td><td>'+price6+'</td><td>'+amount6.value+'</td></tr>\
<tr><td>'+quantity7+'</td><td>'+description7+'</td><td>'+price7+'</td><td>'+amount7.value+'</td></tr>\
<tr><td>'+quantity8+'</td><td>'+description8+'</td><td>'+price8+'</td><td>'+amount8.value+'</td></tr>\
<tr><td>'+quantity9+'</td><td>'+description9+'</td><td>'+price9+'</td><td>'+amount9.value+'</td></tr>\
<tr><td>'+quantity10+'</td><td>'+description10+'</td><td>'+price10+'</td><td>'+amount10.value+'</td></tr>\
<tr><td>'+quantity11+'</td><td>'+description11+'</td><td>'+price11+'</td><td>'+amount11.value+'</td></tr></table></br>');

popWin.document.writeln('<center><div style=" font-weight:bold; font-size:13px " > Total : '+total.value+'  </div></center></br>');
//popWin.document.writeln('<div style="margin-left:221px;" ><table width="100%" cellpadding="0" cellspacing="0" border="thin" style="border-style:inset;  font-size:12px; font-weight:bold; border-top-width:0;"><tr><td style="width:38%">TOTAL </td><td style="text-align:center; width=100%">'+total.value+'</td></tr> </table></div></br>');

popWin.document.writeln('Amount in Words:.....................................................</br>\
...................................................................................</br>\
Manager sign:..............................</br>\
Customer sign:.............................</br></br>');

popWin.document.writeln('<center><table><tr><td>OldBal:</td><td>'+oldbal+'</td><td>AmtPaid: </td><td>'+amtpaid+'</td><td>NewBal: </td><td>'+newbal+'</td></tr></table></center></br>');

popWin.document.writeln('<input type="button" value="print" border="none" style="cursor:pointer; margin-left:150px; box-shadow:0; outline:none; " onclick="window.print()" />');

popWin.document.close();
}