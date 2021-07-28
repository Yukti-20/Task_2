<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login/login.php");
    exit;
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
                                <a href="home.html">
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
                                <a href="profile.php" class="nav-item nav-link active">Home</a>
                                <a href="about.php" class="nav-item nav-link">About</a>
                                <a href="feature.php" class="nav-item nav-link">Feature</a>
		                        <a href="bus1.html" class="nav-item nav-link">Buses</a></li>
                            </div>
                            <div class="ml-auto">
                                <a href="#" class="btn"><i class="fas fa-shopping-cart"></i></a>
                                <a href="login/userdetails.php" class="btn"><i class="fas fa-user"></i></a>
                                <a href="login/logout.php" class="btn"><i class="fas fa-sign-out-alt"></i></a>
                                
                            </div>


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
                            <h2>HI, WE WELCOME YOU HERE</h2>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Page Header End -->
            
            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="images/about.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header">
                                <h2>Housicle'</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Designed a dream with technology. Disappointing is not our job. We believe in providing non-stop fun.  So, drive to find the best way and be happy with the best ride. 
                                </p>
                                <p>
                                    Brightly designed buses and comfortably powerful. Every budget is taken care of. Hence, respecting your love and emotion, we take care of you like family. We give our best so that you can move safely and smoothly to your destination. Rewrite the rhythm for your life. We value you. 
                                </p>
                                <!--<a class="btn" href="">Learn More</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
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

            
            
           <!-- Newsletter Start -->
<div class="newsletter">
    <div class="container">
        <div class="section-header">
            <h2>We would love to hear from you</h2>
        </div>
        <div class="form">
            <input class="form-control" placeholder="write your review">
            <button class="btn">Submit</button>
        </div>
    </div>
</div>
<!-- Newsletter End -->

                        <!-- Footer Start -->
            <div class="footer">
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="https://htmlcodex.com/law-firm-website-template">HTML Code</a>, Have a look</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="">YUKTI VIVEK</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>
    </body>
</html>
