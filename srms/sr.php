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
                <a href="sr.php" class="dropbtn">Student&nbsp;Result
                </a>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="cb.php" class="dropbtn">Combined&nbsp;Result
                </a>
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
      <div class="row content">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-3">

          <form id="sh"  action="singleR.php" method="POST" enctype="multipart/form-data">
             <h3>Enrollment Number</h3><br>
             <div class="input-group">
               <input type="text" class="form-control" placeholder="Enrollment No." name="re" style='text-transform:uppercase'><button class="btn btn-default" type="submit">
                 search
               </button>
               <div class="input-group-btn">
                 <!-- <i class="glyphicon glyphicon-search"></i> -->

               </div>
             </div>
           </form>

        </div>
        <div class="col-sm-3">

        </div>

      </div>

    </div>

    <div class="footer">
        <!-- <span>Designed & Coded By Jibin Thomas</span> -->
    </div>
</body>
</html>
