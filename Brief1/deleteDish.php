
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="admin.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<?php
session_start();

include("connection.php");
include("functions.php");
?>

<?php

// echo " Delete Page "
// Check whether te id and image_name value set or not 
if(isset($_GET['id'])AND isset($_GET['image_name']))
{
// get the value and Delete 
// echo "get the valueand delete";
$id= $_GET['id'];
$image_name=$_GET['image_name'];
// remove the physical image  file is availble 
if($image_name!="")
{
    // image is availble so remove it 
    $path="images/dishes/".$image_name;
    // remove the image 
    $remove = unlink($path);
    // if failed to remove image add an errormessage and stop the process
    if($remove==false)
    {
        // set the message 
        $_SESSION['remove'] = "<div class='error'>failed to remove the dish.</div>";
        // redirect to manage dishes page
        header('location:'.$SITEURL.'ManageDishes.php');
        // stop the process
        die();
    }
}
// delete data from database
// sql query delet data from db 
$sql = "DELETE FROM food WHERE id=$id";
// excute the query
$res=mysqli_query($con, $sql);
// check whether the data is deleted from db or not 
if($res==true)
{
    // set success message and redirect 
    $_SESSION['delete']="<div class='success'></div>";
    // redirect to mange dishes
    header('location:'.$SITEURL.'ManageDishes.php');

}
else
{
// set fail message and redirect
$_SESSION['delete']="<div class='error'></div>";
// redirect to mange dishes
header('location:'.$SITEURL.'ManageDishes.php');
}

}
else
{
// redirect to manage dish
header('location:'.$SITEURL.'ManageDishes.php');

}
?>