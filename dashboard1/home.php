<?php

  require_once 'connection.php';

  $sql = "SELECT * FROM job_announce";
  $all_product = $conn->query($sql);


?>












<!DOCTYPE html>
<html lang="en">

        <head>
            <meta charset="utf-8">
            <title>خدمة</title>
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta content="" name="keywords">
            <meta content="" name="description">
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <!--font-family-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
            
        <!-- title of site -->
            <!--font-awesome.min.css-->
        <link rel="stylesheet" href="./css/font-awesome.min.css">

        <!--linear icon css-->
        <link rel="stylesheet" href="./css/linearicons.css">

        <!--animate.css-->
        <link rel="stylesheet" href="./css/animate.css">

        <!--flaticon.css-->
        <link rel="stylesheet" href="./css/flaticon.css">

        <!--slick.css-->
        <link rel="stylesheet" href="./css/slick.css">
        <link rel="stylesheet" href="./css/slick-theme.css">
        <!--style.css-->
        <link rel="stylesheet" href="./css/stylev2.css">

        <!--responsive.css-->
        <link rel="stylesheet" href="./css/responsive.css">
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var securityLink = document.querySelector('a[href="#security"]');
                if (securityLink) {
                    securityLink.addEventListener("click", function(event) {
                        event.preventDefault(); // Prevent default anchor behavior
                        var targetElement = document.getElementById('security');
                        if (targetElement) {
                            var offsetTop = targetElement.offsetTop;
                            window.scrollTo({
                                top: offsetTop,
                                behavior: "smooth" // Smooth scrolling
                            });
                        }
                    });
                }
            });
        </script>




        </head>

        <?php
        session_start();
        ?>






        <body>

        

            <div class="container-xxl position-relative bg-white d-flex p-0">
                <!-- Spinner Start -->
                <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                <!-- Spinner End -->


            <!-- Sidebar Start -->
            <div class="sidebar pe-4 pb-3">
                <nav class="navbar bg-light navbar-light mt-2"  >
                    <div class="logo d-flex align-items-center ms-4 mb-4" >
                    <a href="index-job-seeker.html" ><img src="../img/khedma_logo_f-02.svg" alt="" style="height: 5vh;">
                                        </a>
                    
                    </div>
                    
                
                    <div class="d-flex align-items-center ms-4 mb-4">
                        <div class="position-relative">
                        <img class="rounded-circle" src="../lesCINSworkers/<?= $_SESSION['cin_image']?>" alt="" style="width: 40px; height: 40px;">
                            <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0"> <?=  $_SESSION['first_name']." ".$_SESSION['last_name']?></h6>
                            <span>Worker</span>
                        </div>
                    </div>
                    <div class="navbar-nav w-100">
                        <a href="index-job-seeker.html" class="nav-item nav-link "><i class="fas fa-home icon me-2"></i>Home</a>
                    
                        <a href="jobsearch.html" class="nav-item nav-link active"><i class="fas fa-search icon me-2"></i>Opportunities</a>
                        <!-- <a href="notifications.html" class="nav-item nav-link"><i class="fas fa-bell icon me-2"></i>Notifications</a> -->
                        <a href="resume.html" class="nav-item nav-link"><i class="far fa-file icon me-2"></i>Resume Builder</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-cog icon me-2"></i>Settings</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="settings.html" class="dropdown-item">Profile Management</a>
                                <a href="settings.html#security" class="dropdown-item">Security</a>
                                
                            </div>
                        </div>
                        <a href="logout.php" class="nav-item nav-link"><i class="fas fa-sign-out-alt icon me-2"></i>Logout</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                            <div class="dropdown-menu bg-transparent border-0">

                                <a href="404.html" class="dropdown-item">404 Error</a>
                                <a href="blank.html" class="dropdown-item">Blank Page</a>
                            </div>
                        </div> -->
                    </div>
                </nav>
            </div>
            <!-- Sidebar End -->


                <!-- Content Start -->
                <div class="content">
                    <!-- Navbar Start -->
                    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                        <a href="index-job-seeker.html" class="navbar-brand d-flex d-lg-none me-4">
                            <h2 class="text-primary mb-0"><i class="fas fa-home icon"></i></h2>
                        </a>
                        <a href="#" class="sidebar-toggler flex-shrink-0">
                            <i class="fas fa-bars"></i>
                        </a>
                        <form class="d-none d-md-flex ms-4">
                            <input class="form-control border-0" type="search" placeholder="Search">
                        </form>
                        <div class="navbar-nav align-items-center ms-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    <i class="fas fa-envelope me-lg-2"></i>
                                    <span class="d-none d-lg-inline-flex">Messages</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                    <a href="#" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                            <div class="ms-2">
                                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                                <small>15 minutes ago</small>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a href="#" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                            <div class="ms-2">
                                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                                <small>15 minutes ago</small>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a href="#" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                            <div class="ms-2">
                                                <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                                <small>15 minutes ago</small>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a href="notifications.html" class="dropdown-item text-center">See all message</a>
                                </div>
                            </div>
                            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                    <img class="rounded-circle me-lg-2" src=" ../lesCINSworkers/<?=$_SESSION['cin_image'] ?>" alt="" style="width: 40px; height: 40px;">
                                    <span class="d-none d-lg-inline-flex"><?=$_SESSION["first_name"]." ".$_SESSION["last_name"]?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                    <a href="myprofile.html" class="dropdown-item">My Profile</a>
                                    <a href="settings.html" class="dropdown-item">Settings</a>
                                    <a href="logout.php" class="dropdown-item">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <!-- Navbar End -->

                    <?php
                        while($row = mysqli_fetch_assoc($all_product)){
                    ?>



                
                    <br>
                    <section id="explore" class="explore p-5">
                        <div class="container">
                            <div class="section-header">
                                <h2> Opportunities </h2>
                                <p>Explore New experience</p>
                            </div><!--/.section-header-->
                            <div class="explore-content">
                        <div class="row">
                            <div class=" col-md-4 col-sm-6">
                                <div class="single-explore-item">
                                    <div class="single-explore-img">
                                        <img src="../lesCINSworkers/<?php echo $row["image"]; ?>" alt="explore image">
                                        <div class="single-explore-img-info">
                                            <button onclick="window.location.href='#'">best rated</button>
                                        </div>
                                    </div>
                                    <div class="single-explore-txt bg-theme-1">
                                        <h2><a href="#"><?php echo $row["company_name"];  ?></a></h2>
                                        <p class="explore-rating-price">
                                            <span class="explore-rating">5.0</span>
                                            <a href="#"> 10 ratings</a> 
                                            <span class="explore-price-box">
                                                form
                                                <span class="explore-price">$<?php echo $row["salary"]; ?></b></span>
                                            </span>
                                             <a href="#">$<?php echo $row["job_name"]; ?></a>
                                        </p>
                                        <div class="explore-person">
                                            <div class="row">
                                                <div class="col-sm-2">
                                                    <div class="explore-person-img">
                                                        <a href="#">
                                                            <img src="../lesCINSworkers/<?php echo $row["image"]; ?>" alt="explore person">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-11">
                                                    <p>
                                                    $<?php echo $row["description"]; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="explore-open-close-part">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <button class="close-btn" onclick="window.location.href='#'">unavailable</button>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="explore-map-icon">
                                                        <a href="#"><i data-feather="map-pin"></i></a>
                                                        <a href="#"><i data-feather="upload"></i></a>
                                                        <a href="#"><i data-feather="heart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php

                            }
                            ?>
                           









                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-explore-item">
                                            <div class="single-explore-img">
                                                <img src="./img/1631344630799.jpg" alt="explore image">
                                                <div class="single-explore-img-info">
                                                    <button onclick="window.location.href='#'">featured</button>
                                                </div>
                                            </div>
                                            <div class="single-explore-txt bg-theme-2">
                                                <h2><a href="#">NG-Multimedia</a></h2>
                                                <p class="explore-rating-price">
                                                    <span class="explore-rating">4.5</span>
                                                    <a href="#"> 8 ratings</a> 
                                                    <span class="explore-price-box">
                                                        form
                                                        <span class="explore-price">600$-1200$ salary</span>
                                                    </span>
                                                    <a href="#">ENGINEER</a>
                                                </p>
                                                <div class="explore-person">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <div class="explore-person-img">
                                                                <a href="#">
                                                                    <img src="./img/NG-INFO.jpg" alt="explore person">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <p>
                                                                Computer support and services in Tunis.... 
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="explore-open-close-part">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <button class="close-btn open-btn" onclick="window.location.href='#'">available</button>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="explore-map-icon">
                                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                                <a href="#"><i data-feather="upload"></i></a>
                                                                <a href="#"><i data-feather="heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-explore-item">
                                            <div class="single-explore-img">
                                                <img src="./img/1200px-DoubleClick_Logo.svg.png" alt="explore image">
                                                <div class="single-explore-img-info">
                                                    <button onclick="window.location.href='#'">best rated</button>
                    
                                                </div>
                                            </div>
                                            <div class="single-explore-txt bg-theme-3">
                                                <h2><a href="#">DOUBLE CLICK</a></h2>
                                                <p class="explore-rating-price">
                                                    <span class="explore-rating">5.0</span>
                                                    <a href="#"> 15 ratings</a> 
                                                    <span class="explore-price-box">
                                                        form
                                                        <span class="explore-price">1k$-1,5k$ salary</span>
                                                    </span>
                                                    <a href="#">MARKETING</a>
                                                </p>
                                                <div class="explore-person">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <div class="explore-person-img">
                                                                <a href="#">
                                                                    <img src="./img/1200px-DoubleClick_Logo.svg.png" alt="explore person">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <p>
                                                                Computer store in ARIANA, Offers repair services · Offers same-day delivery.... 
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="explore-open-close-part">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <button class="close-btn open-btn" onclick="window.location.href='#'">available</button>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="explore-map-icon">
                                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                                <a href="#"><i data-feather="upload"></i></a>
                                                                <a href="#"><i data-feather="heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-md-4 col-sm-6">
                                        <div class="single-explore-item">
                                            <div class="single-explore-img">
                                                <img src="./img/TECHNOSOFT-LOGO-1 - Copy.png" alt="explore image">
                                                <div class="single-explore-img-info">
                                                    <button onclick="window.location.href='#'">most view</button>
                                                    
                                                </div>
                                            </div>
                                            <div class="single-explore-txt bg-theme-4">
                                                <h2><a href="#">TechnoSoft</a></h2>
                                                <p class="explore-rating-price">
                                                    <span class="explore-rating">5.0</span>
                                                    <a href="#"> 10 ratings</a> 
                                                    <span class="explore-price-box">
                                                        form
                                                        <span class="explore-price">2,5k$-3k$</span>
                                                    </span>
                                                    <a href="#">ENGINEER</a>
                                                </p>
                                                <div class="explore-person">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <div class="explore-person-img">
                                                                <a href="#">
                                                                    <img src="./img/TECHNOSOFT-LOGO-1 - Copy.png" alt="explore person">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <p>
                                                                Software Company en ARIANA , leader en Logiciels de GMAO GPAO GEID en TUNISIE et commence à s'installer à l'étranger..... 
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="explore-open-close-part">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <button class="close-btn open-btn" onclick="window.location.href='#'">Available</button>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="explore-map-icon">
                                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                                <a href="#"><i data-feather="upload"></i></a>
                                                                <a href="#"><i data-feather="heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-explore-item">
                                            <div class="single-explore-img">
                                                <img src="./img/mark.webp" alt="explore image">
                                                <div class="single-explore-img-info">
                                                    <button onclick="window.location.href='#'">most view</button>
                                                    
                                                </div>
                                            </div>
                                            <div class="single-explore-txt bg-theme-2">
                                                <h2><a href="#">SMARTEK SERVICES</a></h2>
                                                <p class="explore-rating-price">
                                                    <span class="explore-rating">4.2</span>
                                                    <a href="#"> 8 ratings</a> 
                                                    <span class="explore-price-box">
                                                        form
                                                        <span class="explore-price">700$-1200$ salary</span>
                                                    </span>
                                                    <a href="#">Customer Service</a>
                                                </p>
                                                <div class="explore-person">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <div class="explore-person-img">
                                                                <a href="#">
                                                                    <img src="./img/mark.webp" alt="explore person">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <p>
                                                                Smatek.services, Tunis, Tunisia..... 
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="explore-open-close-part">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <button class="close-btn open-btn" onclick="window.location.href='#'">Available</button>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="explore-map-icon">
                                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                                <a href="#"><i data-feather="upload"></i></a>
                                                                <a href="#"><i data-feather="heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-explore-item">
                                            <div class="single-explore-img">
                                                <img src="./img/final_600xgeiser.webp" alt="explore image">
                                                <div class="single-explore-img-info">
                                                    <button onclick="window.location.href='#'">best rated</button>
                                            
                                                </div>
                                            </div>
                                            <div class="single-explore-txt bg-theme-5">
                                                <h2><a href="#">Société Générale Informatique et Services - Geiserr</a></h2>
                                                <p class="explore-rating-price">
                                                    <span class="explore-rating">5.5</span>
                                                    <a href="#"> 15 ratings</a> 
                                                    <span class="explore-price-box">
                                                        form
                                                        <span class="explore-price">5k$-6k$ salary</span>
                                                    </span>
                                                    <a href="#">ENGINEER</a>
                                                </p>
                                                <div class="explore-person">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <div class="explore-person-img">
                                                                <a href="#">
                                                                    <img src="./img/final_600xgeiser.webp" alt="explore person">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <p>
                                                                Services de securité informatiques .... 
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="explore-open-close-part">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <button class="close-btn" onclick="window.location.href='#'">Unavailable</button>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="explore-map-icon">
                                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                                <a href="#"><i data-feather="upload"></i></a>
                                                                <a href="#"><i data-feather="heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-explore-item">
                                            <div class="single-explore-img">
                                                <img src="./img/actia.jpg" alt="explore image">
                                                <div class="single-explore-img-info">
                                                    <button onclick="window.location.href='#'">best rated</button>
                                            
                                                </div>
                                            </div>
                                            <div class="single-explore-txt bg-theme-5">
                                                <h2><a href="#">Actia engineering services /a></h2>
                                                <p class="explore-rating-price">
                                                    <span class="explore-rating">8.5</span>
                                                    <a href="#"> 15 ratings</a> 
                                                    <span class="explore-price-box">
                                                        form
                                                        <span class="explore-price">5k$-6k$ salary</span>
                                                    </span>
                                                    <a href="#">ENGINEER</a>
                                                </p>
                                                <div class="explore-person">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <div class="explore-person-img">
                                                                <a href="#">
                                                                    <img src="./img/actia.jpg" alt="explore person">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <p>
                                                                ACTIA Engineering Services, créée en 2005 sous le nom d’ARDIA, est l’un des centres de R&D du Groupe au coeur de la division du même nom. La Division ENGINEERING SERVICES assure la conception et le développement de produits et de systèmes embarqués, augmentés de services logiciels. Elle se structure autour de différents sites à Tunis, à Sfax et en France (en cours de création). 
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="explore-open-close-part">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <button class="close-btn" onclick="window.location.href='#'">Unavailable</button>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="explore-map-icon">
                                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                                <a href="#"><i data-feather="upload"></i></a>
                                                                <a href="#"><i data-feather="heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-explore-item">
                                            <div class="single-explore-img">
                                                <img src="./img/sofrecom.png" alt="explore image">
                                                <div class="single-explore-img-info">
                                                    <button onclick="window.location.href='#'">best rated</button>
                                            
                                                </div>
                                            </div>
                                            <div class="single-explore-txt bg-theme-5">
                                                <h2><a href="#">Sofrecom</a></h2>
                                                <p class="explore-rating-price">
                                                    <span class="explore-rating">5.5</span>
                                                    <a href="#"> 15 ratings</a> 
                                                    <span class="explore-price-box">
                                                        form
                                                        <span class="explore-price">5k$-6k$ salary</span>
                                                    </span>
                                                    <a href="#">ENGINEER</a>
                                                </p>
                                                <div class="explore-person">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <div class="explore-person-img">
                                                                <a href="#">
                                                                    <img src="./img/sofrecom.png" alt="explore person">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <p>
                                                                We are supporting the development and the transformation of operators, governments and international institutions. They represent the main telecoms players
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="explore-open-close-part">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <button class="close-btn" onclick="window.location.href='#'">Unavailable</button>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="explore-map-icon">
                                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                                <a href="#"><i data-feather="upload"></i></a>
                                                                <a href="#"><i data-feather="heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-explore-item">
                                            <div class="single-explore-img">
                                                <img src="./img/supermousse.jpg" alt="explore image">
                                                <div class="single-explore-img-info">
                                                    <button onclick="window.location.href='#'">best rated</button>
                                            
                                                </div>
                                            </div>
                                            <div class="single-explore-txt bg-theme-5">
                                                <h2><a href="#">Super Mousse -Super Siesta </a></h2>
                                                <p class="explore-rating-price">
                                                    <span class="explore-rating">5.5</span>
                                                    <a href="#"> 15 ratings</a> 
                                                    <span class="explore-price-box">
                                                        form
                                                        <span class="explore-price">5k$-6k$ salary</span>
                                                    </span>
                                                    <a href="#">ENGINEER</a>
                                                </p>
                                                <div class="explore-person">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <div class="explore-person-img">
                                                                <a href="#">
                                                                    <img src="./img/supermousse.jpg" alt="explore person">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <p>
                                                                a7la si imed chakroun 
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="explore-open-close-part">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <button class="close-btn" onclick="window.location.href='#'">Unavailable</button>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="explore-map-icon">
                                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                                <a href="#"><i data-feather="upload"></i></a>
                                                                <a href="#"><i data-feather="heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-explore-item">
                                            <div class="single-explore-img">
                                                <img src="./img/chahia.png" alt="explore image">
                                                <div class="single-explore-img-info">
                                                    <button onclick="window.location.href='#'">best rated</button>
                                            
                                                </div>
                                            </div>
                                            <div class="single-explore-txt bg-theme-5">
                                                <h2><a href="#">société tunisienne spécialisée dans l'accouvage, l'élevage et la commercialisation des produits avicoles.</a></h2>
                                                <p class="explore-rating-price">
                                                    <span class="explore-rating">5.5</span>
                                                    <a href="#"> 15 ratings</a> 
                                                    <span class="explore-price-box">
                                                        form
                                                        <span class="explore-price">5k$-6k$ salary</span>
                                                    </span>
                                                    <a href="#">DAJEJ</a>
                                                </p>
                                                <div class="explore-person">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <div class="explore-person-img">
                                                                <a href="#">
                                                                    <img src="./img/chahia.png" alt="explore person">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <p>
                                                                Alliant modernité et tradition, Chahia groupe combine un savoir-faire traditionnel du terroir Tunisien et des méthodes de fabrication à la pointe de la technologie.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="explore-open-close-part">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <button class="close-btn" onclick="window.location.href='#'">Unavailable</button>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="explore-map-icon">
                                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                                <a href="#"><i data-feather="upload"></i></a>
                                                                <a href="#"><i data-feather="heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-explore-item">
                                            <div class="single-explore-img">
                                                <img src="./img/confortex.jpg" alt="explore image">
                                                <div class="single-explore-img-info">
                                                    <button onclick="window.location.href='#'">best rated</button>
                                            
                                                </div>
                                            </div>
                                            <div class="single-explore-txt bg-theme-5">
                                                <h2><a href="#">Société de Matelas </a></h2>
                                                <p class="explore-rating-price">
                                                    <span class="explore-rating">5.5</span>
                                                    <a href="#"> 15 ratings</a> 
                                                    <span class="explore-price-box">
                                                        form
                                                        <span class="explore-price">5k$-6k$ salary</span>
                                                    </span>
                                                    <a href="#">ENGINEER</a>
                                                </p>
                                                <div class="explore-person">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <div class="explore-person-img">
                                                                <a href="#">
                                                                    <img src="./img/confortex.jpg" alt="explore person">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <p>
                                                                supermousse😡😡😡😡
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="explore-open-close-part">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <button class="close-btn" onclick="window.location.href='#'">Unavailable</button>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="explore-map-icon">
                                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                                <a href="#"><i data-feather="upload"></i></a>
                                                                <a href="#"><i data-feather="heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-explore-item">
                                            <div class="single-explore-img">
                                                <img src="./img/total.png" alt="explore image">
                                                <div class="single-explore-img-info">
                                                    <button onclick="window.location.href='#'">best rated</button>
                                            
                                                </div>
                                            </div>
                                            <div class="single-explore-txt bg-theme-5">
                                                <h2><a href="#">TOTAL ENERGIES</a></h2>
                                                <p class="explore-rating-price">
                                                    <span class="explore-rating">5.5</span>
                                                    <a href="#"> 15 ratings</a> 
                                                    <span class="explore-price-box">
                                                        form
                                                        <span class="explore-price">5k$-6k$ salary</span>
                                                    </span>
                                                    <a href="#">OUVRIER</a>
                                                </p>
                                                <div class="explore-person">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <div class="explore-person-img">
                                                                <a href="#">
                                                                    <img src="./img/total.png" alt="explore person">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <p>
                                                                production et de fourniture d’hydrocarbures et d’autres sources d’énergies :
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="explore-open-close-part">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <button class="close-btn" onclick="window.location.href='#'">Unavailable</button>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="explore-map-icon">
                                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                                <a href="#"><i data-feather="upload"></i></a>
                                                                <a href="#"><i data-feather="heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-explore-item">
                                            <div class="single-explore-img">
                                                <img src="./img/dailyn.jpg" alt="explore image">
                                                <div class="single-explore-img-info">
                                                    <button onclick="window.location.href='#'">best rated</button>
                                            
                                                </div>
                                            </div>
                                            <div class="single-explore-txt bg-theme-5">
                                                <h2><a href="#">Fabrication de produits alimentaires et boissons</a></h2>
                                                <p class="explore-rating-price">
                                                    <span class="explore-rating">5.5</span>
                                                    <a href="#"> 15 ratings</a> 
                                                    <span class="explore-price-box">
                                                        form
                                                        <span class="explore-price">5k$-6k$ salary</span>
                                                    </span>
                                                    <a href="#">ENGINEER</a>
                                                </p>
                                                <div class="explore-person">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <div class="explore-person-img">
                                                                <a href="#">
                                                                    <img src="./img/dailyn.jpg" alt="explore person">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <p>
                                                                Nous avons concocté pour vous les recettes les plus savoureuses à base des meilleurs ingrédients : du chocolat suisse riche en cacao, une teneur en fruits supérieure à 30%, du bon lait, du yaourt onctueux et du vrai beurre pour vous offrir des produits gourmands, sains, goûteux et de très haute qualité.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="explore-open-close-part">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <button class="close-btn" onclick="window.location.href='#'">Unavailable</button>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="explore-map-icon">
                                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                                <a href="#"><i data-feather="upload"></i></a>
                                                                <a href="#"><i data-feather="heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-explore-item">
                                            <div class="single-explore-img">
                                                <img src="./img/novita.png" alt="explore image">
                                                <div class="single-explore-img-info">
                                                    <button onclick="window.location.href='#'">best rated</button>
                                            
                                                </div>
                                            </div>
                                            <div class="single-explore-txt bg-theme-5">
                                                <h2><a href="#">Ouvrages metammiques et d'exhibition </a></h2>
                                                <p class="explore-rating-price">
                                                    <span class="explore-rating">5.5</span>
                                                    <a href="#"> 15 ratings</a> 
                                                    <span class="explore-price-box">
                                                        form
                                                        <span class="explore-price">5k$-6k$ salary</span>
                                                    </span>
                                                    <a href="#">ENGINEER</a>
                                                </p>
                                                <div class="explore-person">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <div class="explore-person-img">
                                                                <a href="#">
                                                                    <img src="./img/novita.png" alt="explore person">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <p>
                                                                Novita is the largest manufacturer of craft yarns in the Nordic countries
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="explore-open-close-part">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <button class="close-btn" onclick="window.location.href='#'">Unavailable</button>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="explore-map-icon">
                                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                                <a href="#"><i data-feather="upload"></i></a>
                                                                <a href="#"><i data-feather="heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-explore-item">
                                            <div class="single-explore-img">
                                                <img src="./img/sopal.png" alt="explore image">
                                                <div class="single-explore-img-info">
                                                    <button onclick="window.location.href='#'">best rated</button>
                                            
                                                </div>
                                            </div>
                                            <div class="single-explore-txt bg-theme-5">
                                                <h2><a href="#"> Fabrication d'articles en laiton</a></h2>
                                                <p class="explore-rating-price">
                                                    <span class="explore-rating">5.5</span>
                                                    <a href="#"> 15 ratings</a> 
                                                    <span class="explore-price-box">
                                                        form
                                                        <span class="explore-price">5k$-6k$ salary</span>
                                                    </span>
                                                    <a href="#">ENGINEER</a>
                                                </p>
                                                <div class="explore-person">
                                                    <div class="row">
                                                        <div class="col-sm-2">
                                                            <div class="explore-person-img">
                                                                <a href="#">
                                                                    <img src="./img/sopal.png" alt="explore person">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-11">
                                                            <p>
                                                                est spécialisée dans la Fabrication d'articles en laiton dans les secteurs du bâtiment relatifs aux domaines de la plomberie, du bain et cuisines, du branchement d'eau et du branchement gaz.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="explore-open-close-part">
                                                    <div class="row">
                                                        <div class="col-sm-5">
                                                            <button class="close-btn" onclick="window.location.href='#'">Unavailable</button>
                                                        </div>
                                                        <div class="col-sm-7">
                                                            <div class="explore-map-icon">
                                                                <a href="#"><i data-feather="map-pin"></i></a>
                                                                <a href="#"><i data-feather="upload"></i></a>
                                                                <a href="#"><i data-feather="heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--/.container-->
                    
                    </section><!--/.explore-->
                    <!--explore end -->


                    <footer
                    class="text-center text-lg-start text-white"
                    style="background-color: #e3e3e6"
                    >
                    <!-- Section: Social media -->
                    <section
                    class="d-flex justify-content-between p-4"
                    style="background-color: #009CFF"
                    >
                    <!-- Left -->
                    <div class="me-5">
                    <span>Get connected with us on social networks:</span>
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div>
                    <a href="" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="text-white me-4">
                    <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="text-white me-4">
                    <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="text-white me-4">
                    <i class="fab fa-github"></i>
                    </a>
                    </div>
                    <!-- Right -->
                    </section>
                    <!-- Section: Social media -->

                    <!-- Section: Links  -->
                    <section class="">
                    <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold"><span class="khedma-word">خدمة</span></h6>
                    <hr
                        class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #009CFF; height: 2px"
                        />
                        <p>At <span class="khedma-word">خدمة</span>, we're dedicated to connecting people and businesses seamlessly. Our platform simplifies the job search process and empowers businesses to find the right talent. Join us in shaping the future of work.</p>
                    </div>
                    <!-- Grid column -->

                    

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Useful links</h6>
                    <hr
                        class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #009CFF; height: 2px"
                        />
                    <p>
                        <a href="index-job-seeker.html" class="text-white">Home</a>
                    </p>
                    <p>
                        <a href="jobsearch.html" class="text-white">Opportunities</a>
                    </p>
                    <p>
                        <a href="resume.html" class="text-white">Resume Builder</a>
                    </p>
                    <p>
                        <a href="settings.html" class="text-white">Settings</a>
                    </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr
                        class="mb-4 mt-0 d-inline-block mx-auto"
                        style="width: 60px; background-color: #009CFF; height: 2px"
                        />
                    <p><i class="fas fa-home mr-3"></i> INSAT, ARIANA, TUNISIE </p>
                    <p><i class="fas fa-envelope mr-3"></i> chakrounmino@gmail.com</p>
                    <p><i class="fas fa-phone mr-3"></i> + 216 52 519 087</p>
                    <p><i class="fas fa-print mr-3"></i> + 216 52 519 087</p>
                    </div>
                    <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    </div>
                    </section>
                    <!-- Section: Links  -->

                    <!-- Copyright -->
                    <div
                    class="text-center p-3"
                    style="background-color: rgba(0, 0, 0, 0.2)"
                    >
                    © Copyright 2024  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">larma.com</a>
                    
                    </div>
                    <!-- Copyright -->
                    </footer>
                    <!-- Footer -->
                </div>
                <!-- Content End -->


                <!-- Back to Top -->
                <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
            </div>

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/chart/chart.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/tempusdominus/js/moment.min.js"></script>
            <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
            <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
            <script>
                feather.replace();
            </script>
            
        </body>

        </html>