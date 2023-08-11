<?php


session_start();


if(isset($_SESSION ['Email'])){

    session_unset();
    session_destroy();
    echo"<script> location.href='login1.php' </script>";
}

else{
    echo"<script> alert('URL Access Denied!!')</script>";
echo"<script> location.href='login1.php'  </script>";
}
?>