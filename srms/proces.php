<?php
include("init.php");
// Basic example of PHP script to handle with jQuery-Tabledit plug-in.
// Note that is just an example. Should take precautions such as filtering the input data.
$result=$mysqli->query("SELECT stu_id,sub_id,repeating,grade FROM student_sub");

while($row=$result->fetch_assoc()){
?>
<tr>
  <td><?php echo $row['stu_id'];  ?></td>
  <td><?php echo $row['sub_id'];  ?></td>
  <td><?php echo $row['repeating'];  ?></td>
  <td><?php echo $row['grade'];  ?></td>
</tr>

<?php
}
}
?>
