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
          <!-- <a href="logout.php" style="color: white">LOGOUT</a> -->
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
                    <a href="add_results.php">Add Subject</a>
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
            <legend>Add Subject</legend>

                <?php
                    include("init.php");

                    $select_class_query="SELECT `name` from `class`";
                    $class_result=mysqli_query($conn,$select_class_query);
                    //select class
                    /*echo '<select name="class_name">';
                    echo '<option selected disabled>Select Class</option>';

                        while($row = mysqli_fetch_array($class_result)) {
                            $display=$row['name'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                    echo'</select>';*/
                ?>

                <input type="text" name="rno" placeholder="Subject Code" style='text-transform:uppercase'>
                <input type="text" name="p1" id="" placeholder="Subject Name" style='text-transform:capitalize'>
                <input type="text" name="p2" id="" placeholder="Credit">
                <input type="text" name="p3" id="" placeholder="Elective" style='text-transform:uppercase'>
                <input type="submit" value="Submit">
            </fieldset>
        </form>
    </div>
    <!-- <div class="footer" style="width:100%;height:auto;background-color:#585f68;">
              <div class="footercontact" style="margin-left:10%;">
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
    if(isset($_POST['rno'],$_POST['p1'],$_POST['p2'],$_POST['p3'],$_POST['p4'],$_POST['p5']))
    {
        $rno=$_POST['rno'];
        if(!isset($_POST['class_name']))
            $class_name=null;
        else
            $class_name=$_POST['class_name'];
        $p1=(int)$_POST['p1'];
        $p2=(int)$_POST['p2'];
        $p3=(int)$_POST['p3'];
        $p4=(int)$_POST['p4'];
        $p5=(int)$_POST['p5'];

        $marks=$p1+$p2+$p3+$p4+$p5;
        $percentage=$marks/5;

        // validation
        if (empty($class_name) or empty($rno) or $p1>100 or  $p2>100 or $p3>100 or $p4>100 or $p5>100 or $p1<0 or  $p2<0 or $p3<0 or $p4<0 or $p5<0 ) {
            if(empty($class_name))
                echo '<p class="error">Please select class</p>';
            if(empty($rno))
                echo '<p class="error">Please enter roll number</p>';
            if(preg_match("/[a-z]/i",$rno))
                echo '<p class="error">Please enter valid roll number</p>';
            if(preg_match("/[a-z]/i",$marks))
                echo '<p class="error">Please enter valid marks</p>';
            if($p1>100 or  $p2>100 or $p3>100 or $p4>100 or $p5>100 or $p1<0 or  $p2<0 or $p3<0 or $p4<0 or $p5<0)
                echo '<p class="error">Please enter valid marks</p>';
            exit();
        }

        $name=mysqli_query($conn,"SELECT `name` FROM `students` WHERE `rno`='$rno' and `class_name`='$class_name'");
        while($row = mysqli_fetch_array($name)) {
            $display=$row['name'];
            echo $display;
         }

        $sql="INSERT INTO `result` (`name`, `rno`, `class`, `p1`, `p2`, `p3`, `p4`, `p5`, `marks`, `percentage`) VALUES ('$display', '$rno', '$class_name', '$p1', '$p2', '$p3', '$p4', '$p5', '$marks', '$percentage')";
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
