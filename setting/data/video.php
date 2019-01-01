<?php
  session_start();
  include("config.php");
  class Video
  {
    public $coursename;
    public $coursecode;
    public $availability;
    public $lecturer;
    public $finalfile;
    public $file;
    public $fileloc;
    public $folder;
    public $filesize;
    public $filetype;
    public $uploader_id;
    public $program;
    public $descryption;
    function video()
    {
      global $obj;
      if(isset($_POST['video']))
        {
          $this->coursename = mysqli_real_escape_string($obj->conn,$_POST['coursename']);
          $this->coursecode = mysqli_real_escape_string($obj->conn,$_POST['coursecode']);
          $this->availability= mysqli_real_escape_string($obj->conn,$_POST['availability']);
          $this->lecturer= mysqli_real_escape_string($obj->conn,$_POST['lecturer']);
          $this->uploader_id=$_SESSION['admin_idno'];
          $this->program= mysqli_real_escape_string($obj->conn,$_POST['program']);
          $this->descryption= mysqli_real_escape_string($obj->conn,$_POST['descryption']);

          //file upload ...
          $this->file = rand(1000,100000)."-".$_FILES['file']['name'];
          $this->fileloc = $_FILES['file']['tmp_name'];
	        $this->filesize = $_FILES['file']['size'];
	        $this->filetype = $_FILES['file']['type'];
	        $this->folder="../../resource/video/";
	        $this->newsize = $this->filesize/1024;
	        $this->newfilename = strtolower($this->file);
	        $this->finalfile=str_replace(' ','-',$this->newfilename);
          $date=date("y-m-d h:m:s");
          //uploading ...
          if(move_uploaded_file($this->fileloc,$this->folder.$this->finalfile))
	         {
             $sql="INSERT INTO `video` (`coursename`, `coursecode`, `availability`, `lecturer`, `filename`, `filetype`, `filesize`, `uploader_id`, `program`, `description`, `date`)
             VALUES ('$this->coursename', '$this->coursecode', '$this->availability', '$this->lecturer', '$this->finalfile', '$this->filetype', '$this->filesize', '$this->uploader_id', '$this->program', '$this->descryption', '$date');";
 		         mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."Uploading error caused by the system.");
             ?>
             <script type="text/javascript">
               alert("Video Tutorial uploaded successfully....");
               window.location.href="../add_material.php";
             </script>
             <?php
           }
        }
    }
  }
  $video=new video();

?>
