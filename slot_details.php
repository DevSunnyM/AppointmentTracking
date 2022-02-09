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
        <?php require_once 'connection.php';
        $slot = $_GET["slot"];
        $sql = "SELECT * FROM slots WHERE slot = '$slot'";
        $result = $con->query($sql);
        if ($result->num_rows > 0){
            echo "<br>";
             while($row = $result->fetch_assoc()){
                $slot = '<td>'.$row['slot'].'</td>';
                $doctor = '<td>'.$row['doctor'].'</td>';
                $datetime = '<td>'.$row['datetime'].'</td>';
             } 
        } 

            echo '
            <table border="1">     
                <tbody>
                    <tr>
                        <td><b>Slot No.</td>'.$slot .'
                    </tr>
                    <tr>
                        <td><b>Doctor Name</td>'.$doctor .'
                    </tr>
                    <tr>
                        <td><b>Date and Time</td>'.$datetime .'
                    </tr>
                    </tbody>
            </table>
        ';
        echo "<br>";
        echo "<br>";
        $slot = $_GET["slot"];
        echo "<a href=\"deleteSlot.php?slot=".$slot."\"> <button> Delete this Slot </button> </a>";
        ?>
    </body>
</html>


    

