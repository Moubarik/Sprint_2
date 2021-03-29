
<?php
    // Start from getting the hader which contains some settings we need
    // require_once 'includes/header.php';

    // Redirect visitor to the login page if he is trying to access
    // // this page without being logged in
    // session_start();

    // if(isset($_SESSION['email']))
    // {
    //     unset($_SESSION['email']);
    
    // }
    
    // header("Location: login.php");
    // die;
?>
<html>
    <head>
        <title>Food Management System | Admin Panel</title>
        <link href='https://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="public/css/CreativeButtons/css/component.css">
        <link rel="stylesheet" href="public/css/style.css">
    </head>

    <body>
        <main class="container">
            <div class="admin-pannel">

                <div class="dashboard">
                    <p><strong>Welcome to the dashboard !</strong></p>
                    <p>This place can be used to display a list of Dishes</p>
                </div>
                    <ul>
                        <li><a href="">Dashboard</a></li>
                        <li><a href="">Add Admin</a></li>
                        <li><a href="">Add Dishes</a></li>
                        <li><a href="">List Of Food</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                <div> </div>
            </div>
        </main>
    </body>
</html>