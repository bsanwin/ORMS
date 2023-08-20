<?php
  include 'init.php';


if(isset($_POST['email'])){

	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$id = $_POST['id'];

	//  query to update data

	$result  = mysqli_query($conn , "UPDATE student_sub SET firstName='$firstName' , lastName='$lastName' , email = '$email' WHERE id='$id'");
	if($result){
		echo 'data updated';
	}

}
?>
