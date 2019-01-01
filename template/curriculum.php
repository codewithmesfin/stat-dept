<div id="history" class="section">
  <div class="container">
    <div class="section-header">
      <p class="btn btn-subtitle wow fadeInDown" data-wow-delay="0.2s">Curriculum</p>
      <h2 class="section-title">Curriculum of Department of Statisics</h2>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="text-wrapper wow fadeInRight" data-wow-delay="0.9s">
          <?php
          class Module
              {
                function module()
                {
                  global $obj;
                  $counter=1;
                  $sql="SELECT * FROM module";
                  $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
                  $no_rows = mysqli_num_rows($result_set);
                  while($row=mysqli_fetch_array($result_set))
                  {
                    $code=$row['code'];
                  ?>
                   <div class="mb-5">
                     <div class="row">
                       <div class="col-12">
                         <div class="">
                           <p class="h5 text-danger">
                             <?php echo "Module ".$counter.". ".$row['name'] ?><hr>
                           </p>
                           <p class="mx-2 text-info">
                             1. Bacis Information
                           </p>
                           <div class="col-11 mx-auto text-primary">
                             <div class="row">
                               <p class="col-12 col-lg-4"><strong>Module Name:</strong> <?php echo $row['name'] ?></p>
                               <p class="col-12 col-lg-4"><strong>Module code:</strong> <?php echo $row['code'] ?></p>
                               <p class="col-12 col-lg-4"><strong>Total ECTS: </strong><?php echo $row['ects'] ?> </p>
                             </div>
                           </div>
                           <p class="mx-2 text-info">
                             2. Total Study Hours
                           </p>
                           <div class="text-primary col-11 mx-auto ">
                             <div class="row">
                               <p class="col-12 col-lg-4"><strong>Home Study:</strong> <?php echo $row['homestudy'] ?></p>
                               <p class="col-12 col-lg-4"><strong>Lecturer:</strong> <?php echo $row['lecturer'] ?></p>
                               <p class="col-12 col-lg-4"><strong>Tutorial: </strong><?php echo $row['tutorial'] ?> </p>
                               <p class="col-12 col-lg-4"><strong>Lab:</strong><?php echo $row['lab'] ?> </p>
                               <p class="col-12 col-lg-4"><strong>Assessement: </strong><?php echo $row['assessement'] ?> </p>
                               <p class="col-12 col-lg-4 text-danger"><strong>Total: </strong><?php echo $row['total'] ?> </p>
                             </div>
                           </div>
                           <p class="mx-2 text-info">
                             2. Other Relevant things
                           </p>
                           <div class="text-primary col-11 mx-auto ">
                             <div class="row">
                               <p class="col-12 text-warning h6">Rationale of the module</p>
                               <p class="col-12"><?php echo $row['rationale'] ?></p>
                               <p class="col-12 text-warning h6">Description of the module</p>
                               <p class="col-12"><?php echo $row['descryption'] ?></p>
                               <p class="col-12 text-warning h6">Outcome of the module</p>
                               <p class="col-12"><?php echo $row['outcome'] ?></p>
                             </div>
                           </div>
                         <p class="mx-2 text-info">
                           3. Courses under this Module
                         </p>
                         <div class="border border-light rounded ">
                           <?php
                             include("template/course.php");
                           ?>
                         </div>
                       </div>
                     </div>
                   </div>
                 <?php
                 $counter++;
                  }
                }
              }
           $list=new module();
           ?>
        </div>
      </div>
    </div>
  </div>
</div>
