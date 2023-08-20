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
                    <a href="faclog.php">Semester 1 </a>
                    <a href="sem2.php">Semester 2</a>
                    <a href="sem3.php">Semester 3 </a>
                    <a href="sem4.php">Semester 4</a>
                    <a href="sem5.php">Semester 5 </a>
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
      <div class="row content">
        <h1><center>Semester 1</center></h1>
        <div class="col-sm-5">

          <form id="sh"  action="#" method="POST" enctype="multipart/form-data">
             <h3>Teacher ID</h3><br>
             <div class="input-group">
               <input type="text" class="form-control" placeholder="Teacher ID" name="srch" style='text-transform:uppercase'><button class="btn btn-default" type="submit">
                 search
               </button>
               <div class="input-group-btn">
                 <!-- <i class="glyphicon glyphicon-search"></i> -->

               </div>
             </div>
           </form>

        </div>
        <div class="col-sm-5">

          <?php
              include("init.php");
              $s=1;
              $c="mca";
              if (isset($_POST["srch"]))
              {
                  $search=$_POST["srch"];
                  $sql = "SELECT sub_id FROM teacher_subject WHERE teach_id='$search' and course = '$c' and semester ='$s'";
                  $result=mysqli_query($conn,$sql);

                  // $row=mysqli_fetch_array($result);
                  if(mysqli_num_rows($result)>0)
                  {
                    echo "<center>";
                 echo "<table style=\"font-family:arial;color:#333333;\"class='table table-bordered'>";
                    while($row = mysqli_fetch_array($result))
                     {
                       echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                       echo "<form action='zwar.php' method='POST'><input type='text' name='src' value='";
                       echo $search;
                       echo"'><input type='text' name='sdd' value='"
                       .$row['sub_id']."'>";
                       //echo $row['sub_id'];
           				     echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                       echo "<input type='submit' value='ok'>";
           			      	echo "</form>";
                             echo "</td></tr>";
                              }
           				     echo "</table></center>";
                   }
                  else {
                      echo "<br><br><br><br><br><br>";
                      echo "<center>No subject here</center>";
                  }
              }
          ?>

        </div>

      </div>

    </div>

    <div class="footer">
        <!-- <span>Designed & Coded By Jibin Thomas</span> -->
    </div>
</body>
</html>
