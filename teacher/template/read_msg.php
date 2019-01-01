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
             $msg_id=$_GET['id'];
             $idno=$_SESSION['teacher_idno'];
             $counter=0;


             $sql="SELECT * FROM `message` WHERE status='unread' AND receiver_id='$idno' AND id='$msg_id'";
             $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
              while($row=mysqli_fetch_array($result_set)){
                ?>
                 <p>
                   <strong class="text-primary"><?php echo $row['subject'] ?></strong><hr>
                   <?php echo $row['content'] ?>
                 </p>
                 <div class="py-5"><hr>
                   <a href="../data/t_delete.php?id=<?php echo $row['id'] ?>" class="text-danger mx-3 h5 float-left">Delete</a>
                   <a href="#" class="h5 text-success mx-3 float-right" data-toggle="collapse" data-target="#collapse<?php echo $counter ?>" aria-expanded="false" aria-controls="collapse">Reply</a>
                 </div>
                 <div id="accordion">
                      <div class="">
                        <div id="collapse<?php echo $counter ?>" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="">
                            <div class="alert alert-success" role="alert">
                              <form class="row" action="../data/t_reply.php?idno=<?php echo $idno ?>&amp msg_id=<?php echo $row['id'] ?>" method="post">
                                <div class="col-12" style="display:none">
                                  <input type="text" name="receiver" value="<?php echo $row['sender_name'] ?>" class="form-control" >
                                </div>
                                <div class="col-12" style="display:none">
                                  <input type="text" name="receiver_id" value="<?php echo $row['sender_id'] ?>" class="form-control" >
                                </div>
                                <div class="col-12" style="display:none">
                                  <input type="text" name="subject" value="Reply" class="form-control" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                  <textarea name="content" class="col-12"></textarea>
                                </div>
                                <div class="col-12">
                                  <button type="submit" name="send" class="btn btn-primary rounded btn-rounded btn-block">Send</button>
                                </div>
                              </form>
                            </div>
                            <p>
                            <div class="row">
                              <div class="col">
                                <div class="collapse" id="replying<?php echo $counter ?>">
                                  <div class="card alert alert-success card-body">

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                <?php
                $counter++;
               }
               $sql_update="UPDATE message set status='read' WHERE id='$msg_id'";
               mysqli_query($obj->conn, $sql_update) or die(mysqli_connect_error($sql_update)."Some eroor has occured by the system.");

            }
          }
          $list=new message();
         ?>
      </div>
    </div>
  </div>
</div>
