<?php
session_start();
include("config.php");
     function addTeacher(){
       global $obj;
       if(isset($_POST['student']))
       {
       $firstname = mysqli_real_escape_string($obj->conn,$_POST['firstname']);
       $fathername = mysqli_real_escape_string($obj->conn,$_POST['fathername']);
       $gname = mysqli_real_escape_string($obj->conn,$_POST['gname']);
       $idno = $_SESSION['user_idno'];
       $email = mysqli_real_escape_string($obj->conn,$_POST['email']);
       $phone = mysqli_real_escape_string($obj->conn,$_POST['phone']);
       $gender = mysqli_real_escape_string($obj->conn,$_POST['gender']);
       $year= mysqli_real_escape_string($obj->conn,$_POST['year']);
       $program = mysqli_real_escape_string($obj->conn,$_POST['program']);
       $bdate= mysqli_real_escape_string($obj->conn,$_POST['bdate']);
       $usertype = "Student";
       $reg_date=date("y-m-d h:m:s");
       $last_login=date("y-m-d h:m:s");
       $sql ="SELECT * from student WHERE idno = '$idno'";
       $user_registration=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
       $no_rows = mysqli_num_rows($user_registration);
       if($no_rows == 0)
        {
        $sql2 = "INSERT INTO `student` (`studentname`, `fathername`, `gname`, `idno`, `email`,
           `phone`, `profile`, `year`, `gender`, `birthdate`, `program`, `status`, `regdate`, `latlogindate`)
           VALUES ('$firstname', '$fathername', '$gname', '$idno', '$email', '$phone', '', '$year', '$gender',
             '$bdate', '$program', 'Active', '$reg_date', '$last_login');";
        $result = mysqli_query($obj->conn, $sql2) or die(mysqli_connect_error($sql2)."Error while creating new account for a student $firstname\t$fathername");
        ?>
        <script type="text/javascript">
        alert("Student registered successfully.");
        window.location.href="../student/"
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
