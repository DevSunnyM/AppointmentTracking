<?php 
session_start();
require_once 'connection.php';
$doctor = $_SESSION['doctor'];
$query1 = "SELECT *
FROM slots
LEFT JOIN appointments
  ON slots.slot = appointments.slot
WHERE appointments.slot IS NULL And doctor = '$doctor'";

$all_categories1 = $con->query($query1);
$row = mysqli_num_rows($all_categories1);
echo "&nbsp";
if (isset($_POST['datetime']))
    {
        $username = $_SESSION['xyz'];
        $doctor = $_SESSION['doctor'];
        $datetime = $_POST['datetime'];
        
        $query = "SELECT * FROM `slots` WHERE doctor = '$doctor' and datetime = '$datetime'";
        $all_categories = $con->query($query);
        $result = $all_categories->fetch_assoc();
        $slot = $result['slot'];
    }
    
echo"<br>";
echo"<br>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            body {
            background-image: url('Users.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            }
            </style>
    </head>
<body>
    <form method="POST">
        <br> <br>
        <?php
        if ($row == 0){
            echo "<b> No Available Time Slots for this doctor! Sorry for the inconvenience! </b>";
                }
        else{
            echo"There are " .$row ." available time slots for doctor ".$doctor;
            echo "<br>"; echo "<br>";
            echo"<select name = 'datetime'>";
            while ($result = $all_categories1->fetch_assoc())
            {
                echo "<option>" .$result['datetime']. "</option>";
            }
            echo"</select>";
            echo "<br>"; echo "<br>";
            echo "<input type='submit' value='Make the reservation' name='submit'>";
        }
        
        if (isset($_POST['submit']))
        {
        $datetime = $_POST['datetime'];
        $_SESSION['datetime'] = $datetime;
        header('location:book3.php');
        }
        ?>
    </form>
        
        <form method="POST">
        <?php
            echo "<br>"; echo "<br>";
            echo "<a href='homepage.php'>Go back to your homepage</a>";
            ?>
        
        

    </form>

        
    
</body>
</html>
