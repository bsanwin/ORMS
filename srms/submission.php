<?php
include("init.php");

  $name=$_POST['exa'];
  $co=$_POST['exm'];
  $se=$_POST['exp'];
  $sub=$_POST['examp'];
  $da=$_POST['ex'];


  if (empty($name) or empty($co) or empty($se) or empty($sub) or empty($da)) {
       if(empty($name))
          echo '<p class="error">Please enter name</p>';
       if(empty($da))
          echo '<p class="error">Please select subject Id</p>';
        exit();
    }

    $sql="INSERT INTO submitr (tname,tcourse,tsem,tsub,tdate)
     VALUES ('$name', '$co','$se','$sub','$da')";
    $sql_r=mysqli_query($conn,$sql);

    if (!$sql_r) {
        echo '<script>
        alert("Invalid Details")
           </script>';
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Successful")';
        echo '</script>';
    }
 ?>
