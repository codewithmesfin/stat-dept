<?php include('../data/config.php') ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Department of Statistics</title>
    <link rel="icon" href="../images/aau.png">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/line-icons.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/nivo-lightbox.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <style media="screen">
      .navs img{
         width: 25px;
      }
      body, #home{
        background-image: url("../images/bg.png");
      }
    </style>

  </head>

  <body class="bg-info">

    <?php
   if(!isset($_SESSION['teacher_idno']) || !isset($_SESSION['teacher_password'])){
     header("Location:../index.php");
   }else {
     ?>
     <div class="">
       <!-- Header Section Start -->
       <header id="home" class="hero-area bg-info">
       <?php include("template/header.php") ?>
         <?php include("template/navbar.php") ?>
       </header>
       <!-- Header Section End -->

       <?php include("template/edit_profile.php") ?>

         <!-- Footer Section Start -->
        <?php include("template/footer.php") ?>
           <!-- Footer area End -->
     </div>

     <!-- Go To Top Link -->
     <a href="#" class="back-to-top">
       <i class="lni-chevron-up"></i>
     </a>

     <!-- Preloader -->
     <div id="preloader">
       <div class="loader" id="loader-1"></div>
     </div>
     <!-- End Preloader -->
     <?php
   }
  ?>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="../js/jquery-min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.js"></script>
    <script src="../js/jquery.mixitup.js"></script>
    <script src="../js/jquery.nav.js"></script>
    <script src="../js/scrolling-nav.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/wow.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/nivo-lightbox.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/main.js"></script>

  </body>
</html>
