<?php
require_once 'connection.php';
$u = $_POST['user'];
$p = $_POST['pass'];

$query = "Select * from users ". "where username='$u'"
        . " and ". "password='$p'";
$result = $con->query($query);
if(!$result || $result->num_rows==0){
   header('location:index.php');
   
}

else {
    session_start();
    $_SESSION['isloggedin']=1;
    $_SESSION['xyz']=$u;
     header('location:homepage.php');
  
}

?>