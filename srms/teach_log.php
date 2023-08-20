<?php
    include("init.php");
    session_start();

    if (isset($_POST["teachid"],$_POST["password"]))
    {
        $username=$_POST["teachid"];
        $password=$_POST["password"];
        $sql = "SELECT teach_id FROM teacher_login WHERE teach_id='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql);

        // $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);

        if($count==1) {
            $_SESSION['login_user']=$username;
            header("Location: faclog.php");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }
    }
?>
