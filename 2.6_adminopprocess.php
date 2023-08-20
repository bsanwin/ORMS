<?php
include '0dbconn.php';
session_start();

$ssid='';
$ssubid='';
$ssname='';

$te_id='';
$sub_id='';
$rowno='';
$sub_name='';
$course='';
$sem='';
/* teacher inserting code ##############*/
if(isset($_POST['button'])){
$teachid = $_POST['teachid'];
$tname = $_POST['tname'];
$tcenter = $_POST['tcenter'];
$tschool = $_POST['tschool'];
$q = " INSERT INTO `teacher`(`teachid`, `tname`,tcenter,tschool) VALUES ( '$teachid', '$tname', '$tcenter', '$tschool')";
$query = mysqli_query($conn,$q);

$_SESSION['message'] = "Record has been saved!";
$_SESSION['msg_type'] = "success";
header('location:2.4_admin_teach.php');
}
/*End teacher inserting code #################*/

/* Teacher update code ######################## */
if (isset($_POST['upd'])) {
$teachid = $_POST['teachid'];
$tname = $_POST['tname'];
$tcenter = $_POST['tcenter'];
$tschool = $_POST['tschool'];
$query = "UPDATE teacher
SET teachid = '".$teachid."',
tname = '".$tname."',
tcenter ='".$tcenter."',
tschool = '".$tschool."'
           WHERE teachid = '".$teachid."'";
mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));

$_SESSION['message'] = "Record has been updated!";
$_SESSION['msg_type'] = "info";

header('location:2.4_admin_teach.php');

}
/*End of Teacher update code ######################## */

/* Teacher delete code ######################## */
if (isset($_POST['delet'])) {
  $teachid = $_POST['teachid'];
  $sql = "DELETE FROM teacher WHERE teachid= '$teachid'";
  mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));

  $_SESSION['message'] = "Record has been deleted!";
  $_SESSION['msg_type'] = "danger";

  header('location:2.4_admin_teach.php');
}
/*End of Teacher delete code ######################## */

/* End of teacher subject updating code @@@@@@@@@@@@@@@@@@@@2*/

/* teacher subject deleting code @@@@@@@@@@@@@@@@@@@@2*/
if (isset($_GET['teacher_delete'])) {
  $teachid = $_GET['teacher_delete'];
  $sql = "DELETE FROM teach_sub WHERE sn= '$teachid'";
  mysqli_query($conn, $sql) or die("Error: " . mysqli_error($conn));

  $_SESSION['message'] = "Record has been deleted!";
  $_SESSION['msg_type'] = "danger";

  header('location:2.4_admin_teach.php');
}
/* End teacher subject deleting code @@@@@@@@@@@@@@@@@@@@2*/

/*  subject insert code $$$$$$$$$*/
if(isset($_POST['subjt'])){
$sub_code = $_POST['sub_code'];
$sub_name = $_POST['sub_name'];
$credit = $_POST['credit'];
$sub_type = $_POST['sub_type'];
$q = " INSERT INTO `subject`(`sub_code`, `sub_name`,credit,sub_type) VALUES ( '$sub_code', '$sub_name', '$credit', '$sub_type')";
$query = mysqli_query($conn,$q);

$_SESSION['message'] = "Record has been saved!";
$_SESSION['msg_type'] = "success";
header('location:2.5_admin_subject.php');
}
/* end of subject insert code $$$$$$$$$$$*/

/*  subject update code @@@@@@@@@@@@@@@@@@@@2*/
if (isset($_POST['updsub'])) {
$sub_code = $_POST['sub_code'];
$sub_name = $_POST['sub_name'];
$credit = $_POST['credit'];
$sub_type = $_POST['sub_type'];
$query = "UPDATE subject
SET sub_code = '".$sub_code."',
sub_name = '".$sub_name."',
credit ='".$credit."',
sub_type = '".$sub_type."'
           WHERE sub_code = '".$sub_code."'";
mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));

$_SESSION['message'] = "Record has been updated!";
$_SESSION['msg_type'] = "info";

header('location:2.5_admin_subject.php');

}
/*End subject updating code @@@@@@@@@@@@@@@@@@@@2*/

/* subject delete code     */
if (isset($_POST['deletsub'])) {
  $id = $_POST['sub_code'];

  $q = " DELETE FROM `subject` WHERE sub_code = '$id' ";
  mysqli_query($conn, $q) or die("Error: " . mysqli_error($conn));

  $_SESSION['message'] = "Record has been deleted!";
  $_SESSION['msg_type'] = "danger";

  header('location:2.5_admin_subject.php');
}
/* subject delete code     */

/* student inserting code */
if(isset($_POST['stubtn'])){
$enroll = $_POST['stenroll'];
$reg = $_POST['reg'];
$name = $_POST['sname'];
$cors = $_POST['crs'];
$scenter = $_POST['scenter'];
$sem = $_POST['mes'];
$sschool = $_POST['sschool'];
$q = " INSERT INTO `student`(`enrollment`, `registration_no`,st_name,course,semestr,stu_center,school)
        VALUES ( '$enroll', '$reg', '$name', '$cors', '$sem', '$scenter', '$sschool')";
$query = mysqli_query($conn,$q);

$_SESSION['message'] = "Record has been saved!";
$_SESSION['msg_type'] = "success";
header('location:2.3_admin_student.php');
}
/* end of student inserting code */

/*  student update code @@@@@@@@@@@@@@@@@@@@2*/
if (isset($_POST['stuupd'])) {
$enroll = $_POST['stenroll'];
$reg = $_POST['reg'];
$name = $_POST['sname'];
$cors = $_POST['crs'];
$sem = $_POST['mes'];
$center = $_POST['scenter'];
$school = $_POST['sschool'];
$query = "UPDATE student
SET enrollment = '".$enroll."',
registration_no = '".$reg."',
stu_name ='".$name."',
course = '".$cors."',
semester = '".$sem."',
stu_center ='".$center."',
school = '".$school."'
           WHERE registration_no = '".$reg."'";
mysqli_query($conn, $query) or die("Error: " . mysqli_error($conn));

$_SESSION['message'] = "Record has been updated!";
$_SESSION['msg_type'] = "info";

header('location:2.3_admin_student.php');

}
/*End student updating code @@@@@@@@@@@@@@@@@@@@2*/

/* student delete code     */
if (isset($_POST['studelet'])) {
  $id = $_POST['reg'];

  $q = " DELETE FROM `student` WHERE registration_no = '$id' ";
  mysqli_query($conn, $q) or die("Error: " . mysqli_error($conn));

  $_SESSION['message'] = "Record has been deleted!";
  $_SESSION['msg_type'] = "danger";

  header('location:2.3_admin_student.php');
}
/* end of student delete code     */

/* student subject update code     */

/*End student subject update code     */

/* student subject delete code     */
if(isset($_GET['studentdelete'])){
   $sid = $_GET['studentdelete'];

   $q = " DELETE FROM `stu_sub` WHERE sno = '$sid' ";
   mysqli_query($conn, $q) or die("Error: " . mysqli_error($conn));

   $_SESSION['message'] = "Record has been deleted!";
   $_SESSION['msg_type'] = "danger";

   header('location:2.3_admin_student.php');

}
/* end of student subject delete code     */

/* EDIT BUTTON  */

/* EDIT BUTTON  */
?>
