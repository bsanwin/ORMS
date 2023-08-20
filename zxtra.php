<?php
    include("0dbconn.php");
    session_start();

        $uid = $_SESSION['login_user'];

        $sql1 = "SELECT tname FROM teacher WHERE teachid='$uid'";
        $result1 = mysqli_query($conn,$sql1)  or die("Error: " . mysqli_error($conn));
        $row = mysqli_fetch_array($result1,MYSQLI_ASSOC);
        $nam = $row['tname'];

        $sql2 = "SELECT sid,course,semester FROM teach_sub WHERE tid='$uid'";
        $result2 = mysqli_query($conn,$sql2)  or die("Error: " . mysqli_error($conn));
        $rows = mysqli_fetch_array($result2,MYSQLI_ASSOC);
        $sid = $rows['sid'];

        $sql3= "SELECT sub_name FROM subject WHERE sub_code='$sid'";
        $result3 = mysqli_query($conn,$sql3)  or die("Error: " . mysqli_error($conn));

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Bordered Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example{
            margin: 20px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
    <div class="bs-example">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Users List</h2>
                    </div>

                    <?php

                    if (mysqli_num_rows($result2) > 0 && mysqli_num_rows($result3) > 0){
                    ?>
                      <table class='table table-bordered table-striped'>

                      <tr>
                        <td>sid</td>
                        <td>sname</td>
                        <td>course</td>
                        <td>sem</td>
                        <td>next</td>
                      </tr>


                    <?php

                    $i=0;
                      while ($rows = mysqli_fetch_array($result2,MYSQLI_ASSOC) && $rom = mysqli_fetch_array($result3,MYSQLI_ASSOC)) {
                    ?>
                    <tr>
                        <td><?php echo $rows["sid"]; ?></td>
                        <td><?php echo $rom["sub_name"]; ?></td>
                        <td><?php echo $rows["course"]; ?></td>
                        <td><?php echo $rows["semester"]; ?></td>
                        <td><?php echo "string"; ?></td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "No result found";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
