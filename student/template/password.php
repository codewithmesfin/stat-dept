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
      <form class="row" method="post" action="../data/password.php">
        <div class="col-12">
          <p class="text-center text-info h3 my-3">Change your password</p><hr>
        </div>
        <div class="col-12 col-lg-5 mx-auto">
          <div class="row">
            <div class="form-group col-12">
              <label for="" class="text-info"><b>Old Password</b> </label>
              <input type="password" name="old_password" value="1ffndfhj75cu" class="form-control text-warning" placeholder="Old Password" required>
            </div>
            <div class="form-group col-12">
              <label for="" class="text-info"><b>New Password</b> </label>
              <input type="password" name="new_password" value="" class="form-control text-warning" placeholder="New Password" required>
            </div>
            <div class="form-group col-12">
              <label for="" class="text-info"><b>Confirm Password</b> </label>
              <input type="password" name="confirm_password" value="" class="form-control text-warning" placeholder="Confirm Password" required>
            </div>
            <div class="form-group col-12">
              <button type="submit" name="reset" class="btn btn-sm btn-block btn-info"><strong>Reset your password</strong> </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
