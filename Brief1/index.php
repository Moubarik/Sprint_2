<?php 
session_start();

	include("connection.php");
	include("functions.php");

	// $user_data = check_login($con);

?>

<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
  

<div class="container">
            <div class="rightbox">
                  <div class="nav">
                            <div class="logo">
                                <img src="images/LOGO.png" alt="">
                            </div>
                            <div class="text">
                              <h1 class="heading1">YOUR</h1>
                              <h1 class="heading2"> RESTAURANT</h1>
                              <h3 class="heading3">Delicious food for every mood</h3>
                              <button class="btn1" >ORDER NOW</button>
                      
                            </div>
                            
                  </div>
            </div>
            <div class="leftbox">
                 <div class="uptext">
                   <form action="index.php"><a  href="">Menu</a></form>
                   <a href="">Home</a>
                   <form action="Brief1\Login.php" method="POST" ><a href="Login.php">Login</a></form>
                   <form action="Brief1\Signup.php" method="POST" ><a href="Signup.php">Sign up</a></form>
                  </div>
                <div class="image">
                    <img src="images/pic.png" alt="">
                </div>
              
              
            </div>
          </div>
<!-- main -->
<div class="maincontainer">
  <div class="upbox">
            <div class="maintext">
              <h1>What We Offer</h1>
              <p>Cuious?Here are our most populat menu items.</p>
            </div>
 </div>
  <div class="centerbox">
    <div class="upinnerbox inerbox1"> <img src="" alt="">  </div>
    <div class="upinnerbox inerbox2"> <img src="LOGO.png" alt=""> </div>
    <div class="upinnerbox inerbox3"> <img src="pic.png" alt=""> </div>
    <div class="upinnerbox inerbox4"> <img src="pic.png" alt=""> </div>
  </div>
  <div class="centerbox2">
    <div class="upinnerbox inerbox5"> <img src="pic.png" alt=""> </div>
    <div class="upinnerbox inerbox6"> <img src="pic.png" alt=""> </div>
    <div class="upinnerbox inerbox7"> <img src="pic.png" alt=""> </div>
    <div class="upinnerbox inerbox8"> <img src="pic.png" alt=""> </div>

  </div>
 
<div class="bottombox">
  
</div>

<div class="reviews">
  <div class="firstbox">
    <div class="revtext">
      <p>What Our Clients Say</p>
    </div>
  </div>
  <div class="lastbox">
<div class="revcard">
  <div class="revcard firstcard">
    <img src="images/Girl2.png" alt="">
    <h1>HOUDA MARHOUM</h1>
    <p>The food is excellent, generous portions and great prices. 
      The service was fast and friendly. 
      I highly recommended it if you're in the Wellfleet area.</p>
    <img src="images/Stars.png" alt="">
  </div>
  <div class="revcard secondcard">
    <img src="images/Girl2.png" alt="">
    <h1>NAWAL ERAJJAI</h1>
    <p>The food is excellent, generous portions and great prices. 
      The service was fast and friendly. 
      I highly recommended it if you're in the Wellfleet area.</p>
    <img src="images/Stars.png" alt="">
  </div>
  <div class="revcard therdcard">
    <img src="images/Girl2.png" alt="">
    <h1>NASIMA JAMIL</h1>
    <p>The food is excellent, generous portions and great prices. 
      The service was fast and friendly. 
      I highly recommended it if you're in the Wellfleet area.</p>
    <img src="images/Stars.png" alt="">
  </div>

</div>
  </div>
</div>
<div class="footer">
  <div class="rightboximage">
    <img src="images/TAJIN.png" alt="">
  </div>
  <div class="infos">
    <h1>Contact us</h1>
    <h3>EMAIL ADDRESS</h3>
    <p>Youcodefood@gmail.com</p>
    <h3>MAILING ADDRESS</h3>
    <p>QU Takkadoum rue Ribati, Youssoufia</p>
    <h3>PHONE NUMBER</h3>
    <p>2125123212373</p>

  </div>
</div>


</div>


</body>


</html>

