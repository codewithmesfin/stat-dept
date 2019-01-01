<?php
  session_start();
  include("config.php");
  class Dataset
  {
    public $name;
    public $author;
    public $program;
    public $finalfile;
    public $file;
    public $fileloc;
    public $folder;
    public $filesize;
    public $filetype;
    public $uploader_id;
    public $descryption;
    function dataset()
    {
      global $obj;
      if(isset($_POST['other']))
        {
          $this->name = mysqli_real_escape_string($obj->conn,$_POST['name']);
          $this->author= mysqli_real_escape_string($obj->conn,$_POST['author']);
          $this->program= mysqli_real_escape_string($obj->conn,$_POST['program']);
          $this->uploader_id=$_SESSION['admin_idno'];
          $this->descryption= mysqli_real_escape_string($obj->conn,$_POST['descryption']);

          //file upload ...
          $this->file = rand(1000,100000)."-".$_FILES['file']['name'];
          $this->fileloc = $_FILES['file']['tmp_name'];
	        $this->filesize = $_FILES['file']['size'];
	        $this->filetype = $_FILES['file']['type'];
	        $this->folder="../../resource/other/";
	        $this->newsize = $this->filesize/1024;
	        $this->newfilename = strtolower($this->file);
	        $this->finalfile=str_replace(' ','-',$this->newfilename);

          $date=date("y-m-d h:m:s");
          //uploading ...
          if(move_uploaded_file($this->fileloc,$this->folder.$this->finalfile))
	         {
             $sql="INSERT INTO `other` (`dataname`, `author`, `program`, `filename`, `filetype`,
               `filesize`, `uploader_id`, `date`, `descryption`)
               VALUES ('$this->name', '$this->author', '$this->program', '$this->finalfile', '$this->filetype',
                 '$this->filesize', '$this->uploader_id', '$date', '$this->descryption');";
 		         mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."Uploading error caused by the system.");
             ?>
             <script type="text/javascript">
               alert("File uploaded successfully....");
               window.location.href="../resource.php";
             </script>
             <?php
           }
        }
    }
  }
  $video=new dataset();

?>
