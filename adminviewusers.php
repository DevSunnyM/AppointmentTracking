
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
        $sql = "SELECT * FROM users";
        echo "<a href='adminhomepage.php'> <button> Go back to your homepage </button> </a>";
        echo "<br>";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            echo "<br>";
            echo "<table border='1'>";
            echo "<tr><td><b>Username ID</b></td><td><b>Firstname</b></td><td><b>Lastname</b></td><td><b>Age</b></td><td><b>Date Of Birth</b></td><td><b>Delete</b></td></tr>";
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['username'] . "</td><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] . "</td><td>" . $row['age'] . "</td><td>" . $row['dateOfBirth'] . "</td>";
                echo "<td><a href=\"deleteUserCheck.php?username=".$row['username']."\"> Delete </button> </a></td>";
                echo "</tr>";  

          }
        } else {
          echo "No users have signed up in the system yet!";
        }
        $con->close();
        ?>

    </body>
</html>