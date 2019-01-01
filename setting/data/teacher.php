<?php
session_start();
include("config.php");
     function addTeacher(){
       global $obj;
       if(isset($_POST['addteacher']))
       {
       $teachername = mysqli_real_escape_string($obj->conn,$_POST['teachername']);
       $fathername = mysqli_real_escape_string($obj->conn,$_POST['fathername']);
       $gname = mysqli_real_escape_string($obj->conn,$_POST['gname']);
       $idno = mysqli_real_escape_string($obj->conn,$_POST['idno']);
       $gender = mysqli_real_escape_string($obj->conn,$_POST['gender']);
       $status="active";
       $password = mysqli_real_escape_string($obj->conn,$_POST['password']);
       $usertype = "Teacher";
       $title="";
       $user_image="default.jpg";
       $reg_date=date("y-m-d h:m:s");
       $last_login=date("y-m-d h:m:s");
       $status="active";
       $sql ="SELECT * from teacher WHERE idno = '$idno'";
       $user_registration=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
       $no_rows = mysqli_num_rows($user_registration);
       if($no_rows == 0)
        {
          $sql2 = "INSERT INTO `teacher` (`teachername`, `fathername`, `gname`,`idno`, `gender`, `regdate`, `lastlogindate`, `password`)
          VALUES ('$teachername', '$fathername', '$gname','$idno','$gender', '$reg_date', '$last_login', '$password');";
          $result = mysqli_query($obj->conn, $sql2) or die(mysqli_connect_error($sql2)."error");
          $_SESSION['teacher_idno'] = $idno;
          $_SESSION['teacher_password'] = $password;
          ?>
          <script type="text/javascript">
          alert("teacher registered successfully.");
          window.location.href="../admin.php"
          </script>
          <?php
        }
        else {
          echo "This Teacher is already registered.";
        }
       }
     }
     addTeacher();
?>
