<?php
  session_start();
  include("config.php");
  class Course
  {
    public $uploader_idno;
    public $module_code;
    public $name;
    public $code;
    public $credit;
    public $lecturer;
    public $tutorial;
    public $assessement;
    public $lab;
    public $homestudy;
    public $total;
    public $rationale;
    public $descryption;
    public $outcomes;
    public $method;
    public $mode;
    function course()
    {
      global $obj;
      if(isset($_POST['save']))
        {
          $this->uploader_idno=$_SESSION['admin_idno'];
          $this->module_code= mysqli_real_escape_string($obj->conn,$_POST['module_code']);
          $this->name= mysqli_real_escape_string($obj->conn,$_POST['name']);
          $this->code= mysqli_real_escape_string($obj->conn,$_POST['code']);
          $this->credit= mysqli_real_escape_string($obj->conn,$_POST['credit']);
          $this->lecturer= mysqli_real_escape_string($obj->conn,$_POST['lecturer']);
          $this->tutorial= mysqli_real_escape_string($obj->conn,$_POST['tutorial']);
          $this->assessement= mysqli_real_escape_string($obj->conn,$_POST['assessement']);
          $this->lab= mysqli_real_escape_string($obj->conn,$_POST['lab']);
          $this->homestudy= mysqli_real_escape_string($obj->conn,$_POST['homestudy']);
          $this->total= mysqli_real_escape_string($obj->conn,$_POST['total']);
          $this->rationale= mysqli_real_escape_string($obj->conn,$_POST['rationale']);
          $this->descryption= mysqli_real_escape_string($obj->conn,$_POST['descryption']);
          $this->outcome= mysqli_real_escape_string($obj->conn,$_POST['outcome']);
          $this->method= mysqli_real_escape_string($obj->conn,$_POST['method']);
          $this->mode= mysqli_real_escape_string($obj->conn,$_POST['mode']);

          $file = rand(1000,100000)."-".$_FILES['file']['name'];
          $file_loc = $_FILES['file']['tmp_name'];
   	      $folder="../../resource/course_outline/";
   	      $new_file_name = strtolower($file);
   	      $final_file=str_replace(' ','-',$new_file_name);

          $date=date("y-m-d h:m:s");
          $sql="INSERT INTO `course` (`uploader_id`, `modulecode`, `name`, `code`, `credit`,
            `lecturer`, `tutorial`, `assessement`, `lab`, `homestudy`, `total`, `rationale`,
            `descryption`, `outcome`, `method`, `mode`, `courseoutline`)
          VALUES ('$this->uploader_idno', '$this->module_code', '$this->name', '$this->code',
            '$this->credit', '$this->lecturer','$this->tutorial', '$this->assessement',
            '$this->lab', '$this->homestudy',  '$this->total',  '$this->rationale', '$this->descryption',
            '$this->outcome', '$this->method', '$this->mode', '$final_file');";
          mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."Uploading error caused by the system.");
          move_uploaded_file($file_loc,$folder.$final_file);
          ?>
          <script type="text/javascript">
            alert('Course added successfully.');
            window.location.href="../course.php";
          </script>
          <?php
        }
        if(isset($_POST['next']))
          {
            $this->uploader_idno=$_SESSION['admin_idno'];
            $this->module_code= mysqli_real_escape_string($obj->conn,$_POST['module_code']);
            $this->name= mysqli_real_escape_string($obj->conn,$_POST['name']);
            $this->code= mysqli_real_escape_string($obj->conn,$_POST['code']);
            $this->credit= mysqli_real_escape_string($obj->conn,$_POST['credit']);
            $this->lecturer= mysqli_real_escape_string($obj->conn,$_POST['lecturer']);
            $this->tutorial= mysqli_real_escape_string($obj->conn,$_POST['tutorial']);
            $this->assessement= mysqli_real_escape_string($obj->conn,$_POST['assessement']);
            $this->lab= mysqli_real_escape_string($obj->conn,$_POST['lab']);
            $this->homestudy= mysqli_real_escape_string($obj->conn,$_POST['homestudy']);
            $this->total= mysqli_real_escape_string($obj->conn,$_POST['total']);
            $this->rationale= mysqli_real_escape_string($obj->conn,$_POST['rationale']);
            $this->descryption= mysqli_real_escape_string($obj->conn,$_POST['descryption']);
            $this->outcome= mysqli_real_escape_string($obj->conn,$_POST['outcome']);
            $this->method= mysqli_real_escape_string($obj->conn,$_POST['method']);
            $this->mode= mysqli_real_escape_string($obj->conn,$_POST['mode']);

            $file = rand(1000,100000)."-".$_FILES['file']['name'];
            $file_loc = $_FILES['file']['tmp_name'];
     	      $folder="../../resource/course_outline/";
     	      $new_file_name = strtolower($file);
     	      $final_file=str_replace(' ','-',$new_file_name);

            $date=date("y-m-d h:m:s");
            $sql="INSERT INTO `course` (`uploader_id`, `modulecode`, `name`, `code`, `credit`,
              `lecturer`, `tutorial`, `assessement`, `lab`, `homestudy`, `total`, `rationale`,
              `descryption`, `outcome`, `method`, `mode`, `courseoutline`)
            VALUES ('$this->uploader_idno', '$this->module_code', '$this->name', '$this->code',
              '$this->credit', '$this->lecturer','$this->tutorial', '$this->assessement',
              '$this->lab', '$this->homestudy',  '$this->total',  '$this->rationale', '$this->descryption',
              '$this->outcome', '$this->method', '$this->mode', '$final_file');";
            mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."Uploading error caused by the system.");
            move_uploaded_file($file_loc,$folder.$final_file);
            ?>
            <script type="text/javascript">
              alert('Course added successfully.');
              window.location.href="../book.php?code=<?php echo $this->code ?>";
            </script>
            <?php
          }
    }
  }
  $crc=new course();

?>
