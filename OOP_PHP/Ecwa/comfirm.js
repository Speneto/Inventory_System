function deleteUser(){
 var answer = confirm("Are You Sure To Save This Customer?")	
if (answer ==true) 
{ 

return answer;
}else{
alert("Customer Not Saved");
return answer;
window.open('view_users.php?deleted=user has been deleted','_self')
stop;

}		
}