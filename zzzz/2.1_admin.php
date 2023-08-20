<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}

  .bg-1 {
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }

  footer {
    background-color: #555;
    color: white;
    padding: 15px;
  }

  .container-fluid {
    padding-top: 200px;
    padding-bottom: 220px;
  }

  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <h3 class="navbar-brand" style="color:blue;">LOGO</h3>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="navbar-brand" style="color:blue;" href="1fr.php">HOME</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <div class="col-sm-3">
    </div>
    <div class="col-sm-5">
  <h2>ADMIN</h2></br>
 <form class="form-horizontal" action="/2adlog.php" method="post">
   <div class="form-group">
     <label class="control-label col-sm-2" for="username">username</label>
     <div class="col-sm-10">
       <input type="text" class="form-control" id="user" placeholder="Enter username" name="user">
     </div>
   </div></br>
   <div class="form-group">
     <label class="control-label col-sm-2" for="pwd">Password:</label>
     <div class="col-sm-10">
       <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
     </div>
   </div></br>
   <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
       <div class="checkbox">
         <label><input type="checkbox" name="remember"> Remember me</label>
       </div>
     </div>
   </div>
   <div class="form-group">
     <div class="col-sm-offset-2 col-sm-10">
       <button type="submit" class="btn btn-default">Submit</button>
     </div>
   </div>
 </form>
 </div>
 <div class="col-sm-4">
 </div>
</div>


<!-- Footer -->

<footer class="wrapper text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
