<?php

$serverName = "localhost";
$username = "root";
$password="";
$dbName="assign_food_court";

$conn=mysqli_connect($serverName, $username,$password,$dbName);

if(!$conn){
    die("Database connection Faild-".mysqli_connect_error());
}
/*else{
    echo "<script>alert ('Database Connection Successful!')</script>" ;
    
}*/


?>