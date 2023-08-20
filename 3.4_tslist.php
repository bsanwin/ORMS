<?php
    include("0dbconn.php");
    session_start();

    $tname = $_SESSION['teachname'];

    if (isset($_POST['a']) AND isset($_POST['b']) AND isset($_POST['c']) AND isset($_POST['d'])) {
      // code...
      $subid = $_POST['a'];
      $snam = $_POST['b'];
      $cors = $_POST['c'];
      $sem = $_POST['d'];

      $sql = "SELECT credit,sub_type FROM subject WHERE sub_code='$subid'";
      $result = mysqli_query($conn, $sql);
      if ($result->num_rows){
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $cred =  $row['credit'];
        $type =  $row['sub_type'];
      }

      $sql1 = "SELECT st.*,sub.grade,sub.numgrade FROM student st,stu_sub sub WHERE st.enrollment=sub.s_id AND sub.sub_id='$subid' AND st.course='$cors' AND st.semestr='$sem'";
      $result1 = mysqli_query($conn, $sql1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <title>ORMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style media="screen">
  <style type="text/css">
      .bs-example{
          margin: 20px;
      }
  </style>
</head>
<body>
  <!-- Modal
     -->
  <div class="modal fade" id="award_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
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
              Credit  :
            </div>
            <div class="col-sm-2">
              <?php echo $cred; ?>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-2">
              Course Name  :
            </div>
            <div class="col-sm-2">
              <?php echo $snam; ?>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-2">
              Semester  :
            </div>
            <div class="col-sm-2">
              <?php echo $sem; ?>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-2">
              &reg;=Repeating <input type="checkbox" value="">
            </div>
            <div class="col">
              (nc)=Taking as Non Credit <input type="checkbox" value="">
            </div>
          </div>
          <hr>
        </div>
      </div>
      <div class="card">
        <div class="card-body table-responsive">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th device-width="4%">S.No.</th>
                <th device-width="10%">Enrollment Number</th>
                <th scope="col">Name</th>
                <th scope="col" device-width="10%">Registration Number</th>
                <th scope="col" device-width="3%">Program of study</th>
                <th device-width="5%">School</th>
                <th device-width="5%">Center</th>
                <th device-width="5%">Grade Awarded</th>
                <th device-width="5%"></th>
                <th></th>
              </tr>
            </thead>
        <?php if ($result1->num_rows >0){
          $i=1;
            while ($rows = mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
           ?>

            <tbody>
               <tr>
                 <td><?php echo $i; ?></td>
                 <td><?php echo $rows["enrollment"]; ?></td>
                 <td><?php echo $rows["st_name"]; ?></td>
                 <td><?php echo $rows["registration_no"]; ?></td>
                 <td><?php echo $type; ?></td>
                 <td><?php echo $rows["school"]; ?></td>
                 <td><?php echo $rows["stu_center"]; ?></td>
                 <td><?php echo $rows["grade"]; ?></td>
                 <td><?php echo $rows['numgrade']; ?></td>
                 <td> <button type="button" class="btn" id="editbtn">edit</button>   </td>
               </tr>
            </tbody>
            <?php
            $i++;
                  }
                }
                else {
                  echo "No student here";
                }
              }
            ?>

          </table>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <form class="" action="index.html" method="post">
            <div class="row">
            <div class="col-sm-2">
              Course Incharge :
            </div>
              <div class="form-group col-sm-3">
              <input type="text" readonly="" class="form-control mb-2 mr-sm-2" placeholder="<?php echo $tname; ?>" name="inc">
            </div>
            <div class="col-sm-2">
              Submission Date :
            </div>
            <div class="form-group col-sm-3">
              <input type="date" class="form-control mb-2 mr-sm-2" name="dt">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
          </form>
        </div>
      </div>
     </div>
     <div class="col-sm-1">

     </div>
    </div>
  </div>
  </div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
  $('#editbtn').on('click',function(){

    $('#award_modal').modal('show')

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
       $('#awd').val(data[8]);

  });
});
</script>
