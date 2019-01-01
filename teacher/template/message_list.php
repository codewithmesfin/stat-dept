<div class="container card bg-info">
  <div class="col-12 col-lg-8 mx-auto">
    <div class="rounded" style="background-color:white">
      <div class="col-12 py-3 text-center">
        <?php
          class Message
          {
            function message()
            {
             global $obj;
             $idno=$_SESSION['teacher_idno'];
             $counter=0;
             $sql="SELECT * FROM `message` WHERE status='unread' AND receiver_id='$idno'";
             $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
             $no_rows = mysqli_num_rows($result_set);
             if($no_rows==0){
               ?>
               <div class="my-5 py-5">
                 <strong>
                   <div class="my-5">
                     <h1 class="text-danger"><span class="badge rounded-circle red">!</span></h1>
                     <p class="h2 text-danger">No New Message Available.</p>
                   </div>
                 </strong>
               </div>
              <?php
             }
              else {
                while($row=mysqli_fetch_array($result_set)){
                  ?>
                  <a href="read_msg.php?id=<?php echo $row['id'] ?>" class="h6 text-primary">
                    <img src="../images/user.jpeg" alt="" style="width:20px">
                    <strong><?php echo $row['sender_name'] ?></strong> ...
                    has sent you a message
                    <small class="text-danger text-right"> /<?php echo $row['posted_date'] ?></small>
                  </a><br><br>
                  <?php
                  $counter++;
                 }
              }
            }
          }
          $list=new message();
         ?>
      </div>
    </div>
  </div>
</div>
