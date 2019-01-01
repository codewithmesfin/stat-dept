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
       $idno = $_SESSION['user_idno'];
       $email = mysqli_real_escape_string($obj->conn,$_POST['email']);
       $phone = mysqli_real_escape_string($obj->conn,$_POST['phone']);
       $gender = mysqli_real_escape_string($obj->conn,$_POST['gender']);
       $year = mysqli_real_escape_string($obj->conn,$_POST['year']);
       $program = mysqli_real_escape_string($obj->conn,$_POST['program']);
       $bdate = mysqli_real_escape_string($obj->conn,$_POST['bdate']);
       $sql_update="UPDATE `student` SET `studentname` = '$first_name', `fathername` = '$father_name', `gname` = '$gfather_name',
       `email` = '$email', `phone` = '$phone', `year` = '$year', `gender` = '$gender', `birthdate` = '$bdate',
       `program` = '$program' WHERE `student`.`idno` = '$idno';";
        mysqli_query($obj->conn, $sql_update) or die(mysqli_connect_error($sql_update)."Error while editing your profile...");
        $sql_update2="UPDATE `user` SET `name` = '$first_name', `fathername` = '$father_name', `gname` = '$gfather_name',
        `user_idno` = '$idno' WHERE `user`.`user_idno` = '$file_id';";
        mysqli_query($obj->conn, $sql_update2) or die(mysqli_connect_error($sql_update2)."Error while editing your profile...");
           ?>
             <script type="text/javascript">
               alert('Profile updated.');
               window.location.href="../student/"
             </script>
           <?php

       }
     }
     signup();
?>
