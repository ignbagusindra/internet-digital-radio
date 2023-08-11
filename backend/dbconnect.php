<?php

	 $dbhost = "103.227.176.10";
	 $dbuser = "radioguntur_user";
	 $dbpass = "R4d10#$%)(*";
	 $dbname = "radioguntur_db";
	 
	 $con = new MySQLi($dbhost,$dbuser,$dbpass,$dbname);
    
     // Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>