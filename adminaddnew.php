<?php
session_start();
require_once 'connection.php';
echo"Welcome ".$_SESSION['xyz'];
    if (isset($_POST['doctor']) && isset($_POST['datetime']))
    {
        
        $doctor = $_POST['doctor']; 
        $datetime = $_POST['datetime'];
              
        $sql_add_query1 = "INSERT INTO slots (slot, doctor, datetime) VALUES (NULL, '$doctor','$datetime')";
        if ($con->query($sql_add_query1)== TRUE){
            echo "<br>"; echo "<br>";
            echo "<b>Success! New slot has been added to the database</b>";
        }else {
            die("Could not add the new entry");
        }
    }
?>
<html>
    <head>
        <style>
            body {
            background-image: url('admins.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            }
        </style>
    </head>
    <body>
        <form method="POST" action="">
            <br>
                <input type ="text" placeholder="doctor" name ="doctor"/>
                <br> <br>
                <input type ="text" placeholder="dd/mm/yyyy hh:mm:ss" name ="datetime"/>
                <br> <br>
                <input type ="submit" value ="Add new available entry to the database"/>
                <br>
        </form>
        <?php
                echo "<a href='adminhomepage.php'><button>Go back to your homepage</button></a>";
                        ?>
    </body>
</html>
