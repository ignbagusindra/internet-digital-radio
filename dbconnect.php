<?php

	 $dbhost = "";
	 $dbuser = "";
	 $dbpass = "";
	 $dbname = "";
	 
	 $con = new MySQLi($dbhost,$dbuser,$dbpass,$dbname);
    
     // Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
