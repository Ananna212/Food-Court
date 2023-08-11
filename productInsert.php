<?php

include("config.php");

$prcode=$_POST['prCode'];
$prName= $_POST['prName'];
$prPrice= $_POST['prPrice'];
$prImg= $_FILES['prImg'];

/*print_r($prImg);*/

$imagetemp_Location = $_FILES['prImg']['tmp_name'];

$imageName = $_FILES['prImg']['name'];

$imgFinal_Location = "crtimg/.$imageName" ;

move_uploaded_file($imagetemp_Location, $imgFinal_Location);

$pr_insertQuery = "INSERT INTO `product`(`prcode`, `prName`, `prPrice`, `prImg`) 
VALUES ('$prcode','$prName','$prPrice','$imgFinal_Location')";

if(mysqli_query($conn, $pr_insertQuery))
{
    echo "<script> alert('Products Insert successfully!'); 
    location.href = 'gallery1.php'; 
    </script>";
}

?>