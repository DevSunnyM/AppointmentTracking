<?php
require_once 'connection.php';
if(isset($_GET['slot'])){
$slot = $_GET['slot'];
$query = "DELETE FROM appointments WHERE slot = '$slot'";
$con->query($query);
header('location:homepage.php');
}
?>