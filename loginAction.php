<?php

include 'config.php';

$em = $_POST['lg_email'];
$pass = $_POST['lg_pass'];

$store_query = "SELECT * FROM `register` WHERE Email = '$em' AND Password = '$pass'";

$result = mysqli_query($conn, $store_query);

if (mysqli_num_rows($result)) {
    session_start();
    $_SESSION['Email'] = $em;
    header('Location: index1.php');
} else {
    echo "<script>alert('Invalid Email and Password')</script>";
    header('Location: login1.php');
}

?>