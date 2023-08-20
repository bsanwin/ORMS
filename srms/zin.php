<?php
include("init.php");

if(isset($_POST['update']))
{
  $id=$_POST['exam'];
  $sub=$_POST['ex'];
  $re=$_POST['examp'];
  $gr=$_POST['example'];

  $query="UPDATE student_sub SET stu_id='$id',sub_id='$sub',repeating='$re',grade='$gr'";
  $query_run=mysqli_query($conn,$query);

  if($query_run)
  {
     echo "<script>alert('Data is updated');</script>";
     header("location:ze.php");

  }
  else {
    echo "<script> alert('Data not updated'); </script>";
  }  
}
 ?>
