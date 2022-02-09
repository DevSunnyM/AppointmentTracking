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
        <h3><b>Administration Page for Medicos Appointment Registration Systems</b></h3>
        <br> <br>
        <?php
        echo "<a href='adminview.php'> <button> View all booked appointments </button> </a>";
        echo "<br>";
        echo "<br>";
        echo "<a href='adminviewslots.php'> <button> View all slots </button> </a>";
        echo "<br>";
        echo "<br>";
        echo "<a href='adminviewusers.php'> <button> View all registered users </button> </a>";
        echo "<br>";
        echo "<br>";
        echo "<a href='adminaddnew.php'> <button> Add new availabilites </button> </a>";
        echo"<br>";
        echo"<br>";
        echo "<a href='logout.php'> <button> Logout </button> </a>";
        ?>
    </body>
</html>