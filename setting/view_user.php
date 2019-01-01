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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
</head>

<body>

    <!-- Start your project here-->
    </head>
    <body>
    <div class="container rounded">
      <?php include("admin_template/navbar.php") ?>
      <div class="card bg-info">
        <div class="my-5  col-12 col-lg-11 mx-auto">
          <div class="col-12 col-lg-11 mx-auto d-block">
            <div class="h3">
              <p class="text-white text-center" style="font-family:serif;font-weight:bold">
                USER MANAGEMENT SYSTEM  <br>
                ___________________________________________
              </p>
              <p class="small text-center">User Information</p>
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
                    <div class="col-12">
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
                      <button type="submit" name="user"  class="btn btn-block col-12 btn-info"><strong>SAVE USER INFORMATION</strong> </button>
                    </div>
                    <div class="col-12">
                      <a href="#" class="text-danger btn btn-block text-center"><strong>View Existing Users</strong> </a>
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

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
</body>

</html>
