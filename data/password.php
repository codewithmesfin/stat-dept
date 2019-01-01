<?php
session_start();
include("config.php");
     function signup(){
       global $obj;
       if(isset($_POST['reset']))
       {
       $user_id=$_SESSION['user_idno'];
       $old_password = mysqli_real_escape_string($obj->conn,$_POST['old_password']);
       $new_password = mysqli_real_escape_string($obj->conn,$_POST['new_password']);
       $confirm_password = mysqli_real_escape_string($obj->conn,$_POST['confirm_password']);

       $sql ="SELECT * from user WHERE user_idno = '$user_id' AND password='$old_password'";
       $user_login=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
       $no_rows = mysqli_num_rows($user_login);
       if($no_rows==1){
         if ($new_password==$confirm_password) {
           $sql_update="UPDATE user SET
                                 password='$confirm_password'
                                 WHERE user_idno='$user_id' AND password='$old_password'";
              mysqli_query($obj->conn, $sql_update) or die(mysqli_connect_error($sql_update)."error");

               ?>
                 <script type="text/javascript">
                   alert('password changed.');
                   window.location.href="../student/"
                 </script>
               <?php
         }
         else {
           ?>
             <script type="text/javascript">
               alert('Missed matched passwords entered.\nPlease try again!');
               window.location.href="../student/password.php"
             </script>
           <?php
         }
       }
       else {
         ?>
           <script type="text/javascript">
             alert('In Incorrect old password entered.\nYou are about to logout of this system! \nContact your Administrator.');
             window.location.href="logout.php"
           </script>
         <?php
       }



       }
     }
     signup();
?>
