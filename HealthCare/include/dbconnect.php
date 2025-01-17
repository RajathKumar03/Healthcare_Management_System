<?php
$servername="localhost:3308";
$username="root";
$password="";
$db="hms";

$conn = mysqli_connect($servername,$username,$password,$db);

if($conn->connect_error){
    echo "Connection failed" .$conn->connect_error;
}

// if(!$conn){
//     die("connection failed:" .mysqli_error($conn));
// }
// echo "connected successfully";
 ?>