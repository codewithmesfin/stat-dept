<?php
  session_start();
  include("config.php");
  class Module
  {
    public $uploader_idno;
    public $name;
    public $code;
    public $ects;
    public $homestudy;
    public $lecturer;
    public $tutorial;
    public $lab;
    public $assessement;
    public $total;
    public $rationale;
    public $descryption;
    public $outcomes;
    function module()
    {
      global $obj;
      if(isset($_POST['save']))
        {
          $this->uploader_idno=$_SESSION['admin_idno'];
          $this->name= mysqli_real_escape_string($obj->conn,$_POST['name']);
          $this->code= mysqli_real_escape_string($obj->conn,$_POST['code']);
          $this->ects= mysqli_real_escape_string($obj->conn,$_POST['ects']);
          $this->homestudy= mysqli_real_escape_string($obj->conn,$_POST['homestudy']);
          $this->lecturer= mysqli_real_escape_string($obj->conn,$_POST['lecturer']);
          $this->tutorial= mysqli_real_escape_string($obj->conn,$_POST['tutorial']);
          $this->lab= mysqli_real_escape_string($obj->conn,$_POST['lab']);
          $this->assessement= mysqli_real_escape_string($obj->conn,$_POST['assessement']);
          $this->total= mysqli_real_escape_string($obj->conn,$_POST['total']);
          $this->rationale= mysqli_real_escape_string($obj->conn,$_POST['rationale']);
          $this->descryption= mysqli_real_escape_string($obj->conn,$_POST['descryption']);
          $this->outcome= mysqli_real_escape_string($obj->conn,$_POST['outcome']);

          $date=date("y-m-d h:m:s");
          $sql="INSERT INTO `module` (`uploader_id`,`name`, `code`, `ects`, `homestudy`, `lecturer`,
            `tutorial`, `lab`, `assessement`, `total`, `rationale`, `descryption`, `outcome`)
            VALUES ('$this->uploader_idno','$this->name', '$this->code', '$this->ects', '$this->homestudy', '$this->lecturer',
              '$this->tutorial', '$this->lab', '$this->assessement','$this->total', '$this->rationale',
              '$this->descryption', '$this->outcome')";
          mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."Uploading error caused by the system.");
          ?>
          <script type="text/javascript">
            alert('Module added successfully.');
            window.location.href="../add_material.php";
          </script>
          <?php
        }
        if(isset($_POST['next']))
          {
            $this->uploader_idno=$_SESSION['admin_idno'];
            $this->name= mysqli_real_escape_string($obj->conn,$_POST['name']);
            $this->code= mysqli_real_escape_string($obj->conn,$_POST['code']);
            $this->ects= mysqli_real_escape_string($obj->conn,$_POST['ects']);
            $this->homestudy= mysqli_real_escape_string($obj->conn,$_POST['homestudy']);
            $this->lecturer= mysqli_real_escape_string($obj->conn,$_POST['lecturer']);
            $this->tutorial= mysqli_real_escape_string($obj->conn,$_POST['tutorial']);
            $this->lab= mysqli_real_escape_string($obj->conn,$_POST['lab']);
            $this->assessement= mysqli_real_escape_string($obj->conn,$_POST['assessement']);
            $this->total= mysqli_real_escape_string($obj->conn,$_POST['total']);
            $this->rationale= mysqli_real_escape_string($obj->conn,$_POST['rationale']);
            $this->descryption= mysqli_real_escape_string($obj->conn,$_POST['descryption']);
            $this->outcome= mysqli_real_escape_string($obj->conn,$_POST['outcome']);

            $date=date("y-m-d h:m:s");
            $sql="INSERT INTO `module` (`uploader_id`,`name`, `code`, `ects`, `homestudy`, `lecturer`,
              `tutorial`, `lab`, `assessement`, `total`, `rationale`, `descryption`, `outcome`)
              VALUES ('$this->uploader_idno','$this->name', '$this->code', '$this->ects', '$this->homestudy', '$this->lecturer',
                '$this->tutorial', '$this->lab', '$this->assessement','$this->total', '$this->rationale',
                '$this->descryption', '$this->outcome')";
            mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."Uploading error caused by the system.");
            ?>
            <script type="text/javascript">
              alert('Module added successfully.');
              window.location.href="../course.php";
            </script>
            <?php
          }
    }
  }
  $video=new module();

?>
