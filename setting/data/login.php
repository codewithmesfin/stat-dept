<?php
session_start();
include("config.php");
     function login(){
       global $obj;
       if(isset($_POST['login']))
       {
       $idno = mysqli_real_escape_string($obj->conn,$_POST['idno']);
       $password =mysqli_real_escape_string($obj->conn,$_POST['password']);
       $sql ="SELECT * from admin WHERE idno = '$idno' AND password='$password'";
       $user_login=mysqli_query($obj->conn,$sql) or die(mysqli_connect_error($sql));
       $no_rows = mysqli_num_rows($user_login);
       if($no_rows==1)
        {
          $_SESSION['admin_idno'] = $idno;
          $_SESSION['admin_password'] = $password;
           header("Location:../admin.php");
        }
        else {
          ?>
          <script type="text/javascript">
            alert("Incorrect ID NO or Password is entered. Try again.");
          </script>
          <?php
        }
       }
     }
     login();
?>
