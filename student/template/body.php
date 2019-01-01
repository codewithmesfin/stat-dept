<div class="container card" style="z-index:0;">
  <div class="" style="background-color:white">
    <div class="">
      <div class="row">
        <div class="col-12 col-lg-3 bg-light">
          <div class="h3 text-info my-2">
            <p>Student Page</p>
          </div>
          <div class="d-none d-lg-block">
            <div class="">
              <nav>
                <ul class="nav flex-column">
                  <b>LINKS</b>
                  <li class="nav-item">
                    <a href="../index.php" class="nav-link">
                      <img src="../images/home.png" alt="" class="rounded-bottom" style="width:20px">
                      Home
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="tutorial.php" class="nav-link">
                      <img src="../images/res/video.png" alt="" style="width:20px">
                      Tutorials
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="book.php" class="nav-link">
                      <img src="../images/res/book.png" alt="" style="width:20px">
                      Books
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="app.php" class="nav-link">
                      <img src="../images/appl.jpeg" alt="" style="width:20px">
                      Apps
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="dataset.php" class="nav-link">
                      <img src="../images/res/dataset.png" alt="" style="width:20px">
                      Data Set
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="research.php" class="nav-link">
                      <img src="../images/res/research.png" alt="" style="width:20px">
                      Research
                    </a>
                  </li>
                  <b>QUICK LINK</b>
                  <li class="nav-item">
                    <a href="edit_profile.php" class="nav-link">
                      <img src="../images/profile.jpeg" alt="" style="width:20px">
                      Edit Profile
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="password.php" class="nav-link">
                      <img src="../images/password.png" alt="" style="width:20px">
                      Change Password
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../data/logout.php" class="nav-link">
                      <img src="../images/logout.png" alt="" style="width:20px">
                      Log out
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-9 mx-auto">
          <div class="col-12 col-lg-8 mx-auto mt-5 mb-2">
            <div class="row">
              <?php
                class Student
                    {
                      function student()
                      {
                        global $obj;
                        $idno=$_SESSION['user_idno'];
                        $sql="SELECT * FROM user u,student s WHERE u.user_idno='$idno' AND u.user_type='Student' AND u.user_idno=s.idno";
                        $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                        $no_rows = mysqli_num_rows($result_set);
                        if($row=mysqli_fetch_array($result_set))
                        {
                          ?>
                          <div class="col-12 col-lg-3">
                            <?php
                            if ($row['profile']=='') {
                              ?><img src="../images/default.jpg" alt="" class="img-fluid"><?php
                              ?>
                              <p class="text-warning text-center">
                                <small>
                                  <i>
                                    No profile Picture uploaded yet.
                                    Please upload your profile picture by editing your profile.
                                  </i>
                                </small>
                              </p>
                              <?php
                            }
                            else {
                              ?>
                              <img src="../profile/student/<?php echo $row['profile'] ?>" alt="" class="img-fluid">
                             <p class="text-info my-2"><i><?php echo ucfirst($row['name'])." ".ucfirst($row['fathername'])." ".ucfirst($row['gname']) ?> </i> </p>
                              <?php
                            }
                             ?>
                          </div>
                          <div class="col-12  col-lg-9 mx-auto text-primary">
                            <p class="text-primary"><strong>Full Name:</strong>  <?php echo ucfirst($row['name'])." ".ucfirst($row['fathername'])." ".ucfirst($row['gname']) ?> </p>
                            <p class="text-primary"><strong>ID NO:</strong> <?php echo $idno ?></p>
                            <p class="text-primary">
                              <strong>Year:</strong><?php echo $row['year'].",  " ?>
                              <strong>Program: </strong><?php echo $row['program'] ?>
                            </p>
                            <p class="text-primary">
                              <strong>Gender:</strong><?php echo $row['gender'] ?>,
                              <strong>Birth date: </strong><?php echo $row['birthdate'];?>
                            </p>
                            <p class="text-primary"><strong>E-mail: </strong> <?php echo $row['email'] ?></p>
                            <p class="text-primary"><strong>Phone: </strong> <?php echo $row['phone'] ?></p>
                          </div>
                         <?php
                        }
                        else {
                          $sql2="SELECT * FROM user WHERE user_idno='$idno' AND user_type='Student'";
                          $result_set2=mysqli_query($obj->conn,$sql2) or die(mysqli_connect_error($sql2));
                          if($row2=mysqli_fetch_array($result_set2)){
                            ?>
                            <div class="col-12 col-lg-3">
                              <img src="../images/default.jpg" alt="" class="img-fluid">
                              <p class="text-warning text-center"><i>No Profile picture.</i> </p>
                            </div>
                            <div class="col-12  col-lg-9 mx-auto text-primary">
                              <p class="text-primary"><strong>Full Name:</strong>  <?php echo $row2['name']." ".$row2['fathername']." ".$row2['gname'] ?> </p>
                              <p class="text-primary"><strong>ID NO:</strong> <?php echo $idno ?></p>
                              <p class="text-primary">
                                <i>You do not have provied enougn information about your self.
                                  Please edit your information to view more detail about your self.</i>
                              </p>
                            </div>
                            <?php
                          }
                        }
                      }
                    }
                $list=new student();
             ?>

            </div>
          </div>
          <div class="col-10 mx-auto">
            <a href="edit_profile.php" class="nav-link text-danger text-center h3">Edit your profile</a>
          </div>
          <div class="col-12 col-lg-8 mx-auto mb-5"><hr>
            <a href="teacher.php" class="nav-link h3 text-info text-center">CONTACT YOUR TEACHERS</a>
            <p class="text-info text-center">You can send and receive message to/from your teachers.</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
