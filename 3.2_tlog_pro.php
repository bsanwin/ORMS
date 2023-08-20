<?php
    include("0dbconn.php");
    session_start();


    if (isset($_POST["user"],$_POST["submit"]))
    {
        $uname=$_POST["user"];
        $password=$_POST["pswd"];

        $sql = "SELECT teachid FROM teacher WHERE teachid='$uname' and password = '$password'";
        $result=mysqli_query($conn,$sql)  or die("Error: " . mysqli_error($conn));
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        //$active=$row['active'];

        //$count=mysqli_num_rows($result);

        if($row) {
          if (!empty($_POST['meremember'])) {
            setcookie ("mem_login",$uname,time()+ (10 * 365 * 24 * 60 * 60));
            setcookie ("mem_password",$password,time()+ (10 * 365 * 24 * 60 * 60));
          }
          else{
            if (isset($_COOKIE['mem_login'])) {
              setcookie('mem_login','');
            }
            if (isset($_COOKIE['mem_password'])) {
                setcookie('mem_password');
            }
          }

            $_SESSION['login_user']=$uname;
            header("Location: 3.3_tlist.php");
        }
        else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }
    }
?>
