<?php
include('0dbconn.php');

if (isset($_POST['bulk_delete_submit'])) {
  // code...
  if (!empty($_POST['checked_id'])) {
    // code...
     $id= implode(',',$_POST['checked_id']);

     $deel=$conn->query("DELETE FROM teach_sub WHERE tid='$id'");
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
