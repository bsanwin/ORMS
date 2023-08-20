<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="" method="POST">
    <input type="text" name="srch" />
    <input type="submit" value="Search" />
</form>
  </body>
</html>
<?php
    include("init.php");
     $s=4;
     $c="mca";

    if (isset($_POST["srch"]))
    {
        $search=$_POST["srch"];

        $sql = "SELECT sub_id FROM teacher_subject WHERE teach_id='$search' and course = '$s' and semester ='$c'";
        $result=mysqli_query($conn,$sql);

        // $row=mysqli_fetch_array($result);
        if(mysqli_num_rows($result)>0)
        {
          while($row = mysqli_fetch_array($result))
           {
             echo $row['sub_id'];
             echo "<br>";
           }
        }

        else {
            echo "no subject here";
        }
    }
?>
