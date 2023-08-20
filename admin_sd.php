<?php
include("0dbconn.php");

$success ='';
if(isset($_POST['subsrch'])){
$subid = $_POST['subid'];
$sql = "SELECT * FROM subject WHERE sub_code = '$subid'";
$query = mysqli_query($conn,$sql) or die("Error: " .mysqli_error($conn));
?>

<?php

if ($query->num_rows >0) {
$success .='<form action="/adminopprocess.php" method="post">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Subject Code</label>
    <div class="col-sm-10">';

     while($row = mysqli_fetch_array($query)){

$success .='
<input type="text" value="'.$row['sub_code'].'" readonly="" class="form-control col-sm-5" name="sub_code" style="text-transform:uppercase">
</div>
</div><br>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Subject Name</label>
<div class="col-sm-10">
<input type="text" value="'.$row['sub_name'].'" class="form-control col-sm-5" name="sub_name" style="text-transform:capitalize">
</div>
</div><br>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Credit</label>
<div class="col-sm-10">
<input type="text" value="'.$row['credit'].'" class="form-control col-sm-5" name="credit" >
</div>
</div><br>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Type</label>
<div class="col-sm-10">
<input type="text" value="'.$row['sub_type'].'" class="form-control col-sm-5" name="sub_type" style="text-transform:uppercase">
';
}
$success .='</div>
</div><br>
<div class="form-group row">
   <div class="col-sm-5">
    <button type="submit" class="btn btn-primary col-sm-3" name="updsub">Update</button>
  </div>
  <div class="col-sm-5">
   <button type="submit" class="btn btn-primary col-sm-3" name="deletsub">Delete</button>
 </div>
</div>
';
}
else {
  $success .='<div class="alert alert-warning " style="padding-left:30px">
           No record has been found!
          </div>';
}
echo $success ;
}
 ?>
