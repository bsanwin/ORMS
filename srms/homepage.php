<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/homepage.css">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">

    <title>Homepage</title>
	<style>
  /* Full-width input fields */
  input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  }

  /* Set a style for all buttons */
  button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  }

  button:hover {
  opacity: 0.8;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  }

  /* Center the image and position the close button */
  .imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
  }

  img.avatar {
  width: 40%;
  border-radius: 50%;
  }

  .container {
  padding: 16px;
  }

  span.psw {
  float: right;
  padding-top: 16px;
  }

  /* The Modal (background) */
  .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 50%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
  margin-left: 400px;
  }

  .mod {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 50%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
  margin-left: 400px;
  }

  .dal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 50%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
  margin-left: 400px;
  }

  /* Modal Content/Box */
  .modal-content {
   background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
  }

  /* The Close Button (x) */
  .close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
  }

  .close:hover,
  .close:focus {
  color: red;
  cursor: pointer;
  }

  /* Add Zoom Animation
  .animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
  }

  @-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)}
  to {-webkit-transform: scale(1)}
  }

  @keyframes animatezoom {
  from {transform: scale(0)}
  to {transform: scale(1)}
  }*/

  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
  span.psw {
   display: block;
   float: none;
  }
  .cancelbtn {
   width: 100%;
  }
  }

	  * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: left;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  height:30%;
  margin: auto;
  speed:slow;
}

.slideshow-container.img {
   width: 90px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

	</style>
</head>
<body>
  <div id="id01" class="modal">

  <form class="modal-content animate" action="/adminlog.php" method="POST">

    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
    </div>
    <br><br>
<div class="well">
  <h3 style="color:black; text-align:center;">ADMIN</h3>

</div>


    <div class="container">
      <!-- <label for="uname" style="color:blue;"><b>Username</b></label> -->
      <input type="text" placeholder="Enter Username" name="userid" style="font-size:100%;" required>  <br><br>

      <!-- <label for="psw"><b>Password</b></label> -->
      <input type="password" placeholder="Enter Password" name="password" style="font-size:100%;" required>

      <button type="submit">Login</button>
      <!-- <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>-->
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
    </div>
  </form>
  </div>

  <div id="id02" class="dal">

  <form class="modal-content animate" action="/teach_log.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
    </div><br><br>
    <div class="well">
      <h3 style="color:black; text-align:center;">TEACHER</h3>

    </div>

    <div class="container">
      <!-- <label for="uname"><b>Username</b></label> -->
      <input type="text" placeholder="Enter Username" name="teachid" style="font-size:100%;" required><br><br>

      <!-- <label for="psw"><b>Password</b></label> -->
      <input type="password" placeholder="Enter Password" name="password" style="font-size:100%;" required>

      <button type="submit">Login</button>
      <!-- <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>-->
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
    </div>
  </form>
  </div>

  <div id="id03" class="mod">

  <form class="modal-content animate" action="/stu_log.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!-- <img src="img_avatar2.png" alt="Avatar" class="avatar"> -->
    </div><br><br>
    <div class="well">
      <h3 style="color:black; text-align:center;">STUDENT</h3>

    </div>

    <div class="container">
      <!-- <label for="uname"><b>Username</b></label> -->
      <input type="text" placeholder="Enter Username" name="uname" style="font-size:100%;"  required><br><br>

      <!-- <label for="psw"><b>Password</b></label> -->
      <input type="password" placeholder="Enter Password" name="psw" style="font-size:100%;" required>

      <button type="submit">Login</button>
      <!-- <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>-->
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
      <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
    </div>
  </form>
  </div>

<br><br>
    <div class="container">
        <div class="title">
        <span ><img src="images\logo.png" alt"pic does not show" style="width:70px;height:80px;margin-left:-300%;" ></span>    <span class="heading">Student Result Management System</span>
        </div>

        <div class="nav">
            <ul>
                <li>
                    <a href="\homepage.php"   style="color:white;">Home</a>
                </li>

                <li class="dropdown" onclick="toggleDisplay('0')">
                     <a href="#" class="dropbtn" style="color:white;">Admin &nbsp;


                        <!-- <span class="fa fa-angle-down"></span> -->
                    </a>
                    <div class="dropdown-content" id="0">
                        <!-- <a href="">Admin login</a> -->
                      <button onclick="document.getElementById('id01').style.display='block'" style="width:150%;">Admin Login</button>
                    </div>
                </li>
                <li class="dropdown" onclick="toggleDisplay('1')">
                    <a href="#" class="dropbtn" style="color:white;">Faculties &nbsp;
                        <!-- <span class="fa fa-angle-down"></span> -->
                    </a>
                    <div class="dropdown-content" id="1">
                        <!-- <a href="">Faculty login</a> -->
                       <button onclick="document.getElementById('id02').style.display='block'" style="width:150%;">Faculty Login</button>
                    </div>
                </li>
                <li class="dropdown" onclick="toggleDisplay('2')">
                    <a href="#" class="dropbtn" style="color:white;">Student &nbsp;
                        <!-- <span class="fa fa-angle-down"></span> -->
                    </a>
                    <div class="dropdown-content" id="2">
                        <!-- <a href="login.php">Student login</a> -->
                        <button onclick="document.getElementById('id03').style.display='block'" style="width:150%;">Student Login</button>
                    </div>
                </li>
            </ul>
        </div>

 <div class="slideshow-container">
<br>


<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images\i1.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images\i2.jpg" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images\i3.jpg" style="width:100%">

</div>




</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>



        <div class="main"> <br><br><br>
            <span>About the University</span>
            <p>The Jawaharlal Nehru University(known earlier as University of Delhi) is one of the oldest and premier Universities in India.The JNU Bill was passed in Lok Sabha on 16 November 1966 and the JNU Act came into force on 22 April 1969. The Indian School of International Studies was merged with the Jawaharlal Nehru University in June 1970.</p>

            <div class="info">
                <div>
                    <span>Courses</span> <hr>
                    <p><h2>Masters Program </h2>
                        MCA (CS)<br><br>
						B.Tech(CS)<br><br>
                        <!-- M.A. in Ancient History(ANCM) <br><br>
                        M.A. in Arabic(ARBM)  <br><br>

                        M.A. in Arts & Aesthetics(SAAM) <br><br>
                        M.A. in Chinese(CHNM) <br><br>
                        M.A. in Development and Labour Studies(DLSM) <br><br>
                        M.A. in Economics(ECOM)</p> -->
                </div>
                <div>
                    <span>Admissions</span> <hr>
                    <p>Whether your new to campus or are looking for more information on campus activities you can find information about admissions and financial aid here</p>
                </div>
                <div>
                    <span>Library</span> <hr>
                    <p>Be the first to know. Stay informed and up to date with the upcoming technology. Get varied knowledge right from social events to newest research topics by clicking the link</p>
                </div>
                <div>
                    <span>Campus Region</span> <hr>
                    <p>Welcome to Campus, a multipurpose WordPress theme. Go ahead and click around, there is a ton of new stuff to check out. For more information</p>
                </div>
            </div>
        </div>



    </div>
    <br><br><br><br><br><br>
	<div class="footer" style="width:100%;height:auto;background-color:#585f68;">
            <div class="footer--contact" style="margin-left:10%;">
                <span>Contact Us</span>
                <p>Go through the link :  jnu.ac.in</p>
                <p>Phone no. : 011-1832724</p>
            </div>
            <div class="footer--info"style="margin-left:10%;">
                <span>Important Links</span>
                <a href="homepage.php">Home</a>
                <a href="">Admin Login</a>
                <a href="">Results</a>
            </div>
        </div>

	<script>
  // Get the modal
  var modal = document.getElementById('id01');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }

  var dal = document.getElementById('id02');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == dal) {
          dal.style.display = "none";
      }
  }

  var mod = document.getElementById('id03');

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == mod) {
          mod.style.display = "none";
      }
  }

var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


</body>
</html>
