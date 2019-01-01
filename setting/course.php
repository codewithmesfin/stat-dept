<?php include("data/config.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Course</title>
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
                ADD COURSES  <br>
                ___________________________________________
              </p>
              <form class="my-2" action="data/course.php" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-12">
                  <p class="text-primary h6 py-2 text-left">2. Add New Courses</p>
                </div>
                <div class="col-12">
                  <p>1. Basic info...</p>
                </div>
                <div class="col-12 form-group">
                  <select class="custom-select" name="module_code">
                    <option value="Select preferred module">Select preferred module</option>
                    <?php
                        class Module
                            {
                              function module()
                              {
                                global $obj;
                                $sql="SELECT * FROM module";
                                $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                                $no_rows = mysqli_num_rows($result_set);
                                while($row=mysqli_fetch_array($result_set))
                                {
                                ?>
                                <option value="<?php echo $row['code'] ?>"><?php echo $row['name'] ?></option>
                               <?php
                                }
                              }
                            }
                        $list=new module();
                     ?>
                  </select>
                </div>
                <div class="col-12 col-lg-6 form-group">
                  <input type="text" name="name" value="" class="form-control" placeholder="Course Name">
                </div>
                <div class="col-12 col-lg-4 form-group">
                  <input type="text" name="code" value="" class="form-control" placeholder="Course Code">
                </div>
                <div class="col-12 col-lg-2 form-group">
                  <input type="text" name="credit" value="" class="form-control" placeholder="Credit in ECTS">
                </div>
                <div class="col-12">
                  <p>2. Student workload</p>
                </div>
                <div class="col-12 col-lg-2 form-group">
                  <input type="text" name="lecturer" value="" class="form-control" placeholder="Lecturer">
                </div>
                <div class="col-12 col-lg-2 form-group">
                  <input type="text" name="tutorial" value="" class="form-control" placeholder="Tutorial">
                </div>
                <div class="col-12 col-lg-2 form-group">
                  <input type="text" name="assessement" value="" class="form-control" placeholder="Assessement">
                </div>
                <div class="col-12 col-lg-2 form-group">
                  <input type="text" name="lab" value="" class="form-control" placeholder="Lab">
                </div>
                <div class="col-12 col-lg-2 form-group">
                  <input type="text" name="homestudy" value="" class="form-control" placeholder="Home Study">
                </div>
                <div class="col-12 col-lg-2 form-group">
                  <input type="text" name="total" value="" class="form-control" placeholder="Total">
                </div>
                <div class="col-12">
                  <p>3. Other relevant things</p>
                </div>
                <div class="col-12 col-lg-4 form-group">
                  <textarea name="rationale" class="col-12" placeholder="Rationale of the Module"></textarea>
                </div>
                <div class="col-12 col-lg-4 form-group">
                  <textarea name="descryption" class="col-12" placeholder="Descryption of the Module"></textarea>
                </div>
                <div class="col-12 col-lg-4 form-group">
                  <textarea name="outcome" class="col-12" placeholder="Learning outcomes"></textarea>
                </div>
                <div class="col-12 col-lg-4 form-group">
                  <textarea name="method" class="col-12" placeholder="Teaching and Learning Methods"></textarea>
                </div>
                <div class="col-12 col-lg-4 form-group">
                  <textarea name="mode" class="col-12" placeholder="Modes of Assessement"></textarea>
                </div>
                <div class="col-12 col-lg-4 form-group mx-auto">
                  <label for="">Course outline</label>
                  <input type="file" name="file" value="">
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
