
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Faculty login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>

  body{
    background:#202a3f;
  }
  #log{
     padding: 40px 40px;
     margin-top:100px;
     background-color: white;
  }
  #lg{
     padding: 40px 40px;
     margin-top:100px;
     background-color: white;
     display:none;
  }
  h3{
    color: black;
    text-align: center;
    font-weight: bolder;
    margin-top: -20px;
  }
  p{
    color: black;
    margin-top: -30px;
  }
  img{
    width: 70px;
    margin-top: -10px;
  }

    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 600px}
    /* On small screens, set height to 'auto' for grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;}
    }
  </style>
</head>
<body>
  </nav>
<div class="container-fluid bg">
  <div class="row content">
    <div class="col-sm-4"></div>
     <div class="col-sm-4" >
       <form id="log" action="" method="POST">
         <p class="message"><a href="#" class="active">admin</a><a href="oculus.php"  style="float:right">Home</a></p><br>
        <center> <img class="img img-circle" src="images/prof.png"></center><br>
         <h3>TEACHER</h3><br>
           <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" class="form-control" name="userid" placeholder="Username" autocomplete="off">
          </div>
          <br>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
         </div>
         <br>
         <br>


         <button type="submit" class="btn btn-success btn-block">Login</button><br><br>
           <!-- <a href="register.php" class="text-center">Register a new membership</a> -->

      </form>



       <form id="lg" action="" method="POST">
         <p class="message"><a href="#" class="active">teacher</a><a href="oculus.php"  style="float:right">Home</a></p><br>
        <center> <img class="img img-circle" src="images/ad.png"></center><br>
         <h3>ADMIN</h3><br>
           <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input type="text" class="form-control" name="userid" placeholder="Username" autocomplete="off">
          </div>
          <br>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
         </div>
         <br>
         <br>


         <button type="submit" class="btn btn-success btn-block">Login</button><br><br>
           <!-- <a href="register.php" class="text-center">Register a new membership</a> -->

      </form>
    </div>
    <script>
$('.message a').click(function(){
  $('form').animate({height: "toggle",opacity:"toggle"}, "medium");
});
</script>
      <div class="col-sm-4"></div>
</div>
</div>

</body>
</html>

<?php
    include("init.php");
    session_start();

    if (isset($_POST["userid"],$_POST["password"]))
    {
        $username=$_POST["userid"];
        $password=$_POST["password"];
        $sql = "SELECT teach_id FROM teacher_login WHERE teach_id='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql);

        // $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);

        if($count==1) {
            $_SESSION['login_user']=$username;
            header("Location: afterlog0.php");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }
    }
?>

<?php
    include("init.php");
    if (isset($_POST["userid"],$_POST["password"]))
    {
        $username=$_POST["userid"];
        $password=$_POST["password"];
        $sql = "SELECT userid FROM admin_login WHERE userid='$username' and password = '$password'";
        $result=mysqli_query($conn,$sql);

        // $row=mysqli_fetch_array($result);
        $count=mysqli_num_rows($result);

        if($count==1) {
            $_SESSION['login_user']=$username;
            header("Location: dashboard.php");
        }else {
            echo '<script language="javascript">';
            echo 'alert("Invalid Username or Password")';
            echo '</script>';
        }

    }
?>
