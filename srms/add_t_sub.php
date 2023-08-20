<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./css/form.css">
    <title>Dashboard</title>
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
                    <!-- <span class="fa fa-angle-down"></span> -->
                </a>
                <div class="dropdown-content" id="1">
                    <a href="add_classes.php">Add Teacher</a>
                    <a href="add_t_sub.php">Add Teacher Subject</a>
                    <a href="deletteacher.php">Delete Teacher Subject</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Students &nbsp;
                    <!-- <span class="fa fa-angle-down"></span> -->
                </a>
                <div class="dropdown-content" id="2">
                    <a href="add_students.php">Add Students</a>
                    <a href="add_stu_sub.php">Add Student Subjects</a>
                    <a href="deleteR.php">Delete Students subject</a>
                    <a href="deletstudent.php">Delete Students </a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Subject &nbsp;
                    <!-- <span class="fa fa-angle-down"></span> -->
                </a>
                <div class="dropdown-content" id="3">
                    <a href="add_subject.php">Add Subject</a>
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
            <legend>Add Teacher Subject</legend>

                <?php
                    include("init.php");

                    $select_teacher_query="SELECT `teacher_id` from `teacher`";
                    $select_subject_query="SELECT `subject_code` from `subjects`";
                    $teacher_result=mysqli_query($conn,$select_teacher_query);
                    $subject_result=mysqli_query($conn,$select_subject_query);
                    //select class
                    echo '<select name="prof">';
                    echo '<option selected disabled>Select Teacher ID</option>';

                        while($row = mysqli_fetch_array($teacher_result)) {
                            $display=$row['teacher_id'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                    echo'</select>';

                    echo '<select name="sub">';
                    echo '<option selected disabled>Select Subject ID</option>';

                        while($row = mysqli_fetch_array($subject_result)) {
                            $display=$row['subject_code'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                    echo'</select>';
                ?>

                <input type="text" name="rno" placeholder="Course" style='text-transform:uppercase'>
                <input type="text" name="p1" id="" placeholder="Semester">
                <input type="text" name="p2" id="" placeholder="LTP" style='text-transform:uppercase'>
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
    if(isset($_POST['rno'],$_POST['p1'],$_POST['p2']))
    {
      if(!isset($_POST["prof"],$_POST['sub']))
      {
            $prof=null;
            $sub=null;
       }
      else
        $prof=$_POST["prof"];
        $sub=$_POST["sub"];
        $rno=$_POST["rno"];
        $p1=$_POST["p1"];
        $p2=$_POST["p2"];

        // validation
        if (empty($prof) or empty($sub) or empty($rno) or empty($p1) or  empty($p2)) {
           if(empty($prof))
              echo '<p class="error">Please select teacher ID</p>';
           if(empty($sub))
              echo '<p class="error">Please select subject Id</p>';
            if(empty($rno))
                echo '<p class="error">Please enter course</p>';
            if(empty($p1))
                echo '<p class="error">Please enter semester</p>';
            if(empty($p2))
                echo '<p class="error">Please enter LTP</p>';
            exit();
        }

        $sql="INSERT INTO `teacher_subject` (`teach_id`,`sub_id`, `course`, `semester`, `ltp`)
         VALUES ('$prof', '$sub', '$rno', '$p1', '$p2')";
        $sql=mysqli_query($conn,$sql);

        if (!$sql) {
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
