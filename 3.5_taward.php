<?php
include("init.php");
$db = mysqli_select_db($conn,'srms');
$c='mca';
$s=4;


$sc=$_POST['src'];
$id=$_POST['sdd'];

$l=null;
$sql = "SELECT  ltp  FROM teacher_subject where sub_id='$id' AND teach_id='$sc'";
$grade = mysqli_query($conn, $sql);
while ($cow = mysqli_fetch_array($grade,MYSQLI_ASSOC)){
   $l=$cow['ltp'];
}

$sq = "SELECT subject_name, credit FROM subjects where subject_code='$id'";
$sub_info = mysqli_query($conn, $sq);

if (mysqli_num_rows($sub_info) > 0){
   $row = mysqli_fetch_array($sub_info);
   $nm=$row['subject_name'];
   $cre=$row['credit'];
}


$oppo=array();
$op=array();
$po=array();

$sl = "SELECT enrollment, name,registrarion FROM student where stu_course='$c'and sem='$s'";
$stud = mysqli_query($conn, $sl);

while($rub= mysqli_fetch_array($stud,MYSQLI_ASSOC)){
$pol=$rub['enrollment'];
$p=$rub['name'];
$ol=$rub['registrarion'];
array_push($oppo,$pol);
array_push($op,$p);
array_push($po,$ol);
}

 $amm=array();
$obul=sizeof($oppo);
 $k=0;
 while ($obul>0)
 {
   $di=$oppo[$k];
  $sq =("SELECT grade FROM student_sub where stu_id = '$di' AND sub_id ='$id'");
  $sx = mysqli_query($conn, $sq);
 $ro=mysqli_fetch_array($sx);
 $snam=$ro['grade'];
 array_push($amm,$snam);
    $obul--;
   $k++;
 }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <style>

  </style>
  </head>
  <body>

<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD GRADE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <form action="lastsave.php" method="POST">
      <div class="modal-body">

          <input type="hidden" class="form-control" name="exam" id="exam"/>
           <input type="hidden" class="form-control" name="e" id="a"/>

           <div class="form-group">
             <label for="exampleInputPassword1">Name</label>
             <input type="button" class="form-control" name="ex" id="ex"/>
               </div>

            <input type="hidden" class="form-control" name="xamp" id="xamp"/>
            <input type="hidden" class="form-control" name="amp" id="amp"/>
           <input type="hidden" class="form-control" name="mp" id="mp"/>
           <input type="hidden" class="form-control" name="examp" id="examp"/>
          <?php   echo"<input type='hidden' name='sdd' value='".$id."'>"; ?>



          <div class="form-group">
            <label for="example">grade</label>
         <input type="text" class="form-control" name="example" id="example" style='text-transform:uppercase'/>
        </div>

    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="update" class="btn btn-primary">Submit</button>
      </div>
        </form>
    </div>
  </div>
</div>
<div class="container">
  <div class="jumbotron">
    <div class="card">
      <center><h2>Examiner's Awarded List</h2></center>
    </div>
    <div class="card">
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
             <td>Course Code :&nbsp;&nbsp;<?php echo $id;?></td>
             <td>Credit :&nbsp;&nbsp;<?php echo $cre;?></td>
           </tr>
           <tr>
            <td>Course Name :&nbsp;&nbsp;<?php echo $nm;?></td>
            <td> </td>
          </tr>
          <tr>
           <td>Semester :&nbsp;&nbsp;<?php echo $s;?></td>
           <td> </td>
         </tr>
            <tr>
              <td><label>&reg;=Repeating&nbsp;&nbsp;<input type="checkbox" value=""></label></td>
              <td><label>(nc)=Taking as Non Credit&nbsp;&nbsp;<input type="checkbox" value=""></label></td>
            </tr>
          </thead>
            </table>

      </div>
    </div>

     <div class="card">
       <div class="card-body table-responsive">
         <table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col" width="5%">S.No.</th>
      <th scope="col" width="10%">Enrollment Number</th>
      <th scope="col">Name</th>
      <th scope="col" width="10%">Registration Number</th>
      <th scope="col" width="10%">Program of Study</th>
      <th scope="col">school</th>
        <th scope="col">Center</th>
          <th scope="col" width="10%">Grade Awarded</th>
            <th scope="col"></th>
    </tr>
  </thead>

  <?php

  $kk=sizeof($oppo);
   $i=0;$q=1;
  if ($kk > 0)
  {
    while($kk >0)
      {
              ?>
  <tbody>
    <tr>
      <td><?php echo $q; ?></td>
      <td><?php echo $oppo[$i]; ?></td>
      <td><?php echo $op[$i]; ?></td>
      <td><?php echo  $po[$i]; ?></td>
      <td><?php echo $l; ?></td>
      <td><?php echo  "SCS"; ?></td>
        <td><?php echo  "SCS"; ?></td>
          <td><?php echo  $amm[$i]; ?></td>
            <td><?php echo"<button type='button' class='btn btn-success editbtn'>Insert</button>"; ?></td>
    </tr>

  </tbody>

  <?php
  $i++;$kk--;
  $q++;
  }
    echo "</table>";

}
else {
    echo "No Records";

}
?>

</table>

       </div>

     </div>
     <div class="card">
       <div class="card-body">
         <form  action="submission.php" method="POST">
          <div class="row" style="padding-left:30px">
            Course Incharge :
            <div class="" style="padding-left:30px">
             <input type="text" class="form-control" name="exa" style='text-transform:capitalize'>
            </div>
          </div><br>
          <div class="row" style="padding-left:30px">
           Submission Date :
            <div class="" style="padding-left:30px">
             <input type="date" class="form-control" name="ex">
            </div>
          </div>

             <input type="hidden" class="form-control" name="exm" value="<?php echo $c; ?>">
             <input type="hidden" class="form-control" name="exp" value="<?php echo $s; ?>">
             <input type="hidden" class="form-control" name="examp" value="<?php echo $nm; ?>">
             <br>
             <div class="" style="padding-left:30px">
               <button type="submit" class="btn btn-primary col-sm-1">Submit</button>
             </div>
         </form>
       </div>
     </div>

</div>
</div>
<script>
$(document).ready(function(){
  $('.editbtn').on('click',function(){

    $('#editmodal').modal('show');

       $tr=$(this).closest('tr');

       var data=$tr.children('td').map(function(){
         return $(this).text();
       }).get();

       console.log(data);

       $('#exam').val(data[0]);
       $('#a').val(data[1]);
       $('#ex').val(data[2]);

       $('#xamp').val(data[3]);
       $('#amp').val(data[4]);
       $('#mp').val(data[5]);
       $('#examp').val(data[6]);
       $('#example').val(data[7]);

  });
});
</script>
  </body>
</html>
