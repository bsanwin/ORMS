<?php

include("0dbconn.php");

$output='';
if(isset($_POST['srching'])){
$tid = $_POST['tid'];

$sql = "SELECT te.*, sub.sub_name FROM teach_sub te,subject sub
       WHERE te.tid = '$tid' AND te.sid=sub.sub_code";
$query = mysqli_query($conn,$sql) or die("Error: " .mysqli_error($conn));
?>
<?php
if($query->num_rows >0){
$output .='
<div class="text-center">
  <h6><b>Assigned subject</b></h6>
</div>

<table class="table table-hover table-responsive" style="background-color:white">
   <thead>
     <tr>
        <th width="20%">Teacher Id</th>
        <th width="20%">Subject Code</th>
        <th width="30%">Subject Name</th>
        <th width="20%">Course</th>
        <th width="20%">Semester</th>
        <th width="10%"></th>
        <th width="10%"></th>
     </tr>
     </thead>';
      while($row = mysqli_fetch_array($query)){
        $output .='<tr>
          <td>'.$row['tid'].'</td>
          <td style="text-transform:uppercase">'.$row['sid'].'</td>
          <td style="text-transform:capitalize">'.$row['sub_name'].'</td>
          <td style="text-transform:uppercase">'.$row['course'].'</td>
          <td>'.$row['semester'].'</td>
          <td><a href="2.6_adminopprocess.php?teacher_delete='.$row['sn'].'"><i class="fa fa-trash" style="font-size:24px;color:red"></i></a></td>
        </tr>
           ';
    }
  $output .='</table>';
}
else{
  $output .='<div class="alert alert-warning " style="padding-left:30px">
           No record has been found!
          </div>';
}
echo $output;
}
 ?>
