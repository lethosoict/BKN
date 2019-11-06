<?php
    $dbhost = 'localhost';
	$dbname = 'root';
	$dbpass = '';
	$dbname = 'dbwy';
	
	 $con = mysqli_connect($dbhost,$dbname,$dbpass, 'dbwy');
   
   // Check connection
/*
   if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
   else echo "<h1>Database is connecting ....!!</h1>";
   
   $charset = mysqli_get_server_version($con);
   echo $charset;
*/

   
   mysqli_set_charset($con, 'uft8');
	
   
?>