<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="normalize.css">
    <title>Dashboard</title>
    <style>
        .main{
            border-radius: 10px;
            border-width: 5px;
            border-style: solid;
            padding: 20px;
            margin: 7% 20% 0 20%;
        }

          .nav{
            margin-top: -10px;
          }

          #sh{
             padding: 50px 180px;
             margin-top:40px;
          }

          .btn-default{
            background:orange;
            width:70px;
            height:40px;
            padding:4px;
          }
          .form-control{
          height: 30px;
            padding:2px;
            font-size:20px;
          }

          .table{
            margin-left: 500px;
            margin-top: -100px;
          }
    </style>
</head>
<body>
<br><br><br>
    <div class="title">
        <a href="dashboard.php"><img src="images\logo.png" class="img-circle" alt="Cinque Terre" width="70" height="80"></a>
        <span class="heading">Student Result Management System</span>
        <!-- <a href="logout.php" style="color: white">LOGOUT</a> -->
    </div>
<br><br><hr>
    <div class="nav">
        <ul>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn">MCA &nbsp

                </a>
                <div class="dropdown-content" id="1">
                    <a href="#">Semester 1 </a>
                    <a href="#">Semester 2</a>
                    <a href="#">Semester 3 </a>
                    <a href="show.php">Semester 4</a>
                    <a href="#">Semester 5 </a>
                    <a href="#">Semester 6</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">M.TECH &nbsp

                </a>
                <div class="dropdown-content" id="2">
                  <a href="#">Semester 1 </a>
                  <a href="#">Semester 2</a>
                  <a href="#">Semester 3 </a>
                  <a href="#">Semester 4</a>
                </div>
            </li>
&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;
 &emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;  &emsp;&emsp;&emsp;&emsp;
          <li>

          <a href="logout.php" style="color: white">Logout</a>
          </li>
        </ul>
    </div>
  <hr>

    <div class="container">


    </div>

    <div class="footer">
        <!-- <span>Designed & Coded By Jibin Thomas</span> -->
    </div>
</body>
</html>
