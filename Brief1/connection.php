<?php
$SITEURL= 'http://localhost/Brief1/'  ;
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "signup";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>