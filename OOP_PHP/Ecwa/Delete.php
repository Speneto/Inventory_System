
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Enter Student Score</title>


</head>
<body>
    <?php  
  
      
    

		 
  
    include("DB_connection.php");  
    $delete_id=$_GET['del'];  
    $delete_query="delete  from teacher_login WHERE id='$delete_id'";//delete query  
    $run=mysql_query($delete_query);  
    if($run)  
    {  
    //javascript function to open in the same window   
        echo "<script>window.open('view_users.php?deleted=user has been deleted','_self')</script>";  
    }  
      
    ?> 
	
	
	</body> 