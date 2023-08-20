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

th, td {
  text-align: center;
  padding: 8px;
}

</style>

</head>

<body>

</body>
</html>


<?php

include('init.php');

$db = mysqli_select_db($conn,'srms');
$s=$_POST['AR'];
   $c='mca';
   $enrolllist=array();
   $name=array();

  $sql = "SELECT * FROM student where stu_course='$c' and sem='$s'";
  $result = mysqli_query($conn, $sql);
  $nrow=sizeof($result);
  //echo $nrow;
  while( $row = mysqli_fetch_array($result,MYSQLI_ASSOC))
  {
       $en=$row['enrollment'];
       $nm=$row['name'];
       array_push($enrolllist,$en);
       array_push($name,$nm);

    }
  $nrow=sizeof($enrolllist);
  $res=array();
  $idsub=array();
  $subresult=array();
  $subidsub=array();
  $numgr=array();
  $nugr=array();
  $i=0;
  while($nrow>0){
  $x=$enrolllist[$i];
  //echo "$x";
  $sq = "SELECT sub_id,grade,numgrade FROM student_sub WHERE stu_id='$x'";
  $re = mysqli_query($conn, $sq);
  while($r = mysqli_fetch_array($re,MYSQLI_ASSOC)){

     $sd=$r['sub_id'];
     $result=$r['grade'];
     $nog=$r['numgrade'];
      array_push($subidsub,$sd);
     array_push($subresult,$result);
     array_push($numgr,$nog);
  }
  array_push($idsub,$subidsub);
  array_push($res,$subresult);
  array_push($nugr,$numgr);
  $nrow--;
  $i++;
}

$ure=sizeof($subresult);
if($ure>0){

$no=5;
//count($subidsub);
$sub_cre=array();
$sub_name=array();
$k=0;
while($no>0){
$q=$subidsub[$k];
 $ql = "SELECT subject_name,credit FROM subjects WHERE subject_code='$q'";
  $sub = mysqli_query($conn, $ql);

         $col=mysqli_fetch_array($sub,MYSQLI_ASSOC);
         $nem=$col['subject_name'];
         $creed=$col['credit'];
  array_push($sub_name,$nem);
  array_push($sub_cre,$creed);
$no--;
$k++;
}
}
$q=0;
$add=0;
$kk=5;
while($kk>0)
{
  $add=$add+$sub_cre[$q];
  $kk--;
  $q++;
}

$gade=array();

//echo "666667".$sub_name;
$pure=sizeof($subresult);

if ($pure>0) {
  // code...
$lo=5;
$sn=1;
//sizeof($subidsub);
$h=0;
echo "<div class='container'>
  <div class='jumbotron'>
  <div class='card'>
  <div class='card-body'>
  <center><h3>GRADE MONSOON SEMESTER</h3></center>
  <center><h3>MCA</h3></center>
  </div>
  </div>
    <div class='card'>
    <div class='card-body'>";
echo "<table class='table table-hover table-bordered'><tr>";
echo "<td>S.No.</td>";
echo "<td>Student&nbspName</td>";
while($lo>0)
{
echo "<td>".$subidsub[$h]."</td>";
echo "<td>Grade</td>";
$lo--;
$h++;
}
echo "<td>SGPA</td>";

$lo=sizeof($sub_name);
$h=0;
echo "</tr><tr>";
echo "<td></td>";
echo "<td>Course</td>";
while($lo>0){
echo "<td>".$sub_name[$h]."</td>";
echo "<td></td>";
$lo--;
$h++;
}
echo "<td></td>";

echo "</tr><tr>";
   $nrow=sizeof($enrolllist);
  // $jok=sizeof($res);
   $i=0;
   $atom;
   $ncol=5;
   $j=0;
   while($nrow>0)
   {
     echo "<td>".$sn."</td>";
     echo "<td>".$name[$i]."</td>";
     $ncol=5;
     $sum=0;
     $p=0;
    //$ncol=sizeof($res[$i]);
     while($ncol>0){
    //echo "test";
     echo "<td>".$subresult[$j]."</td>";
     echo "<td>".$numgr[$j]."</td>";

       $sum=$sum+($numgr[$j]*$sub_cre[$p]);
      $j++;
      $ncol--;
      $p++;
    }
    $sum=$sum/$add;
    echo "<td>".$sum."</td>";

      $nrow--;
      $i++;
      $sn++;
  echo "</tr>";
   }
   echo "</table>";
   echo "  </div>  </div>   <div class='w3-right footer'>
   <button onclick='myFunction()'>Print</button>

<script>
function myFunction() {
window.print();
}
</script>

      </div></div>  </div> ";

 }
 else{
   echo '<script language="javascript">';
   echo 'alert("Result in Not Updated")';
   echo '</script>';
   //header("Location:cb.php");


 }
 ?>
