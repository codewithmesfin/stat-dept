<?php
            global $obj;
            $record_per_page = 4;
            $page = '';
            if(isset($_GET["page"]))
            {
            $page = $_GET["page"];
            }
            else
            {
            $page = 1;
            }

            $start_from = ($page-1)*$record_per_page;

            $query = "SELECT * FROM teacher where profile<>'' order by id DESC LIMIT $start_from, $record_per_page";
            $result = mysqli_query($obj->conn,$query) or die(mysqli_connect_error($query));
?>
<style>
  .page a {
   padding:8px 16px;
   border:1px solid #ccc;
   color:#333;
   font-weight:bold;
  }
  </style>
  <br /><br />
  <div class="">
   <div class="row">
     <?php
     while($row = mysqli_fetch_array($result))
     {
     ?>
       <!--Grid column-->
       <div class="col-md-3 mb-md-0 mb-4 mx-auto">

        <div class="testimonial">
        <!--Avatar-->
        <div class="avatar mx-auto">
            <img src="profile/teacher/<?php echo $row['profile'] ?>" class="rounded-circle z-depth-1 img-fluid" style="height:170px;width:120px">
            <p class="text-center">
              <strong><?php echo $row['teachername']." ".$row['fathername']." ".$row['gname']." (".$row['title'].")" ?></strong>
              <div class="text-center text-info">
                <i>
                   <p>Specialized in <?php echo $row['specialization'] ?></p>
                    <p>Work in AAU, Dept of Statistics since <?php echo $row['employmentdate'] ?></p>
                    <p class="text-center text-info">Role: <?php echo $row['role'] ?></p>
                </i>
              </div>
            </p>
        </div>
        <!--Content-->
        </div>

        </div>
        <!--Grid column-->
     <?php
     }
     ?>
     <div class="col-12">

     </div>
    <div align="center" class="page col-10 mx-auto h6 text-info">
    <br />
    <?php
    $page_query = "SELECT * FROM teacher where profile<>'' ORDER BY id DESC";
    $page_result = mysqli_query($obj->conn, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 4)
    {
     $start_loop = $total_pages - 4;
    }
    $end_loop = $start_loop + 4;
    if($page > 1)
    {
     echo "<a href='index.php?page=1#testimonial'>First</a>";
     echo "<a href='index.php?page=".($page - 1)."#testimonial'><<</a>";
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {
     if ($i>0) {
       echo "<a href='index.php?page=".$i."#testimonial'>".$i."</a>";
     }
    }
    if($page <$end_loop)
    {
     echo "<a href='index.php?page=".($page + 1)."#testimonial'>>></a>";
     echo "<a href='index.php?page=".$total_pages."#testimonial'>Last</a>";
    }


    ?>
    </div>
    <br /><br />
   </div>
  </div>
