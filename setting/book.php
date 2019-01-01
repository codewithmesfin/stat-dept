<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Recommended Books Information</title>
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
      <div class="card">
        <div class="my-3 col-12 col-lg-11 mx-auto">
          <div class="col-12 col-lg-11 mx-auto d-block">
            <div class="">
              <p class="text-info text-center h3" style="font-family:serif;font-weight:bold">
                ADD RECOMMENDED COURSE MATERIALS INFORMATION  <br>
                ____________________________________________________________
              </p>
              <?php $course_code=$_GET['code']; ?>
              <form class="my-5" action="data/book_list.php?code=<?php echo $course_code ?>" method="post">
                <div class="row">
                  <div class="col-12 form-group">
                    <p class="text-primary text-center h6">Add Books information</p>
                  </div>
                  <div class="col-12 col-lg-6 form-group">
                    <input type="text" name="title" value="" class="form-control" placeholder="Book title">
                  </div>
                  <div class="col-12 col-lg-6 form-group">
                    <input type="text" name="author" value="" class="form-control" placeholder="Book Author">
                  </div>
                  <div class="col-12 col-lg-6 form-group">
                    <input type="text" name="edition" value="" class="form-control" placeholder="Edition">
                  </div>
                  <div class="col-12 col-lg-6 form-group">
                    <input type="text" name="isbn" value="" class="form-control" placeholder="ISBN">
                  </div>
                  <div class="col-12 col-lg-6 form-group">
                    <select class="custom-select" name="type">
                      <option value="Select Book type">Select Book type</option>
                      <option value="Text Books">Text Books</option>
                      <option value="Reference">Reference</option>
                    </select>
                  </div>
                  <div class="col-12 col-lg-6 form-group">
                    <select class="custom-select" name="program">
                      <option value="Program">Program</option>
                      <option value="BSc">BSc</option>
                      <option value="MSc">MSc</option>
                      <option value="Phd">Phd</option>
                    </select>
                  </div>
                  <div class="col-12 col-lg-6 form-group mx-auto">
                    <input type="submit" name="save" value="Save" class="btn btn-primary btn-block">
                  </div>
                  <div class="col-12 col-lg-6 form-group mx-auto">
                    <input type="submit" name="next" value="Save and Next" class="btn btn-primary btn-block">
                  </div>
                </div>
              </form>
            </div>
            <div class="col-12 text-dark mx-auto my-3">
              <div class="col-12 text-white h6 text-left col-lg-6 mx-auto">

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
