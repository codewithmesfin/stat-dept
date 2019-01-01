<?php
session_start();
include("config.php");
     function message(){
       global $obj;
       $receiverid=$_GET['id'];
       $usr=$_GET['user'];
       $msg_id=$_GET['msgid'];
       $senderid= $_SESSION['user_idno'];
       $date=date("y-m-d");
       $time=date("h:m:s");
       if(isset($_POST['reply']))
       {
         $content=$_POST['content'];
         $status="unread";

         $sql_update="UPDATE message SET status='read' WHERE id='$msg_id'";
         mysqli_query($obj->conn, $sql_update);


         if ($usr=="Teacher") {
           $sql="INSERT INTO `message` (`senderid`, `receiverid`, `date`, `time`, `content`, `status`)
           VALUES ('$senderid', '$receiverid', '$date', '$time', '$content', '$status');";
           $result = mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."error");
           ?>
           <script type="text/javascript">
             alert("Message sent");
             window.location.href="../teacher/";
           </script>
           <?php
         }
         if ($usr=="Student") {
           $sql="INSERT INTO `message` (`senderid`, `receiverid`, `date`, `time`, `content`, `status`)
           VALUES ('$receiverid', '$senderid', '$date', '$time', '$content', '$status');";
           $result = mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."error");
           ?>
           <script type="text/javascript">
             alert("Message Replied.");
             window.location.href="../student/";
           </script>
           <?php
         }
       }
     }
    message();
?>
