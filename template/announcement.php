<div class="col-12 col-lg-6 mx-auto">
  <form class="row" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#download" method="post">
    <div class="col-12 form-group">
      <input type="text" name="item" class="form-control form-control-lg text-center text-info"
       placeholder="Search for Announcements ..." value="">
    </div>
    <div class="col-12 form-group">
      <button type="submit" class="btn btn-block text-center btn-info" name="button">Search</button>
    </div>
  </form>
</div>
<div class="col-12 col-lg-9 mx-auto">
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
