
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style> 
   .formdiv{
            color: rgb(3, 3, 38);
            font-style: normal;
            font-weight: 800;
            font-size: 2rem;
            margin-left: 3rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
          }
  </style>




<!--icon insertion-->
<link rel="shortcut icon" herf="favicon icon" type="image/x-icon" />

<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<!--Jquery CDN-->

    <!--Lightbox css-->
    <link href="css/lightbox.css" rel="stylesheet" />

    <!--Boot css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!--Font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4.0/css/all.min.css">
    
        <!--style css file link-->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive-style.css">
 </head>

        <body>

        <h4 class="d-flex justify-content-center"> Insert Product Here </h4>   
        <form action= "productInsert.php" method="post" enctype='multipart/form-data'>

                
             
  <div class= "formdiv">           
<label for = "prCode">Enter Product Code: </label> <br>
<input type = "text" id="prCode" name = "prCode" > <br>
</div> 

<div class= "formdiv"> 
<label for = "prName">Enter Product Name: </label><br>
<input type = "text" id="prName" name = "prName" > <br>
      </div>

      <div class= "formdiv"> 
<label for = "prPrice">Enter Product Price: </label><br>
<input type = "text" id="prPrice" name = "prPrice" > <br>
      </div>

      <div class= "formdiv"> 
<label for = "prImg">Enter Product Picture: </label><br>
<input type = "file" id="prImg" name = "prImg" > <br> 
        </div>

<button type="submit" class="btn main-btn" style="margin-left: 40rem; margin-bottom: 5rem;">
  Insert</button>


</form>








 <!--boot js-->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
      crossorigin="anonymous"></script>

</body>