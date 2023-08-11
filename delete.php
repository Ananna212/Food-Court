<?php

include'config.php';
$rcv_id = $_GET['id'];
$pr_delQuery = "DELETE FROM `product` WHERE id= '$rcv_id'";

if(mysqli_query($conn,$pr_delQuery)){
    echo "<script>'alert('Deleted Suceccfully!!')'</script>";
    header("location:gallery1.php");
    }
    else{
    echo "<script>'alert('Not Deleted Suceccfully!!')'</script>";
    }?>


?>