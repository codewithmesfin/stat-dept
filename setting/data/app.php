<?php
  session_start();
  include("config.php");
  class Handout
  {
    public $appname;
    public $developer;
    public $os;
    public $finalfile;
    public $file;
    public $fileloc;
    public $folder;
    public $filesize;
    public $filetype;
    public $uploader_id;
    public $descryption;
    function handout()
    {
      global $obj;
      if(isset($_POST['app']))
        {
          $this->appname = mysqli_real_escape_string($obj->conn,$_POST['appname']);
          $this->developer= mysqli_real_escape_string($obj->conn,$_POST['developer']);
          $this->os= mysqli_real_escape_string($obj->conn,$_POST['os']);
          $this->uploader_id=$_SESSION['admin_idno'];
          $this->availability= mysqli_real_escape_string($obj->conn,$_POST['availability']);
          $this->descryption= mysqli_real_escape_string($obj->conn,$_POST['descryption']);

          //file upload ...
          $this->file = rand(1000,100000)."-".$_FILES['file']['name'];
          $this->fileloc = $_FILES['file']['tmp_name'];
	        $this->filesize = $_FILES['file']['size'];
	        $this->filetype = $_FILES['file']['type'];
	        $this->folder="../../resource/app/";
	        $this->newsize = $this->filesize/1024;
	        $this->newfilename = strtolower($this->file);
	        $this->finalfile=str_replace(' ','-',$this->newfilename);

          $date=date("y-m-d h:m:s");
          //uploading ...
          if(move_uploaded_file($this->fileloc,$this->folder.$this->finalfile))
	         {
             $sql="INSERT INTO `app` (`appname`, `developer`, `os`, `filename`, `filetype`, `filesize`, `uploader_id`,
               `date`, `descryption`) VALUES ('$this->appname', '$this->developer', '$this->os', '$this->finalfile', '$this->filetype',
                 '$this->filesize', '$this->uploader_id', '$date', '$this->descryption');";
 		         mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."Uploading error caused by the system.");
             ?>
             <script type="text/javascript">
               alert("App uploaded successfully....");
               window.location.href="../add_material.php";
             </script>
             <?php
           }
        }
    }
  }
  $video=new handout();

?>
