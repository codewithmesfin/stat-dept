<div class="card bg-info">
  <div class="my-5 py-3 col-12 col-lg-11 mx-auto">
    <div class="col-12 col-lg-11 mx-auto d-block">
      <?php
              class Profile
              {
                function profile()
                {
                  global $obj;
                  $idno=$_SESSION['admin_idno'];
                  $sql="SELECT * FROM `admin` WHERE idno='$idno'";
                  $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                  while($row=mysqli_fetch_array($result_set))
                  {
                    ?>
                      <div class="h3">
                        <p class="text-white text-center h4" style="font-family:serif;font-weight:bold">
                          <?php echo strtoupper($row['firstname']." ".$row['lastname']) ?>  <br>
                          <small class="text-center">Website Administrator</small><br>
                          ______________________________
                        </p>
                      </div>
                      <div class="col-12 text-dark mx-auto my-3">
                        <div class="row">
                          <div class="col-12 text-center mx-auto">
                      <p class="text-dark">E-mail: <?php echo $row['email'] ?></p>
                      <p class="text-dark">Phone No:<?php echo $row['phone'] ?></p>
                      <p class="text-dark">Gender: <?php echo $row['gender'].", Birth date: ".$row['bdate']; ?></p>
                   </div>
                   <div class="col-12 col-lg-3 my-5 mx-auto">
                     <a href="add_material.php" class="btn bg-success mx-auto">Upload New Materials</a>
                   </div>
                 </div>
               </div>
                    <?php
                  }
                }
              }
              $list=new profile();
             ?>
    </div>
    <div class="my-5"></div>
  </div>
</div>


<?php include("admin_template/modal.php") ?>
