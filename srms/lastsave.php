<?php
include("init.php");

if(isset($_POST['update']))
{
  $co=$_POST['sdd'];
  $gr=$_POST['example'];
  $en=$_POST['e'];

  switch ($gr) {
      case "A+":
          $ec=9;
          break;
      case "A":
          $ec=8;
          break;
      case "A-":
          $ec=7;
          break;
      case "B+":
          $ec=6;
          break;
        case "B":
        $ec=5;
          break;
      case "B-":
              $ec=4;
              break;
              case "C+":
                  $ec=3;
                  break;
              case "C":
                  $ec=2;
                  break;
              case "C-":
                  $ec=1;
                  break;
              case "F":
                      $ec=1;
                      break;
             default:
               $ec=11;

}

if($ec < 10){
                 $query="UPDATE student_sub SET grade='$gr',numgrade='$ec' WHERE stu_id='$en' AND sub_id='$co'";
                 $query_run=mysqli_query($conn,$query);

                 if($query_run)
                 {
                    echo "<script>alert('successful');</script>";


                 }
                 else {
                   echo "<script> alert('Data not updated'); </script>";
                 }
}
else {
  echo "<script>alert('please enter valid grade!');</script>";
}

    //header("Location:sem4.php");

}
 ?>
