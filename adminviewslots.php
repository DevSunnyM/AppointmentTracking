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
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php require_once 'connection.php';
        $sql = "SELECT * FROM slots";
        echo "<a href='adminhomepage.php'> <button> Go back to your homepage </button> </a>";
        echo "<br>";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            echo "<br>";
            echo "<table border='1'>";
            echo "<tr><td><b>Slot ID</b></td><td><b>Doctor</b></td><td><b>Date and Time</b></td><td><b>Delete Slot</b></td></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['slot'] . "</td><td>" . $row['doctor'] . "</td><td>" . $row['datetime'] . "</td>"; 
                echo "<td><a href=\"deleteSlotCheck.php?slot=".$row['slot']."\"> Delete </button> </a></td>";
                echo "</tr>";  

          }
        } else {
          echo "No slots in the system yet!";
        }
        $con->close();
        ?>

    </body>
</html>