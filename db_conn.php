<?php
//mysql connection (hostname, username, password, dbname);
$mysqli = new mysqli('localhost', 'xinlinz', '532780', 'xinlinz'); 

//check connection
if (mysqli_connect_errno())
 { 
	printf("Connect failed: %s\n", mysqli_connect_error()); 
	exit(); 
} 
?>