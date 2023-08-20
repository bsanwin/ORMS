<?php
//insert.php
include("0dbconn.php");

if(isset($_POST["stu_id"]))
{
 $stu_id = $_POST["stu_id"];
 $sub_code = $_POST["sub_code"];
 //$_SESSION['login_user']=$teachid[0];
 $query = '';
 for($count = 0; $count<count($stu_id); $count++)
 {
  $stu_id_clean = mysqli_real_escape_string($conn, $stu_id[$count]);
  $sub_code_clean = mysqli_real_escape_string($conn, $sub_code[$count]);
  if($stu_id_clean != '' && $sub_code_clean != '')
  {
   $query .= '
   INSERT INTO stu_sub (s_id, sub_id)
   VALUES("'.$stu_id_clean.'", "'.$sub_code_clean.'");
   ';
  }
 }
 if($query != '')
 {
  if(mysqli_multi_query($conn, $query))
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
