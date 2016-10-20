
 <?php 
	// $id=$_POST['id'];
	
	  include"DB_connection.php";
	  
	 $username=$_POST['user_name']; 
	 $Password=$_POST['pass'];
	 $Email=$_POST['email']; 
	 $Phone_number=$_POST['phone'];
	 $State_of_Origin=$_POST['state']; 
	 $Address=$_POST['address'];
	 $Full_name=$_POST['name'];
	  $subject1=$_POST['subject1']; 
	  $subject2= $_POST['subject2'];
	  $subject3= $_POST['subject3'];
     
	
	 
	$query="INSERT INTO teacher_login (User_name, Password, Email, Phone_number, State_of_Origin, Address, Full_name, Subject1, Subject2, Subject3)
			 VALUES ('".$username."','".$Password."','".$Email."','".$Phone_number."','". $State_of_Origin."','".$Address."','".$Full_name."','".$subject1."','".$subject2."','". $subject3."')";
				
		
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 
		  echo("<script type='text/javascript'>\n");
echo("alert('Registration Successfull!!!')");
echo ("</script>");

	     echo "<script> window.open('Registration.html','_self')</script>";
	 ?>
