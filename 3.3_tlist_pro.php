<?php

    $teacher_subject='';
    if (isset($_POST['buton'])) {

    if($result2->num_rows > 0){
      $teacher_subject .='<div class="text-center">
        <p>Assigned subject</p>
      </div>

      <table class="table table-hover table-responsive">
         <thead>
           <tr>
              <th width="25%">Subject Code</th>
              <th width="40%">Subject Name</th>
              <th width="30%">Course</th>
              <th width="20%">Semester</th>
              <th></th>
           </tr>
           </thead>
      ';
    while ($rows = mysqli_fetch_array($result2,MYSQLI_ASSOC)) {
     $teacher_subject .='
     <tr>
       <td><form action="__zz.php" method="post">
       <input type="text" readonly="" name="a" value="'.$rows['sid'].'" style="text-transform:uppercase"></td>
     <td>
       <input type="text" readonly="" name="b" value="'.$rows['sub_name'].'" style="text-transform:capitalize"></td>
     <td>
       <input type="text" readonly="" name="c" value="'.$rows['course'].'" style="text-transform:uppercase"></td>
     <td>
       <input type="text" readonly="" name="d" value="'.$rows['semester'].'"></td>
     <td>
       <input type="submit" name="teachlist" value="ok"></form></td>
    </tr>
     ';
     }
     $teacher_subject .='</table>';
    }
    else {
      $teacher_subject .='<div class="alert alert-primary" role="alert">
           No subject assigned !
                </div>';
    }

echo $teacher_subject ;
}
?>
