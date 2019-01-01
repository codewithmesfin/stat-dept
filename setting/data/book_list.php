<?php
  session_start();
  include("config.php");
  class Book
  {
    public $uploader_idno;
    public $course_code;
    public $title;
    public $author;
    public $edition;
    public $isbn;
    public $type;
    public $program;
    function book()
    {
      global $obj;
      if(isset($_POST['save']))
        {
          $this->uploader_idno=$_SESSION['admin_idno'];
          $this->course_code=$_GET['code'];
          $this->title= mysqli_real_escape_string($obj->conn,$_POST['title']);
          $this->author= mysqli_real_escape_string($obj->conn,$_POST['author']);
          $this->edition= mysqli_real_escape_string($obj->conn,$_POST['edition']);
          $this->isbn= mysqli_real_escape_string($obj->conn,$_POST['isbn']);
          $this->type= mysqli_real_escape_string($obj->conn,$_POST['type']);
          $this->program= mysqli_real_escape_string($obj->conn,$_POST['program']);

          $date=date("y-m-d h:m:s");
          $sql="INSERT INTO `course_book` (`uploader_id`, `coursecode`, `title`, `author`,
            `edition`, `isbn`, `type`, `program`)
          VALUES ('$this->uploader_idno', '$this->course_code', '$this->title',
            '$this->author', '$this->edition', '$this->isbn', '$this->type', '$this->program');";
          mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."Uploading error caused by the system.");
          ?>
          <script type="text/javascript">
            alert('Recommended Book added successfully.');
              window.location.href="../book.php?code=<?php echo $this->course_code ?>";
          </script>
          <?php
        }
        if(isset($_POST['next']))
          {
            $this->uploader_idno=$_SESSION['admin_idno'];
            $this->course_code=$_GET['code'];
            $this->title= mysqli_real_escape_string($obj->conn,$_POST['title']);
            $this->author= mysqli_real_escape_string($obj->conn,$_POST['author']);
            $this->edition= mysqli_real_escape_string($obj->conn,$_POST['edition']);
            $this->isbn= mysqli_real_escape_string($obj->conn,$_POST['isbn']);
            $this->type= mysqli_real_escape_string($obj->conn,$_POST['type']);
            $this->program= mysqli_real_escape_string($obj->conn,$_POST['program']);

            $date=date("y-m-d h:m:s");
            $sql="INSERT INTO `course_book` (`uploader_id`, `coursecode`, `title`, `author`,
              `edition`, `isbn`, `type`, `program`)
            VALUES ('$this->uploader_idno', '$this->course_code', '$this->title',
              '$this->author', '$this->edition', '$this->isbn', '$this->type', '$this->program');";
            mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."Uploading error caused by the system.");
            ?>
            <script type="text/javascript">
              alert('Recommended Book added successfully.');
              window.location.href="../course.php";
            </script>
            <?php
          }
    }
  }
  $crc=new book();

?>
