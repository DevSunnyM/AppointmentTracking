<html>
    <head>
        <style>
            body {
            background-image: url('Users.png');
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
        echo"Welcome ".$_SESSION['xyz'];
        echo"<br>";
        echo"<br>";
        echo"<b>Displaying your profile details:</b>";
        $username = $_SESSION['xyz'];

        $sql = "SELECT * FROM appointments a WHERE a.username = '$username'";
        $sql0 = "SELECT * FROM users u WHERE u.username = '$username'";
        $sql1 = "SELECT * FROM users u JOIN appointments a on (u.username=a.username) WHERE a.username = '$username'";
        $sql2 = "SELECT * FROM slots s JOIN appointments a on (s.slot=a.slot) WHERE a.username = '$username'";


        $result0 = $con->query($sql0);
        $result1 = $con->query($sql1);
        $result2 = $con->query($sql2);

        if ($result0->num_rows > 0){
            echo "<br>";
            echo "<table border='1'>";
            echo "<tr><td><b> username </b> </td><td><b> Firstname </b></td><td><b> Lastname </b> </td><td><b> Age </b> </td><td><b> Date of Birth </b> </td><td><b> Delete </b> </td></tr>";
            while($row = $result0->fetch_assoc()){

                echo "<tr>";
                echo "<td>" . $row['username'] . "</td><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['age'] . "</td><td>" . $row['dateOfBirth'] . "</td>";
                echo "<td><a href=\"deleteMyProfile.php?username=".$row['username']."\"> Delete my  Profile </button> </a></td>";
                echo "</tr>";

             }
             echo "</table>";

        } 

        echo"<br>";
        echo"<br>";
        echo"<b>Displaying your booked appointments:</b>";
        if ($result2->num_rows > 0){
            echo "<br>";
            echo "<table border='1'>";
            echo "<tr><td><b> Doctor </b> </td><td><b> Date and Time </b></td><td><b> Delete Appointment </b> </td></tr>";
            while($row1 = $result2->fetch_assoc()){

                echo "<tr><td>" . $row1['doctor'] . "</td><td>" . $row1['datetime'] . "</td>";
                echo "<td><a href=\"deleteBookingUser.php?slot=".$row1['slot']."\"> Delete </a></td>";  
                echo "</tr>";

             }
             echo "</table>";

        } else {
          echo "<br>";
          echo "No booked appointments";
        }

        echo"<br>";
        echo"<br>";
        echo "<a href='book.php'> <button> Book a new appointment </button> </a>";
        echo"<br>";
        echo"<br>";
        echo "<a href='logout.php'> <button> Logout </button> </a>";

        $con->close();
        ?>
    </body>
</html>

