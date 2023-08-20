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
            <legend>Add Student Subject</legend>

                <?php
                    include("init.php");

                    $select_student_query="SELECT enrollment from student";
                  //  $select_subject_query="SELECT `subject_code` from `subjects`";
                    $student_result=mysqli_query($conn,$select_student_query);
                    //$subject_result=mysqli_query($conn,$select_subject_query);
                    //select class
                    echo '<select name="en">';
                    echo '<option selected disabled>select Student ID</option>';

                        while($row = mysqli_fetch_array($student_result)) {
                            $display=$row['enrollment'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                    echo'</select>';

                   $select_subject="SELECT subject_code from subjects";
                   $subject=mysqli_query($conn,$select_subject);
                    echo '<select name="sub1">';
                    echo '<option selected disabled>1. Subject ID</option>';

                        while($row = mysqli_fetch_array($subject)) {
                            $display=$row['subject_code'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                    echo'</select>';

                 $select_subj="SELECT `subject_code` from `subjects`";
                    $subj=mysqli_query($conn,$select_subj);
                    echo '<select name="sub2">';
                    echo '<option selected disabled>2. Subject ID</option>';

                        while($row = mysqli_fetch_array($subj)) {
                            $display=$row['subject_code'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                    echo'</select>';

                    $select_sub="SELECT `subject_code` from `subjects`";
                    $sub=mysqli_query($conn,$select_sub);
                    echo '<select name="sub3">';
                    echo '<option selected disabled>3. Subject ID</option>';

                        while($row = mysqli_fetch_array($sub)) {
                            $display=$row['subject_code'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                    echo'</select>';

                    $select_su="SELECT `subject_code` from `subjects`";
                    $su=mysqli_query($conn,$select_su);
                    echo '<select name="sub4">';
                    echo '<option selected disabled>4. Subject ID</option>';

                        while($row = mysqli_fetch_array($su)) {
                            $display=$row['subject_code'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                    echo'</select>';

                    $select_s="SELECT `subject_code` from `subjects`";
                    $s=mysqli_query($conn,$select_s);
                    echo '<select name="sub5">';
                    echo '<option selected disabled>5. Subject ID</option>';

                        while($row = mysqli_fetch_array($s)) {
                            $display=$row['subject_code'];
                            echo '<option value="'.$display.'">'.$display.'</option>';
                        }
                    echo'</select>';
                ?>
                <input type="text" name="p2" id="" placeholder="Repeat" style='text-transform:uppercase'>
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
              <div class="footerinfo"style="margin-left:10%;">
                  <span>Important Links</span>
                  <a href="homepage.html">Home</a>
                  <a href="login.php">Admin Login</a>
                  <a href="login.php">Results</a>
              </div>
          </div>-->
</body>
</html>

<?php
    if(isset($_POST['p2']))
    {
      if(!isset($_POST["en"],$_POST["sub1"],$_POST["sub2"],$_POST["sub3"],$_POST["sub4"],$_POST["sub5"]))
      {
            $en=null;
            $sub=null;
       }
      else
        $prof=$_POST["en"];
       $sub1=$_POST["sub1"];
       $sub2=$_POST["sub2"];
        $sub3=$_POST["sub3"];
        $sub4=$_POST["sub4"];
        $sub5=$_POST["sub5"];
        $p2=$_POST["p2"];

        // validation
      if (empty($prof) or empty($sub1) or empty($p2) or empty($sub2) or empty($sub3) or empty($sub4) or empty($sub5)) {
           if(empty($prof))
              echo '<p class="error">Please select Enrollment no.</p>';
           if(empty($sub1) or empty($sub2) or empty($sub3) or empty($sub4) or empty($sub5))
              echo '<p class="error">Please select subject Id</p>';
            if(empty($p2))
                echo '<p class="error">Please enter student is repeating or not</p>';
            exit();
        }

        $sql="INSERT INTO student_sub (stu_id, sub_id,repeating)
         VALUES ('$prof', '$sub1','$p2'),('$prof', '$sub2','$p2'),('$prof', '$sub3','$p2'),('$prof', '$sub4','$p2'),
         ('$prof', '$sub5','$p2')";
        $sql=mysqli_query($conn,$sql);

        if (!$sql) {
            echo '<script>
            alert("Invalid Details")
               </script>';
        }
        else{
            echo '<script language="javascript">';
            echo 'alert("Successful")';
            echo '</script>';
        }
    }
?>
