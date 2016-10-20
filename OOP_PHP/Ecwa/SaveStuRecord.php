    <?php
session_start();
?> 
    <?php  
      
    include("DB_connection.php");
	
	    $ID_Number=$_POST['ID_Number'];//same
        $Session=$_POST['Session'];//same  
        $Term=$_POST['Term'];//same  
        $Name=$_POST['Name'];//same
	    $Age=$_POST['Age'];//same
		$Class=$_POST['Class'];//same 
		$DOB=$_POST['DOB'];//same  
        $Nationality=$_POST['Nationality'];//same
	    $State_of_Origin=$_POST['State_of_Origin'];//same
        $LGA=$_POST['LGA'];//same 
        $Parent_Address=$_POST['Parent_Address'];//same
	    $Parent_Phone=$_POST['Parent_Phone'];//same
		
		//Codes for Junior Classs------------------------------------------------------------------------------------------>
		//Codes for Junior Classs------------------------------------------------------------------------------------------>
		//Codes for Junior Classs------------------------------------------------------------------------------------------>
		// Checking For Class JSS1A and JSS1B 2015/2016
		//tessting code
	
		if (isset($_POST['Submit'])){
			$query1="INSERT INTO students (ID_Number, Session, Term, Name, Age, Class, DOB, Nationality, State_of_Origin, LGA, Parent_Address, Parent_Phone)
				 VALUES ('".$ID_Number."','".$Session."','".$Term."','".$Name."','".$Age."','".$Class."','".$DOB."','".$Nationality."','".$State_of_Origin."','".$LGA."','".$Parent_Address."','".$Parent_Phone."')";
				 //Testing codes
			$query2= @mysql_query("Insert into current_class (ID_Number, Class, Session) VALUES ('$ID_Number', '$Class', '$Session')");	
			 
               
				 //end of tessting codes
				
		  if(!mysql_query($query1)){
		 
		 die ("An unexpected error occured while saving the record, Please try again!");
		 }else{
		 
	
       echo("<script type='text/javascript'>\n");
          echo("alert('Registration Successfull!!!')");
			echo ("</script>");

		 
		  echo "<script> window.open('RegisterStudent.php','_self')</script>";
		  }

	   exit(); 
          }  
      
	  
	     ?>  
	