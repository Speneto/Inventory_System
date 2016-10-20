
    <html>  
    <head lang="en">  
        <meta charset="UTF-8">  
        <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->  
        <title>View Users</title>  
		
    </head>  
    <style>  
        .login-panel {  
            margin-top: 150px;  
        }  
        .table {  
            margin-top: 50px;  
      
        }  
      
    </style>  
      
    <body bgcolor="#CCFF99">  
      
    <div class="table-scrol">  
        <h1 align="center">All the Users</h1>  
      
    <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
      
      <center>
	
        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed" background="images/1.gif" border="1" >  
            <thead>  
      
            <tr>  
      
                <th>Id&nbsp;&nbsp;</th>
                <th>Username&nbsp;&nbsp </th> 
                <th>User Password&nbsp;&nbsp </th>
				 <th>User E-mail&nbsp;&nbsp </th>
				<th>Phone Number&nbsp;&nbsp </th>  
                <th>State of Origin&nbsp;&nbsp </th> 
				<th>Address&nbsp;&nbsp </th>
				<th>Full Name&nbsp;&nbsp </th>  
                <th>Subject Assiged&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp </th>   
                <th>Delete User&nbsp;&nbsp </th>  
				 <th>Update User&nbsp;&nbsp </th>  
            </tr>  
            </thead>  
      
            <?php  
            include("DB_connection.php");  
            $view_users_query="select * from teacher_login";//select query for viewing users.  
            $run=mysql_query($view_users_query);//here run the sql query.  
      
            while($row=mysql_fetch_array($run))//while look to fetch the result and store in a array $row.  
            {  
                $id=$row[0];  
                $username=$row[1];   
                $Password=$row[2];  
                $Email=$row[3];  
                $Phone_number=$row[4];  
				$State_of_Origin=$row[5];  
                $Address=$row[6];  
                $Full_name=$row[7];  
                $Subject=$row[8];       
      
            ?>  
      
            <tr>  
    <!--here showing results in the table -->  
                <td><?php echo $id;  ?></td>  
                <td><?php echo $username;  ?></td>    
                <td><?php echo $Password;  ?></td>
				<td><?php echo $Email;  ?></td>  
                <td><?php echo $Phone_number;  ?></td> 
				<td><?php echo $State_of_Origin;  ?></td>  
                <td><?php echo $Address;  ?></td>
				<td><?php echo $Full_name;  ?></td>  
                <td><?php echo $Subject;  ?></td>  
				
				 
				
				 
				
                <td><a href="Delete.php?del=<?php echo $id ?>"><img src="images/delete.png"/></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
				<td><a href="Update_user.php?del=<?php echo $id ?>"><img src="images/modify.png"/></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
            </tr>  
      
            <?php } ?>  
      
        </table> 

		
		
		
		
		
		
		
		</br> </br>
		<a href="Admin.php"><img src="images/back.png"></a> 
		</center>
            </div>  
    </div>  
      
      
    </body>  
      
    </html>  