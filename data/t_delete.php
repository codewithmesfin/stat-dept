<?php
  include("config.php");
  class Delete
  {
    public $file_id;
    public $table;
    function delete()
    {
      global $obj;
      $this->item_id=$_GET['id'];
      $sql = "DELETE FROM message WHERE id = '$this->item_id'";
      mysqli_query($obj->conn, $sql) or die(mysqli_connect_error($sql)."error");
      ?>
        <script type="text/javascript">
          alert('message deleted.');
          window.location.href="../teacher/";
        </script>
      <?php
    }
  }
  $delete=new Delete();

 ?>
