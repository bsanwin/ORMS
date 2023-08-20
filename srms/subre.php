<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
  </style>
  </head>
  <body>
    <div class="cotainer">
      <div class="jumbotron">
<div class="card">
  <div class="card-body">

<?php
      include('init.php');

      $sql = "SELECT tname,tcourse,tsem,tsub,tdate FROM submitr";
      $result = mysqli_query($conn, $sql);
      $t=1;
      if (mysqli_num_rows($result) > 0) {
         echo "<table class='table table-hover table-bordered'>
        <center><h2>Submitted Grade By Teacher</h2></center>
          <tr>
          <th>S.NO.</th>
          <th>NAME</th>
          <th>Course</th>
          <th>Semester</th>
          <th>Subject</th>
          <th>Submit Date</th>
          </tr>";

          while($row = mysqli_fetch_array($result))
            {
              echo "<tr>";
              echo "<td>".$t."</td>";
              echo "<td>" . $row['tname'] . "</td>";
              echo "<td>" . $row['tcourse'] . "</td>";
              echo "<td>" . $row['tsem'] . "</td>";
              echo "<td>" . $row['tsub'] . "</td>";
              echo "<td>" . $row['tdate'] . "</td>";
              echo "</tr>";
              $t++;
            }

          echo "</table>";
      } else {
          echo "No Students";
      }
  ?>
</div>
</div>
</div>
</div>
</body>
</html>
