<?php
session_start();
include("config.php");
     function msg(){
       global $obj;
       if(isset($_POST['send']))
       {
       $receiver = mysqli_real_escape_string($obj->conn,$_POST['receiver']);
       $receiver_id =mysqli_real_escape_string($obj->conn,$_POST['receiver_id']);
       $subject=mysqli_real_escape_string($obj->conn,$_POST['subject']);
       $content=mysqli_real_escape_string($obj->conn,$_POST['content']);
       $sent_date=date("y-m-d");
       $status="unread";

       $sender_id=$_GET['idno'];
       $sql ="SELECT * FROM `student` WHERE idno='$sender_id' ";
       $result_set=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
       while($row=mysqli_fetch_array($result_set)){
         $full_name=$row['studentname']." ".$row['fathername']." ".$row['gname'];
         $sql2 = "INSERT INTO `message` (`sender_id`, `receiver_id`, `sender_name`, `receiever_name`, `subject`,`content`, `status`, `posted_date`)
         VALUES ('$sender_id', '$receiver_id', '$full_name', '$receiver', '$subject','$content', '$status', '$sent_date');";
         $result = mysqli_query($obj->conn, $sql2) or die(mysqli_connect_error($sql2)."Unable to send message due to some internal problem.");
         ?>
         <script type="text/javascript">
           alert('Message sent.');
           window.location.href="../student/teacher.php"
         </script>
         <?php
        }
       }
     }
    msg();
?>
