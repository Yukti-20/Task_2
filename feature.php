<?php 
  //creating connection to database
$con=mysqli_connect("localhost","root","","feedback") or die(mysqli_error());
  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{

$comments = $con->real_escape_string($_POST['text']);
  //query to insert the variable data into the database
$sql="INSERT INTO feed_b (feed_bck) VALUES ('".$comments."')";
  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo "";
}
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bus Rental System</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bus Rental System" name="keywords">
        <meta content="Bus Rental System" name="description">

        <!-- Favicon -->
       

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <!-- Template Stylesheet -->
        <link href="css/styleh.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">

            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="home.php">
                                    <!--<h1>Housicle</h1>-->
                                     <img src="images/logos.png" alt="Logo"> 
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">
                                
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.php" class="nav-item nav-link">Home</a>
                                <a href="about.php" class="nav-item nav-link">About</a>
                                <a href="feature.php" class="nav-item nav-link active">Feature</a>
		                        <a href="bus.html" class="nav-item nav-link">Buses</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="login/login.php">Get booking</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Features</h2>
                        </div>
                        <div class="col-12">
                            <a href="home.php">Home</a>
                            <a href="">Features</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
              <!-- Feature Start -->
<div class="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="section-header">
                    <h2>Why Choose Us</h2>
                </div>
                <div class="row align-items-center feature-item">
                    <div class="col-5">
                        <div class="feature-icon">
                            <i class="fas fa-rupee-sign"></i>
                        </div>
                    </div>
                    <div class="col-7">
                        <h3>Best Prices</h3>
                        <p>
                            We provide the best deals with our wide range of buses.
                        </p>
                    </div>
                </div>
                <div class="row align-items-center feature-item">
                    <div class="col-5">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                    </div>
                    <div class="col-7">
                        <h3>Efficiency & Trust</h3>
                        <p>
                             We have always maintained the trust of our customers with our efficient 
                             working strategies. 
                        </p>
                    </div>
                </div>
                <div class="row align-items-center feature-item">
                    <div class="col-5">
                        <div class="feature-icon">
                            <i class="far fa-smile"></i>
                        </div>
                    </div>
                    <div class="col-7">
                        <h3>User Friendly</h3>
                        <p>
                            Our well organised system make it easy for our clients to locate different tools and options
                            and provides quick access to common features.
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="feature-img">
                    <img src="images/feature.jpg" alt="Feature">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->   
    </body>
</html>

