<?php
  session_start();
  include("config.php");

  class Contact {
      public $name;
      public $phone;
      public $email;
      public $message;
    function contact()
    {
      global $obj;
      if(isset($_POST['send']))
        {
          $this->name= mysqli_real_escape_string($obj->conn,$_POST['name']);
          $this->phone= mysqli_real_escape_string($obj->conn,$_POST['phone']);
          $this->email= mysqli_real_escape_string($obj->conn,$_POST['email']);
          $this->message= mysqli_real_escape_string($obj->conn,$_POST['message']);

          $sql="INSERT INTO `contactus` (`fullname`, `phone`, `email`, `message`)
          VALUES ('$this->name', '$this->phone', '$this->email', '$this->message');";
          $result = mysqli_multi_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."error");
          ?>
          <script type="text/javascript">
              alert("Message sent successfully.");
              window.location.href="../index.php";
          </script>
          <?php
        }
    }
  }
  $cnt=new contact();
 ?>
