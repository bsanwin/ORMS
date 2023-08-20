<!DOCTYPE html>
<html lang="en">
<head>
  <title>page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
  /* Remove the jumbotron's default bottom margin */
  .jumbotron {
           margin-top: -30px;
           margin-bottom: 0;
           padding-top: 20px;
           padding-bottom: 20px;
           background: #202a3f;
            }
   img{
       width: 90px;
      }
  .item{
       width:100%;
       height:370px;
       img{
           display:none;
          }
       }
    .col-sm-5{
            padding-left:30px;
            }

  h2{
    font-size: 40px;
    color: white;
    }

  .carousel {
         width:720px;
         height:370px;
         padding:0px;
         margin-top: 10px;
         margin-bottom:-80px;
         margin-left: -50px;
           }
    h4{
      margin-top: -20px;
      }
    ul.b {
       list-style-type: square;
       }

   .sec{
      padding:10px 10px;
       }
  footer {
        background-color: LightGray;
        color: white;
        padding: 15px;
        margin-top:100px;
      }
      marquee {
           padding: 20px;
           padding-top: 20px;
           width: 400px;
           height: 400px;
           background-color: lightblue;
            margin-bottom:-80px;
            margin-right: 0px;
         }

  </style>
</head>
<body>
  <div class="jumbotron">
  <div class="container text-center">
    <h2><img src="images/logo.jpg" class="img img-thumbnail">
      &nbsp;&nbsp;&nbsp;Student Result System</h2>
  </div>
</div>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <ul class="nav navbar-nav text-center">
          <li><a href="#">Home</a></li>
          <li><a href="result_show.php">Result</a></li>
            <li><a href="combo.php">Combine Result</a></li>

        </ul>
<!-- result_show.php -->
        <ul class="nav navbar-nav navbar-right text-center">
               <li><a href="newlogin.php">LOGIN</a></li>
            </ul>

            </li>
        </ul>
      </div>
    </nav>

  <div class="container-fluid">
    <div class="row content">
      <div class="col-sm-5">
         <marquee direction = "up" scrolldelay="400">
          <h4>Notification</h4>
             <ul class="b">

              <li>About
              </li>
              <h3>The ultimate target of an educational institution is to enhance the performance of every student. This can promptly be achieved by analyzing the performance of each student using competent analytic tools such as a dashboard.</h3>


            </ul>


						 <h3>The information thus obtained can be deployed for taking effective as well as corrective measures to help them in performing better and realizing their potential. </h3>
						 <h3>If not done systematically, this process may become time consuming and tedious. Information of Students assists the institutions to manage every single detail about students in a holistic, organized and cost-effective way.</h3>
						 <h3>Education completely and efficiently eliminates the need of faculty members to spend a considerable amount of time in compiling student data. Thereby assisting the faculty members in channelizing their concentration on the students and their performance enhancement.</h3>
                         <h3>The Information and Results of Students is a fully computerized system or more precisely a database where all the student related data can be stored, retrieved, monitored and analyzed. The data is saved in one central location which can be accessed by multiple persons at the same time provided they have the login credentials, this ensures the safety of the stored information.
						 Registration, demand generation, admission, billing, provision of financial aid to students and many other things can be managed with ease making the whole process of student enrollment quick, error free, systematic and undemanding.</h3>



          </marquee>
       </div>


      <div class="col-sm-7 sec">
        <center><h4>WELCOME</h4></center>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item active">
          <img src="images/pa.jpg" class="pic">
          <div class="carousel-caption">
          </div>
        </div>

        <div class="item">
          <img src="images/res.png" class="pic">
          <div class="carousel-caption">
          </div>
        </div>

        <div class="item">
          <img src="images/am.jpg" class="pic">
          <div class="carousel-caption">
          </div>
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>

    </div>
  </div>
  <script>

  $(".item").each(function() {
    var img_url = $(this).find('img').attr('src');
    $(this).css({
      'background-size': 'cover',
      'background-image': 'url(' + img_url + ')',
      'background-position': '50% 50%'
    });
    $(this).find('img').hide();
  });
  </script>
  <footer class="container-fluid">
    <p>Footer Text</p>
  </footer>

</body>
</html>
