<?php
     $count=1;
    $sql2="SELECT * FROM course WHERE modulecode='$code'";
    $result_set2=mysqli_query($obj->conn,$sql2) or die(mysqli_connect_error($sql2));
    while($row2=mysqli_fetch_array($result_set2))
    {
    ?>
      <div class="col-12 col-lg-10 mx-auto">
        <h6 class="text-danger">Course <?php echo $count; ?></h6>
        <p class="mx-2 text-info">
           1. Basic Information
        </p>
        <div class="text-primary col-11 mx-auto ">
          <div class="row">
            <p class="col-12 col-lg-4"><strong>Module Name:</strong> <?php echo $row2['name'] ?></p>
            <p class="col-12 col-lg-4"><strong>Module code:</strong> <?php echo $row2['code'] ?></p>
            <p class="col-12 col-lg-4"><strong>Total Credit: </strong><?php echo $row2['credit'] ?> </p>
          </div>
        </div>
        <p class="mx-2 text-info">
           2. Student work load
        </p>
       <div class="text-primary col-11 mx-auto">
         <div class="row">
           <p class="col-12 col-lg-4"><strong>Home Study:</strong> <?php echo $row2['homestudy'] ?></p>
           <p class="col-12 col-lg-4"><strong>Lecturer:</strong> <?php echo $row2['lecturer'] ?></p>
           <p class="col-12 col-lg-4"><strong>Tutorial: </strong><?php echo $row2['tutorial'] ?> </p>
           <p class="col-12 col-lg-4"><strong>Lab:</strong><?php echo $row2['lab'] ?> </p>
           <p class="col-12 col-lg-4"><strong>Assessement: </strong><?php echo $row2['assessement'] ?> </p>
           <p class="col-12 col-lg-4 text-danger"><strong>Total: </strong><?php echo $row2['total'] ?> </p>
         </div>
       </div>
       <p class="mx-2 text-info">
         3. Other Relevant things
       </p>
       <div class="text-primary col-11 mx-auto ">
         <div class="row">
           <p class="col-12 text-warning h6">Rationale of the course</p>
           <p class="col-12"><?php echo $row2['rationale'] ?></p>
           <p class="col-12 text-warning h6">Description of the course</p>
           <p class="col-12"><?php echo $row2['descryption'] ?></p>
           <p class="col-12 text-warning h6">Outcome of the course</p>
           <p class="col-12"><?php echo $row2['outcome'] ?></p>
           <p class="col-12 text-warning h6">Methods</p>
           <p class="col-12"><?php echo $row2['method'] ?></p>
           <p class="col-12 text-warning h6">Mode</p>
           <p class="col-12"><?php echo $row2['mode'] ?></p>
         </div>
       </div>
       <p class="mx-2 text-info">
         4. Course outline
         <a href="download/courseoutline.php?file=<?php echo $row2['courseoutline'] ?>" class="nav-link text-success">Click here to get Course outline of this course</a>
       </p>
       <p class="mx-2 text-info">
         5. Recommended Books
         <ol>
           <li>
             Text Books
             <div class="text-info">
               <em>
                 <?php
                 $c_code=$row2['code'];
                 $sql3="SELECT * FROM `course_book` WHERE coursecode='$c_code' AND type='Text Books'";
                 $result_set3=mysqli_query($obj->conn,$sql3) or die(mysqli_connect_error($sql3));
                 while($row3=mysqli_fetch_array($result_set3))
                 {
                 ?>
                   <p><?php echo $row3['title'].", Edition: ".$row3['edition'].", By: ".$row3['author']."
                   , for ".$row3['program']." Programs"  ?></p>
                 <?php
                 }
                  ?>
               </em>
             </div>
           </li>
           <li>
             References
             <div class="text-info">
               <em>
                 <?php
                 $c_code=$row2['code'];
                 $sql4="SELECT * FROM `course_book` WHERE coursecode='$c_code' AND type='Reference'";
                 $result_set4=mysqli_query($obj->conn,$sql4) or die(mysqli_connect_error($sql4));
                 while($row4=mysqli_fetch_array($result_set4))
                 {
                 ?>
                   <p><?php echo $row4['title'].", Edition: ".$row4['edition'].", By: ".$row4['author']."
                   , for ".$row4['program']." Programs"  ?></p>
                 <?php
                 }
                  ?>
               </em>
             </div>
           </li>
         </ol>
        </p>
       <hr>
      </div>
    <?php
    $count++;
    }
 ?>
