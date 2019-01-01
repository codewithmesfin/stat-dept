<div class="bg-light border card container border-info">
  <div class="row">
    <?php
    class Plasma_Videos
    {
      function plasma_videos()
      {
        global $obj;
        $videoid=$_GET['id'];
        $sql="SELECT * FROM video where id='$videoid'";
        $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));

          while($row=mysqli_fetch_array($result_set))
          {
            ?>
            <div class="col-12 col-lg-8 card mx-auto">
              <div class="my-2">
                <div class="rounded">
                  <video  class="" src="../resource/video/<?php echo $row['filename'] ?>" width="100%" height="100%" controls contextmenu="" contenteditable="" autoplay preload="auto"></video>
                  <div class="row">
                    <div class="col-8">
                      <div class="border border-light rounded">
                        <p class="text-primary pt-3 pb-2 text-center"><?php echo $row['coursename'] ?></p>
                      </div>
                    </div>
                    <div class="col-4">
                      <div class="">
                        <a href="../download/video.php?file=<?php echo $row['filename'] ?>" class="h5 btn btn-info float-right text-white">
                          <img src="../images/download.ico" alt="" style="width:20px">
                            Download
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <div class="col-12 col-lg-4 card card-body">
               <form class="form-inline my-2 my-lg-0 srch py-3" method="post" action="search_video.php">
                    <input name="item" class="search1 col-10 rounded-left text-info" type="text" placeholder="Search" style="border:1px solid #DCDCDC">
                    <button type="submit" name="search" class="col-1 srchbtn rounded-right btn-primary">
                      <img src="../images/search.png" alt="">
                    </button>
                </form>
            <?php
        }
      }
    }
    $list=new plasma_videos();
   ?>
      <div class="h5 text-info text-center">
        <p>MOST VISITED VIDEOS</p><hr>
      </div>
      <div class="row">
        <?php
        class Play_Videos
        {
          function play_videos()
          {
            global $obj;

            if ($_SERVER["REQUEST_METHOD"] == "POST"){
              $search=$_POST["item"];
              global $obj;
              $sql0="SELECT * FROM video WHERE coursename LIKE '%$search%' LIMIT 8";
              $result_set0=mysqli_query($obj->conn,$sql0) or die(mysqli_connect_error($sql0));
              while($row=mysqli_fetch_array($result_set0))
                {
                  ?>
                  <div class="col-12 col-lg-6">
                    <a href="play.php?id=<?php echo $row['id'] ?>" class="text-center text-info">
                      <video src="../resource/video/<?php echo $row['filename'] ?>" poster="" width="100%" height="100%"></video>
                    </a>
                  </div>
                  <div class="col-12 col-lg-6">
                    <a href="#" class="text-left">
                      <p class=""><?php echo $row['coursename'] ?></p>
                      <p>Course code: <?php echo $row['coursecode'] ?></p>
                    </a>
                  </div>
                  <?php
                }
              }
              else {
                $sql="SELECT * FROM video LIMIT 8";
                $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                $no_rows = mysqli_num_rows($result_set);
                if($no_rows == 0){
                  ?>
                    <p class="h3 my-3 text-danger">No Video tutorial available !</p>
                  <?php
                }
                else {
                  while($row=mysqli_fetch_array($result_set))
                  {
                    ?>
                    <div class="col-12 col-lg-6">
                      <a href="play.php?id=<?php echo $row['id'] ?>" class="text-center text-info">
                        <video src="../resource/video/<?php echo $row['filename'] ?>" poster="" width="100%" height="100%"></video>
                      </a>
                    </div>
                    <div class="col-12 col-lg-6">
                      <a href="#" class="text-left">
                        <p class=""><?php echo $row['coursename'] ?></p>
                        <p>Course code: <?php echo $row['coursecode'] ?></p>
                      </a>
                    </div>
                    <?php
                  }
                }
              }
          }
        }
        $list=new play_videos();
       ?>
      </div>
    </div>
  </div>
</div>
