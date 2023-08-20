<?php
include("0dbconn.php");
//echo "string i m result";

$output='';

if (isset($_POST['result'])) {
  $enroll=$_POST['enrollment'];

  $sql = "SELECT enrollment, registration_no, st_name, course, semestr FROM student
             WHERE enrollment='$enroll'";
   $query = mysqli_query($conn,$sql) or die ("Error: " .mysqli_error($conn));

   $sq = "SELECT ss.sub_id, ss.grade, ss.numgrade, sb.sub_name, sb.credit FROM stu_sub ss, subject sb
                WHERE s_id ='$enroll' AND ss.sub_id = sb.sub_code ";
    $ques = mysqli_query($conn,$sq) or die ("Error: " .mysqli_error($conn));

    if($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
       $output .='<h3 class="text-center">Result</h3><hr>
                   <div class="row">
            <label class="col-sm-3"><b>Registration No.:</b></label>
            <label class="col-sm-3">'.$row['registration_no'].'</label>
            </div>
          <div class="row">
          <label class="col-sm-3"><b>Enrollment No.:</b></label>
          <label class="col-sm-4" style="text-transform:uppercase">'.$enroll.'</label>
          </div>
          <div class="row">
            <label class="col-sm-3"><b>Name:</b></label>
            <label class="col-sm-5" style="text-transform:uppercase">'.$row['st_name'].'</label>
          </div>
          <div class="row">
            <label class="col-sm-2"><b>Course:</b></label>
            <label class="col-sm-5" style="text-transform:uppercase">'.$row['course'].'</label>
            <label class="col-sm-5"><b>Semester:&nbsp</b>'.$row['semestr'].'</label>
          </div>
          <table class="table table-hover table-bordered">
          <tr>
                <th width="20%">Subject Code</th>
                <th width="30%">Subject Name</th>
                <th width="20%">Credit</th>
                <th width="10%">Grade</th>
                <th></th>
                </tr>
          ';

    }
    $sum=0;
    $add=0;
    while($rod=mysqli_fetch_array($ques,MYSQLI_ASSOC))
  {
     $output .='<tr><td>'.$rod['sub_id'].'</td>
          <td>'.$rod['sub_name'].'</td>
          <td>'.$rod['credit'].'</td>
          <td>'.$rod['grade'].'</td>
          <td>'.$rod['numgrade'].'</td></tr>'
          ;
         $sum=$sum+($rod['numgrade']*$rod['credit']);
         $add=$add+$rod['credit'];
  }
  $sum=$sum/$add;
  $output .='</table>
                <br><p> SGPA :'.$sum.'</p>
  ';
    echo $output;
}
 ?>
