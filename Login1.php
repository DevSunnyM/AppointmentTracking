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
        <title></title>
    </head>
    <body>
        <h2><b>Please Log In</b></h2>
        <form action="login.php" method="post">
            <label for="user">Account: </label>
            <input type="text" name="user"
                   <br><br><br>
            <label for="pass">Password: </label>
            <input type="password" name="pass" <br><br><br>
            <button type="submit"/>Log In</button>
        </form>
        <?php
        echo "<a href='index.php'> <button> Back To Home </button> </a>";
        ?>
    </body>
</html>

