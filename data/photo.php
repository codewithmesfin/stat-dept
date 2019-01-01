<?php
session_start();
include("config.php");
     function photo(){
       global $obj;
       if(isset($_POST['picture']))
       {
       $user_id=$_GET['id'];
       $file = rand(1000,100000)."-".$_FILES['file']['name'];
       $file_loc = $_FILES['file']['tmp_name'];
	     $folder="../profile/student/";
	     $new_file_name = strtolower($file);
	     $final_file=str_replace(' ','-',$new_file_name);

       if(move_uploaded_file($file_loc,$folder.$final_file)){
         $sql_update="UPDATE student set profile='$final_file' WHERE idno='$user_id'";
            mysqli_query($obj->conn, $sql_update) or die(mysqli_connect_error($sql_update)."Error while uploading photo");

             ?>
               <script type="text/javascript">
                 alert('Profile picture uploaded....');
                 window.location.href="../student/"
               </script>
             <?php
       }}
     }
     photo();
?>
