// multiply quantity 1
function get1(){
var ctn= document.getElementById("qtyctn1").value;
var qty1= document.getElementById("quantity1").value;
var e = document.getElementById("type1");
var str = e.options[e.selectedIndex].value;
//str +='&' + (new Date()).getTime();
if(str == "CTN/PICS"){
alert("Please Select Carton or Pieces");
return;
}else if(str =="CTN"){
document.getElementById("quantity1").value = ctn * qty1 ;	
}else if(str=="PICS"){
document.getElementById("quantity1").value = 1 * qty1 ;	
}

// compare qty enter with qty left
var qtyleft1 = document.getElementById("qtyleft1").value;
var verify1 =  document.getElementById("quantity1").value;
qtyleft1 = parseInt(qtyleft1);
 verify1= parseInt(verify1);
if( verify1 > qtyleft1 ){
	alert("Quantity Entered is Greater Than Qty Left");
	}
}

// multiply quantity 2
function get2(){
var ctn= document.getElementById("qtyctn2").value;
var qty2= document.getElementById("quantity2").value;
var e = document.getElementById("type2");
var str = e.options[e.selectedIndex].value;
if(str == "CTN/PICS"){
alert("Please Select Carton or Pieces");
return;
}else if(str =="CTN"){
document.getElementById("quantity2").value = ctn * qty2 ;	
}else if(str=="PICS"){
document.getElementById("quantity2").value = 1 * qty2 ;	
}
// compare qty enter with qty left
var qtyleft2 = document.getElementById("qtyleft2").value;
var verify2= document.getElementById("quantity2").value;
qtyleft2 = parseInt(qtyleft2);
 verify2= parseInt(verify2);
if( verify2 > qtyleft2 ){
	alert("Quantity Entered is Greater Than Qty Left");
	}

}

// multiply quantity 3
function get3(){
var ctn= document.getElementById("qtyctn3").value;
var qty3= document.getElementById("quantity3").value;
var e = document.getElementById("type3");
var str = e.options[e.selectedIndex].value;
if(str == "CTN/PICS"){
alert("Please Select Carton or Pieces");
return;
}else if(str =="CTN"){
document.getElementById("quantity3").value = ctn * qty3 ;	
}else if(str=="PICS"){
document.getElementById("quantity3").value = 1 * qty3 ;
}

// compare qty enter with qty left
var qtyleft3 = document.getElementById("qtyleft3").value;
var verify3 = document.getElementById("quantity3").value;
qtyleft3 = parseInt(qtyleft3);
 verify3= parseInt(verify3);
if( verify3 > qtyleft3 ){
	alert("Quantity Entered is Greater Than Qty Left");
	}
}

// multiply quantity 4
function get4(){
var ctn= document.getElementById("qtyctn4").value;
var qty4= document.getElementById("quantity4").value;
var e = document.getElementById("type4");
var str = e.options[e.selectedIndex].value;
if(str == "CTN/PICS"){
alert("Please Select Carton or Pieces");
return;
}else if(str =="CTN"){
document.getElementById("quantity4").value = ctn * qty4 ;	
}else if(str=="PICS"){
document.getElementById("quantity4").value = 1 * qty4 ;	
}

// compare qty enter with qty left
var qtyleft4 = document.getElementById("qtyleft4").value;
var verify4= document.getElementById("quantity4").value;
qtyleft4 = parseInt(qtyleft4);
 verify4= parseInt(verify4);
if( verify4 > qtyleft4 ){
	alert("Quantity Entered is Greater Than Qty Left");
	}
}

// multiply quantity 5
function get5(){
var ctn= document.getElementById("qtyctn5").value;
var qty5= document.getElementById("quantity5").value;
var e = document.getElementById("type5");
var str = e.options[e.selectedIndex].value;
if(str == "CTN/PICS"){
alert("Please Select Carton or Pieces");
return;
}else if(str =="CTN"){
document.getElementById("quantity5").value = ctn * qty5 ;	
}else if(str=="PICS"){
document.getElementById("quantity5").value = 1 * qty5 ;	
}
// compare qty enter with qty left
var qtyleft5 = document.getElementById("qtyleft5").value;
var verify5 = document.getElementById("quantity5").value;
qtyleft5 = parseInt(qtyleft5);
 verify5= parseInt(verify5);
if( verify5 > qtyleft5 ){
	alert("Quantity Entered is Greater Than Qty Left");
	}

}

// multiply quantity 6
function get6(){
var ctn= document.getElementById("qtyctn6").value;
var qty6= document.getElementById("quantity6").value;
var e = document.getElementById("type6");
var str = e.options[e.selectedIndex].value;
if(str == "CTN/PICS"){
alert("Please Select Carton or Pieces");
return;
}else if(str =="CTN"){
document.getElementById("quantity6").value = ctn * qty6 ;	
}else if(str=="PICS"){
document.getElementById("quantity6").value = 1 * qty6 ;	
}	

// compare qty enter with qty left
var qtyleft6 = document.getElementById("qtyleft6").value;
var verify6 = document.getElementById("quantity6").value;
qtyleft6 = parseInt(qtyleft6);
 verify6= parseInt(verify6);
if( verify6 > qtyleft6 ){
	alert("Quantity Entered is Greater Than Qty Left");
	}
}

// multiply quantity 7
function get7(){
var ctn= document.getElementById("qtyctn7").value;
var qty7= document.getElementById("quantity7").value;
var e = document.getElementById("type7");
var str = e.options[e.selectedIndex].value;
if(str == "CTN/PICS"){
alert("Please Select Carton or Pieces");
return;
}else if(str =="CTN"){
document.getElementById("quantity7").value = ctn * qty7 ;	
}else if(str=="PICS"){
document.getElementById("quantity7").value = 1 * qty7 ;	
}

// compare qty enter with qty left
var qtyleft7 = document.getElementById("qtyleft7").value;
var verify7 = document.getElementById("quantity7").value;
qtyleft7 = parseInt(qtyleft7);
 verify7= parseInt(verify7);
if( verify7 > qtyleft7 ){
	alert("Quantity Entered is Greater Than Qty Left");
	}
}

// multiply quantity 8
function get8(){
var ctn= document.getElementById("qtyctn8").value;
var qty8= document.getElementById("quantity8").value;
var e = document.getElementById("type8");
var str = e.options[e.selectedIndex].value;
if(str == "CTN/PICS"){
alert("Please Select Carton or Pieces");
return;
}else if(str =="CTN"){
document.getElementById("quantity8").value = ctn * qty8 ;	
}else if(str=="PICS"){
document.getElementById("quantity8").value = 1 * qty8 ;	
}	

// compare qty enter with qty left
var qtyleft8 = document.getElementById("qtyleft8").value;
var verify8= document.getElementById("quantity8").value;
qtyleft8 = parseInt(qtyleft8);
 verify8= parseInt(verify8);
if( verify8 > qtyleft8 ){
	alert("Quantity Entered is Greater Than Qty Left");
	}
}

/*// multiply quantity 8
function get8(){
var ctn= document.getElementById("qtyctn8").value;
var qty8= document.getElementById("quantity8").value;
var e = document.getElementById("type8");
var str = e.options[e.selectedIndex].value;
if(str == "CTN/PICS"){
alert("Please Select Carton or Pieces");
return;
}else if(str =="CTN"){
document.getElementById("quantity8").value = ctn * qty8 ;	
}else if(str=="PICS"){
document.getElementById("quantity8").value = 1 * qty8 ;	
}

}*/

// multiply quantity 9
function get9(){
var ctn= document.getElementById("qtyctn9").value;
var qty9= document.getElementById("quantity9").value;
var e = document.getElementById("type9");
var str = e.options[e.selectedIndex].value;
if(str == "CTN/PICS"){
alert("Please Select Carton or Pieces");
return;
}else if(str =="CTN"){
document.getElementById("quantity9").value = ctn * qty9 ;	
}else if(str=="PICS"){
document.getElementById("quantity9").value = 1 * qty9 ;	
}

// compare qty enter with qty left
var qtyleft9 = document.getElementById("qtyleft9").value;
var verify9= document.getElementById("quantity9").value;
qtyleft9 = parseInt(qtyleft9);
 verify9= parseInt(verify9);
if( verify9 > qtyleft9 ){
	alert("Quantity Entered is Greater Than Qty Left");
	}
}

// multiply quantity 10
function get10(){
var ctn= document.getElementById("qtyctn10").value;
var qty10= document.getElementById("quantity10").value;
var e = document.getElementById("type10");
var str = e.options[e.selectedIndex].value;
if(str == "CTN/PICS"){
alert("Please Select Carton or Pieces");
return;
}else if(str =="CTN"){
document.getElementById("quantity10").value = ctn * qty10 ;	
}else if(str=="PICS"){
document.getElementById("quantity10").value = 1 * qty10 ;	
}

// compare qty enter with qty left
var qtyleft10 = document.getElementById("qtyleft10").value;
var verify10= document.getElementById("quantity10").value;
qtyleft10 = parseInt(qtyleft10);
 verify10 = parseInt(verify10);
if( verify10 > qtyleft10 ){
	alert("Quantity Entered is Greater Than Qty Left");
	}
}

// multiply quantity 11
function get11(){
var ctn= document.getElementById("qtyctn11").value;
var qty11= document.getElementById("quantity11").value;
var e = document.getElementById("type11");
var str = e.options[e.selectedIndex].value;
if(str == "CTN/PICS"){
alert("Please Select Carton or Pieces");
return;
}else if(str =="CTN"){
document.getElementById("quantity11").value = ctn * qty11 ;	
}else if(str=="PICS"){
document.getElementById("quantity11").value = 1 * qty11 ;	
}

// compare qty enter with qty left
var qtyleft11 = document.getElementById("qtyleft11").value;
var verify11= document.getElementById("quantity11").value;
qtyleft11 = parseInt(qtyleft11);
 verify11 = parseInt(verify11);
if( verify11 > qtyleft11 ){
	alert("Quantity Entered is Greater Than Qty Left");
	}
}

