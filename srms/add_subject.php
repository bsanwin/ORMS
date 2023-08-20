<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/form.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <title>Add subject</title>
    <style media="screen">
      .nav{
        margin-top: -15px;
      }
      .heading{
        font-size: 50px;
      }
    </style>
</head>
<body>
<br><br>
    <div class="title">
        <a href="dashboard.php"><img src="images\logo.png" class="img-circle" alt="Cinque Terre" width="70" height="80"></a>
        <span class="heading">Student Result Management System</span>
        <!-- <a href="logout.php" style="color: white">LOGOUT</a> -->
    </div><br>
<hr>
    <div class="nav">
    <ul>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn">Teacher &nbsp
                    <!-- <span class="fa fa-angle-down"></span> -->
                </a>
                <div class="dropdown-content" id="1">
                    <a href="add_classes.php">Add Teacher</a>
                    <a href="add_t_sub.php">Add Teacher Subject</a>
                    <a href="deletteacher.php">Delete Teacher Subject</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Students &nbsp
                    <!-- <span class="fa fa-angle-down"></span> -->
                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_students.php">Add Students</a>
                    <a href="add_stu_sub.php">Add Students subject</a>
                    <a href="deleteR.php">Delete Students subject</a>
                    <a href="deletstudent.php">Delete Students </a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Subject &nbsp
                    <!-- <span class="fa fa-angle-down"></span> -->
                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_subject.php">Add Subjects</a>
                </div>
            </li>
          </li>
          <li class="dropdown" onclick="toggleDisplay('1')">
              <a href="check.php" class="dropbtn">Submitted&nbsp;Grade &nbsp;
                  <!-- <span class="fa fa-angle-down"></span> -->
              </a>
            </li>
&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;
 &emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;
          <li>

          <a href="logout.php" style="color: white">Logout</a>
          </li>
        </ul>
    </div>
    <hr>

    <div class="main">
        <form action="" method="post">
            <fieldset>
                <legend>Add Subject</legend>
                <input type="text" name="p0" placeholder="Subject Code">
                <input type="text" name="p1" id="" placeholder="Subject Name">
                <input type="text" name="p2" id="" placeholder="Credit">
                <input type="text" name="p3" id="" placeholder="Elective">
                <input type="submit" value="Submit">
            </fieldset>
        </form>
    </div>


    <!-- <div class="footer" style="width:100%;height:auto;background-color:#585f68;">
              <div class="footer--contact" style="margin-left:10%;">
                  <span>Contact Us</span>
                  <p>Go through the link :  jnu.ac.in</p>
                  <p>Phone no. : 011-1832724</p>
              </div>
              <div class="footer--info"style="margin-left:10%;">
                  <span>Important Links</span>
                  <a href="homepage.html">Home</a>
                  <a href="login.php">Admin Login</a>
                  <a href="login.php">Results</a>
              </div>
          </div>-->
</body>
</html>

<?php
	include('init.php');

    if (isset($_POST['p0'],$_POST['p1'],$_POST['p2'],$_POST['p3'])) {
       $id=$_POST["p0"];
       $nm=$_POST["p1"];
       $cre=$_POST["p2"];
       $el=$_POST["p3"];

        // validation
        if (empty($id) or empty($nm) or empty($cre) or empty($el)) {
            if(empty($id))
                echo '<p class="error">Please enter ID</p>';
            if(empty($nm))
                echo '<p class="error">Please enter Name</p>';
            if(empty($cre))
                echo '<p class="error">Please enter credit</p>';
            if(empty($el))
                echo '<p class="error">Please enter elective</p>';
            exit();
        }

        $sql = "INSERT INTO `subjects` (`subject_code`, `subject_name`,`credit`, `elective`)
        VALUES ('$id', '$nm','$cre','$el')";
        $result=mysqli_query($conn,$sql);

        if (!$result) {
            echo '<script language="javascript">';
            echo 'alert("Invalid detail entry")';
            echo '</script>';
        } else{
            echo '<script language="javascript">';
            echo 'alert("Successful")';
            echo '</script>';
        }
    }

?>
