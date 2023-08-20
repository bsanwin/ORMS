<?php

include("0dbconn.php");

$search_success ='';
if(isset($_POST['srch'])){
$tid = $_POST['tid'];
$sql = "SELECT * FROM teacher WHERE teachid = '$tid'";
$query = mysqli_query($conn,$sql) or die("Error: " .mysqli_error($conn));
?>


<?php
if ($query->num_rows >0) {
$search_success .='
 <h5>Searched Records </h5>
<form action="/adminopprocess.php" method="post">
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Teacher ID</label>
    <div class="col-sm-10">
    ';
    while($row = mysqli_fetch_array($query)){

$search_success .='<input type="text" readonly="" value="'.$row["teachid"].'" class="form-control col-sm-5" name="teachid">
    </div>
 </div><br>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">Teacher Name</label>
  <div class="col-sm-10">
    <input type="text" class="form-control col-sm-5" value="'.$row["tname"].'" name="tname" style="text-transform:capitalize">
  </div>
</div><br>
<div class="form-group row">
 <label class="col-sm-2 col-form-label">Center</label>
 <div class="col-sm-10">
    <input type="text" class="form-control col-sm-5" value="'.$row["tcenter"].'"  name="tcenter" style="text-transform:uppercase">
 </div>
</div><br>
<div class="form-group row">
  <label class="col-sm-2 col-form-label">School</label>
  <div class="col-sm-10">
     <input type="text" class="form-control col-sm-5" value="'.$row["tschool"].'" name="tschool" style="text-transform:uppercase">
';}

$search_success .='</div>
</div><br>
<div class="form-group row">
   <div class="col-sm-5">
    <button type="submit" class="btn btn-primary col-sm-3" name="upd">Update</button>
  </div>
  <div class="col-sm-5">
   <button type="submit" class="btn btn-primary col-sm-3" name="delet">Delete</button>
 </div>
</div>
</form>
';

}

else {
  $search_success .='<div class="alert alert-warning " style="padding-left:30px">
           No record has been found!
          </div>';
}

echo $search_success;

}
 ?>
