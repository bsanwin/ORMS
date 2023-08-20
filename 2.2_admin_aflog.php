
<html>
<head>
  <title>Admin Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <title>Hello, world!</title>
  <!--<link href="js/boxicons.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style>
        .card{
          padding: 0px 30px 40px 20px;
        }
        .h5{
          font-family:'Open Sans',sans-serif;
        }

  </style>
  </head>
<!-- header part -->
<body>

<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>

  <div class="container-fluid">
     <nav class="navbar navbar-dark bg-dark" style="padding:0px 170px 0px 150px;height:40px">
        <a class="navbar-brand" href="#">some info</a>
          <div class="navbar-right">
            <a href="/logout.php" class="text-white"><small><i class="fas fa-sign-out-alt"></i> Logout</small></a>
          </div>
    </nav>
    <nav class="navbar sticky-top navbar-light bg-light" style="padding:10px 150px 10px 150px">
       <a class="navbar-brand" href="#"><img src="/img/logoo.png" width="400" height="70" alt=""></a>
         <div class="navbar-right navbar-expand-sm">
           <ul class="navbar-nav">
            <li class="nav-item">
              <a class="navbar-brand" href="2.2_admin_aflog.php">Menu</a>
           </li>
          </ul>
        </div>
     </nav>
     </div>
<!-- end header -->
<!-- #################################  -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2">

    </div>
    <div class="col-sm-8" style="padding:80px 0px 0px 0px">
      <div class="jumbotron">
        <!-- ======= Icon Boxes Section ======= -->
  <section id="icon-boxes" class="icon-boxes">
    <div class="container">

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
          <div class="card">
            <div class="card-body"><br>
              <img src="img/st.jpg" class="rounded" alt="Rounded Image" style="height:40px"><br><br>
              <h5 class="card-text" style="font-family:'Open Sans','Droid Sans','Roboto'">Student</h5><br>
              <p class="card-text">For add or delete student records also add or delete student subjects</p><br><br>
              <a href="2.3_admin_student.php"><i>click here >>></i></a>
            </div>

          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
          <div class="card">
            <div class="card-body"><br>
                <img src="img/teach.jpg" class="rounded" alt="Rounded Image" style="height:40px"><br><br>
                <h5 class="card-text" style="font-family:'Open Sans','Droid Sans','Roboto'">Teacher</h5><br>
              <p class="card-text">For add or delete teacher records also add or delete teacher subjects</p><br><br>
              <a href="2.4_admin_teach.php"><i>click here >>></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="card">
            <div class="card-body"><br>
                <img src="img/book1.jpg" class="rounded" alt="Rounded Image" style="height:40px"><br><br>
                <h5 class="card-text" style="font-family:'Open Sans','Droid Sans','Roboto'">Subject</h5><br>
              <p class="card-text">For add or delete subjects records</p><br><br>
              <a href="2.5_admin_subject.php"><i>click here >>></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="card">
            <div class="card-body"><br>
                <img src="img/result.jpg" class="rounded" alt="Rounded Image" style="height:40px"><br><br>
                <h5 class="card-text" style="font-family:'Open Sans','Droid Sans','Roboto'">Result</h5><br>
              <p class="card-text">For declare result and give notification</p><br><br>
              <a href="#"><i>click here >>></i></a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Icon Boxes Section -->
      </div>
    </div>
    <div class="col-sm-2">

    </div>
  </div>
</div>
<div class="p-3 mb-2 bg-dark text-white" style="margin-left:20px;margin-right:18px;margin-top: 90px">

   <footer class="footer text-center" >
      <div class="container container-fluid">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
</div>



</body>
</html>
