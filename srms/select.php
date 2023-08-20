<?php

//select.php

include('init.php');

$query =$conn->query ("SELECT stu_id,sub_id,repeating,grade FROM student_sub ORDER BY stu_id DESC");

if($query->num_rows>0)
{
 while($row = $query->fetch_assoc())
 {
  $data[] = $row;
 }

 echo json_encode($data);
}

?>
