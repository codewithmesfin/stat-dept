<?php
session_start();
include("config.php");
     function add_announcement(){
       global $obj;
       if(isset($_POST['announce']))
       {
       $title= mysqli_real_escape_string($obj->conn,$_POST['title']);
       $content= mysqli_real_escape_string($obj->conn,$_POST['content']);
       $posted_date= mysqli_real_escape_string($obj->conn,$_POST['posted_date']);
       $idno =$_SESSION['admin_idno'];
       $uploaded_date=date("y-m-d h:m:s");

       $sql= "INSERT INTO `announcement` (`uploader_id`, `title`, `content`, `posted_date`, `uploaded_date`)
       VALUES ('$idno', '$title', '$content', '$posted_date', '$uploaded_date');";
       $result = mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."Error while uploading announcement.");
       ?>
       <script type="text/javascript">
       alert("Announcement uploaded successfully.");
       window.location.href="../post.php"
       </script>
       <?php
       }
     }
     add_announcement();
?>
