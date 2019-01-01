<?php
  include("data/config.php");
  session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Department of Statistics</title>
    <link rel="icon" href="../images/aau.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/../css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
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
</head>

<body>

    <!-- Start your project here-->
    </head>
    <body>
    <div class="container rounded">
      <?php
       if(!isset($_SESSION['admin_idno']) || !isset($_SESSION['admin_password'])){
         header("Location:../index.php");
       }else {
         ?>
         <?php include("admin_template/navbar.php") ?>
         <?php include("admin_template/admin.php") ?>
         <!-- Footer---->
         <?php include("admin_template/footer.php") ?>
         <?php
       }
      ?>
    </div>
    <!-- /Start your project here-->

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
