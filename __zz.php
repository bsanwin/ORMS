<?php
include("0dbconn.php");
include("lastsave.php");

$tname = $_SESSION['teachname'];

if(isset($_POST['teachlist']))
{
  $subid=$_POST['a'];
  $snam = $_POST['b'];
  $cors=$_POST['c'];
  $sem=$_POST['d'];

  $sql=mysqli_query($conn, "SELECT credit, sub_type FROM subject WHERE sub_code ='$subid'");
  if ($sql->num_rows) {
    $row = mysqli_fetch_array($sql, MYSQLI_ASSOC);
    $cred = $row['credit'];
    $type = $row['sub_type'];
  }
  $_SESSION['subcode']=$subid;

   $sql1=mysqli_query($conn, "SELECT st.*,sub.grade,sub.numgrade FROM student st,stu_sub sub
                      WHERE st.enrollment=sub.s_id AND sub.sub_id='$subid' AND st.course='$cors' AND st.semestr='$sem'");


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php crud</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      <form action=" " method="POST">
        <div class="modal-body">
       <div class="row">
         <div class="col-sm-4">
           Enrollment No.:
         </div>
         <div class="col-sm-7">
           <input type="text" name="enroll" id="enroll"/>
         </div>
       </div>
       <div class="row">
         <div class="col-sm-4">
           Name :
         </div>
         <div class="col-sm-7">
           <input type="text" readonly="" name="nam" id="nam">
         </div>
       </div>
       <div class="row">
         <div class="col-sm-4">
           Grade :
         </div>
         <div class="col-sm-7">
           <input type="text" name="grad" id="grad" style="text-transform:uppercase">
         </div>
       </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="lstdata" class="btn btn-primary">Submit</button>
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
             <td>Course Code :&nbsp;&nbsp;<?php echo $subid;?></td>
             <td>Credit :&nbsp;&nbsp;<?php echo $cred;?></td>
           </tr>
           <tr>
            <td>Course Name :&nbsp;&nbsp;<?php echo $snam;?></td>
            <td> </td>
          </tr>
          <tr>
           <td>Semester :&nbsp;&nbsp;<?php echo $sem;?></td>
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
      <th scope="col"></th>
    </tr>
  </thead>

  <?php
  if ($sql1->num_rows > 0)
  {
     $i=1;
    while($rows=mysqli_fetch_array($sql1,MYSQLI_ASSOC))
      {
              ?>
  <tbody>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $rows['enrollment']; ?></td>
      <td><?php echo $rows['st_name']; ?></td>
      <td><?php echo  $rows['registration_no']; ?></td>
      <td><?php echo $type; ?></td>
      <td><?php echo  $rows['school']; ?></td>
      <td><?php echo  $rows['stu_center']; ?></td>
      <td style="text-transform:uppercase"><?php echo  $rows['grade']; ?></td>
      <td><?php echo $rows['numgrade']; ?></td>
      <td><?php echo"<button type='button' class='btn btn-success editbtn'>Insert</button>"; ?></td>
    </tr>
      <!--<td><?php //echo"<button type='button' class='btn btn-success editbtn'>Insert</button>"; ?></td>-->
  </tbody>

  <?php
  $i++;
  }
    echo "</table>";
}
else {
    echo "No Records";
}
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
             <input type="text" class="form-control" name="exa" value="<?php echo $tname; ?>" style='text-transform:capitalize'>
            </div>
          </div><br>
          <div class="row" style="padding-left:30px">
           Submission Date :
            <div class="" style="padding-left:30px">
             <input type="date" class="form-control" name="ex">
            </div>
          </div>

             <!--<input type="hidden" class="form-control" name="exm" value="<?php echo $c; ?>">
             <input type="hidden" class="form-control" name="exp" value="<?php echo $s; ?>">
             <input type="hidden" class="form-control" name="examp" value="<?php echo $nm; ?>">
           -->
             <br>
             <div class="" style="padding-left:30px">
               <button type="submit" class="btn btn-primary col-sm-1">Submit</button>
             </div>
         </form>
       </div>
     </div>

</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){
  $('.editbtn').on('click',function(){

    $('#editmodal').modal('show');

       $tr=$(this).closest('tr');

       var data=$tr.children('td').map(function(){
         return $(this).text();
       }).get();

       console.log(data);

       $('#enroll').val(data[1]);
       $('#nam').val(data[2]);
       $('#grad').val(data[7]);

  });
});
</script>
  </body>
</html>
