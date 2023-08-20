<?php
include('init.php');

if (isset($_POST['bulk_delete_submit'])) {
  // code...
  if (!empty($_POST['checked_id'])) {
    // code...
     $id= implode(',',$_POST['checked_id']);

     $deel=$conn->query("DELETE FROM student_sub WHERE stu_id='$id'");
     if($deel){
              $statusmsg='Selected user have been deleted successfully.';
           }
     else{
       $statusmsg='Some problem occured, please try again.';
       }
  }
  else{
    $statusmsg='Select at least 1 record to delete.';
  }
}
 ?>
