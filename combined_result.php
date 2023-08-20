<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <title>ORMS</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


  </head>
  <body style="padding-top:80px">


    <?php
    include('0dbconn.php');

    //student info
    $sid=array();
    $sname=array();

    $sql =mysqli_query($conn, "SELECT enrollment,st_name FROM student WHERE course='MCA' AND semestr=4");
    while($r=mysqli_fetch_array($sql,MYSQLI_ASSOC))
    {
    $a=$r['enrollment'];
    $b=$r['st_name'];

    array_push($sid,$a);
    array_push($sname,$b);
    }
    $sizen=sizeof($sid);//no of student

    //students grades

    $x=array();
    $y=array();
    $z=array();
    $suid=array();
    $sugrad=array();
    $sunum=array();

    $k=sizeof($sid);
    $i=0;

    while($k>0){
    $ll=$sid[$i];

      $sq =mysqli_query($conn, "SELECT sub_id,grade,numgrade FROM stu_sub WHERE s_id='$ll'");
    while($w=mysqli_fetch_array($sq,MYSQLI_ASSOC)){
    $c=$w['sub_id'];
    $d=$w['grade'];
    $e=$w['numgrade'];
    array_push($x,$c);
    array_push($y,$d);
    array_push($z,$e);
    }
    array_push($suid,$x);  //grade per student
    array_push($sugrad,$y);
    array_push($sunum,$z);
    $k--;
    $i++;
    }
    $grade=sizeof($y);
    //how many subjects
    $arr=array();
    $s=mysqli_query($conn,"SELECT sid FROM teach_sub WHERE course='MCA' AND semester =4");
    while($q=mysqli_fetch_array($s,MYSQLI_ASSOC)){
    $p=$q['sid'];
    array_push($arr,$p);
    }
    $si=sizeof($arr);//no of subjects
    $li=$si;
    //subject info
    $s_name=array();
    $s_cred=array();

    $l=0;
    while ($si >0) {
      $t=$arr[$l];
      $aa =mysqli_query($conn, "SELECT sub_name,credit FROM subject WHERE sub_code='$t'");
      $col=mysqli_fetch_array($aa,MYSQLI_ASSOC);
      $bb = $col['sub_name'];
      $cc= $col['credit'];
      array_push($s_name,$bb);//subject name credit
      array_push($s_cred,$cc);
      $si--;
      $l++;
    }
    $szcred=sizeof($s_cred);

    $v=0;
    $add=0;
    $kv=$szcred;
    while($kv>0)
    {
      $add=$add+$s_cred[$v];
      $kv--;
      $v++;
    }

    $sn=1;
    if ($grade) {
      $xx=$si;
      $ww=$xx;
      $yy=1;
      $zz=0;

      echo "<div class='container'>
        <div class='jumbotron'>
        <div class='card'>
        <div class='card-body'>
        <center><h3>MCA</h3></center>
        </div>
        </div>
          <div class='card'>
          <div class='card-body'>;
            <table class='table table-hover table-bordered'><tr>
              <td>S.No.</td>
              <td>Student&nbspName</td>";

         while($xx>0){
             echo "<td>".$arr[$zz]."</td>
                   <td>Grade</td>";
            $xx--;
            $zz++;
         }
      echo " <td>SGPA</td></tr>";
        $zz=0;
        echo "<tr><td></td>";

        while ($ww) {
          echo "<td>".$s_name[$zz]."</td>
                 <td></td>";
              $$ww--;
              $zz++;
          }
          echo "<td></td>
                </tr><tr>";

         $i=0;
         $atom;
         $j=0;

         while($sizen){
             echo "<td>".$sn."</td>
                   <td>".$sname[$i]."</td>";
                   $li=$si;
                   $sum=0;
                   $p=0;

                   while ($li) {
                     echo "<td>".$y[$j]."</td>
                          <td>".$z[$j]."</td>";

                          $sum=$sum+($z[$j]*$s_cred[$p]);
                          $j++;
                          $li--;
                          $p++;
                   }
                   $sum=$sum/$add;
                   echo "<td>".$sum."</td>";

                  $sizen--;
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


  </body>
</html>
