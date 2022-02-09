<?php 
session_start();
require_once 'connection.php';
$doctor = $_SESSION['doctor'];
$datetime = $_SESSION['datetime'];
$ailment = $_POST['ailment'];
$username = $_SESSION['xyz'];

$query = "SELECT * FROM `slots` WHERE doctor = '$doctor' and datetime = '$datetime'";
$all_categories = $con->query($query);
$result = $all_categories->fetch_assoc();
$slot = $result['slot'];
$sql_insert = "INSERT INTO `appointments` (`username`, `slot`, `ailment`) VALUES ('$username', '$slot', '$ailment');";
if ($con->query($sql_insert)== TRUE){
header('location:homepage.php');
}
else
{
    echo "<b>Could not make this booking! Sorry for the inconvinience! </b>";
}
    
echo"<br>";
echo"<br>";
?>

