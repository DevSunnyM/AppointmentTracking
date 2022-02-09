<html>
    <head>
        <style>
            body {
            background-image: url('doc.png');
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
        echo"Welcome Dr. ".$_SESSION['xyz'];
        $username = $_SESSION['xyz'];

        $sql = "SELECT * FROM `slots` WHERE doctor = '$username'";
        $sql2 = "SELECT * FROM slots s JOIN appointments a on (s.slot=a.slot) WHERE s.doctor = '$username'";
        $result2 = $con->query($sql2);

        echo"<br>";
        echo"<br>";
        echo"<b>Displaying your booked appointments:</b>";
        if ($result2->num_rows > 0){

            echo "<table border='1'>";
            echo "<tr><td><b> Slot </b> </td><td><b> Client </b> </td><td><b> Date and Time </b></td><td><b> Ailment </b> </td><td><b> Delete Booking </b> </td><td><b> Delete Slot </b> </td></tr>";
            while($row1 = $result2->fetch_assoc()){

                echo "<tr><td>" . $row1['slot'] . "</td><td>" . $row1['username'] . "</td><td>" . $row1['datetime'] . "</td><td>" . $row1['ailment'] . "</td>";
                echo "<td><a href=\"deleteBookingDoctor.php?slot=".$row1['slot']."\"> Delete </a></td>"; 
                echo "<td><a href=\"deleteSlotDoctor.php?slot=".$row1['slot']."\"> Delete </a></td>";  
                echo "</tr>";

             }
             echo "</table>";

        } else {
          echo "<br>";
          echo "No booked appointments";
        }

        echo"<br>";
        echo"<br>";
        echo "<a href='dochomepage.php'> <button> Return To Homepage </button> </a>";
        echo"<br>";
        echo"<br>";
        echo "<a href='logout.php'> <button> Logout </button> </a>";

        $con->close();
        ?>
    </body>
</html>