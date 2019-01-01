<div class="container card">
  <div class="row">
    <div class="col-12 col-lg-3 card">
      <form class="form-inline my-2 my-lg-0 srch py-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
           <input name="item" class="search1 col-10 rounded-left text-info" type="text" placeholder="Search" style="border:1px solid #DCDCDC">
           <button type="submit" name="search" class="col-1 srchbtn rounded-right btn-primary">
             <img src="../images/search.png" alt="">
           </button>
       </form>
       <div class="d-none d-lg-block">
         <div class="">
           <nav>
             <ul class="nav flex-column">
               <b>LINKS</b>
               <li class="nav-item">
                 <a href="../index.php" class="nav-link">
                   <img src="../images/home.png" alt="" style="width:20px">
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
    <div class="col-12 col-lg-8 mx-auto">
      <div class="row">
        <div class="col-12 col-lg-4 border-right border-light">
          <div class="h4 mt-3 text-info text-center">
            <h6 class="text-primary"><strong>HANDOUTS</strong> </h6>
          </div>
          <?php
                class Handout
                {
                  function handout()
                  {
                    global $obj;

                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                      $search=$_POST["item"];
                      global $obj;
                      $sql0="SELECT * FROM handout  WHERE coursename LIKE '%$search%'";
                      $result_set0=mysqli_query($obj->conn,$sql0) or die(mysqli_connect_error($sql0));
                      $no_row = mysqli_num_rows($result_set0);
                      if ($no_row==0){
                        ?>
                        <div class="my-5 py-5 text-center">
                          <h6 class="text-danger text-center">OOPS! </h6>
                          <p class="text-danger text-center h6">No Search Result Found! </p>
                        </div>
                        <?php
                      }
                      else {
                        while($row=mysqli_fetch_array($result_set0))
                          {
                            ?>
                            <div class="rounded py-2 my-3">
                              <div class="row">
                                <div class="col-2">
                                  <a href="../resource/handout/<?php echo $row['filename'] ?>"><img src="../images/res/book.png" alt="" style="width:25px" class="ml-3"></a>
                                </div>
                                <div class="col-8">
                                  <a href="../resource/handout/<?php echo $row['filename'] ?>"><p><?php echo $row['coursename'] ?></p></a>
                                  <p class="text-muted small">Course Code: <?php echo $row['coursecode'] ?></p>
                                  <p><a href="../download/handout.php?file=<?php echo $row['filename'] ?>" class="h6 text-center text-info">
                                    <img src="../images/download.ico" alt="" class="" style="width:20px">
                                    Download</a>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <?php
                          }
                      }
                      }
                      else {
                        $sql="SELECT * FROM handout LIMIT 20";
                        $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                        $no_rows = mysqli_num_rows($result_set);
                        if($no_rows == 0){
                          ?>
                            <p class="h3 my-3 text-danger">No Handout is available !</p>
                          <?php
                        }
                        else {
                          while($row=mysqli_fetch_array($result_set))
                          {
                            ?>
                            <div class="rounded py-2 my-3">
                              <div class="row">
                                <div class="col-2">
                                  <a href="../resource/handout/<?php echo $row['filename'] ?>"><img src="../images/res/book.png" alt="" style="width:25px" class="ml-3"></a>
                                </div>
                                <div class="col-8">
                                  <a href="../resource/handout/<?php echo $row['filename'] ?>"><p><?php echo $row['coursename'] ?></p></a>
                                  <p class="text-muted small">Course Code: <?php echo $row['coursecode'] ?></p>
                                  <p><a href="../download/handout.php?file=<?php echo $row['filename'] ?>" class="h6 text-center text-info">
                                    <img src="../images/download.ico" alt="" class="" style="width:20px">
                                    Download</a>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <?php
                          }
                        }
                      }
                  }
                }
                $list=new handout();
               ?>
        </div>
        <div class="col-12 col-lg-4 border-right border-left border-light">
          <div class="h4  mt-3 text-info text-center">
            <h6 class="text-primary"><strong>TEXT BOOKS</strong> </h6>
          </div>
          <?php
                class TextBook
                {
                  function textbook()
                  {
                    global $obj;

                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                      $search=$_POST["item"];
                      global $obj;
                      $sql0="SELECT * FROM book  WHERE booktype='Text Book' AND coursename LIKE '%$search%'";
                      $result_set0=mysqli_query($obj->conn,$sql0) or die(mysqli_connect_error($sql0));
                      $no_row = mysqli_num_rows($result_set0);
                      if ($no_row==0){
                        ?>
                        <div class="my-5 py-5 text-center">
                          <h6 class="text-danger text-center">OOPS! </h6>
                          <p class="text-danger text-center h5">No Search Result Found! </p>
                        </div>
                        <?php
                      }
                      else {
                        while($row=mysqli_fetch_array($result_set0))
                          {
                            ?>
                            <div class="rounded py-2 my-3">
                              <div class="row">
                                <div class="col-2">
                                  <a href="../resource/book/<?php echo $row['filename'] ?>"><img src="../images/res/book.png" alt="" style="width:25px" class="ml-3"></a>
                                </div>
                                <div class="col-8">
                                  <a href="../resource/book/<?php echo $row['filename'] ?>"><p><?php echo $row['coursename'] ?></p></a>
                                  <p class="text-muted small">Course Code: <?php echo $row['coursecode'] ?></p>
                                  <p><a href="../download/book.php?file=<?php echo $row['filename'] ?>" class="h6 text-center text-info">
                                    <img src="../images/download.ico" alt="" class="" style="width:20px">
                                    Download</a>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <?php
                          }
                      }
                      }

                      else {
                        $sql="SELECT * FROM book where booktype='Text Book' LIMIT 8";
                        $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                        $no_rows = mysqli_num_rows($result_set);
                        if($no_rows == 0){
                          ?>
                            <p class="h3 my-3 text-danger">No Textbook is available !</p>
                          <?php
                        }
                        else {
                          while($row=mysqli_fetch_array($result_set))
                          {
                            ?>
                            <div class="rounded py-2 my-3">
                              <div class="row">
                                <div class="col-2">
                                  <a href="../resource/book/<?php echo $row['filename'] ?>"><img src="../images/res/book.png" alt="" style="width:25px" class="ml-3"></a>
                                </div>
                                <div class="col-8">
                                  <a href="../resource/book/<?php echo $row['filename'] ?>"><p><?php echo $row['coursename'] ?></p></a>
                                  <p class="text-muted small">Course Code: <?php echo $row['coursecode'] ?></p>
                                  <p><a href="../download/book.php?file=<?php echo $row['filename'] ?>" class="h6 text-center text-info">
                                    <img src="../images/download.ico" alt="" class="" style="width:20px">
                                    Download</a>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <?php
                          }
                        }
                      }
                  }
                }
                $list=new textbook();
               ?>
        </div>
        <div class="col-12 col-lg-4 border-left border-light">
          <div class="h4 mt-3 text-info text-center">
            <h6 class="text-primary"><strong>REFERENCE BOOKS</strong> </h6>
          </div>
          <?php
                class Reference
                {
                  function reference()
                  {
                    global $obj;

                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                      $search=$_POST["item"];
                      global $obj;
                      $sql0="SELECT * FROM book  WHERE booktype='Reference' AND coursename LIKE '%$search%'";
                      $result_set0=mysqli_query($obj->conn,$sql0) or die(mysqli_connect_error($sql0));
                      $no_row = mysqli_num_rows($result_set0);
                      if ($no_row==0){
                        ?>
                        <div class="my-5 py-5 text-center">
                          <h6 class="text-danger text-center">OOPS! </h6>
                          <p class="text-danger text-center h5">No Search Result Found! </p>
                        </div>
                        <?php
                      }
                      else {
                        while($row=mysqli_fetch_array($result_set0))
                          {
                            ?>
                            <div class="rounded py-2 my-3">
                              <div class="row">
                                <div class="col-2">
                                  <a href="#"><img src="../images/res/book.png" alt="" style="width:25px" class="ml-3"></a>
                                </div>
                                <div class="col-8">
                                  <a href="../resource/book/<?php echo $row['filename'] ?>"><p><?php echo $row['coursename'] ?></p></a>
                                  <p class="text-muted small">Course Code: <?php echo $row['coursecode'] ?></p>
                                  <p><a href="../download/book.php?file=<?php echo $row['filename'] ?>" class="h6 text-center text-info">
                                    <img src="../images/download.ico" alt="" class="" style="width:20px">
                                    Download</a>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <?php
                          }
                       }
                      }
                    else {
                      $sql="SELECT * FROM book where booktype='Reference' LIMIT 20";
                      $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                      $no_rows = mysqli_num_rows($result_set);
                      if($no_rows == 0){
                        ?>
                          <p class="h3 my-3 text-danger">No Reference Book is available !</p>
                        <?php
                      }
                      else {
                        while($row=mysqli_fetch_array($result_set))
                        {
                          ?>
                          <div class="rounded py-2 my-3">
                            <div class="row">
                              <div class="col-2">
                                <a href="#"><img src="../images/res/book.png" alt="" style="width:25px" class="ml-3"></a>
                              </div>
                              <div class="col-8">
                                <a href="../resource/book/<?php echo $row['filename'] ?>"><p><?php echo $row['coursename'] ?></p></a>
                                <p class="text-muted small">Course Code: <?php echo $row['coursecode'] ?></p>
                                <p><a href="../download/book.php?file=<?php echo $row['filename'] ?>" class="h6 text-center text-info">
                                  <img src="../images/download.ico" alt="" class="" style="width:20px">
                                  Download</a>
                                </p>
                              </div>
                            </div>
                          </div>
                          <?php
                        }
                      }
                    }
                  }
                }
                $list=new reference();
               ?>
        </div>
      </div>
    </div>
  </div>
</div>
