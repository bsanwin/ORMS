<!DOCTYPE html>
<html lang="en">
<head>
  <title>combine result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style media="screen">
.table {
  border-collapse: collapse;
  width: 100%;
}
p.a {
  word-spacing: normal;
}

th, td {
  text-align: center;
  padding: 8px;
}

</style>

</head>
<body>
  <div class="container">
    <div class="jumbotron">
      <div class="card">
        <div class="card-body">
          <center><h4>STUDENT RESULT</h4></center>
        </div>

      </div>
      <div class="card">
        <div class="card-body">
          <?php
              include('init.php');
                  $re=$_POST['re'];

                  if (empty($re) ) {
                      if(empty($re))
                          echo '<p class="error">Please enter enrollment no</p>';
                      exit();
                  }
              $db = mysqli_select_db($conn,'srms');
                 $a_id=array();
                 $d_grade=array();
                 $num=array();
              $sql = "SELECT sub_id,grade,numgrade FROM student_sub where stu_id='$re' ";
              $result = mysqli_query($conn, $sql);

              while( $row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                 $id=$row['sub_id'];
                 $grey=$row['grade'];
                 $ag=$row['numgrade'];
                 array_push($a_id,$id);
                 array_push($d_grade,$grey);
                 array_push($num,$ag);
              }

            $obul=sizeof($a_id);

             $am=array();
             $cred=array();
             $elect=array();
             $k=0;
             while ($obul>0) {
              $di=$a_id[$k];
              $sq = "SELECT * FROM subjects where subject_code='$di'";
              $sub_info = mysqli_query($conn, $sq);
              $col=mysqli_fetch_array($sub_info);
              $snam=$col['subject_name'];
              $scr=$col['credit'];
              $el=$col['elective'];
              array_push($am,$snam);
                array_push($cred,$scr);
                  array_push($elect,$el);
                  $obul--;
                  $k++;
               }

              $sl = "SELECT name,stu_course,sem FROM student where enrollment='$re' ";
              $stud = mysqli_query($conn, $sl);

              if (mysqli_num_rows($stud) > 0){
                 $row = mysqli_fetch_array($stud);
                 $nam=$row['name'];
                 $c=$row['stu_course'];
                 $s=$row['sem'];
              }

        ?>
           <div class="container">

        <p class="a" style="font-size:1.2vw;"><b>Name:</b>&nbsp;<?php echo $nam;?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>Enrollment No.:</b>&nbsp;<?php echo $re;?></p>
        <p style="font-size:1.2vw;"><b>Program Of Study:</b>&nbsp;<?php echo $c;?>&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;<b>Semester:</b>&nbsp;<?php echo $s;?> </p>
       </div>
          <?php
            $bul=sizeof($a_id);
           if ($bul > 0) {
                 echo "<table class='table table-striped table-hover'>
                  <tr>
                  <th scope='col' width='5%'>CODE</th>
                  <th scope='col' width='10%'>SUBJECT&nbsp;NAME</th>
                  <th scope='col' width='5%'>CREDIT</th>
                  <th scope='col' width='5%'>GRADE</th>
                  <th scope='col' width='5%'></th>
                  </tr>";
                    $h=0;
                    $sum=0;
                    $add=0;
                  while($bul>0){

                    echo "<tr>";
                    echo "<td>" . $a_id[$h] . "</td>";
                    echo "<td>" . $am[$h] . "</td>";
                    echo "<td>" . $cred[$h] . "</td>";
                    echo "<td>" . $d_grade[$h] . "</td>";
                    echo "<td>" . $num[$h]. "</td>";
                    echo "</tr>";
                    $sum=$sum+($num[$h]*$cred[$h]);
                    $add=$add+$cred[$h];
                    $bul--;
                    $h++;
                    }

                  echo "</table>";
              }

              else {
                  echo "0 results";
              }
          ?>

        </div>

      </div>

      <div class="card">
        <div class="card-body">
          <?php
          $sum=$sum/$add;
          echo "SGPA  :".$sum;
           ?>

        </div>

      </div>

      <button onclick="myFunction()">Print </button>

<script>
function myFunction() {
window.print();
}
</script>


    </div>

  </div>

</body>
</html>
