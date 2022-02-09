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
        $slot = $_GET['slot'];
        $query1 = "SELECT *
        FROM appointments
        WHERE slot = '$slot'";

        $all_categories1 = $con->query($query1);
        $row = mysqli_num_rows($all_categories1);
        if ($row > 0){
                    $slot = $_GET['slot'];
                    echo "<b> This slot has been booked. Are you sure you want to remove the booking and slot from the system?</b>";
                    echo"<br>";echo"<br>";
                    echo "<a href=\"deleteSlot.php?slot=".$slot."\"> Yes, I am sure </a>";
                    echo "&nbsp"; echo "&nbsp";
                    echo "<a href='adminhomepage.php'>No, go back to homepage</a>";    

        }
        else {
            $slot = $_GET['slot'];
            echo "<b> This slot has no bookings. Are you sure you want to remove the booking and slot from the system?</b>";
            echo"<br>";echo"<br>";
            echo "<a href=\"deleteSlot.php?slot=".$slot."\"> Yes, I am sure </a>";
            echo "&nbsp"; echo "&nbsp";
            echo "<a href='adminhomepage.php'>No, go back to homepage</a>";
        }
        ?>
    </body>
</html>

