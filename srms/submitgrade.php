<?php
include("init.php");
$db = mysqli_select_db($conn,'srms');

$size=sizeof($_POST['enrollment']);
echo "string".$size;
$po=$_POST['g'];
while($size>0)
{
echo "pop".$po;
  $size--;
}

 //$jj=sizeof($en);
//echo "string".$jj;


 ?>
