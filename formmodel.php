
<?php
   include("0dbconn.php");

   require("lastsave.php");


    $tname = $_SESSION['teachname'];

    if (isset($_POST['teachlist'])) {
        $subid = $_POST['a'];
        $snam = $_POST['b'];
        $cors = $_POST['c'];
        $sem = $_POST['d'];

        $sql = "SELECT credit,sub_type FROM subject WHERE sub_code='$subid'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows >0) {
          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
          $cred = $row['credit'];
          $type = $row['sub_type'];
        }
        $_SESSION['subcode']= $subid;

        $sq = "SELECT st.*,sub.grade,sub.numgrade FROM student st,stu_sub sub
               WHERE st.enrollment=sub.s_id AND sub.sub_id='$subid' AND st.course='$cors' AND st.semestr='$sem'";
        $result1= mysqli_query($conn, $sq);


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- Button trigger modal
<button type="button" id="myBtn" class="btn btn-primary">
  Launch demo modal
</button>-->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD GRADE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="" method="post">
        <div class="row">
          <div class="col-sm-4">
            <label for="enrollmentno">Enrollment No. :</label>
          </div>
          <div class="col-sm-7">
            <input type="text" readonly="" name="enroll" id="enroll">
          </div>
        </div><br>
        <div class="row">
          <div class="col-sm-4">
            <label for="name">Name :</label>
          </div>
          <div class="col-sm-7">
            <input type="text" readonly="" name="nam" id="nam">
          </div>
        </div><br>
        <div class="row">
          <div class="col-sm-4">
            <label for="name">Grade :</label>
          </div>
          <div class="col-sm-7">
            <input type="text" name="grad" id="grad" style="text-transform:uppercase">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="lstdata">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-1">

    </div>
   <div class="col-sm-10">
  <div class="jumbotron">
    <div class="card text-center">
      <h2>Examiner's Awarded List</h2>
    </div>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-2">
            Course Code :
          </div>
          <div class="col-sm-2">
             <?php echo $subid; ?>
          </div>
          <div class="col-sm-2">
            Credit :
          </div>
          <div class="col-sm-2">
             <?php echo $cred; ?>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2">
            Course Name :
          </div>
          <div class="col-sm-2">
             <?php echo $snam; ?>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-sm-2">
            Semester :
          </div>
          <div class="col-sm-2">
             <?php echo $sem; ?>
          </div>
        </div><hr>
        <div class="row">
          <div class="col-sm-2">
            &reg;=Repeating <input type="checkbox" name="" value="">
          </div>
          <div class="col-sm-2">
            (nc)=Taking as NON Credit <input type="checkbox" name="" value="">
          </div>
        </div>
        <hr>
      </div>
    </div>
    <div class="card">
      <div class="card-body table-responsive">
        <table class="table-hover table-bordered">
          <thead>
            <tr>
              <th width="4%">S.No</th>
              <th width="10%">Enrollment No.</th>
              <th width="20%">Name</th>
              <th width="10%">Registration No.</th>
               <th width="4%">Program of Stydy</th>
               <th width="10%">School</th>
               <th width="10%">Center</th>
               <th width="8%">Grade Awarded</th>
               <th width="8%"></th>
               <th width="10%"></th>
            </tr>
          </thead>
          <?php
             if ($result1->num_rows >0) {
               $i=1;

              while ($rows = mysqli_fetch_array($result1)) {

           ?>
           <tbody>
             <tr>
               <td><?php echo $i; ?></td>
               <td><?php echo $rows['enrollment']; ?></td>
               <td><?php echo $rows['st_name']; ?></td>
               <td><?php echo $rows['registration_no']; ?></td>
               <td><?php echo $type;  ?></td>
               <td><?php echo $rows['school']; ?></td>
               <td><?php echo $rows['stu_center']; ?></td>
               <td style="text-transform:uppercase"><?php echo $rows['grade']; ?></td>
               <td><?php echo $rows['numgrade']; ?></td>
               <td><?php echo "<button type='button' name='button' class='btn' id='myBtn'><i class='fas fa-edit' style='font-size:24px;color:blue'></i></button>"; ?></td>

             </tr>
           </tbody>
           <?php
             $i++;
           }
           echo "</table>";
         }
         else{
           echo "NO Records";
         }
       }
            ?>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <form class="" action="index.html" method="post">
          <div class="row">
            <div class="col-sm-2">
              Course Incharge :
            </div>
            <div class="col-sm-3">
               <input type="text" readonly="" name="nem" placeholder="<?php echo $tname; ?>" name="inc" >
            </div>
            <div class="col-sm-2">
              Submission Date :
            </div>
            <div class="col-sm-3">
                <input type="date" name="dt">
            </div>
            <br>
            <button type="submit" name="button" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="col-sm-1">

</div>
</div>
</div>
</body>
</html>


<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal('show');

     $tr=$(this).closest('tr');
     var data = $tr.children('td').map(function(){
       return $(this).text();
     }).get();

     console.log(data);

     $('#enroll').val(data[1]);
     $('#nam').val(data[2]);
     $('#grad').val(data[7]);

  });
});
</script>
