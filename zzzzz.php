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
      if ($result){
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $cred =  $row['credit'];
        $type =  $row['sub_type'];
      }

      $sql1 = "SELECT st.*,sub.grade FROM student st,stu_sub sub
           WHERE sub.sub_id='$subid' AND sub.s_id=st.enrollment";
      $result1 = mysqli_query($conn, $sql1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Bordered Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example{
            margin: 20px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>


<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-8">
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
                <th></th>
              </tr>
            </thead>
        <?php if ($result1){
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
                 <td><?php echo $i; ?></td>
                 <td><?php echo $rows["grade"]; ?></td>
                 <td></td>
               </tr>
            </tbody>
            <?php
            $i++;
                  }
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
     <div class="col-sm-2">

     </div>
    </div>
  </div>
</div>
</body>
</html>
