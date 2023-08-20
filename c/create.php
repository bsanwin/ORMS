<?php
include "0dbconn.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$uname = $_POST['uname'];
		$past = $_POST['past'];


		//write sql query

		$sql = "INSERT INTO `admin_login`(`userid`, `password`) VALUES ('$uname','$past')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}



?>

<!DOCTYPE html>
<html>
<body>

<h2>Signup Form</h2>

<form action="" method="POST">
  <fieldset>
    <legend>Personal information:</legend>
    Username:<br>
    <input type="text" name="uname">
    <br>
    password:<br>
    <input type="text" name="past">
    <br>
    <br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>

</body>
</html>
