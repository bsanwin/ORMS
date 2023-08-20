<<?php

//multiple_update.php

include('init.php');

if(isset($_POST['hidden_id']))
{
 $name = $_POST['stu_id'];
 $address = $_POST['sub_id'];
 $gender = $_POST['repeating'];
 $age = $_POST['grade'];
 $id = $_POST['hidden_id'];
 for($count = 0; $count < count($id); $count++)
 {
  $data = array(
   ':name'   => $name[$count],
   ':address'  => $address[$count],
   ':gender'  => $gender[$count],
   ':age'   => $age[$count],
   ':id'   => $id[$count]
  );
  $query = "
  UPDATE student_sub
  SET stu_id = :name, sub_id = :address, repeating = :gender,  grade = :age
  WHERE stu_id = :id
  ";
  $statement = $conn->prepare($query);
  $statement->execute($data);
 }
}

?>
