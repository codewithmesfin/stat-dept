<?php
  session_start();
  include("config.php");
  class Book
  {
    public $coursename;
    public $coursecode;
    public $isbn;
    public $edition;
    public $availability;
    public $author;
    public $publisher;
    public $type;
    public $finalfile;
    public $file;
    public $fileloc;
    public $folder;
    public $filesize;
    public $filetype;
    public $uploader_id;
    public $program;
    public $descryption;
    function book()
    {
      global $obj;
      if(isset($_POST['book']))
        {
          $this->coursename = mysqli_real_escape_string($obj->conn,$_POST['coursename']);
          $this->coursecode = mysqli_real_escape_string($obj->conn,$_POST['coursecode']);
          $this->isbn = mysqli_real_escape_string($obj->conn,$_POST['isbn']);
          $this->edition= mysqli_real_escape_string($obj->conn,$_POST['edition']);
          $this->availability= mysqli_real_escape_string($obj->conn,$_POST['availability']);
          $this->author= mysqli_real_escape_string($obj->conn,$_POST['author']);
          $this->publisher= mysqli_real_escape_string($obj->conn,$_POST['publisher']);
          $this->type= mysqli_real_escape_string($obj->conn,$_POST['type']);
          $this->uploader_id=$_SESSION['admin_idno'];
          $this->program= mysqli_real_escape_string($obj->conn,$_POST['program']);
          $this->descryption= mysqli_real_escape_string($obj->conn,$_POST['descryption']);

          //file upload ...
          $this->file = rand(1000,100000)."-".$_FILES['file']['name'];
          $this->fileloc = $_FILES['file']['tmp_name'];
	        $this->filesize = $_FILES['file']['size'];
	        $this->filetype = $_FILES['file']['type'];
	        $this->folder="../../resource/book/";
	        $this->newsize = $this->filesize/1024;
	        $this->newfilename = strtolower($this->file);
	        $this->finalfile=str_replace(' ','-',$this->newfilename);

          $date=date("y-m-d h:m:s");
          //uploading ...
          if(move_uploaded_file($this->fileloc,$this->folder.$this->finalfile))
	         {
             $sql="INSERT INTO `book` (`coursename`, `coursecode`, `isbn`, `edition`,
               `author`, `publisher`, `filename`, `filetype`, `filesize`, `availability`,
               `booktype`, `program`, `uploader_id`, `date`, `descryption`)
               VALUES ('$this->coursename', '$this->coursecode', '$this->isbn', '$this->edition', '$this->author',
                 '$this->publisher', '$this->finalfile','$this->filetype', '$this->filesize', '$this->availability',
                 '$this->type', '$this->program', '$this->uploader_id', '$date', '$this->descryption');";
              mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."Uploading error caused by the system.");
             ?>
             <script type="text/javascript">
               alert("Book uploaded successfully....");
               window.location.href="../add_material.php";
             </script>
             <?php
           }
        }
    }
  }
  $video=new book();

?>
