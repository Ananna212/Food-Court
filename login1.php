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
            margin-left: 25rem;
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

        <a href="product1.php">Product</a>
        <a href="about1.php">About</a>
        <a href="gallery1.php">Gallery</a>
        <a href="contact1.php">Contact</a>
        <a href="index1.php">Home</a>
        <a href="signup1.php">Sign Up</a>

        




</head>
<body class="about">

    <header id="full_nav"  >
        <div class="header" > 
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a href="#" class="navbar-brand"> 
                        <img src="Food_court.png" class="rounded-circle" alt="logo" height="50px" width="50px">
                    </a>
<!--for responsive 3 dot-->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation"> 
                <i class="fas fa-stream navbar-toggler-icon"> </i>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"> <a class="nav-link" aria-current="page" href="index1.php"> Home</a> </li>
                        <li class="nav-item"> <a class="nav-link " href="signup1.php"> Sign Up </a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="login1.php"> Log in</a> </li>
                        <li class="nav-item"> <a class="nav-link " href="about1.php"> About</a> </li>
                        <li class="nav-item"> <a class="nav-link " href="product1.php"> Product</a> </li>
                        <li class="nav-item"> <a class="nav-link " href="gallery1.php"> Gallery</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="contact1.php"> contact </a> </li>

                    </ul>

                    <div class="header-right">
                        <div class="text-lg-end">
                            <span>Call Us</span>
                            <span class="phone_no"> 01734574891 </span>
                        </div>
                    </div>

                </div>

                </nav>

            </div>

        </div>

    </header>


    <section class="banner_section" style="background-image: url(top-banner.jpg);">
        <div class="container">
          
        </div>
    </section>

    
<section class="gallery_section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pb-5">
                <h2 class="section-title" >Log In</h2>
               
            </div>
        </div>
        <div class="formDiv" style="background-image: url(Banner-1.jpg);">     
            <form action= "loginAction.php" method="post" >

                    
             
             <div class="formdiv">
              <label for = "email">Email Address: </label> <br>
              <input type = "email" id="email" name = "lg_email" > <br> <br>
        </div>
            
        <div class="formdiv">
              <label for = "pass">Password: </label><br>
              <input type = "password" id="pass" name = "lg_pass" > <br> <br>
            
              </div>   
         
            
            
              <button type="submit" class="btn main-btn" style="margin-left: 40rem; 
              margin-bottom: 5rem;">  Log In </button>
            <p class= "d-flex justify-content-center"> Not Registered? 
                <a href="signup1.php">Register here!</a> </p>
           
            
            </form>
        
</div>

            </div>
           
           
        </div>
   
</section>







<!--Footer-->

      <!--Jquery-->
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

      <!--lightbox popup-->
      <script src="js/lightbox.js"></script>
  
  
      <!--boot js-->
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
      crossorigin="anonymous"></script>
  
      <!--js link-->
      <script src="js/main.js" > </script>
</body>