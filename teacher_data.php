<?php
include('0dbconn.php');

if (isset($_POST['bulk_delete'])) {
  // code...
  if (!empty($_POST['check_id'])) {
    // code...
     $id= implode(',',$_POST['check_id']);

     $deel=$conn->query("DELETE FROM teacher WHERE teachid ='$id'");
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
