<?php
/*
This file contains database configuration 
assuming you are running mysql
 using user "root" and password ""
*/

$db_server="localhost";
$db_username="root";
$db_password="";
$db_name="login";

// Try connecting to the Database
$conn = new mysqli($db_server, $db_username, $db_password, $db_name)or die("Connect failed: %s\n". $conn -> error);

?>
