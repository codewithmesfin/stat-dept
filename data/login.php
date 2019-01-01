<?php
session_start();
include("config.php");
     function login(){
       global $obj;
       if(isset($_POST['login']))
       {
       $idno = mysqli_real_escape_string($obj->conn,$_POST['idno']);
       $password =mysqli_real_escape_string($obj->conn,$_POST['password']);
       $sql ="SELECT * from user WHERE user_idno = '$idno' AND password='$password'";
       $user_login=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
       $no_rows = mysqli_num_rows($user_login);
       if($no_rows==1)
        {
            if ($row=mysqli_fetch_array($user_login))
            {
               $user=$row['user_type'];
               if ($user=="Student") {
                 $_SESSION['user_idno'] = $idno;
                 $_SESSION['user_password'] = $password;
                header("Location:../student/");
               }
              else if ($user=="Teacher") {
                 $_SESSION['teacher_idno'] = $idno;
                 $_SESSION['teacher_password'] = $password;
                 header("Location:../teacher/");
               }
             }
        }
        else
          {
            ?>
            <script type="text/javascript">
              alert("Incorrect ID No or Password is entered. Try again.");
              window.location.href="../index.php";
            </script>
            <?php
          }
       }
     }
     login();
?>
