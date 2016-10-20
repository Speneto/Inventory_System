// functions to comfirm actions

//confirm addition of customers
function addcustomer(){
 var answer = confirm("Are You Sure To Save This Customer?")	
if (answer ==true) 
{ 
return answer;
}else{
alert("Customer Not Saved");
return answer;
}		
}

//confirm make sales
function makesales(){
 var answer = confirm("Are You Sure To Make This Sales?")	
if (answer ==true) 
{ 
return answer;
}else{
alert("Sales Not Made");
return answer;
}		
}

//conflrm add new products
function addproduct(){
 var answer = confirm("Are You Sure To Add This Product?")	
if (answer ==true) 
{ 
return answer;
}else{
alert("Product Not Saved");
return answer;
stop;
}		
}

//confirm add new item
function additem(){
 var answer = confirm("Are You Sure To Add This Item?")	
if (answer ==true) 
{ 
return answer;
}else{
alert("Item Not Added");
return answer;
stop;
}		
}

//Confirm edit product
function editproduct(){
 var answer = confirm("Are You Sure To Edit This Product ?")	
if (answer ==true) 
{ 
return answer;
}else{
alert("Product No Eidted");
return answer;
stop;
}		
}

//Confirm delete product
function deleteproduct(){
 var answer = confirm("Are You Sure To Delete This Product ?")	
if (answer ==true) 
{ 
return answer;
}else{
alert("Product Not Deleted");
return answer;
stop;
}		
}

