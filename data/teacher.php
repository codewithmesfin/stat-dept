<?php
session_start();
include("config.php");
     function addTeacher(){
       global $obj;
       if(isset($_POST['teacher']))
       {
       $firstname = mysqli_real_escape_string($obj->conn,$_POST['teachername']);
       $fathername = mysqli_real_escape_string($obj->conn,$_POST['fathername']);
       $gname = mysqli_real_escape_string($obj->conn,$_POST['gname']);
       $role= mysqli_real_escape_string($obj->conn,$_POST['role']);
       $idno = $_SESSION['teacher_idno'];
       $email = mysqli_real_escape_string($obj->conn,$_POST['email']);
       $office= mysqli_real_escape_string($obj->conn,$_POST['office']);
       $office_phone = mysqli_real_escape_string($obj->conn,$_POST['office_phone']);
       $mobile_phone = mysqli_real_escape_string($obj->conn,$_POST['mobile_phone']);
       $gender = mysqli_real_escape_string($obj->conn,$_POST['gender']);
       $title= mysqli_real_escape_string($obj->conn,$_POST['title']);
       $specialization= mysqli_real_escape_string($obj->conn,$_POST['specialization']);
       $employmentdate= mysqli_real_escape_string($obj->conn,$_POST['employmentdate']);
       $bdate= mysqli_real_escape_string($obj->conn,$_POST['bdate']);
       $usertype = "Student";
       $reg_date=date("y-m-d h:m:s");
       $last_login=date("y-m-d h:m:s");
       $sql ="SELECT * from teacher WHERE idno = '$idno'";
       $user_registration=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
       $no_rows = mysqli_num_rows($user_registration);
       if($no_rows == 0)
        {
        $sql2 = "INSERT INTO `teacher` (`idno`, `teachername`, `fathername`, `gname`, `gender`, `bdate`, `title`, `specialization`, `employmentdate`, `office`, `email`, `office_phone`, `mobile_phone`, `reg_date`, `last_login`, `role`)
        VALUES ('$idno', '$firstname', '$fathername', '$gname', '$gender', '$bdate', '$title', '$specialization', '$employmentdate', '$office', '$email', '$office_phone', '$mobile_phone', '$reg_date', '$last_login', '$role');";
        $result = mysqli_query($obj->conn, $sql2) or die(mysqli_connect_error($sql2)."Error while creating new account for a Teacher $firstname\t$fathername");
        $sql_update2="UPDATE `user` SET `name` = '$firstname', `fathername` = '$fathername', `gname` = '$gname',
        `user_idno` = '$idno' WHERE `user`.`user_idno` = '$idno';";
        mysqli_query($obj->conn, $sql_update2) or die(mysqli_connect_error($sql_update2)."Error while editing your profile...");
        ?>
        <script type="text/javascript">
        alert("Teacher registered successfully.");
        window.location.href="../teacher/"
        </script>
        <?php
        }
        else {
          echo "This Student is already registered.";
        }
       }
     }
     addTeacher();
?>
