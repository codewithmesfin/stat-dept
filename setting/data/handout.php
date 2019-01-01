<?php
  session_start();
  include("config.php");
  class Handout
  {
    public $coursename;
    public $coursecode;
    public $author;
    public $finalfile;
    public $file;
    public $fileloc;
    public $folder;
    public $filesize;
    public $filetype;
    public $uploader_id;
    public $program;
    public $descryption;
    function handout()
    {
      global $obj;
      if(isset($_POST['handout']))
        {
          $this->coursename = mysqli_real_escape_string($obj->conn,$_POST['coursename']);
          $this->coursecode = mysqli_real_escape_string($obj->conn,$_POST['coursecode']);
          $this->lecturer= mysqli_real_escape_string($obj->conn,$_POST['author']);
          $this->uploader_id=$_SESSION['admin_idno'];
          $this->program= mysqli_real_escape_string($obj->conn,$_POST['program']);
          $this->descryption= mysqli_real_escape_string($obj->conn,$_POST['descryption']);

          //file upload ...
          $this->file = rand(1000,100000)."-".$_FILES['file']['name'];
          $this->fileloc = $_FILES['file']['tmp_name'];
	        $this->filesize = $_FILES['file']['size'];
	        $this->filetype = $_FILES['file']['type'];
	        $this->folder="../../resource/handout/";
	        $this->newsize = $this->filesize/1024;
	        $this->newfilename = strtolower($this->file);
	        $this->finalfile=str_replace(' ','-',$this->newfilename);

          $date=date("y-m-d h:m:s");
          //uploading ...
          if(move_uploaded_file($this->fileloc,$this->folder.$this->finalfile))
	         {
             $sql="INSERT INTO `handout` (`coursename`, `coursecode`, `author`, `program`, `filename`,
               `filetype`, `filesize`, `uploader_id`, `date`, `descryption`)
               VALUES ('$this->coursename', '$this->coursecode', '$this->lecturer', '$this->program', '$this->finalfile',
                 '$this->filetype', '$this->filesize', '$this->uploader_id', '$date', '$this->descryption');";
 		         mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."Uploading error caused by the system.");
             ?>
             <script type="text/javascript">
               alert("Handout uploaded successfully....");
               window.location.href="../add_material.php";
             </script>
             <?php
           }
        }
    }
  }
  $video=new handout();

?>
