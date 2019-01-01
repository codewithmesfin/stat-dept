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

      <div class="card border border-success">
        <div class="row">
          <div class="col-12 col-lg-3 mx-auto" style="box-shadow:7px 7px 2px green;">
            <div class="">
              <div class="tabs-wrapper col-12 text-info mx-auto">
                <p class="text-danger text-left pt-3 h5">Quick Links</p><hr>
                  <ul class="nav nav-fill flex-column my-2" role="tablist">
                      <li class="nav-item text-left">
                          <a class="text-success text-left active" data-toggle="tab" href="#panel51" role="tab">Video</a><hr>
                      </li>
                      <li class="nav-item text-left">
                          <a class="text-success" data-toggle="tab" href="#panel52" role="tab">Books</a><hr>
                      </li>
                      <li class="nav-item text-left">
                          <a class="text-success" data-toggle="tab" href="#handout" role="tab">Handout</a><hr>
                      </li>
                      <li class="nav-item text-left">
                          <a class="text-success" data-toggle="tab" href="#panel53" role="tab">Apps</a><hr>
                      </li>
                      <li class="nav-item text-left">
                          <a class="text-success" data-toggle="tab" href="#panel54" role="tab">Data Set</a><hr>
                      </li>
                      <li class="nav-item text-left">
                          <a class="text-success" data-toggle="tab" href="#research" role="tab">Research</a><hr>
                      </li>
                      <li class="nav-item text-left">
                          <a class="text-success" data-toggle="tab" href="#announcement" role="tab">Announcement</a><hr>
                      </li>
                      <li class="nav-item text-left">
                          <a class="text-success" data-toggle="tab" href="#curriculum" role="tab">Curriculum</a><hr>
                      </li>
                      <li class="nav-item text-left">
                          <a class="text-success" data-toggle="tab" href="#news" role="tab">News and Events</a>
                      </li>
                  </ul><hr>
               </div>
            </div>
          </div>
          <div class="col-12 col-lg-9">
            <div class="tab_contents">
              <div class="">
                <div class="">
                  <div class="container-fluid">
                    <div class="">
                      <!-- Tab panels -->
                      <div class="tab-content">
                        <!--Panel 1-->
                          <div class="tab-pane fade in show active" id="panel51" role="tabpanel">
                              <div class="row">
                                <div class="col-12 col-lg-10 my-3 mx-auto">
                                  <form class="" action="data/video.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                      <div class="col-12 my-3">
                                        <p class="text-info h4 text-center">Add New Video Tutorials</p><hr>
                                      </div>
                                      <div class="col-12 col-lg-6 form-group">
                                        <input type="text" name="coursename" value="" class="form-control" placeholder="Course Name">
                                      </div>
                                      <div class="col-12 col-lg-6 form-group">
                                        <input type="text" name="coursecode" value="" class="form-control" placeholder="Course Code">
                                      </div>
                                      <div class="col-12 col-lg-6 form-group">
                                        <input type="text" name="lecturer" value="" class="form-control" placeholder="Lecturer Name">
                                      </div>
                                      <div class="col-12 col-lg-6 form-group">
                                        <select class="custom-select" name="availability">
                                          <option value="Availability Mode">Availability Mode</option>
                                          <option value="Restricted">Restricted</option>
                                          <option value="Public">Public</option>
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
                                      <div class="col-12 col-lg-6 form-group">
                                        <input type="file" name="file" value="" class="custom-file">
                                      </div>
                                      <div class="col-12 form-group">
                                        <textarea name="descryption" rows="3" class="col-12" placeholder="Descryption"></textarea>
                                      </div>
                                      <div class="col-12">
                                        <button type="submit" name="video" class="btn btn-block btn-success text-danger"><strong>Save this Video</strong> </button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                          </div>
                          <!--/.Panel 1-->
                          <!--Panel 2-->
                          <div class="tab-pane fade" id="panel52" role="tabpanel">
                            <form class="col-12 my-3 col-lg-10 mx-auto" action="data/book.php" method="post" enctype="multipart/form-data">
                              <div class="row">
                                <div class="col-12 my-3">
                                  <p class="text-info h4 text-center">Add New Books</p><hr>
                                </div>
                                <div class="col-12 col-lg-6 form-group">
                                  <input type="text" name="coursename" value="" class="form-control" placeholder="Course Name">
                                </div>
                                <div class="col-12 col-lg-6 form-group">
                                  <input type="text" name="coursecode" value="" class="form-control" placeholder="Course Code">
                                </div>
                                <div class="col-12  col-lg-6 form-group">
                                  <input type="text" name="isbn" value="" class="form-control" placeholder="ISBN">
                                </div>
                                <div class="col-12 col-lg-6 form-group">
                                  <input type="text" name="edition" value="" class="form-control" placeholder="Edition">
                                </div>
                                <div class="col-12  col-lg-6 form-group">
                                  <input type="text" name="author" value="" class="form-control" placeholder="Author Name">
                                </div>
                                <div class="col-12 col-lg-6 form-group">
                                  <input type="text" name="publisher" value="" class="form-control" placeholder="Publisher">
                                </div>
                                <div class="col-12 col-lg-6 form-group">
                                  <input type="file" name="file" value="">
                                </div>
                                <div class="col-12 col-lg-6 form-group">
                                  <select class="custom-select" name="availability">
                                    <option value="Availability Mode">Availability Mode</option>
                                    <option value="Restricted">Restricted</option>
                                    <option value="Public">Public</option>
                                  </select>
                                </div>
                                <div class="col-12 col-lg-6 form-group">
                                  <select class="custom-select" name="type">
                                    <option value="Book type">Book type</option>
                                    <option value="Text Book">Text Book</option>
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
                                <div class="col-12 form-group">
                                  <textarea name="descryption"placeholder="Descryption" class="col-12"></textarea>
                                </div>
                                <div class="col-12">
                                  <button type="submit" name="book" value="Upload" class="btn btn-success btn-block"><strong>Save this Book</strong> </button>
                                </div>
                              </div>
                            </form>
                          </div>
                          <!--/.Panel 2-->
                          <!--Panel 4-->
                          <div class="tab-pane fade" id="handout" role="tabpanel">
                            <div class="col-12 col-lg-8 mx-auto">
                              <form class="my-3" action="data/handout.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-12 my-3">
                                    <p class="text-info h4 text-center">Add New Handouts</p><hr>
                                  </div>
                                  <div class="col-12 col-lg-6 form-group">
                                    <input type="text" name="coursename" value="" class="form-control" placeholder="Handout Title">
                                  </div>
                                  <div class="col-12 col-lg-6 form-group">
                                    <input type="text" name="coursecode" value="" class="form-control" placeholder="Course code">
                                  </div>
                                  <div class="col-12 col-lg-6 form-group">
                                    <input type="text" name="author" value="" class="form-control" placeholder="Handout Author">
                                  </div>
                                  <div class="col-12 col-lg-6 form-group">
                                    <select class="custom-select" name="program">
                                      <option value="Program">Program</option>
                                      <option value="BSc">BSc</option>
                                      <option value="MSc">MSc</option>
                                      <option value="Phd">Phd</option>
                                    </select>
                                  </div>
                                  <div class="col-12 col-lg-6 mx-auto form-group">
                                    <input type="file" name="file" value="">
                                  </div>
                                  <div class="col-12 form-group">
                                    <textarea name="descryption" class="col-12" placeholder="Descryption"></textarea>
                                  </div>
                                  <div class="col-12">
                                    <button type="submit" name="handout" value="Upload" class="btn btn-success btn-block"><strong>Upload this Handout</strong> </button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <!--/.Panel 4-->

                          <!--Panel 3-->
                          <div class="tab-pane fade" id="panel53" role="tabpanel">
                            <div class="col-12 my-3 col-lg-8 mx-auto">
                              <div class="col-12">
                                <form class="" action="data/app.php" method="post" enctype="multipart/form-data">
                                  <div class="row">
                                    <div class="col-12 my-3">
                                      <p class="text-info h4 text-center">Add New Application</p><hr>
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="appname" value="" class="form-control" placeholder="App Name">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <input type="text" name="developer" value=""  class="form-control" placeholder="Developer of the App">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group">
                                      <select class="custom-select" name="os">
                                        <option value="Supported OS">Supported OS</option>
                                        <option value="UNIX/Linux">UNIX/Linux</option>
                                        <option value="Mac">Mac</option>
                                        <option value="Windows">Windows</option>
                                        <option value="IOS">IOS</option>
                                        <option value="Android"></option>
                                      </select>
                                    </div>
                                    <div class="col-12  col-lg-6 form-group">
                                      <select class="custom-select" name="availability">
                                        <option value="Availability Mode">Availability Mode</option>
                                        <option value="Restricted">Restricted</option>
                                        <option value="Public">Public</option>
                                      </select>
                                    </div>
                                    <div class="col-12 col-lg-6 mx-auto form-group">
                                      <input type="file" name="file" value="">
                                    </div>
                                    <div class="col-12  form-group">
                                      <textarea name="descryption" class="col-12" placeholder="Descryption"></textarea>
                                    </div>
                                    <div class="col-12">
                                      <button type="submit" name="app" value="Upload" class="btn btn-success btn-block"><strong>Upload this App</strong> </button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                          <!--/.Panel 3-->

                          <!--Panel 4-->
                          <div class="tab-pane fade" id="panel54" role="tabpanel">
                            <div class="col-12 col-lg-8 mx-auto">
                              <form class="my-3" action="data/dataset.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-12 my-3">
                                    <p class="text-info h4 text-center">Add New Datasets</p><hr>
                                  </div>
                                  <div class="col-12 col-lg-6 form-group">
                                    <input type="text" name="dataname" value="" class="form-control" placeholder="Dataset Name">
                                  </div>
                                  <div class="col-12 col-lg-6 form-group">
                                    <input type="text" name="author" value="" class="form-control" placeholder="Dataset Source">
                                  </div>
                                  <div class="col-12 col-lg-6 form-group">
                                    <select class="custom-select" name="program">
                                      <option value="Program">Program</option>
                                      <option value="BSc">BSc</option>
                                      <option value="MSc">MSc</option>
                                      <option value="Phd">Phd</option>
                                    </select>
                                  </div>
                                  <div class="col-12 col-lg-6 form-group">
                                    <input type="file" name="file" value="">
                                  </div>
                                  <div class="col-12 form-group">
                                    <textarea name="descryption" class="col-12" placeholder="Descryption"></textarea>
                                  </div>
                                  <div class="col-12">
                                    <button type="submit" name="dataset" value="Upload" class="btn btn-success btn-block"><strong>Upload this Dataset</strong> </button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <!--/.Panel 4-->

                          <!--Panel 4-->
                          <div class="tab-pane fade" id="research" role="tabpanel">
                            <div class="col-12 col-lg-8 mx-auto">
                              <form class="my-3" action="data/research.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-12 my-3">
                                    <p class="text-info h4 text-center">Add New Research</p><hr>
                                  </div>
                                  <div class="col-12 col-lg-6 form-group">
                                    <input type="text" name="researchname" value="" class="form-control" placeholder="Research Name">
                                  </div>
                                  <div class="col-12 col-lg-6 form-group">
                                    <input type="text" name="author" value="" class="form-control" placeholder="Research Author">
                                  </div>
                                  <div class="col-12 col-lg-6 form-group">
                                    <select class="custom-select" name="program">
                                      <option value="Program">Program</option>
                                      <option value="BSc">BSc</option>
                                      <option value="MSc">MSc</option>
                                      <option value="Phd">Phd</option>
                                    </select>
                                  </div>
                                  <div class="col-12 col-lg-6 form-group">
                                    <input type="file" name="file" value="">
                                  </div>
                                  <div class="col-12 form-group">
                                    <textarea name="descryption" class="col-12" placeholder="Descryption"></textarea>
                                  </div>
                                  <div class="col-12">
                                    <button type="submit" name="research" value="Upload" class="btn btn-success btn-block"><strong>Upload this Research</strong> </button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <!--/.Panel 4-->

                          <!--Panel 4-->
                          <div class="tab-pane fade" id="announcement" role="tabpanel">
                            <div class="col-12 col-lg-8 mx-auto">
                              <form class="my-3" action="data/announcement.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-12 my-3">
                                    <p class="text-info h4 text-center">Add New Announcement</p><hr>
                                  </div>
                                  <div class="form-group col-12">
                                    <input type="text" name="title" value="" class="form-control h6 text-info text-center" placeholder="Title">
                                  </div>
                                  <div class="col-12 form-group">
                                    <textarea name="content" rows="8" class="form-control h6 text-center text-info" placeholder="Content"></textarea>
                                  </div>
                                  <div class="col-12 form-group">
                                    <label for="" class="h6">Posted date</label>
                                    <input type="date" name="posted_date" value="" class="form-control text-center text-info">
                                    </div>
                                    <div class="col-12 form-group">
                                      <button type="submit" name="announce" class="btn-sm btn btn-success btn-block">Save Announcement</button>
                                    </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <!--/.Panel 4-->

                          <!--Panel 4-->
                          <div class="tab-pane fade" id="curriculum" role="tabpanel">
                            <div class="col-12 col-lg-11 mx-auto">
                              <form class="my-3" action="data/module.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-12 my-3">
                                    <p class="text-info h4 text-center">Add New Curriculum</p><hr>
                                  </div>
                                  <div class="col-12">
                                    <p class="text-primary h5 text-left pb-2" >A. Add Modules</p>
                                  </div>
                                  <div class="col-12">
                                   <p>1. Basic info...</p>
                                  </div>
                                  <div class="col-12 col-lg-6 form-group">
                                    <input type="text" name="name" value="" class="form-control" placeholder="Module Name">
                                  </div>
                                  <div class="col-12 col-lg-4 form-group">
                                    <input type="text" name="code" value="" class="form-control" placeholder="Module Code">
                                  </div>
                                  <div class="col-12 col-lg-2 form-group">
                                    <input type="text" name="ects" value="" class="form-control" placeholder="Total ECTS">
                                  </div>
                                  <div class="col-12">
                                  <p>2. Total study hours</p>
                                  </div>
                                  <div class="col-12 col-lg-2 form-group">
                                    <input type="text" name="homestudy" value="" class="form-control" placeholder="Home Study">
                                  </div>
                                  <div class="col-12 col-lg-2 form-group">
                                    <input type="text" name="lecturer" value="" class="form-control" placeholder="Lecturer">
                                  </div>
                                  <div class="col-12 col-lg-2 form-group">
                                    <input type="text" name="tutorial" value="" class="form-control" placeholder="Tutorial">
                                  </div>
                                  <div class="col-12 col-lg-2 form-group">
                                    <input type="text" name="lab" value="" class="form-control" placeholder="Lab">
                                  </div>
                                  <div class="col-12 col-lg-2 form-group">
                                    <input type="text" name="assessement" value="" class="form-control" placeholder="Assessement">
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
                                  <div class="col-12 col-lg-6 form-group mx-auto">
                                    <input type="submit" name="save" value="Save" class="btn btn-primary btn-block">
                                  </div>
                                  <div class="col-12 col-lg-6 form-group mx-auto">
                                    <input type="submit" name="next" value="Save and Goto Courses" class="btn btn-primary btn-block">
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <!--/.Panel 4-->

                          <!--Panel 4-->
                          <div class="tab-pane fade" id="news" role="tabpanel">
                            <div class="col-12 col-lg-11 mx-auto">
                              <form class="my-3" action="data/news.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                  <div class="col-12 my-3">
                                    <p class="text-info h4 text-center">Add Latest News and Events</p><hr>
                                  </div>
                                  <div class="col-12 col-lg-8">
                                    <input type="text" name="title" value="" placeholder="Title" class="form-control">
                                  </div>
                                  <div class="col-12 col-lg-4">
                                    <select class="rounded custom-select" name="type">
                                      <option value="Type">Type</option>
                                      <option value="News">News</option>
                                      <option value="Events">Events</option>
                                    </select>
                                  </div>
                                  <div class="col-12">
                                    <textarea name="name" rows="8" placeholder="Content" class="form-control"></textarea>
                                  </div>
                                  <div class="col-12 col-lg-5">
                                    <label for="">Related image (optional)</label>
                                    <input type="file" name="" value="">
                                  </div>
                                  <div class="col-12 col-lg-7">
                                    <input type="text" name="url" value="" class="form-control" placeholder="Some url (optional)">
                                  </div>
                                  <div class="col-12 col-lg-6 form-group mx-auto">
                                    <input type="submit" name="next" value="Save" class="btn btn-primary btn-block">
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <!--/.Panel 4-->

                      </div>
                    </div>
                  </div>
                </div>
                <!-- Material -->
              </div>
            </div>
          </div>
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
