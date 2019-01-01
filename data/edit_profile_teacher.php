<?php
session_start();
include("config.php");
     function signup(){
       global $obj;
       if(isset($_POST['save']))
       {
       $file_id=$_GET['id'];
       $first_name = mysqli_real_escape_string($obj->conn,$_POST['fname']);
       $father_name = mysqli_real_escape_string($obj->conn,$_POST['lname']);
       $gfather_name = mysqli_real_escape_string($obj->conn,$_POST['gname']);
       $role= mysqli_real_escape_string($obj->conn,$_POST['role']);
       $idno = $_SESSION['teacher_idno'];
       $email = mysqli_real_escape_string($obj->conn,$_POST['email']);
       $specialization= mysqli_real_escape_string($obj->conn,$_POST['specialization']);
       $employmentdate = mysqli_real_escape_string($obj->conn,$_POST['employmentdate']);
       $office= mysqli_real_escape_string($obj->conn,$_POST['office']);
       $office_phone = mysqli_real_escape_string($obj->conn,$_POST['office_phone']);
       $mobile_phone = mysqli_real_escape_string($obj->conn,$_POST['mobile_phone']);
       $gender = mysqli_real_escape_string($obj->conn,$_POST['gender']);
       $title= mysqli_real_escape_string($obj->conn,$_POST['title']);
       $bdate = mysqli_real_escape_string($obj->conn,$_POST['bdate']);

       $sql_update="UPDATE `teacher` SET
                                    `idno` = '$idno', `teachername` = '$first_name', `fathername` = '$father_name',
                                    `gname` = '$gfather_name', `gender` = '$gender', `bdate` = '$bdate', `title` = '$title',
                                    `specialization` = '$specialization', `employmentdate` = '$employmentdate',
                                    `office` = '$office', `email` = '$email', `office_phone` = '$office_phone',`role` = '$role',
                                    `mobile_phone` = '$mobile_phone' WHERE `teacher`.`idno` = '$idno';";
        mysqli_query($obj->conn, $sql_update) or die(mysqli_connect_error($sql_update)."Error while editing your profile...");
        $sql_update2="UPDATE `user` SET `name` = '$first_name', `fathername` = '$father_name', `gname` = '$gfather_name',
        `user_idno` = '$idno' WHERE `user`.`user_idno` = '$idno';";
        mysqli_query($obj->conn, $sql_update2) or die(mysqli_connect_error($sql_update2)."Error while editing your profile...");
           ?>
             <script type="text/javascript">
               alert('Profile updated.');
               window.location.href="../teacher/"
             </script>
           <?php

       }
     }
     signup();
?>
