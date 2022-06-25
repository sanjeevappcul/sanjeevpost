<?php
session_start();
$hostname = "localhost";
$database = "user_sanjeev";
$username = "root";
$password = "";

//Create Connection
//$conn= mysql_connect($hostname,$username,$password);
//$conn=mysqli_connect($hostname,$username,$password);
$conn=mysqli_connect($hostname,$username ,$password,$database);

//Check connection
if(!$conn){
die("Opps some thing went wrong connection failed");
} 
?>