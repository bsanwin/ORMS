<?php
include('0dbconn.php');
include('2.4_ad_ts_delpro.php');

 if(!empty($statusmsg)){
  echo '<div class="alert alert-success">'.$statusmsg.'
  </div>';  }


$teacher_sub='';

if (isset($_POST['wing'])) {
  $tiddel=$_POST['tiddel'];

  $sql = "SELECT * FROM teach_sub WHERE tid='$tiddel'";
  $result = mysqli_query($conn,$sql)  or die("Error: " . mysqli_error($conn));

if($result->num_rows > 0){

  $teacher_sub .='<div class="text-center">

    <p>Assigned subject</p>
  </div>

  <form name="bulk_action_form" action="" method="post" onSubmit="return delete_confirm();"/>
  <table class="table table-hover table-responsive">
     <thead>
       <tr>
         <th><input type="checkbox" id="select_all" value=""/></th>

          <th width="35%">Teacher ID</th>
          <th width="30%">Subject Code</th>
          <th width="20%">Course</th>
          <th width="20%">Semester</th>
       </tr>
       </thead>
  ';
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

$teacher_sub .='<tr>
  <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="'.$row['tid'].'"/></td>
  <td>'.$row['tid'].'</td>
  <td>'.$row['sid'].'</td>
  <td>'.$row['course'].'</td>
  <td>'.$row['semester'].'</td>
</tr>
';
}
$teacher_sub .='</table>
<br>
  <input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="DELETE"/>
</form>
    ';
}
else{
  $teacher_sub .='<div class="alert alert-info" role="alert">
                   No Records Found!
                   </div>';
}

echo $teacher_sub;
}



 ?>
