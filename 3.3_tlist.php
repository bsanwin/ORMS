<?php
include("0dbconn.php");
session_start();

$uid = $_SESSION['login_user'];

 $sql1 = "SELECT tname FROM teacher WHERE teachid='$uid'";
 $result1 = mysqli_query($conn,$sql1)  or die("Error: " . mysqli_error($conn));
 $row = mysqli_fetch_array($result1,MYSQLI_ASSOC);
 $nam = $row['tname'];

 $_SESSION['teachname']=$nam;

  $sql2 = "SELECT te.*,sub.sub_name FROM teach_sub te,subject sub WHERE te.tid='$uid'
            and sub.sub_code = te.sid";
  $result2 = mysqli_query($conn,$sql2)  or die("Error: " . mysqli_error($conn));

 ?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>subject list</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
table,td,th
{
 padding:10px;
 border-collapse:collapse;
 font-family:Georgia, "Times New Roman", Times, serif;
 border:solid #ddd 2px;
}
.footer{
  height: 70px;
  padding-top:30px;
}

</style>
</head>
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-dark bg-dark" style="padding-left:150px;padding-bottom:40px;padding-top:0px;height:40px">
      <a class="navbar-brand" href="#">some info</a>
      <div class="navbar-right" style="padding-right:150px">
        <a class="text-white" href="logout.php"><small><i class="fas fa-sign-out-alt"></i> Logout</small></a>
      </div>
   </nav>
   <nav class="navbar sticky-top navbar-light bg-light" style="padding-left:150px;padding-right:150px">
     <a class="navbar-brand" href="#"><img src="/img/logoo.png" width="400" height="70" alt=""></a>
   <div class="navbar-right navbar-expand-sm" style="padding-right:20px">
  </div>
  </nav>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8" style="padding-top:10px; margin-bottom:100px ">
      <div class="jumbotron">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-2">
                <h4>Name : </h4>
              </div>
              <div class="col-sm-3">
                 <h5><?php echo $nam;?></h5>
              </div>
            </div>
            <div class="">
              <form class="" action="" method="post">
                   <input type="hidden"  name="sublist" value="lol">
                 <div class="text" style="padding-left:70px">
                  <button type="submit" name="buton">click here to see your assinged subject</button>
                 </div>
              </form>
            </div>
               <?php require('3.3_tlist_pro.php'); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2">
    </div>
  </div>
</div>

<div class="p-3 mb-2 bg-dark text-white" style="margin-left:20px;margin-right:18px;margin-top: 30px">

   <footer class="footer text-center" >
      <div class="container container-fluid">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
</div>


</body>
</html>
