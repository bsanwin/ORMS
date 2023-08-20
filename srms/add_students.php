<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" type="text/css" href="./css/form.css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <title>Add Students</title>
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
        <!-- <a href="logout.php" style="color: white">Logout</a> -->
    </div><br><br>
<hr>
    <div class="nav">
        <ul>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn">Teacher &nbsp;

                </a>
                <div class="dropdown-content" id="1">
                    <a href="add_classes.php">Add Teacher</a>
                    <a href="add_t_sub.php">Add Teacher Subject</a>
                      <a href="deletteacher.php">Delete Teacher Subject</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Students &nbsp;

                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_students.php">Add Students</a>
                    <a href="add_stu_sub.php">Add Students Subject</a>
                    <a href="deleteR.php">Delete Students subject</a>
                    <a href="deletstudent.php">Delete Students </a>
                    <a href="allow.php"> Students list </a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Subject &nbsp;

                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_results.php">Add Subjects</a>
                </div>
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
    </div><hr>

    <div class="main">
        <form action="" method="post">
            <fieldset>
                <legend>Add Student</legend>
                <input type="text" name="roll" placeholder="Enrollment No." style='text-transform:uppercase'>
                <input type="text" name="name" placeholder="Student Name" style='text-transform:capitalize'>
                <input type="text" name="cour" placeholder="Course" style='text-transform:uppercase'>
                <input type="text" name="se" placeholder="semester">
                <input type="text" name="reg" placeholder="Registration No">
                <input type="submit" value="Submit">
            </fieldset>
        </form>
    </div>

    <!-- <div class="footer" style="width:100%;height:auto;background-color:#585f68;">
              <div class="footer-contact" style="margin-left:10%;">
                  <span>Contact Us</span>
                  <p>Go through the link :  jnu.ac.in</p>
                  <p>Phone no. : 011-1832724</p>
              </div>
              <div class="footer-info"style="margin-left:10%;">
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

    if(isset($_POST['roll'],$_POST['name'],$_POST['cour'],$_POST['se'],$_POST['reg'])) {
        $enroll=$_POST['roll'];
        $name=$_POST['name'];
        $cour=$_POST['cour'];
        $se=$_POST['se'];
        $reg=$_POST['reg'];

        // validation
        if (empty($enroll) or empty($name) or empty($cour) or empty($se) or empty($reg)) {
            if(empty($enroll))
                echo '<p class="error">Please Enrollment no.</p>';
            if(empty($name))
                echo '<p class="error">Please enter name</p>';
            if(empty($cour))
                echo '<p class="error">Please enter course</p>';
            if(empty($se))
                echo '<p class="error">Please enter semester</p>';
            if(empty($reg))
                echo '<p class="error">Please enter registration no.</p>';

            exit();
        }

        $sql = "INSERT INTO `student` (`enrollment`, `name`,`stu_course`, `sem`, `registrarion`)
         VALUES ('$enroll','$name','$cour', '$se', '$reg')";
        $result=mysqli_query($conn,$sql);

        if (!$result) {
            echo '<script language="javascript">';
            echo 'alert("Invalid Details")';
            echo '</script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Successful")';
            echo '</script>';
        }

    }
?>
