<div class="container card">
  <div class="row">
    <div class="col-12 col-lg-3 card">
      <form class="form-inline my-2 my-lg-0 srch py-3">
           <input class="search1 col-10 rounded-left text-info" type="text" placeholder="Search" style="border:1px solid #DCDCDC">
           <button type="button" name="search" class="col-1 srchbtn rounded-right btn-primary">
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
          <p class="text-center text-info h3 my-3">Contact us</p><hr>
        </div>
        <div class="col-12 text-dark mx-auto my-3">
          <?php
            class Contacus
                {
                  function contacus()
                  {
                    global $obj;
                    $idno=$_SESSION['user_idno'];
                    $sql="SELECT * FROM user u,student s WHERE u.user_idno='$idno' AND u.user_type='Student' AND u.user_idno=s.idno";
                    $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                    $no_rows = mysqli_num_rows($result_set);
                    if($row=mysqli_fetch_array($result_set))
                    {
                    ?>
                     <form class="col-12 col-lg-8 mx-auto" action="../data/contactus.php" method="post">
                       <div class="row">
                         <div class="col-12 form-group" style="display:none">
                           <input type="text" class="form-control text-center text-info" placeholder="Full Name" name="name" value="<?php echo ucfirst($row['name']." ".$row['fathername']." ".$row['gname']) ?>">
                         </div>
                         <div class="col-12 form-group" style="display:none">
                           <input type="text" class="form-control text-center text-info" placeholder="Phone No" name="phone" value="<?php echo $row['phone'] ?>">
                         </div>
                         <div class="col-12 form-group" style="display:none">
                           <input type="email" class="form-control text-center text-info" placeholder="E-mail" name="email" value="<?php echo $row['email'] ?>">
                         </div>
                         <div class="col-12 form-group">
                           <textarea rows="7" name="message" class="form-control text-center h3 text-info" placeholder="Message"></textarea>
                         </div>
                         <div class="col-12 form-group">
                           <button type="submit" class="btn btn-dark btn-block rounded" name="send">Send Us</button>
                         </div>
                       </div>
                     </form>
                   <?php
                    }
                  }
                }
            $list=new contacus();
           ?>
        </div>
      </div>
    </div>
  </div>
</div>
