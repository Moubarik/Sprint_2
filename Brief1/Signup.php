<?php
session_start();

include("connection.php");
include("functions.php");

// ------------------------------------------
if($_SERVER['REQUEST_METHOD'] == "POST")

	{
		//something was posted
    $Username=$_POST['Username'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
		if(!empty($Username) && !empty($Email) && !empty($Password) )
		{
			//save to database
			$query = "insert into users (username,email,password) values ('$Username','$Email','$Password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style1.css">
</head>
<body>
<div class="container">

<div class="signrightimage">
    <img src="images/table.jpg" alt="">
</div>
<div class="signininfos">
<form action="Signup.php" method="POST">

    <h1>Sign up</h1>
    <label for="username">Enter Your Username</br> </label>
    <input type="username" name="Username" required></br>
    <label for="email" >Enter Your Email</br> </label>
    <input type="email" name="Email" required></br>
    <label for="Password">Enter Your Password</br></label>
    <input type="password" name="Password" required>
    <div class="sign">
      <button type="submit" name="Signup">Sign up</button>

      </form>


    </div>
</div>
</div>

</body>


</html>