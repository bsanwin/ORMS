
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <title>Hello, world!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>
<div class="jumbotron"><br><br>
  <form action="" method="post">
   <div class="form-group">
     <label for="email">Email address:</label>
     <input type="text" class="form-control" name="idl" placeholder="Enter email">
   </div>
   <div class="form-group">
     <label for="pwd">Password:</label>
     <input type="text" class="form-control" name="nm" placeholder="Enter password">
   </div>
   <div class="form-group form-check">
     <label class="form-check-label">
       <input class="form-check-input" type="checkbox"> Remember me
     </label>
   </div>
   <button type="submit" name="dfd" class="btn btn-primary">Submit</button>
 </form><br><br>
 <table>
   <thead>
     <th>code</th>
     <th>name</th>
     <th>credit</th>
     <th>type</th>
   </thead>
   <tbody>

<?php include ('0dbconn.php'); ?>
<?php
if (isset($_POST['dfd'])) {
  if($_POST['idl'] || $_POST['nm']){
     $id=$_POST['idl'];
     $nm=$_POST['nm'];
     $sql="SELECT * FROM subject WHERE sub_code='$id' OR sub_name='$nm'";
     $result=mysqli_query($conn,$sql)  or die("Error: " . mysqli_error($conn));
    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
    echo '<tr>
          <td>'.$row['sub_code'].'</td>
          <td>'.$row['sub_name'].'</td>
          <td>'.$row['credit'].'</td>
          <td>'.$row['sub_type'].'</td>';
        }
      }
    ?>
  </tbody>
  </table>
  </div>

<?php
}
?>
</tbody>
</table>
</div>

  </body>
</html>
