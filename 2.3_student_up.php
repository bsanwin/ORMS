<?php
include("0dbconn.php");

$srch_update ='';
if(isset($_POST['srchupdate'])){
 $sid = $_POST['sdid'];

$sql = "SELECT ss.sno,ss.s_id,ss.sub_id,sub.sub_name FROM stu_sub ss,subject sub
         WHERE ss.s_id='$sid' AND ss.sub_id=sub.sub_code";

         $query = mysqli_query($conn,$sql)  or die("Error: " . mysqli_error($conn));

         if ($query->num_rows >0) {
           $srch_update .='<div class="text-center">
             <h6><b>Assigned subject</b></h6>
           </div>

           <table class="table table-hover table-responsive" style="background-color:white">
              <thead>
                <tr>
                   <th width="30%">Enrollment No.</th>
                   <th width="30%">Subject Code</th>
                   <th width="30%">Subject Name</th>
                   <th width="10%"></th>
                   <th width="10%"></th>
                </tr>
                </thead>';

              while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)) {
                $srch_update .='<tr>
                  <td>'.$row['s_id'].'</td>
                  <td style="text-transform:uppercase">'.$row['sub_id'].'</td>
                  <td style="text-transform:capitalize">'.$row['sub_name'].'</td>
                  <td><a href="2.3_admin_student.php?studentedit='.$row['sno'].'"><i class="fas fa-edit" style="font-size:24px;color:blue"></i></a></td>
                  <td><a href="2.6_adminopprocess.php?studentdelete='.$row['sno'].'"><i class="fa fa-trash" style="font-size:24px;color:red"></i></a></td>
                </tr>
                ';
              }
          $srch_update .='</table>';

         }
         else{
          $srch_update='<div class="alert alert-warning " style="padding-left:30px">
                   No record has been found!
                  </div>';
         }
echo $srch_update;
}
 ?>
