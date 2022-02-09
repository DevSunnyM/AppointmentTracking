<?php
$db_hostname = 'localhost';
$db_database = 'registrations';
$db_username = 'root';
$db_password = ''; 
$con = new mysqli($db_hostname, $db_username, 
        $db_password, $db_database);
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
?>

