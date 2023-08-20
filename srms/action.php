<?php
//action.php
include("init.php");

$input = filter_input_array(INPUT_POST);

$first_name = mysqli_real_escape_string($conn, $input["grade"]);

if($input["action"] == 'edit')
{
 $query = "
 UPDATE student_sub
 SET grade = '".$first_name."'
 WHERE stu_id = '".$input["stu_id"]."'
 ";

 mysqli_query($conn, $query);

}
if($input["action"] == 'delete')
{
 $query = "
 DELETE grade FROM student_sub
 WHERE stu_id = '".$input["stu_id"]."'
 ";
 mysqli_query($conn, $query);
}

echo json_encode($input);

?>
