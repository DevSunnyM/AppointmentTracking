<?php
require_once 'connection.php';
if(isset($_GET['username'])){
$username = $_GET['username'];
$query = "DELETE FROM appointments WHERE username = '$username'";
$query1 = "DELETE FROM users WHERE users.username = '$username'";
$con->query($query);
$con->query($query1);
header('location:index.php');
}
?>