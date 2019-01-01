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
    <div class="col-12 col-lg-9 mx-auto">
      <div class="row">
        <div class="col-12">
          <p class="text-center text-info h3 my-3">Announcement</p><hr>
        </div>
        <?php
              class App
              {
                function app()
                {
                  global $obj;
                  if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $search=$_POST["item"];
                    global $obj;
                    $counter=1;
                    $sql0="SELECT * FROM announcement  WHERE title LIKE '%$search%' ORDER BY id DESC LIMIT 5";
                    $result_set0=mysqli_query($obj->conn,$sql0) or die(mysqli_connect_error($sql0));
                    $no_row = mysqli_num_rows($result_set0);
                    if ($no_row==0) {
                      ?>
                      <div class="my-5 py-5 text-center">
                        <h1 class="text-danger text-center">OOPS! </h1>
                        <p class="text-danger text-center h1">No Search Result Found! </p>
                      </div>
                      <?php
                    }
                    else {
                      while($row=mysqli_fetch_array($result_set0))
                        {
                          ?>
                          <div class="col-12 col-lg-10 mx-auto">
                            <div class="text-center">
                              <p class="text-left text-info h5"><?php echo $counter.". ".$row['title'] ?></p>
                              <p class="text-justify"><?php echo $row['content'] ?></p>
                              <small class="text-right text-danger">posted at: <?php echo $row['posted_date'] ?></small>
                            </div>
                          </div>
                          <div class="col-12">
                            <hr>
                          </div>
                          <?php
                          $counter++;
                        }
                    }
                    }
                    else {
                      $counter=1;
                      $sql="SELECT * FROM announcement ORDER BY id DESC LIMIT 5";
                      $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                      $no_rows = mysqli_num_rows($result_set);
                      if($no_rows == 0){
                        ?>
                          <p class="h3 my-3 text-danger">No Announcement is available !</p>
                        <?php
                      }
                      else {
                        while($row=mysqli_fetch_array($result_set))
                        {
                          ?>
                          <div class="col-12 col-lg-10 mx-auto">
                            <div class="text-center">
                              <p class="text-left text-info h5"><?php echo $counter.". ".$row['title'] ?></p>
                              <p class="text-justify"><?php echo $row['content'] ?></p>
                              <small class="text-right text-danger">posted at: <?php echo $row['posted_date'] ?></small>
                            </div>
                          </div>
                          <div class="col-12">
                            <hr>
                          </div>
                          <?php
                          $counter++;
                        }
                      }
                    }
                }
              }
              $list=new app();
             ?>
      </div>
    </div>
  </div>
</div>
