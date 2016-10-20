//Function to Check Quantity1
function verifyquantity1(){

//validate quantity1
//var works= /^[0-9]{1,}$///Takes any no of input
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("quantity1").value == "" || document.getElementById("quantity1").value == null){
document.getElementById("amount1").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);

//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("quantity1").value.match(format)){
var qty1 = document.getElementById("quantity1").value;
var price1 = document.getElementById("price1").value;
if(qty1 == 0 || price1 == 0){
//do nothing
}else{
var amt1 = price1 * qty1;
document.getElementById("amount1").value = amt1;
//document.getElementById("total").value = amt1;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);

//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Quantity Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.quantity1.focus();
return false;
//stop;
}
}

//Function to Check Price1
function verifyprice1(){
//validate price1
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("price1").value == "" || document.getElementById("price1").value == null){
document.getElementById("amount1").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("price1").value.match(format)){
var qty1 = document.getElementById("quantity1").value;
var price1 = document.getElementById("price1").value;
if(qty1 == 0 || price1 == 0){
//do nothing
}else{
var amt1 = price1 * qty1;
document.getElementById("amount1").value = amt1;
//document.getElementById("total").value = amt1;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);

//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Price Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.price1.focus();
return false;
stop;
}
}


//Function to Check Quantity2
function verifyquantity2(){
//validate quantity2
var formatt =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("quantity2").value == "" || document.getElementById("quantity2").value == null){
document.getElementById("amount2").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);

//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("quantity2").value.match(formatt)){ 
var qty2 = document.getElementById("quantity2").value;
var price2 = document.getElementById("price2").value; 
if(qty2 == 0 || price2 == 0){
//do nothing
}else{
var amt2 = price2 * qty2;
document.getElementById("amount2").value = amt2;
//document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value);
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);

//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Quantity Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.quantity2.focus();
return false;
//stop;
}
}


//Function to Check Price2
function verifyprice2(){
	//validate price 2
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("price2").value == "" || document.getElementById("price2").value == null){
document.getElementById("amount2").value = 0;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("price2").value.match(format)){	
var qty2 = document.getElementById("quantity2").value;
var price2 = document.getElementById("price2").value;
//alert(qty1);
if(qty2 == 0 || price2 == 0){
//do nothing
}else{
var amt2 = price2 * qty2;
document.getElementById("amount2").value = amt2;
//document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value);
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);

//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Price Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.price2.focus();
return false;
stop;
}
}


//Function to Check Quantity3
function verifyquantity3(){
//validate quantity3
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("quantity3").value == "" || document.getElementById("quantity3").value == null){
document.getElementById("amount3").value = 0;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("quantity3").value.match(format)){	
var qty3 = document.getElementById("quantity3").value;
var price3 = document.getElementById("price3").value;
//alert(qty1);
if(qty3 == 0 || price3 == 0){
//do nothing
}else{
var amt3 = price3 * qty3;
document.getElementById("amount3").value = amt3;
//document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value);
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Quantity Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.quantity3.focus();
return false;
}
}


//Function to Check Price3
function verifyprice3(){
//validate price3
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("price3").value == "" || document.getElementById("price3").value == null){
document.getElementById("amount3").value = 0;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("price3").value.match(format)){	
var qty3 = document.getElementById("quantity3").value;
var price3 = document.getElementById("price3").value;
//alert(qty1);
if(qty3 == 0 || price3 == 0){
//do nothing
}else{
var amt3 = price3* qty3;
document.getElementById("amount3").value = amt3;
//document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value);
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Price Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.price3.focus();
return false;
stop;
}
}


//Function to Check Quantity4
function verifyquantity4(){
//validate quantity4
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("quantity4").value == "" || document.getElementById("quantity4").value == null){
document.getElementById("amount4").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("quantity4").value.match(format)){	
var qty4 = document.getElementById("quantity4").value;
var price4 = document.getElementById("price4").value;
//alert(qty1);
if(qty4 == 0 || price4 == 0){
//do nothing
}else{
var amt4 = price4 * qty4;
document.getElementById("amount4").value = amt4;
//document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value);
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Quantity Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.quantity4.focus();
return false;
}
}


//Function to Check Price4
function verifyprice4(){
//validate price4
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("price4").value == "" || document.getElementById("price4").value == null){
document.getElementById("amount4").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);
return true;
}else if(document.getElementById("price4").value.match(format)){	
var qty4 = document.getElementById("quantity4").value;
var price4 = document.getElementById("price4").value;
//alert(qty1);
if(qty4 == 0 || price4 == 0){
//do nothing
}else{
var amt4 = price4 * qty4;
document.getElementById("amount4").value = amt4;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Price Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.price4.focus();
return false;
stop;
}
}

//Function to Check Quantity5
function verifyquantity5(){
//validate quantity5
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("quantity5").value == "" || document.getElementById("quantity5").value == null){
document.getElementById("amount5").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("quantity5").value.match(format)){	
var qty5 = document.getElementById("quantity5").value;
var price5 = document.getElementById("price5").value;
//alert(qty1);
if(qty5 == 0 || price5 == 0){
//do nothing
}else{
var amt5 = price5 * qty5;
document.getElementById("amount5").value = amt5;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Quantity Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.quantity5.focus();
return false;
}
}

//Function to Check Price5
function verifyprice5(){
//validate price5
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("price5").value == "" || document.getElementById("price5").value == null){
document.getElementById("amount5").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("price5").value.match(format)){	
var qty5 = document.getElementById("quantity5").value;
var price5 = document.getElementById("price5").value;
//alert(qty1);
if(qty5 == 0 || price5 == 0){
//do nothing
}else{
var amt5 = price5 * qty5;
document.getElementById("amount5").value = amt5;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Price Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.price5.focus();
return false;
stop;
}
}

//Function to Check Quantity6
function verifyquantity6(){
//validate quantity6
var format =  /^[0-9]{1,}$/;
if(document.getElementById("quantity6").value == "" || document.getElementById("quantity6").value == null){
document.getElementById("amount6").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);

//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
var amtpaid = 0;
}
//alert(amtpaid);
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;

}else if(document.getElementById("quantity6").value.match(format)){	
var qty6 = document.getElementById("quantity6").value;
var price6 = document.getElementById("price6").value;
//alert(qty1);
if(qty6 == 0 || price6 == 0){
//do nothing
}else{
var amt6 = price6 * qty6;
document.getElementById("amount6").value = amt6;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);

//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}

document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Quantity Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.quantity6.focus();
return false;
}
}


//Function to Check Price6
function verifyprice6(){
	//validate price6
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("price6").value == "" || document.getElementById("price6").value == null){
document.getElementById("amount6").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);

//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);
return true;
}else if(document.getElementById("price6").value.match(format)){
var qty6 = document.getElementById("quantity6").value;
var price6 = document.getElementById("price6").value;
//alert(qty1);
if(qty6 == 0 || price6 == 0){

//do nothing
}else{
var amt6 = price6 * qty6;
document.getElementById("amount6").value = amt6;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Price Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.price6.focus();
return false;
stop;
}
}

//Function to Check Quantity7
function verifyquantity7(){
	//validate quantity7
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("quantity7").value == "" || document.getElementById("quantity7").value == null){
document.getElementById("amount7").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("quantity7").value.match(format)){
var qty7 = document.getElementById("quantity7").value;
var price7 = document.getElementById("price7").value;
//alert(qty1);
if(qty7 == 0 || price7 == 0){
//do nothing
}else{
var amt7 = price7 * qty7;
document.getElementById("amount7").value = amt7;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Quantity Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.quantity7.focus();
return false;
}
}

//Function to Check Price7
function verifyprice7(){
	//validate price7
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("price7").value == "" || document.getElementById("price7").value == null){
document.getElementById("amount7").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("price7").value.match(format)){
var qty7 = document.getElementById("quantity7").value;
var price7 = document.getElementById("price7").value;
//alert(qty1);
if(qty7 == 0 || price7 == 0){
//do nothing
}else{
var amt7 = price7 * qty7;
document.getElementById("amount7").value = amt7;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Price Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.price7.focus();
return false;
stop;
}
}

//Function to Check Quantity8
function verifyquantity8(){
	//validate quantity8
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("quantity8").value == "" || document.getElementById("quantity8").value == null){
document.getElementById("amount8").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("quantity8").value.match(format)){
var qty8 = document.getElementById("quantity8").value;
var price8 = document.getElementById("price8").value;
//alert(qty1);
if(qty8 == 0 || price8 == 0){
//do nothing
}else{
var amt8 = price8 * qty8;
document.getElementById("amount8").value = amt8;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Quantity Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.quantity8.focus();
return false;
}
}

//Function to Check Price8
function verifyprice8(){
	//validate price8
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("price8").value == "" || document.getElementById("price8").value == null){
document.getElementById("amount8").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("price8").value.match(format)){
var qty8 = document.getElementById("quantity8").value;
var price8 = document.getElementById("price8").value;
//alert(qty1);
if(qty8 == 0 || price8 == 0){
//do nothing
}else{
var amt8 = price8 * qty8;
document.getElementById("amount8").value = amt8;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Price Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.price8.focus();
return false;
stop;
}
}

//Function to Check Quantity9
function verifyquantity9(){
	//validate quantity9
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("quantity9").value == "" || document.getElementById("quantity9").value == null){
document.getElementById("amount9").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("quantity9").value.match(format)){
var qty9 = document.getElementById("quantity9").value;
var price9 = document.getElementById("price9").value;
//alert(qty1);
if(qty9 == 0 || price9 == 0){
//do nothing
}else{
var amt9 = price9 * qty9;
document.getElementById("amount9").value = amt9;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Quantity Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.quantity9.focus();
return false;
}
}

//Function to Check Price9
function verifyprice9(){
	//validate price9
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("price9").value == "" || document.getElementById("price9").value == null){
document.getElementById("amount9").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("price9").value.match(format)){
var qty9 = document.getElementById("quantity9").value;
var price9 = document.getElementById("price9").value;
//alert(qty1);
if(qty9 == 0 || price9 == 0){
//do nothing
}else{
var amt9 = price9* qty9;
document.getElementById("amount9").value = amt9;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Price Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.price9.focus();
return false;
stop;
}
}

//Function to Check Quantity10
function verifyquantity10(){
	//validate quantity10
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("quantity10").value == "" || document.getElementById("quantity10").value == null){
document.getElementById("amount10").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("quantity10").value.match(format)){
var qty10 = document.getElementById("quantity10").value;
var price10 = document.getElementById("price10").value;
//alert(qty1);
if(qty10 == 0 || price10 == 0){
//do nothing
}else{
var amt10 = price10 * qty10;
document.getElementById("amount10").value = amt10;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;

if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Quantity Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.quantity10.focus();
return false;
}
}

//Function to Check Price10
function verifyprice10(){
	//validate Price10
	var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("price10").value == "" || document.getElementById("price10").value == null){
document.getElementById("amount10").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

return true;
}else if(document.getElementById("price10").value.match(format)){
var qty10 = document.getElementById("quantity10").value;
var price10 = document.getElementById("price10").value;
//alert(qty1);
if(qty10 == 0 || price10 == 0){
//do nothing
}else{
var amt10 = price10 * qty10;
document.getElementById("amount10").value = amt10;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Price Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.price10.focus();
return false;
stop;
}
}

//Function to Check Quantity11
function verifyquantity11(){
	//validate quantity11
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("quantity11").value == "" || document.getElementById("quantity11").value == null){
document.getElementById("amount11").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);
return true;
}else if(document.getElementById("quantity11").value.match(format)){
var qty11 = document.getElementById("quantity11").value;
var price11 = document.getElementById("price11").value;
//alert(qty1);
if(qty11 == 0 || price11 == 0){
//do nothing
}else{
var amt11 = price11 * qty11;
document.getElementById("amount11").value = amt11;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Quantity Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.quantity11.focus();
return false;
}
}

//Function to Check Price11
function verifyprice11(){
	//validate price11
var format =  /^[0-9]{1}$|^[0-9]{2}$|^[0-9]{3}$|^[0-9]{4}$|^[0-9]{5}$|^[0-9]{6}$|^[0-9]{7}$|^[0-9]{8}$/;//number
if(document.getElementById("price11").value == "" || document.getElementById("price11").value == null){
document.getElementById("amount11").value = 0;	
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);
return true;
}else if(document.getElementById("price11").value.match(format)){
var qty11 = document.getElementById("quantity11").value;
var price11 = document.getElementById("price11").value;
//alert(qty1);
if(qty11 == 0 || price11 == 0){
//do nothing
}else{
var amt11 = price11 * qty11;
document.getElementById("amount11").value = amt11;
document.getElementById("total").value =  parseInt(document.getElementById("amount1").value) + parseInt(document.getElementById("amount2").value) + parseInt(document.getElementById("amount3").value)+ parseInt(document.getElementById("amount4").value) +  parseInt(document.getElementById("amount5").value) + parseInt(document.getElementById("amount6").value) + parseInt(document.getElementById("amount7").value)+ parseInt(document.getElementById("amount8").value) +  parseInt(document.getElementById("amount9").value) + parseInt(document.getElementById("amount10").value) + parseInt(document.getElementById("amount11").value);
//set new balance
var oldbal= document.getElementById("oldbal").value;
var amtpaid = document.getElementById("amtpaid").value;
var total = document.getElementById("total").value;
if(amtpaid=="" || amtpaid== null){
amtpaid = 0;
}
document.getElementById("newbal").value = parseInt(-total) + parseInt(oldbal) + parseInt(amtpaid);

}
}else{
alert("Please Price Should be  Numbers(123) Only Eg. 0135335536 E.T.C");
document.sales.price11.focus();
return false;
stop;
}
}
