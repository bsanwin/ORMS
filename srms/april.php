<!doctype html>
<html>
<head>
<title>Login</title>
    <style>
        body{

    margin-top: 100px;
    margin-bottom: 100px;
    margin-right: 150px;
    margin-left: 80px;
    background-color: azure ;
    color: palevioletred;
    font-family: #000000;
    font-size: 100%

        }


            h1 {
    color: #000000;
    font-family: verdana;
    font-size: 100%;
}
        h3 {
    color: indigo;
    font-family: verdana;
    font-size: 100%;
} </style>
</head>
<body >
     <center><h1>ONLINE LIBRARY SYSTEM</h1></center>
<h3>   Login Form | |    <a href="newregister.php">Search Book</a> </h3>
<form action="" method="POST">
Username: <input type="text" name="user"><br />  <br /> <br />
Password: <input type="password" name="pass"><br /> <br /> <br />
<input type="submit" value="Login" name="submit" />

</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $con=mysqli_connect('localhost','root','') or die(mysql_error());
    mysqli_select_db($con,'srms') or die("cannot select DB");

    $query=mysqli_query($con,"SELECT * FROM admin WHERE userid='".$user."' AND password='".$pass."'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbusername=$row['username'];
    $dbpassword=$row['password'];
    }

    if($user == $dbusername && $pass == $dbpassword)
    {
    session_start();
    $_SESSION['sess_user']=$user;

    /* Redirect browser */
    header("Location: newmember.php");
    }
    } else {
    echo "Invalid username or password!";
    }

} else {
    echo "All fields are required!";
}
}
?>
</body>
</html>
