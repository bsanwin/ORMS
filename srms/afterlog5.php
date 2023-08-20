<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.csM.TECH 

Semester 1

 

Warning: session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\afterlog0.php:1) in C:\xampp\htdocs\afterlog0.php on line 183s">

<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 40px;
  padding-left: 10px;
  margin-top:60px;
  margin-left:10px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 250px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 10px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: green;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}





</style>
</head>
<body>

  <div class="topnav">
  <a class="active" href="logout.php">logout</a>
</div>

<div class="sidenav">
  <button class="dropdown-btn">MCA
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="afterlog0.php">Semester-1</a>
    <a href="afterlog2.php">Semester-2</a>
    <a href="afterlog3.php">Semester-3</a>
    <a href="afterlog4.php">Semester-4</a>
    <a href="afterlog5.php">Semester-5</a>
    <a href="#">Semester-6</a>
  </div>
  <button class="dropdown-btn">M.TECH
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Semester-1</a>
    <a href="#">Semester-2</a>
    <a href="#">Semester-3</a>
    <a href="#">Semester-4</a>
  </div>
</div>

<div class="main">
 <center> <h2>Semester 5</h2>
    <link href="css/SeaStyle.css" rel="stylesheet">


  <div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" name="srch" placeholder="Teacher id" style="margin-left:130px;">
      <button type="submit" class="searchButton" style="margin-right:-80px;">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>

  </center>
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html>


M.TECH 

Semester 1

 

Warning: session_start(): Cannot send session cache limiter - headers already sent (output started at C:\xampp\htdocs\afterlog0.php:1) in C:\xampp\htdocs\afterlog0.php on line 183


M.TECH 


logout
MCA 

M.TECH 

