<!-- Validate Name on Add Customer   -->
function validateCustomerName(){		
var format =  /^[A-Za-z ]{1,}$/;//text
if(document.getElementById("customerid").value == "" || document.getElementById("customerid").value == null){
return true;
}else if(document.getElementById("customerid").value.match(format)){
//document.addnewstudent.studentname.focus();
return true;
}else{
alert("Please Customer Name Should be Only Letters e.g IBRAHIM D \n LANTI GANYE OR IBRAHIM KABIRU IDRIS E.T.C");
document.addcustomer.customerid.focus();
return false;
}
}


<!-- Validate Quantity on Additem    -->
function validateQuantity(){		
var format =  /^[0-9]{1,}$/;//text
if(document.getElementById("quantity").value == "" || document.getElementById("quantity").value == null){
return true;
}else if(document.getElementById("quantity").value.match(format)){
//document.addnewstudent.studentname.focus();
return true;
}else{
alert("Please Quantity Should be Only Numbers e.g 20,50,450,1000 E.T.C");
document.additem.quantity.focus();
return false;
}
}


<!-- Validate Price on Additem    -->
function validatePrice(){		
var format =  /^[0-9.]{1,}$/;//text
if(document.getElementById("price").value == "" || document.getElementById("price").value == null){
return true;
}else if(document.getElementById("price").value.match(format)){
//document.addnewstudent.studentname.focus();
return true;
}else{
alert("Please Price Should be Only Numbers e.g 20,50,450,1000 E.T.C");
document.additem.price.focus();
return false;
}
}

<!-- Validate Product description on Add Product -->
function validateProductDescription(){		
var format =  /^[A-Za-z0-9 ]{1,}$/;//text
if(document.getElementById("productdescription").value == "" || document.getElementById("productdescription").value == null){
return true;
}else if(document.getElementById("productdescription").value.match(format)){
//document.addnewstudent.studentname.focus();
return true;
}else{
alert("Please Product Description Should be Only Letters e.g \n AMMASCO GEAR OIL, ABBNOX MOTOR OIL, ABRO ATF E.T.C");
document.addproduct.productdescription.focus();
return false;
}
}

<!-- Validate Quantity on Add product    -->
function validatequantity(){		
var format =  /^[0-9]{1,}$/;//text
if(document.getElementById("quantity").value == "" || document.getElementById("quantity").value == null){
return true;
}else if(document.getElementById("quantity").value.match(format)){
//document.addnewstudent.studentname.focus();
return true;
}else{
alert("Please Quantity Should be Only Numbers e.g 20,50,450,1000 E.T.C");
document.addproduct.quantity.focus();
return false;
}
}

<!-- Validate Price on Add Product    -->
function validateprice(){		
var format =  /^[0-9.]{1,}$/;//text
if(document.getElementById("price").value == "" || document.getElementById("price").value == null){
return true;
}else if(document.getElementById("price").value.match(format)){
//document.addnewstudent.studentname.focus();
return true;
}else{
alert("Please Price Should be Only Numbers e.g 20,50,450,1000 E.T.C");
document.addproduct.price.focus();
return false;
}
}

<!-- Validate Selling Price on Add Product    -->
function validatesellprice(){		
var format =  /^[0-9.-]{1,}$/;//text
if(document.getElementById("sellprice").value == "" || document.getElementById("sellprice").value == null){
return true;
}else if(document.getElementById("sellprice").value.match(format)){
//document.addnewstudent.studentname.focus();
return true;
}else{
alert("Please Selling Price Should be Only Numbers e.g 20,50,450,1000 E.T.C");
document.addproduct.sellprice.focus();
return false;
}
}

<!-- Validate Quantity1 on Edit product    -->
function validateEditquantity1(){		
var format =  /^[0-9]{1,}$/;//text
if(document.getElementById("quantity1").value == "" || document.getElementById("quantity1").value == null){
return true;
}else if(document.getElementById("quantity1").value.match(format)){
//document.addnewstudent.studentname.focus();
return true;
}else{
alert("Please Quantity Should be Only Numbers e.g 20,50,450,1000 E.T.C");
document.editproduct.quantity1.focus();
return false;
}
}

<!-- Validate Quantity2 on Edit product    -->
function validateEditquantity2(){		
var format =  /^[0-9]{1,}$/;//text
if(document.getElementById("quantity2").value == "" || document.getElementById("quantity2").value == null){
return true;
}else if(document.getElementById("quantity2").value.match(format)){
//document.addnewstudent.studentname.focus();
return true;
}else{
alert("Please Quantity Should be Only Numbers e.g 20,50,450,1000 E.T.C");
document.editproduct.quantity2.focus();
return false;
}
}

<!-- Validate Quantity3 on Edit product    -->
function validateEditquantity3(){		
var format =  /^[0-9]{1,}$/;//text
if(document.getElementById("quantity3").value == "" || document.getElementById("quantity3").value == null){
return true;
}else if(document.getElementById("quantity3").value.match(format)){
//document.addnewstudent.studentname.focus();
return true;
}else{
alert("Please Quantity Should be Only Numbers e.g 20,50,450,1000 E.T.C");
document.editproduct.quantity3.focus();
return false;
}
}

<!-- Validate Price1 on Edit Product    -->
function validateEditprice1(){		
var format =  /^[0-9.]{1,}$/;//text
if(document.getElementById("price1").value == "" || document.getElementById("price1").value == null){
return true;
}else if(document.getElementById("price1").value.match(format)){
//document.addnewstudent.studentname.focus();
return true;
}else{
alert("Please Price Should be Only Numbers e.g 20,50,450,1000 E.T.C");
document.editproduct.price1.focus();
return false;
}
}

<!-- Validate Price2 on Edit Product    -->
function validateEditprice2(){		
var format =  /^[0-9]{1,}$/;//text
if(document.getElementById("price2").value == "" || document.getElementById("price2").value == null){
return true;
}else if(document.getElementById("price2").value.match(format)){
//document.addnewstudent.studentname.focus();
return true;
}else{
alert("Please Price Should be Only Numbers e.g 20,50,450,1000 E.T.C");
document.editproduct.price2.focus();
return false;
}
}

<!-- Validate Price3 on Edit Product    -->
function validateEditprice3(){		
var format =  /^[0-9]{1,}$/;//text
if(document.getElementById("price3").value == "" || document.getElementById("price3").value == null){
return true;
}else if(document.getElementById("price3").value.match(format)){
//document.addnewstudent.studentname.focus();
return true;
}else{
alert("Please Price Should be Only Numbers e.g 20,50,450,1000 E.T.C");
document.editproduct.price3.focus();
return false;
}
}

<!-- Validate Slling Price on Edit Product    -->
function validateEditSellprice(){		
var format =  /^[0-9.-]{1,}$/;//text
if(document.getElementById("sellprice").value == "" || document.getElementById("sellprice").value == null){
return true;
}else if(document.getElementById("sellprice").value.match(format)){
//document.addnewstudent.studentname.focus();
return true;
}else{
alert("Please Selling Price Should be Only Numbers e.g 20,50,450,1000 E.T.C");
document.editproduct.sellprice.focus();
return false;
}
}

<!-- Validate Quantity Per Carton on Add Product    -->
function validateqtyperctn(){		
var format =  /^[0-9]{1,}$/;//text
if(document.getElementById("qtyperctn").value == "" || document.getElementById("qtyperctn").value == null){
return true;
}else if(document.getElementById("qtyperctn").value.match(format)){
//document.addnewstudent.studentname.focus();
return true;
}else{
alert("Please Quantity Per Carton Should be Only Numbers e.g 20,50,450,1000 E.T.C");
document.addproduct.qtyperctn.focus();
return false;
}
}

<!-- Validate Quantity Per Carton on Edit Product    -->
function validateqtypercnt(){		
//alert("");
var format =  /^[0-9]{1,}$/;//text
if(document.getElementById("qtyperctn").value == "" || document.getElementById("qtyperctn").value == null){
return true;
}else if(document.getElementById("qtyperctn").value.match(format)){
//document.addnewstudent.studentname.focus();
return true;
}else{
alert("Please Quantity Per Carton Should be Only Numbers e.g 20,50,450,1000 E.T.C");
document.editproduct.qtyperctn.focus();
return false;
}
}








