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
<body></body>
</html>

<?php

include("init.php");
$db = mysqli_select_db($conn,'srms');
$se=4;

$sql = "SELECT  * FROM teacher ";
$grade = mysqli_query($conn, $sql);
echo "<div class='container'>
  <div class='jumbotron'>
  <center><h2>STUDENT LIST</h2></center>
  <div class='card'>
    <div class='card-body'>";
echo "<table class='table table-bordered table-hover'>
<thead>
  <tr>
    <th>Teacher ID</th>
    <th>Name</th>
  </tr>
</thead>";
while ($cow = mysqli_fetch_array($grade,MYSQLI_ASSOC)){
  echo "<tr>";
  echo "<td>".$cow['teacher_id']."</td>";
  echo "<td>".$cow['teacher_name']."</td>";
  echo "</tr>";

}
echo "</table>";
echo "</div>
</div>
</div>
</div>";
 ?>
