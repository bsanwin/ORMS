
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <title>ORMS</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  .img-fluid {
  max-width: 100%;
  height:auto;
}
  .footer{
    height: 70px;
    padding-top:20px;
  }

</style>

  </head>
  <!-- admin model -->
  <div class="modal fade" id="Modallog" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="padding-left:40px">
        <h5 class="modal-title" id="exampleModalLongTitle">Admin Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">
				<form action="2.1_admin_log_proc.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" id="user" name="user" value="<?php if(isset($_COOKIE['member_login'])) { echo $_COOKIE['member_login']; } ?>">

					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" id="pswd" name="pswd" value="<?php if(isset($_COOKIE['member_password'])) { echo $_COOKIE['member_password']; } ?>">
					</div>
					<div class="row align-items-center remember" style="padding-left:20px">
						<input type="checkbox" name="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>>Remember Me
					</div>
          <br>
					<div class="form-group">
						<input type="submit" value="Login" name="Login" class="btn btn-block login_btn btn-sm btn-primary">
					</div>
				</form>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- teacher model -->
<div class="modal fade" id="Modalteach" tabindex="-1" role="dialog" aria-labelledby="modalteach" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div class="modal-content">
    <div class="modal-header" style="padding-left:40px">
      <h5 class="modal-title" id="exampleModalLongTitle">As Teacher</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="card-body">
      <form action="3.2_tlog_pro.php" method="post">
        <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="username" id="user" name="user" value="<?php if(isset($_COOKIE['mem_login'])) { echo $_COOKIE['mem_login']; } ?>">

        </div>
        <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
          </div>
          <input type="password" class="form-control" placeholder="password" id="pswd" name="pswd" value="<?php if(isset($_COOKIE['mem_password'])) { echo $_COOKIE['mem_password']; } ?>">
        </div>
        <div class="row align-items-center remember" style="padding-left:20px">
          <input type="checkbox" name="meremember" <?php if(isset($_COOKIE["mem_login"])) { ?> checked <?php } ?>>Remember Me
        </div>
        <br>
        <div class="form-group">
          <input type="submit" name="submit" value="Login" class="btn btn-block login_btn btn-sm btn-primary">
        </div>
      </form>
    </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>

  <body>
    <!--  upper part -->
    <div class="container-fluid">
      <nav class="navbar navbar-dark bg-dark" style="padding-left:150px;padding-bottom:40px;padding-top:0px;height:40px">
        <a class="navbar-brand" href="#">some info</a>
        <div class="navbar-right" style="padding-right:150px">
          <button type="button" class="btn text-white btn-sm" data-toggle="modal" data-target="#Modallog" style="background-color:#343a40;">
            <i class="fas fa-user"></i>  Admin Login
           </button>

        </div>
      </nav>
      <nav class="navbar navbar-light bg-light" style="padding-left:150px;padding-right:150px">
        <a class="navbar-brand" href="#"><img src="/img/logoo.png" width="400" height="70" alt=""></a>
           <div class="navbar-right" style="padding-right:20px">
              <a class="navbar-brand" href="#">Home</a>
                  <a class="navbar-brand" href="result.php">Result</a>
                <button type="button" class="btn btn-lg btn-light" data-toggle="modal"  data-target="#Modalteach">
                  <i class="fas fa-user"></i> Login
               </button>

         </div>
      </nav>
    </div>

<!-- crousel part -->
    <div id="demo" class="carousel slide" data-ride="carousel" style="padding-left:25px;padding-top:20px;padding-right:25px">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/img/am.jpg" class="img-fluid" alt="Responsive image" width="" style="height:800px">
      <div class="carousel-caption">
        <h3>Administration</h3>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/pa.jpg" class="img-fluid" alt="Responsive image" width="" style="height:800px">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="/img/res.png" class="img-fluid" alt="Responsive image" width="" style="height:800px">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="p-3 mb-2 bg-dark text-white" style="margin-left:20px;margin-right:18px;margin-top: 10px">

   <footer class="footer text-center" >
      <div class="container container-fluid">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
</div>

</body>
</html>
