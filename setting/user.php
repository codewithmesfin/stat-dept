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
      <?php include("admin_template/navbar.php") ?>
      <div class="card bg-light">
        <div class="my-5  col-12 col-lg-11 mx-auto">
          <div class="col-12 col-lg-11 mx-auto d-block">
            <div class="">
              <p class="text-info text-center h3" style="font-family:serif;font-weight:bold">
                USER MANAGEMENT SYSTEM  <br>
                ___________________________________________
              </p>
              <p class=" text-center text-dark">Add New User</p>
            </div>
            <div class="col-12 text-dark mx-auto my-3">
              <div class="col-12 text-white h6 text-left col-lg-6 mx-auto">
                <form class="" action="data/user.php" method="post">
                  <div class="row">
                    <div class="col-12">
                      <input type="text" class="form-control text-center text-info"  name="name" placeholder="User name" value="" required>
                    </div>
                    <div class="col-12">
                      <input type="text" class="form-control text-center text-info" name="fathername" placeholder="User Father name" value="" required>
                    </div>
                    <div class="col-12">
                      <input type="text" class="form-control text-center text-info" name="gname" placeholder="User Grand Father name" value="" required>
                    </div>
                    <div class="col-12 form-group">
                      <select class="custom-select text-center text-info" name="user_type">
                        <option value="Select">User type</option>
                        <option value="Student">Student</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Administrator">Administrator</option>
                      </select>
                    </div>
                    <div class="col-12">
                      <input type="text" class="form-control text-center text-info" name="idno" placeholder="User ID NO" value="" required>
                    </div>
                    <div class="col-12">
                      <input type="password" class="form-control text-center text-info" name="password" placeholder="User password" value="" required>
                    </div>
                    <div class="col-12">
                      <button type="submit" name="user"  class="btn btn-block col-12 btn-success"><strong>SAVE USER INFORMATION</strong> </button>
                    </div>
                    <div class="col-12">
                      <a href="view_user.php" class="text-danger btn btn-block text-center"><strong>View Existing Users</strong> </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="my-5"></div>
        </div>
      </div>

      <!-- Footer---->
      <?php include("admin_template/footer.php") ?>
    </div>
    <?php include("admin_template/modal.php") ?>
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
