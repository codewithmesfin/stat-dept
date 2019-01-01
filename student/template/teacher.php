<div class="container card">
  <!-- Section: Testimonials v.3 -->
  <section class="team-section text-center my-5 mx-auto">
    <!--Grid row-->
    <div class="row text-center">


      <?php
        class Teacher
        {
          function teacher()
          {
           global $obj;
           $count=0;
           $sender_id=$_SESSION['user_idno'];
           $sql="SELECT * FROM `teacher`";
           $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
           while($row=mysqli_fetch_array($result_set)){

             if (!$row['profile']=='') {
               ?>
               <!--Grid column-->
               <div class="col-md-3 mb-md-0 mb-5 mx-auto">

                 <div class="testimonial">
                   <!--Avatar-->
                   <div class="avatar mx-auto">
                     <img src="../profile/teacher/<?php echo $row['profile'] ?>" class="rounded-circle z-depth-1 img-fluid" style="height:170px;width:120px">
                   </div>
                   <!--Content-->
                   <h4 class="font-weight-bold dark-grey-text mt-4"><?php echo $row['teachername'] ?></h4>
                   <h6 class="font-weight-bold blue-text my-3">Probability</h6>
                   <p class="font-weight-normal dark-grey-text">
                     <i class="fa fa-quote-left pr-2"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>
                   <!--Review-->
                   <div class="orange-text">
                     <a href="#" class="h6 text-info" data-toggle="modal" data-target="#teacher<?php echo $count ?>">Send Message</a>
                   </div>
                 </div>

               </div>
               <!--Grid column-->
               <?php
             }

             ?>
             <!--Modal: modalRelatedContent-->
             <div class="modal fade right" id="teacher<?php echo $count ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
             data-backdrop="false">
             <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
                 <!--Content-->
                 <div class="modal-content">
                     <!--Header-->
                     <div class="modal-header">
                         <p class="heading text-primary">Send Message to <?php echo $row['teachername']." ".$row['fathername'] ?> -></p>

                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true" class="white-text">&times;</span>
                             </button>
                     </div>

                     <!--Body-->
                     <div class="modal-body">

                         <div class="row">
                           <div class="col-12 col-md-10 mx-auto">
                             <form class="row" action="../data/message.php?idno=<?php echo $sender_id ?>" method="post">
                               <div class="col-12" style="display:none">
                                 <input type="text" name="receiver" value="<?php echo $row['teachername']." ".$row['fathername']." ".$row['gname'] ?>" class="form-control" >
                               </div>
                               <div class="col-12" style="display:none">
                                 <input type="text" name="receiver_id" value="<?php echo $row['idno'] ?>" class="form-control" >
                               </div>
                               <div class="col-12">
                                 <input type="text" name="subject" value="" class="form-control" placeholder="Subject">
                               </div>
                               <div class="col-12">
                                 <textarea name="content" class="col-12 form-control text-center" placeholder="Message"></textarea>
                               </div>
                               <div class="col-12">
                                 <button type="submit" name="send" class="btn btn-primary ">Send</button>
                               </div>
                             </form>
                           </div>
                         </div>
                     </div>
                 </div>
                 <!--/.Content-->
             </div>
             </div>
             <!--Modal: modalRelatedContent-->
             <?php
             $count++;
           }
          }
        }
        $list=new teacher();
        ?>
    </div>
    <!--Grid row-->

  </section>
  <!-- Section: Testimonials v.3 -->

</div>
