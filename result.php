<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <title>Result</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/scroll_script.js"></script>
      <style>
        body {
               position: relative;
            }
      .card{
            padding:20px 0px 20px 50px;
            /*color: #ffffff;
           background-color: #343a40*/
            }
    .footer{
          height: 70px;
         padding-top:20px;
        }
    .nav-link {
              color: #343a40;
           }
           .alert{
             height:100px;
             padding: 40px 0px 0px 0px;
           }

           .scroll {
             color: #fff;
             margin-top: 100px
         }

         input:hover{
           background-color: #fffafa;
         }

    </style>
      </head>
        <body data-spy="scroll" data-target=".navbar" data-offset="50">
         <div class="container-fluid">
           <nav class="navbar navbar-dark bg-dark" style="padding-left:150px;padding-bottom:40px;padding-top:0px;height:40px">
             <a class="navbar-brand" href="#">some info</a>
             <div class="navbar-right" style="padding-right:150px">
               <!--<a class="navbar-brand" href="#"><small>Logout</small></a>-->
             </div>
          </nav>
          <nav class="navbar sticky-top navbar-light bg-light" style="padding-left:150px;padding-right:150px">
              <a class="navbar-brand" href="#"><img src="img/logoo.png" width="400" height="70" alt=""></a>
                <div class="navbar-right navbar-expand-sm" style="padding-right:20px">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="navbar-brand" href="1front.php">Back</a>
                   </li>
                 </ul>
              </div>
          </nav>
          </div>

          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-3">

              </div>
              <div class="col-sm-6" style="padding-top:70px"><br>
                  <h5>Enrollment Number</h5>
                <form action="" method="post">
                  <div class="input-group input-group-lg">
                    <input type="text" name="enrollment" placeholder="enrollment no." class="form-control" aria-label="Large"  style="border-Width:5px;text-transform:uppercase">
                    <div class="input-group-apppend">
                      <button type="submit" class="btn btn-info" name="result" style="height:60px">
                       <span class="glyphicon glyphicon-search"></span> Search
                       </button>
                    </div>
                   </div>
                </form>
                 <br><br>
                 <div class="card" style="padding-right:30px">
                <?php require('result_indi.php'); ?>
                  </div>
              </div>
              <div class="col-sm-3">

              </div>
            </div>
          </div>


      <div class="p-3 mb-2 bg-dark text-white" style="margin-left:20px;margin-right:18px;margin-top: 480px">
         <footer class="footer text-center" >
            <div class="container container-fluid">
              <span class="text-muted">Place sticky footer content here.</span>
            </div>
          </footer>
      </div>
  </body>
</html>
