<?php
session_start();
require_once 'connection.php';
$query1 = "SELECT DISTINCT doctor FROM `slots`";
$all_categories1 = $con->query($query1);
$row = mysqli_num_rows($all_categories1);
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
        <?php
        if ($row == 0){
            echo "<b> No Doctor Available! Sorry for the inconvenience! </b>";
                }
        else{
            echo"Book a new appointment ".$_SESSION['xyz'];
            echo "<br>"; echo "<br>";
            echo"There are " .$row ." doctor's available";
            echo "<br>"; echo "<br>";
            echo"<select name = 'doctor'>";
            while ($result = $all_categories1->fetch_assoc())
            {
                echo "<option>" .$result['doctor']. "</option>";
            }
            echo"</select>";
            echo "<br>"; echo "<br>";
            echo "<input type='submit' value='See available slots for doctor selected' name='submit'>";
        }
        
      
        if (isset($_POST['submit']))
        {
        $doctor = $_POST['doctor'];
        $_SESSION['doctor'] = $doctor;
        header('location:book2.php');
        }
        ?>
        <br>
        
    </form>

        
    
</body>
</html>

