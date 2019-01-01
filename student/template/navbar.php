
<nav class="navbar navbar-expand-md bg-inverse scrolling-navbar bg-primary container" style="z-index:2;">
  <div class="container">
    <a href="index.php" class="navbar-brand d-block d-md-none">
      <img src="../images/coll/stat.png" alt="" style="height:60px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <i class="lni-menu"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto w-100 justify-content nav-fill navs">
        <li class="nav-item">
          <a class="nav-link page-scroll" href="../index.php">
            <img src="../images/home.png" alt="" class="rounded-circle">
            Homepage
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="index.php">
            <img src="../images/user.jpeg" alt="" class="rounded-circle">
            Profile
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="material.php" data-toggle="modal" data-target=".material">
            <img src="../images/book.jpeg" alt="" class="rounded-circle">
            Materials
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="announcement.php">
            <img src="../images/announcement.png" alt="" class="rounded-circle">
            Announcements
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link page-scroll" href="message_list.php">
            <img src="../images/message.jpeg" alt="" class="rounded">
              Message
              <?php
                class MsgCount
                {
                  function msgCount()
                  {
                   global $obj;
                   $idno=$_SESSION['user_idno'];
                   $counter=0;
                   $sql="SELECT * FROM `message` WHERE status='unread' AND receiver_id='$idno'";
                   $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                   $no_rows = mysqli_num_rows($result_set);
                    if($no_rows>=1){
                      ?>
                      <sup class="badge rounded-circle text-white" style="background-color:red"><?php echo $no_rows ?></sup>
                      <?php
                   }
                  }
                }
                $list=new msgCount();
              ?>
          </a>
        </li>
        <li class="nav-item dropdown d-md-block d-none">
          <a class="nav-link dropdown-toggle page-scroll" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            More
          </a>
              <div class="dropdown-menu dropdown-menu-right animated zoomIn bg-primary">
                <a class="dropdown-item text-white" href="edit_profile.php">
                  <img src="../images/profile.jpeg" alt="">
                  Edit Profile
                </a>
                <a class="dropdown-item text-white" href="contactus.php">
                  <img src="../images/contact.jpg" alt="">
                  Contact us
                </a>
                <a class="dropdown-item text-white" href="../data/logout.php">
                  <img src="../images/logout.png" alt="">
                  Log out
                </a>
            </div>
        </li>
        <li class="nav-item d-block d-md-none">
          <a class="nav-link page-scroll" href="edit_profile.php">
            <img src="../images/profile.jpeg" alt="" class="rounded-circle mr-2">Edit Profile</a>
        </li>
        <li class="nav-item d-block d-md-none">
          <a class="nav-link page-scroll" href="contactus.php">
            <img src="../images/contact.jpg" alt="" class="rounded-circle mr-2">Contact us</a>
        </li>
        <li class="nav-item d-block d-md-none">
          <a class="nav-link page-scroll" href="../data/logout.php">
            <img src="../images/logout.png" alt="" class="rounded-circle mr-2">Log out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php include("template/modal.php") ?>
