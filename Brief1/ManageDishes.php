

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


<div class="main-content">
<div class="uptext">
                   <form action="index.php"><a   href="index.php">Home</a></form>
                   <!-- <form action="Brief1\Login.php" method="POST" ><a href="Login.php">Login</a></form>
                   <form action="Brief1\Signup.php" method="POST" ><a href="Signup.php">Sign up</a></form> -->
                   <form action="Brief1\logout.php" method="POST" ><a href="Signup.php">Log out</a></form>

</div>
    <div class="manager">
        <h1>Manage Dishes</h1>
        <br /><br />

<?php 
if(isset($_SESSION['add']))
{
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}
if(isset($_SESSION['remove']))
{
    echo $_SESSION['remove'];
    unset($_SESSION['remove']);
}
if(isset($_SESSION['delete']))
{
    echo $_SESSION['delete'];
    unset($_SESSION['delete']);
}
if(isset($_SESSION['notfound']))
{
    echo $_SESSION['notfound'];
    unset($_SESSION['notfound']);
}
if(isset($_SESSION['update']))
{
    echo $_SESSION['update'];
    unset($_SESSION['update']);
}
if(isset($_SESSION['upload']))
{
    echo $_SESSION['upload'];
    unset($_SESSION['upload']);
}
if(isset($_SESSION['failed-remove']))
{
    echo $_SESSION['failed-remove'];
    unset($_SESSION['failed-remove']);
}
?>


                <!-- Button to Add Admin -->
                <a href="AddDishes.php" class="btn-primary">Add Dishes</a>

                <br /><br /><br />

                <table class="tbl-full">
                    <tr>
                        <th>N.</th>
                        <th>title</th>
                        <th>image</th>
                        <th>featured</th>
                        <th>active</th>
                        <th>action</th>
                    </tr>


<?php
// query to get all food from db
$sql ="SELECT * FROM food";
//Execute query
$res = mysqli_query($con, $sql);
// count rows
$count = mysqli_num_rows($res);
// creat numeration started from 1
$sn=1;
// check whether we have data in db or not 
if($count>0)
{
// we have data
// get data and display
while($row=mysqli_fetch_assoc($res))
{
    $id = $row['id'];
    $title = $row['title'];
    $image_name = $row['image_name'];
    $featured = $row['featured'];
    $active = $row['active'];

?>
                     <tr>
                        <td><?php echo $sn++; ?></td>
                        <td><?php echo $title; ?></td>

                        <td>
                        <?php 
                        // check whether img name is availble or not 
                        if($image_name!="")
                        {
                            // display a image 
                            ?>
                    <img src="<?php echo $SITEURL; ?>images/dishes/<?php echo $image_name; ?>" width="100px" >

                            <?php
                        }
                        else
                        {
                            // display a image 
                            echo "<div class='error'> image not added. </div>";

                        }
                        ?>
                        </td>

                        <td><?php echo $featured; ?></td>
                        <td><?php echo $active; ?></td>
                        <td>
                        <a href="<?php echo $SITEURL;?>updateDish.php?id=<?php echo $id ?>&image_name=<?php echo $image_name;?>" class="btn-secondary">update dish</a>
                        <a href="<?php echo $SITEURL;?>deleteDish.php?id=<?php echo $id ?>&image_name=<?php echo $image_name;?>" class="btn-danger">Delete dish</a>
                        </td>
                        
                       
                    </tr>

<?php


}
}
else
{


// we don't have data
// we will disply the message inside table
?>
<tr>
<td colspan="6"> <div class="error">No Dish Added.</div></td>
</tr>

<?php
}


?>
                   

                  </table>  
                  

</div>