<?php
//action.php
include("0dbconn.php");

$input = filter_input_array(INPUT_POST);

$first = mysqli_real_escape_string($conn, $input["password"]);
$ad_name = mysqli_real_escape_string($conn, $input["admin_name"]);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE admin_login
 SET password = '".$first."',
 admin_name = '".$ad_name."'
 WHERE userid = '".$input["userid"]."'
 ";

 mysqli_query($conn, $query);

}

echo json_encode($input);

?>


<?php
include("0dbconn.php");

$query = "SELECT * FROM admin_login ORDER BY userid DESC";
$result = mysqli_query($conn, $query);
?>
<html>
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

    <script src="jquery.tabledit.min.js"></script>
    </head>
    <body>
  <div class="container">
   <br />
   <br />
   <br />
            <div class="table-responsive">
    <h3 align="center">Live Table Data Edit Delete using Tabledit Plugin in PHP</h3><br />
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>userid</th>
       <th>pass</th>
       <th>Name</th>
      </tr>
     </thead>
     <tbody>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["userid"].'</td>
       <td>'.$row["password"].'</td>
       <td>'.$row["admin_name"].'</td>
      </tr>
      ';
     }
     ?>
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html>
 <script type="text/javascript">
$(document).ready(function(){
$('#editable_table').Tabledit({
    url: 'process.php',
    deleteButton: false,
    saveButton: true,
    autoFocus: false,
    buttons: {
        edit: {
            class: 'btn btn-sm',
            html: '<i class="fas fa-edit" style="font-size:24px;color:blue"></i>',
            action: 'edit'
        }
    },
    columns: {
        identifier: [0, 'userid'],
        editable: [[1, 'password'], [2, 'admin_name']]
    }
});

});
 </script>
