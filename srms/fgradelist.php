
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
<html lang="en">
<head>
  <title>one subject</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 </head>
<body>
  <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
              <form action="zin.php" method="POST">
        <div class="modal-body">

            <div class="form-group">
             <label for="exampleInputEmail1">student</label>
              <input type="text" class="form-control" name="exam" id="exam"/>

            </div>
             <div class="form-group">
               <label for="exampleInputPassword1">subject</label>
               <input type="password" class="form-control" name="ex" id="ex"/>
                 </div>
              <div class="form-group">
                <label for="exampleInput">Repeating</label>
             <input type="text" class="form-control" name="examp" id="examp"/>
            </div>

            <div class="form-group">
              <label for="example">grade</label>
           <input type="text" class="form-control" name="example" id="example"/>
          </div>

      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="update" class="btn btn-primary">Save changes</button>
        </div>
          </form>
      </div>
    </div>
  </div>


<center><h2>Examiner's Awarded List</h2></center>
<div class="container">
  <div class="jumbotron">
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
        <td><label><span class="glyphicon glyphicon-registration-mark"></span>=Repeating&nbsp;&nbsp;<input type="checkbox" value=""></label></td>
        <td><label>(nc)=Taking as Non Credit&nbsp;&nbsp;<input type="checkbox" value=""></label></td>
      </tr>
    </thead>
      </table>
<div class="card">
  <div class="card-body">
<?php
    $kk=sizeof($oppo);
     $i=0;$q=1;
    if ($kk > 0){
    echo "<table class='table table-bordered table-hover'>
    <thead>
      <tr>
        <th>S.No</th>
        <th>Enrolment Number</th>
        <th>Name</th>
        <th>Registration Number</th>
        <th>Program Of Study</th>
        <th>School</th>
        <th>Center</th>
        <th>Grade Awarded</th>
        <th></th>
      </tr>
    </thead>";

    while($kk >0)
      {
        echo "<tr>";
        echo "<td>" . $q . "</td>";
        echo "<td>" . $oppo[$i] . "</td>";
        echo "<td>" . $op[$i] . "</td>";
        echo "<td>" . $po[$i] . "</td>";
        echo "<td>" . $l . "</td>";
        echo "<td> SCS  </td>";
        echo "<td> SCS  </td>";
        echo "<td>" . $amm[$i] . "</td>";
        echo "<td><button type='button' class='btn btn-success editbtn'>EDIT</button></td>";
        echo "</tr>";
           $i++;$kk--;
           $q++;
        }

      echo "</table>";
  }

  else {
      echo "no result here";
  }
?>
</div>
</div>
  <!-- <form class="form-horizontal"> -->

    <div class="form-group">
      <label class="col-sm-2 control-label">Course Incharge :</label>
       <div class="col-sm-10">
         <input class="form-control" id="usr" type="text">
       </div>
    </div>

    <div class="form-group">
     <label class="col-sm-2 control-label">Date :</label>
     <div class="col-sm-10">
       <input class="form-control" id="usr" type="text">
     </div>
   </div>
  <!-- </form> -->
<center>
  <button class="btn btn-danger" type="reset">Reset</button>&nbsp;&nbsp;&nbsp;
  <button type="submit" class="btn btn-default" name="sumit">Submit</button>
&nbsp;&nbsp;&nbsp;<button type="print" class="btn btn-default">print</button></center>
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
       $('#ex').val(data[1]);
       $('#examp').val(data[2]);
       $('#example').val(data[3]);

  });
});

</script>
</body>
</html>
