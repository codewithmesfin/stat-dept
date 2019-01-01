<?php
session_start();
include("config.php");
     function addTeacher(){
       global $obj;
       if(isset($_POST['user']))
       {
       $firstname = mysqli_real_escape_string($obj->conn,$_POST['name']);
       $fathername = mysqli_real_escape_string($obj->conn,$_POST['fathername']);
       $gname = mysqli_real_escape_string($obj->conn,$_POST['gname']);
       $idno = mysqli_real_escape_string($obj->conn,$_POST['idno']);
       $password = mysqli_real_escape_string($obj->conn,$_POST['password']);
       $usertype = mysqli_real_escape_string($obj->conn,$_POST['user_type']);
       $user_image="default.jpg";
       $reg_date=date("y-m-d h:m:s");
       $last_login=date("y-m-d h:m:s");
       $sql ="SELECT * from user WHERE user_idno = '$idno'";
       $user_registration=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
       $no_rows = mysqli_num_rows($user_registration);
       if($no_rows == 0)
        {
          $sql2 = "INSERT INTO `user` (`name`, `fathername`, `gname`, `user_idno`, `password`, `user_type`, `reg_date`, `last_login`)
          VALUES ('$firstname', '$fathername', '$gname', '$idno', '$password', '$usertype', '$reg_date', '$last_login');";
          $result = mysqli_query($obj->conn, $sql2) or die(mysqli_connect_error($sql2)."Error while creating new account for a student $firstname\t$fathername");
          ?>
          <script type="text/javascript">
          alert("User registered successfully.");
          window.location.href="../admin.php"
          </script>
          <?php
        }
        else {
          ?>
          <script type="text/javascript">
            alert("User with this ID No is already registered. Try an other unique AAU Student ID No.");
          </script>
          <?php
        }
       }
     }
     addTeacher();
?>
