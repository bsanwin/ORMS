<?php include('2.3_subdata.php'); ?>

<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<title>Hello, world!</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/deletesubject.js"></script>
<style media="screen">
.container{
  padding-top: 40px;
}
</style>
</head>
<body>
   <div class="container" p>
     <div class="jumbotron">

       <form class="" action="" method="post">
         <div class="form-group row">
          <label class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-5">
             <input type="txt" class="form-control" name="id" placeholder="id">
           </div>
         </div>

              <p>OR</p>

         <div class="form-group row">
            <label class="col-sm-2 col-form-label">Center</label>
            <div class="col-sm-5">
              <input type="password" name="nm" class="form-control" placeholder="name">
           </div>
        </div>
        <div class="form-group row">
           <label class="col-sm-2 col-form-label"></label>
           <div class="col-sm-5">
             <button type="submit" class="btn btn-primary" name="submt">Search</button>
       </div>
     </div>
       </form>
       <br><br>


    <h1 class="text-center">Delete Student Grade Recordes</h1>
     <br>
        <?php if(!empty($statusmsg)){ ?>
        <div class="alert alert-success"><?php echo $statusmsg; ?>
        </div>
        <?php } ?>
        <br><br><br>
           <form name="delete_action" action="" method="post" onSubmit="return delete_confirm();"/>
              <table class="table table-bordered table-hover">
                <thead style="background-color:#343a40;color:#ffffff">
                   <tr>
                      <th><input type="checkbox" id="select_all" value=""/></th>
                      <th>ID</th>
                      <th width="10%">Password</th>
                      <th>Name</th>
                      <th>Center</th>
                      <th>School</th>
                  </tr>
                 </thead>
                <tbody>
      <?php

      if (isset($_POST['submt'])) {
        if($_POST['id'] || $_POST['nm']){
           $id=$_POST['id'];
           $nm=$_POST['nm'];
           $sql="SELECT * FROM teacher WHERE teachid='$id' OR tname='$nm'";
           $result=mysqli_query($conn,$sql)  or die("Error: " . mysqli_error($conn));

          if($result->num_rows>0){
              while ($row = $result->fetch_assoc()) {
      ?>
                     <tr>
                        <td align="center"><input type="checkbox" name="checked_id[]" class="checkbox" value="<?php echo $row['teachid']; ?>"/></td>
                        <td><?php echo $row['teachid']; ?></td>
                        <td class="invisible"><?php echo $row['password']; ?></td>
                        <td><?php echo $row['tname']; ?></td>
                        <td><?php echo $row['tcenter']; ?></td>
                        <td><?php echo $row['tschool']; ?></td>
                    </tr>

       <?php }
     }
       else{ ?>
                    <tr><td colspan="5">No records found.</td></tr>
                  <?php }
                }
              }?>

            </tbody>
        </table>
      <br>
     <input type="submit" class="btn btn-danger" name="bulk_delete_submit" value="DELETE"/>
     </form>
  </div>
</div>
</body>
 </html>
