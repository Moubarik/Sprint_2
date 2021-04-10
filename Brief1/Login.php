<?php
session_start();

include("connection.php");
include("functions.php");

// if( isset($_POST['Login'])){
// $Email=$_POST['Email'];
// $Password=$_POST['Password'];
// __________________________________________
if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

    // $passy=password_hash("Password", PASSWORD_DEFAULT);
    // if(password_verify('Password' ,$passy))

		if(!empty($Email) && !empty($Password) )
		{
			//save to database
			$query = "Select * from users WHERE email = '$Email' limit 1 ";

			$result = mysqli_query($con, $query);

      if($result)
      {
        if($result && mysqli_num_rows($result) > 0)
        {
    
          $user_data = mysqli_fetch_assoc($result);
        //  if($user_data['password']=== $hash );
             if(password_verify($Password,$user_data['password']))


         {
          $_SESSION['email'] = $user_data['email'];
          header("Location: ManageDishes.php");
          die;
         }
        }
      }	
      echo "Wrong User name or Password!";
		}
	}
// __________________________________________
// $getuser = $database -> prepare("SELECT email FROM users(WHERE email=?");
// $getuser->execute([$Email]);
// $user = $getuser -> fetch();

// if( isset($user)){
//     if (password_verify($password, $user -> password )){
//         echo "password mezyan"; 
// }else{
// echo "wrong";
// }
// }}
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
<form action="Login.php"method="POST">

    <h1>Log in</h1>
   
    <label for="email" >Enter Your Email</br> </label>
    <input type="email" name="Email" required></br>
    <label for="Password">Enter Your Password</br></label>
    <input type="password" name="Password" required>
    <div class="sign">
      <button type="submit" name="Login">Log in</button><br>
      <button type="submit" name="Login"> <a href="Signup.php">Register</button><br>

      <!-- <a  href="index.php"> <img src=images/LOGO.png alt=""> -->
 </a>
      </form>

    </div>
</div>
</div>

</body>


</html>