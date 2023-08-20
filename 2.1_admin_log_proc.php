<?php
    include("0dbconn.php");
    session_start();

     //header("Location: 2.1_adaflog.php");
    if (isset($_POST["user"],$_POST["Login"]))
    {
        $username=$_POST["user"];
        $password=$_POST["pswd"];

        $sql = "SELECT userid FROM admin_login WHERE userid='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql)  or die("Error: " . mysqli_error($conn));
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        //$active=$row['active'];

        //$count=mysqli_num_rows($result);
        if($row) {

           if (!empty($_POST['remember'])) {
             setcookie ("member_login",$username,time()+ (10 * 365 * 24 * 60 * 60));
             setcookie ("member_password",$password,time()+ (10 * 365 * 24 * 60 * 60));
             //$_SESSION["userid"] = $username;
           }
           else{
             if (isset($_COOKIE['member_login'])) {
               setcookie('member_login','');
             }
             if (isset($_COOKIE['member_password'])) {
                 setcookie('member_password');
             }
           }
            $_SESSION['login_user']=$username;
            header("Location: 2.2_admin_aflog.php");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
              ;

        }
    }
?>
