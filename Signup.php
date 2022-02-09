<?php require_once 'connection.php';
  $username = "";
  if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname'])&& isset($_POST['lastname'])&& isset($_POST['age'])&& isset($_POST['dateOfBirth']) ){
  	$username = $_POST['username'];
  	$password = $_POST['password'];
        $firstname = $_POST['firstname'];
  	$lastname = $_POST['lastname'];
        $age = $_POST['age'];
  	$dateOfBirth= $_POST['dateOfBirth'];

  	$sql_u = "SELECT * FROM users WHERE username='$username'";
  	$res_u = mysqli_query($con, $sql_u);

  	if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry username already taken. Please try a different username"; 
          echo $name_error;
  	}	
  	else{
           $query = "INSERT INTO users (username, password, firstname, lastname, age, dateOfBirth) 
      	    	  VALUES ('$username', '$password', '$firstname', '$lastname', '$age', '$dateOfBirth')";
           $results = mysqli_query($con, $query);
           header ('location:index.php');
           exit();
  	}
  }
?>
<html>
    <head>
        <style>
            body {
            background-image: url('signup.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
            }
            </style>
    </head>
    <body>
        <h2> Sign Up with preferred Username and Password </h2>
        <form method="POST" action="">

                <input type ="text" placeholder="enter username" name ="username"/>
                <br> <br>
                <input type ="text" placeholder="enter password" name ="password"/>
                <br> <br>
                <input type ="text" placeholder="enter firstname" name ="firstname"/>
                <br> <br>
                <input type ="text" placeholder="enter lastname" name ="lastname"/>
                <br> <br>
                <input type ="text" placeholder="enter age" name ="age"/>
                <br> <br>
                <input type ="text" placeholder="enter date of birth" name ="dateOfBirth"/>
                <br> <br>
                <input type ="submit" value ="Sign Up"/>
            
        </form>
    </body>
</html>

