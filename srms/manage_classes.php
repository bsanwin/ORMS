<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="css/manage.css">
    <title>singleResult</title>
<style media="screen">
  .container{
    margin-top: -50px;
  }
</style>

</head>
<style media="screen">
  p    {font-size: 160%;
  }
</style>
<body>
  <center><h1>STUDENT RESULT</h1></center>
    <div class="main">
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

      <p><b>Name:</b>&nbsp;<?php echo $nam;?>&nbsp;&nbsp;&nbsp;<b>Enrollment No.:</b>&nbsp;<?php echo $re;?></p>
      <p><b>Program OF Study:</b>&nbsp;<?php echo $c;?>&nbsp;&nbsp;&nbsp;<b>Semester:</b>&nbsp;<?php echo $s;?> </p>
     </div>
        <?php
          $bul=sizeof($a_id);
         if ($bul > 0) {
               echo "<table>
                <tr>
                <th>CODE</th>
                <th>SUBJECT&nbsp;NAME</th>
                <th>CREDIT</th>
                <th>ELECTIVE</th>
                <th>GRADE</th>
                <th></th>
                </tr>";
                  $h=0;
                  $sum=0;
                while($bul>0){

                  echo "<tr>";
                  echo "<td>" . $a_id[$h] . "</td>";
                  echo "<td>" . $am[$h] . "</td>";
                  echo "<td>" . $cred[$h] . "</td>";
                  echo "<td>" . $elect[$h] . "</td>";
                  echo "<td>" . $d_grade[$h] . "</td>";
                  echo "<td>" . $num[$h]. "</td>";
                  echo "</tr>";
                  $sum=$sum+($num[$h]*$cred[$h]);
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
    <div class="card">
      <div class="card-body">
        <?php
        $sum=$sum/5;
        echo "HGPA  :".$sum;
         ?>

      </div>

    </div>

</body>
</html>
