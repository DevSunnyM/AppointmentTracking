<html>
    <head>
        <style>
            p.ex1{
                font-size: 80px;
            }
        </style>
        <style>
            body {
            background-image: url('admins.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            }
        </style>

        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php 
        session_start();
        require_once 'connection.php';
        $username = $_GET['username'];
        $query1 = "SELECT *
        FROM appointments
        WHERE username = '$username'";

        $all_categories1 = $con->query($query1);
        $row = mysqli_num_rows($all_categories1);
        if ($row > 0){
                    $username = $_GET['username'];
                    echo "<b> This user has booked a slot. Are you sure you want to remove the user from the system?</b>";
                    echo"<br>";echo"<br>";
                    echo "<a href=\"deleteUserProfile.php?username=".$username."\"> Yes, I am sure </a>";
                    echo "&nbsp"; echo "&nbsp";
                    echo "<a href='adminhomepage.php'>No, go back to homepage</a>";    

        }
        else {
            $username = $_GET['username'];
            echo "<b> This user has no bookings. Are you sure you want to remove the user from the system?</b>";
            echo"<br>";echo"<br>";
            echo "<a href=\"deleteUserProfile.php?username=".$username."\"> Yes, I am sure </a>";
            echo "&nbsp"; echo "&nbsp";
            echo "<a href='adminhomepage.php'>No, go back to homepage</a>";
        }
        ?>
    </body>
</html>

