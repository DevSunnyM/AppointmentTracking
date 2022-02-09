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
        $username = $_GET["username"];
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $con->query($sql);
        if ($result->num_rows > 0){
            echo "<br>";
            echo "The user profile of: " . $username;
             while($row = $result->fetch_assoc()){
                $username = '<td>'.$row['username'].'</td>';
                $firstname= '<td>'.$row['firstname'].'</td>';
                $lastname= '<td>'.$row['lastname'].'</td>';
                $age= '<td>'.$row['age'].'</td>';
                $dateOfBirth= '<td>'.$row['dateOfBirth'].'</td>';
             } 
        } 

            echo '
            <table border="1">     
                <tbody>
                    <tr>
                        <td><b>Username</td>'.$username .'
                    </tr>
                    <tr>
                        <td><b>First Name</td>'.$firstname .'
                    </tr>
                    <tr>
                        <td><b>Last Name</td>'.$lastname .'
                    </tr>
                    <tr>
                        <td><b>Age</td>'.$age .'
                    </tr>
                    <tr>
                        <td><b>Date Of Birth</td>'.$dateOfBirth .'
                    </tr>
                    </tbody>
            </table>
        ';
        echo "<br>";
        echo "<br>";
        $username = $_GET["username"];
        echo "<a href=\"deleteUserProfile.php?username=".$username."\"> <button> Delete User Profile </button> </a>";
        ?>
    </body>
</html>


    

