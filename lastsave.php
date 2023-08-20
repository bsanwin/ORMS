<?php
include("0dbconn.php");
session_start();

$scode = $_SESSION['subcode'];

if(isset($_POST['lstdata']))
{
  $stid = $_POST['enroll'];
  $grade = $_POST['grad'];
  switch ($grade) {
      case ("A+" || "a+"):
          $ec=9;
          break;
      case ("A" || "a"):
          $ec=8;
          break;
      case ("A-" || "a-"):
          $ec=7;
          break;
      case ("B+" || "b+"):
          $ec=6;
          break;
        case ("B" || "b"):
        $ec=5;
          break;
      case ("B-" || "b-"):
              $ec=4;
              break;
              case ("C+" || "c+"):
                  $ec=3;
                  break;
              case ("C" || "c"):
                  $ec=2;
                  break;
              case ("C-" || "c-"):
                  $ec=1;
                  break;
              case ("F" || "f"):
                      $ec=0;
                      break;
             default:
               $ec=11;

}

if($ec < 10){

                 $query="UPDATE stu_sub
                 SET grade='".$grade."',
                 numgrade='".$ec."'
                 WHERE s_id='".$stid."' AND sub_id='".$scode."';
                 ";
                 $query_run=mysqli_query($conn,$query);
                 $ec=0;
                  header("Location: __zz.php");

                 }
else {
  echo "<script>alert('please enter valid grade!');</script>";
}


}
 ?>
