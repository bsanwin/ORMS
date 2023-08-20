<?php
    include("init.php");
    session_start();

    if (isset($_POST["uname"],$_POST["psw"]))
    {
        $username=$_POST["uname"];
        $password=$_POST["psw"];
        $sql = "SELECT stud_id FROM student_login WHERE stud_id='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql);

        // $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);

        if($count==1) {
            $_SESSION['login_user']=$username;
            header("Location: studentAflog.php");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
            #header("Location: homepage.php");
        }
    }
?>
