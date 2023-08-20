<?php
//insert.php
include("0dbconn.php");

if(isset($_POST["teach_id"]))
{
 $teach_id = $_POST["teach_id"];
 $sub_code = $_POST["sub_code"];
 $course = $_POST["course"];
 $semester = $_POST["semester"];
 //$_SESSION['login_user']=$teachid[0];
 $que = '';
 for($count = 0; $count<count($teach_id); $count++)
 {
  $teach_id_clean = mysqli_real_escape_string($conn, $teach_id[$count]);
  $sub_code_clean = mysqli_real_escape_string($conn, $sub_code[$count]);
  $course_clean = mysqli_real_escape_string($conn, $course[$count]);
  $semester_clean = mysqli_real_escape_string($conn, $semester[$count]);
  if($teach_id_clean != '' && $sub_code_clean != '' && $course_clean != '' && $semester_clean != '')
  {
   $que .= '
   INSERT INTO teach_sub (tid, sid, course, semester)
   VALUES("'.$teach_id_clean.'", "'.$sub_code_clean.'", "'.$course_clean.'", "'.$semester_clean.'");
   ';
  }
 }
 if($que != '')
 {
  if(mysqli_multi_query($conn, $que))
  {
   echo 'Data Item is Inserted';
  }
  else
  {
   echo 'Error';
  }
 }
 else
 {
  echo 'All Fields are Required';
 }
}
?>
