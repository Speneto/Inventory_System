
    <?php  
    /** 
     * Created by PhpStorm. 
     * User: Ehtesham Mehmood 
     * Date: 11/21/2014 
     * Time: 1:13 AM 
     */  
   $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("ecwa",$link) or die ("Cannot select the database!"); 
	
	//mysql_select_db("ead_2015_2016firstterm_db", $con); 
    ?>  