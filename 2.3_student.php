<?php

include("0dbconn.php");

$search_student ='';
if(isset($_POST['srch'])){
$sid = $_POST['sid'];
$sql = "SELECT * FROM student WHERE enrollment = '$sid'";
$query = mysqli_query($conn,$sql) or die("Error: " .mysqli_error($conn));
?>


<?php
if ($query->num_rows >0) {
$search_student .='
 <h5>Searched Records </h5>
 <form action="/adminopprocess.php" method="post">
   <div class="form-group row">
     <label class="col-sm-2 col-form-label">Enrollment NO.</label>
     <div class="col-sm-3">
    ';
    while($row = mysqli_fetch_array($query)){

$search_student .='<input type="text" readonly="" value="'.$row['enrollment'].'" class="form-control col-sm-12" name="stenroll">
</div>
<label class="col-sm-2 col-form-label">Registration No.</label>
<div class="col-sm-5">
<input type="text"  class="form-control" readonly="" value="'.$row['registration_no'].'" col-sm-8" name="reg">
</div>
</div><br>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Student Name</label>
<div class="col-sm-10">
<input type="text" class="form-control col-sm-5" value="'.$row['st_name'].'" name="sname" placeholder="name" style="text-transform:capitalize">
</div>
</div><br>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Course</label>
  <div class="col-sm-3">
    <input type="text"  class="form-control value="'.$row['course'].'" col-sm-12" name="crs" placeholder="Course">
  </div>
  <label class="col-sm-2 col-form-label">Semester</label>
  <div class="col-sm-5">
    <input type="text"  class="form-control col-sm-8" value="'.$row['semestr'].'" name="mes" placeholder="semester">
  </div>
</div><br>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Center</label>
<div class="col-sm-10">
<input type="text" class="form-control col-sm-5" value="'.$row['stu_center'].'" name="scenter" placeholder="center" style="text-transform:uppercase">
</div>
</div><br>
<div class="form-group row">
<label class="col-sm-2 col-form-label">School</label>
<div class="col-sm-10">
<input type="text" class="form-control col-sm-5" value="'.$row['school'].'" name="sschool" placeholder="school" style="text-transform:uppercase">
';}

$search_student .='</div>
</div><br>
<div class="form-group row">
   <div class="col-sm-5">
    <button type="submit" class="btn btn-primary col-sm-3" name="stuupd">Update</button>
  </div>
  <div class="col-sm-5">
   <button type="submit" class="btn btn-primary col-sm-3" name="studelet">Delete</button>
 </div>
</div>
</form>
';

}

else {
  $search_student .='<div class="alert alert-warning " style="padding-left:30px">
           No record has been found!
          </div>';
}

echo $search_student;

}
 ?>
