//getselling price for product one
function getsell1(){
var e = document.getElementById("description1");
var str = e.options[e.selectedIndex].value;
str +='&' + (new Date()).getTime();//solve caching issue
if(str == "" || str=="SELECT A PRODUCT TO SELL"){
alert("Please Select Product Name");
return;
}
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}else{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4  && xmlhttp.status == 200){
var string = xmlhttp.responseText;
var array = string.split(',');
//document.getElementById("id").value = array[0];
var t = array[0];
//alert(array[0]);
if(t=="" || t==null){
document.getElementById("sell1").value = 0;
}else{
document.getElementById("sell1").value = array[0];
document.getElementById("qtyleft1").value = array[1];
document.getElementById("qtyctn1").value = array[2];
}
}
}
xmlhttp.open("GET","getsellingprice.php?q="+str,true);
xmlhttp.send();	
}


//getselling price for product 2
function getsell2(){
var e = document.getElementById("description2");
var str = e.options[e.selectedIndex].value;

if(str == "" || str=="SELECT A PRODUCT TO SELL"){
alert("Please Select Product Name");
return;
}
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}else{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4  && xmlhttp.status == 200){
var string = xmlhttp.responseText;
var array = string.split(',');
//document.getElementById("id").value = array[0];
var t = array[0];
if(t=="" || t==null){
document.getElementById("sell2").value = 0;
}else{
document.getElementById("sell2").value = array[0];
document.getElementById("qtyleft2").value = array[1];
document.getElementById("qtyctn2").value = array[2];
}
}
}
xmlhttp.open("GET","getsellingprice.php?q="+str,true);
xmlhttp.send();	
}

//getselling price for product 3
function getsell3(){
var e = document.getElementById("description3");
var str = e.options[e.selectedIndex].value;

if(str == "" || str=="SELECT A PRODUCT TO SELL"){
alert("Please Select Product Name");
return;
}
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}else{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4  && xmlhttp.status == 200){
var string = xmlhttp.responseText;
var array = string.split(',');
//document.getElementById("id").value = array[0];
var t = array[0];
if(t=="" || t==null){
document.getElementById("sell3").value = 0;
}else{
document.getElementById("sell3").value = array[0];
document.getElementById("qtyleft3").value = array[1];
document.getElementById("qtyctn3").value = array[2];
}
}
}
xmlhttp.open("GET","getsellingprice.php?q="+str,true);
xmlhttp.send();	
}

//getselling price for product 4
function getsell4(){
var e = document.getElementById("description4");
var str = e.options[e.selectedIndex].value;

if(str == "" || str=="SELECT A PRODUCT TO SELL"){
alert("Please Select Product Name");
return;
}
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}else{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4  && xmlhttp.status == 200){
var string = xmlhttp.responseText;
var array = string.split(',');
//document.getElementById("id").value = array[0];
var t = array[0];
if(t=="" || t==null){
document.getElementById("sell4").value = 0;
}else{
document.getElementById("sell4").value = array[0];
document.getElementById("qtyleft4").value = array[1];
document.getElementById("qtyctn4").value = array[2];
}
}
}
xmlhttp.open("GET","getsellingprice.php?q="+str,true);
xmlhttp.send();	
}

//getselling price for product 5
function getsell5(){
var e = document.getElementById("description5");
var str = e.options[e.selectedIndex].value;

if(str == "" || str=="SELECT A PRODUCT TO SELL"){
alert("Please Select Product Name");
return;
}
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}else{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4  && xmlhttp.status == 200){
var string = xmlhttp.responseText;
var array = string.split(',');
//document.getElementById("id").value = array[0];
var t = array[0];
if(t=="" || t==null){
document.getElementById("sell5").value = 0;
}else{
document.getElementById("sell5").value = array[0];
document.getElementById("qtyleft5").value = array[1];
document.getElementById("qtyctn5").value = array[2];
}
}
}
xmlhttp.open("GET","getsellingprice.php?q="+str,true);
xmlhttp.send();	
}

//getselling price for product 6
function getsell6(){
var e = document.getElementById("description6");
var str = e.options[e.selectedIndex].value;

if(str == "" || str=="SELECT A PRODUCT TO SELL"){
alert("Please Select Product Name");
return;
}
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}else{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4  && xmlhttp.status == 200){
var string = xmlhttp.responseText;
var array = string.split(',');
//document.getElementById("id").value = array[0];
var t = array[0];
if(t=="" || t==null){
document.getElementById("sell6").value = 0;
}else{
document.getElementById("sell6").value = array[0];
document.getElementById("qtyleft6").value = array[1];
document.getElementById("qtyctn6").value = array[2];
}
}
}
xmlhttp.open("GET","getsellingprice.php?q="+str,true);
xmlhttp.send();	
}

//getselling price for product 7
function getsell7(){
var e = document.getElementById("description7");
var str = e.options[e.selectedIndex].value;

if(str == "" || str=="SELECT A PRODUCT TO SELL"){
alert("Please Select Product Name");
return;
}
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}else{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4  && xmlhttp.status == 200){
var string = xmlhttp.responseText;
var array = string.split(',');
//document.getElementById("id").value = array[0];
var t = array[0];
if(t=="" || t==null){
document.getElementById("sell7").value = 0;
}else{
document.getElementById("sell7").value = array[0];
document.getElementById("qtyleft7").value = array[1];
document.getElementById("qtyctn7").value = array[2];
}
}
}
xmlhttp.open("GET","getsellingprice.php?q="+str,true);
xmlhttp.send();	
}

//getselling price for product 8
function getsell8(){
var e = document.getElementById("description8");
var str = e.options[e.selectedIndex].value;

if(str == "" || str=="SELECT A PRODUCT TO SELL"){
alert("Please Select Product Name");
return;
}
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}else{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4  && xmlhttp.status == 200){
var string = xmlhttp.responseText;
var array = string.split(',');
//document.getElementById("id").value = array[0];
var t = array[0];
if(t=="" || t==null){
document.getElementById("sell8").value = 0;
}else{
document.getElementById("sell8").value = array[0];
document.getElementById("qtyleft8").value = array[1];
document.getElementById("qtyctn8").value = array[2];
}
}
}
xmlhttp.open("GET","getsellingprice.php?q="+str,true);
xmlhttp.send();	
}

//getselling price for product 9
function getsell9(){
var e = document.getElementById("description9");
var str = e.options[e.selectedIndex].value;

if(str == "" || str=="SELECT A PRODUCT TO SELL"){
alert("Please Select Product Name");
return;
}
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}else{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4  && xmlhttp.status == 200){
var string = xmlhttp.responseText;
var array = string.split(',');
//document.getElementById("id").value = array[0];
var t = array[0];
if(t=="" || t==null){
document.getElementById("sell9").value = 0;
}else{
document.getElementById("sell9").value = array[0];
document.getElementById("qtyleft9").value = array[1];
document.getElementById("qtyctn9").value = array[2];
}
}
}
xmlhttp.open("GET","getsellingprice.php?q="+str,true);
xmlhttp.send();	
}

//getselling price for product 10
function getsell10(){
var e = document.getElementById("description10");
var str = e.options[e.selectedIndex].value;

if(str == "" || str=="SELECT A PRODUCT TO SELL"){
alert("Please Select Product Name");
return;
}
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}else{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4  && xmlhttp.status == 200){
var string = xmlhttp.responseText;
var array = string.split(',');
//document.getElementById("id").value = array[0];
var t = array[0];
if(t=="" || t==null){
document.getElementById("sell10").value = 0;
}else{
document.getElementById("sell10").value = array[0];
document.getElementById("qtyleft10").value = array[1];
document.getElementById("qtyctn10").value = array[2];
}
}
}
xmlhttp.open("GET","getsellingprice.php?q="+str,true);
xmlhttp.send();	
}

//getselling price for product 11
function getsell11(){
var e = document.getElementById("description11");
var str = e.options[e.selectedIndex].value;

if(str == "" || str=="SELECT A PRODUCT TO SELL"){
alert("Please Select Product Name");
return;
}
if(window.XMLHttpRequest){
xmlhttp = new XMLHttpRequest();
}else{
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function(){
if(xmlhttp.readyState == 4  && xmlhttp.status == 200){
var string = xmlhttp.responseText;
var array = string.split(',');
//document.getElementById("id").value = array[0];
var t = array[0];
if(t=="" || t==null){
document.getElementById("sell11").value = 0;
}else{
document.getElementById("sell11").value = array[0];
document.getElementById("qtyleft11").value = array[1];
document.getElementById("qtyctn11").value = array[2];
}
}
}
xmlhttp.open("GET","getsellingprice.php?q="+str,true);
xmlhttp.send();	
}