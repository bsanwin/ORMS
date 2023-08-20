<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <title>Hello, world!</title>
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
  .footer{
    height: 100px;
    margin-top: 20px;
  }
</style>

  </head>
    <body>
      <div class="container-fluid">
        <nav class="navbar navbar-dark bg-dark" style="padding-left:150px;padding-bottom:40px;padding-top:0px;height:40px">
          <a class="navbar-brand" href="#">some info</a>
          <div class="navbar-right" style="padding-right:150px">
          </div>
       </nav>
       <nav class="navbar sticky-top navbar-light bg-light" style="padding-left:150px;padding-right:150px">
         <a class="navbar-brand" href="#"><img src="/img/logoo.png" width="400" height="70" alt=""></a>
         <div class="navbar-right navbar-expand-sm" style="padding-right:20px">
           <ul class="navbar-nav">
             <li class="nav-item">
               <a class="navbar-brand" href="/1front.php">Home</a>
             </li>
           </ul>
         </div>
       </nav>
      </div>

      <div class="container-fluid">
         <div class="row">
          <div class="col-sm-4">
          </div>
          <div class="col-sm-4" style="padding-top:100px; margin-bottom:100px ">
            <div class="jumbotron">
               <div class="card text-center" style="margin-bottom:40px;margin-top:20px">
                 <h4>Teacher</h4>
               </div>
               <div class="card">
                 <div class="card-body">
                   <form  action="/3.2_tlog.php" method="post">
                     <div class="form-group">
                       <label for="email">Username:</label>
                       <input type="text" class="form-control" id="user" placeholder="Enter username" name="user">
                     </div>
                     <div class="form-group">
                       <label for="pwd">Password:</label>
                       <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                       </div>
                    <div class="form-group form-check">
                       <label class="form-check-label">
                       <input class="form-check-input" type="checkbox" name="remember"> Remember me
                       </label>
                    </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
             </div>
           </div>
         </div>
         <div class="col-sm-4">
         </div>
       </div>
    </div>


<div class="p-3 mb-2 bg-dark text-white" style="margin-left:20px;margin-right:15px">
   <footer class="footer text-center" >
      <div class="container container-fluid">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
 </div>

</body>
</html>
