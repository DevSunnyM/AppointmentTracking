<?php
require_once 'connection.php';
if(isset($_GET['slot'])){
$slot = $_GET['slot'];
$query = "DELETE FROM appointments WHERE slot = '$slot'";
$query1 = "DELETE FROM `slots` WHERE `slots`.`slot` = '$slot'";
$con->query($query);
$con->query($query1);
header('location:dochomepage.php');
}
?>